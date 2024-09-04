<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
\Bitrix\Main\Loader::includeModule('iblock');?>
<?function kama_create_csv_file($create_data, $file = null, $col_delimiter = ';', $row_delimiter = "\r\n") {
	if(!is_array($create_data)) {
		return false;
	}
	if($file && !is_dir(dirname($file))) {
		return false;
	}
	$CSV_str = '';
	foreach($create_data as $row) {
		$cols = array();
		foreach($row as $col_val) {
			if($col_val && preg_match('/[",;\r\n]/', $col_val)) {
				if($row_delimiter === "\r\n") {
					$col_val = str_replace(["\r\n", "\r"], ['\n', ''], $col_val);
				} elseif($row_delimiter === "\n") {
					$col_val = str_replace(["\n", "\r\r"], '\r', $col_val);
				}
				$col_val = str_replace('"', '""', $col_val);
				$col_val = '"'.$col_val.'"';
			}
			$cols[] = $col_val;
		}
		$CSV_str .= implode($col_delimiter, $cols).$row_delimiter;
	}
	$CSV_str = rtrim($CSV_str, $row_delimiter);
	if($file) {
//		$CSV_str = iconv('UTF-8', 'CP1251', $CSV_str);
		$done = file_put_contents($file, $CSV_str);
		return $done ? $CSV_str : false;
	}
	return $CSV_str;
}
function objectToArray ($object) {
	if(!is_object($object) && !is_array($object)) {
		return $object;
	}
	return array_map('objectToArray', (array) $object);
}
function mb_ucfirst($word, $charset = 'utf-8') {
	return mb_strtoupper(mb_substr($word, 0, 1, $charset), $charset).mb_substr($word, 1, mb_strlen($word, $charset) - 1, $charset);
}?>
<?$solaris_xml = simplexml_load_file('https://media.cm.expert/stock/export/cmexpert/dealer.site/all/all/07fd716eb73752b4096128b00cf16849.xml');
$geely_xml = simplexml_load_file('http://files.gk-artex.ru/artex-autogeely-stock.xml');
$exeed_xml = simplexml_load_file('https://files.gk-artex.ru/artex-autoexeed-stock.xml');
$solaris = objectToArray($solaris_xml);
$geely = objectToArray($geely_xml);
$exeed = objectToArray($exeed_xml);
$array_xml = array_merge($solaris['cars']['car'], $geely['cars']['car'], $exeed['cars']['car']);
foreach ($array_xml as $key => $value) {
	$value = array_change_key_case($value, CASE_UPPER);
	if(mb_strcasecmp($value['AVAILABILITY'], utf8_strrev('в наличии'))) {
		$value['STATUS'] = 'В наличии';
		unset($value['AVAILABILITY']);
	} elseif ($value['AVAILABILITY'] == 'в пути') {
		$value['STATUS'] = 'В пути';
		unset($value['AVAILABILITY']);
	}
	$value['WHEEL'] = mb_ucfirst($value['WHEEL']);
	$value['ENGINE_POWER'] = intval(preg_replace('/[^0-9]+/', '', $value['ENGINE_POWER']), 10);
	$for_import[$key] = $value;
	//pre($value['IMAGES']);
}
//pre($for_import);

$properties = \Bitrix\Iblock\PropertyTable::getList([
	'select' => ['ID', 'NAME', 'CODE'],
	'filter' => ['IBLOCK_ID' => \Dao\App::ib('aspro_allcorp3_catalog')->id()],
])->fetchAll();
$props = [];
$properties_codes = [
	'ENGINE_POWER',
	'COLOR',
	'MODEL',
	'VIN',
	'MODIFICATION_ID',
	'COMPLECTATION_NAME',
	'WHEEL',
	'CUSTOM',
	'STATUS',
	'PHOTOS',
];
foreach ($properties as $property) {
	if(in_array($property['CODE'], $properties_codes)) {
		$props[] = $property;
		$props_list[] = [
			'ID' => $property['ID'],
			'CODE' => $property['CODE']
		];
	}
}
//pre($props);
//pre($props_list);

//pre($array_xml);

$create_data[0] = [
	'IE_XML_ID', // XML ID
	'IE_NAME', // Название
	'IE_PREVIEW_PICTURE', // ПревьюКарт
	// 'IE_PREVIEW_TEXT', // ПревьюТекст
	// 'IE_PREVIEW_TEXT_TYPE', // ТипПТ
	// 'IE_DETAIL_PICTURE', // ДетКарт
	'IE_DETAIL_TEXT', // ДетТекст
	//'IE_DETAIL_TEXT_TYPE', // ТипДТ
	'IE_CODE', // Код пустой
	'IE_SORT', // Сортировка
];
foreach ($props_list as $key => $value) {
	if($value['CODE'] !== 'PHOTOS') {
		array_push($create_data[0], 'IP_PROP'.$value['ID']);
	} else {
		$photos_id = 'IP_PROP'.$value['ID'];
	}
	if($value['CODE'] == 'VIN') {
		$vin = 'IP_PROP'.$value['ID'];
	}
}
array_push($create_data[0], $photos_id);
array_push($create_data[0], 'IC_GROUP0');
array_push($create_data[0], 'IC_GROUP1');
array_push($create_data[0], 'IC_GROUP2');

$index_vin = array_search($vin, $create_data[0]);
$index_photos = array_search($photos_id, $create_data[0]);

//pre($for_import);
$images = [];
foreach ($for_import as $key => $value) {
	$jey = $key + 1;
//	$value = get_object_vars($value);
//	pre($value);
	if(is_string($value['IMAGES']['image'])) {
		$first_image = $value['IMAGES']['image'];
	} else {
		$first_image = $value['IMAGES']['image'][0];
	}
	$create_data[$jey] = [
		$value['VIN'], // XML ID
		$value['FOLDER_ID'], // Название
		$first_image, // ПревьюКарт
		//'', // ПревьюТекст
		//'', // ТипПТ
		//'', // ДетКарт
		$value['DESCRIPTION'], // ДетТекст
		//'', // ТипДТ
		createCode($value['FOLDER_ID'].'_'.$value['VIN']), // Код пустой
		$jey, // Сортировка
	];
	foreach ($props_list as $ley => $prop) {
		//array_push($create_data[$jey], $prop['VALUE']);
		if($prop['CODE'] !== 'PHOTOS') {
			array_push($create_data[$jey], $value[$prop['CODE']]);
		}
	}
	array_push($create_data[$jey], $value['MARK_ID']);
	array_push($create_data[$jey], '');
	array_push($create_data[$jey], '');
	$create_data[$jey] = array_slice($create_data[$jey], 0, $index_photos) + ['newKey' => ''] + $create_data[$jey];
	if(is_array($for_import[$key]['IMAGES']['image'])) {
		unset($value['IMAGES']['image'][0]);
		$new_images = array_values($value['IMAGES']['image']);
		$create_data[$jey] = array_values($create_data[$jey]);
		//pre($new_images);
		foreach ($new_images as $tey => $image) {
//			pre($tey);
			$create_data[$jey][$index_photos] = $image;
			$create_data = array_slice($create_data, 0, $jey + $tey) + ['newKey__'.$tey => $create_data[$jey]] + $create_data;
			array_push($create_data, $create_data[$jey]);
		}
	}
	$create_data[$jey] = array_values($create_data[$jey]);
}
echo '---';
//pre($new_images);
/*foreach ($create_data as $key => $value) {
	//pre($value);
	foreach ($new_images as $jey => $image) {
		$index = array_search($jey, $value);
		//pre($index);
	}
}*/
$create_data = array_values($create_data);
pre($create_data);
kama_create_csv_file($create_data, $_SERVER['DOCUMENT_ROOT'].'/upload/csv_file.csv');
?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>