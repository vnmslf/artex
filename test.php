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
<?$geely_xml = simplexml_load_file('http://files.gk-artex.ru/artex-autogeely-stock.xml');
$exeed_xml = simplexml_load_file('https://files.gk-artex.ru/artex-autoexeed-stock.xml');
$solaris_xml = simplexml_load_file('https://media.cm.expert/stock/export/cmexpert/dealer.site/all/all/07fd716eb73752b4096128b00cf16849.xml');
$geely = objectToArray($geely_xml);
$exeed = objectToArray($exeed_xml);
$solaris = objectToArray($solaris_xml);
$array_xml = array_merge($geely['cars']['car'], $exeed['cars']['car'], $solaris['cars']['car']);
foreach ($array_xml as $key => $value) {
	$value = array_change_key_case($value, CASE_UPPER);
	if($value['AVAILABILITY'] == 'в наличии') {
		$value['STATUS'] = 'В наличии';
		unset($value['AVAILABILITY']);
	} elseif ($value['AVAILABILITY'] == 'в пути') {
		$value['STATUS'] = 'В пути';
		unset($value['AVAILABILITY']);
	}
	$value['WHEEL'] = mb_ucfirst($value['WHEEL']);
	$for_import[$key] = $value;
}
pre($for_import);

$properties = \Bitrix\Iblock\PropertyTable::getList([
	'select' => ['ID', 'NAME', 'CODE'],
	'filter' => ['IBLOCK_ID' => \Dao\App::ib('aspro_allcorp3_catalog')->id()],
])->fetchAll();
$props = [];
$properties_codes = [
	'POWER',
	'COLOR',
	'MODEL',
	'VIN',
	'MODIFICATION_ID',
	'COMPLECTATION_NAME',
	'WHEEL',
	'CUSTOM',
	'STATUS',
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
pre($props_list);

//pre($array_xml);

$create_data[0] = [
	'IE_XML_ID', // XML ID
	'IE_NAME', // Название
	'IE_PREVIEW_PICTURE', // ПревьюКарт
	'IE_PREVIEW_TEXT', // ПревьюТекст
	'IE_PREVIEW_TEXT_TYPE', // ТипПТ
	'IE_DETAIL_PICTURE', // ДетКарт
	'IE_DETAIL_TEXT', // ДетТекст
	'IE_DETAIL_TEXT_TYPE', // ТипДТ
	'IE_CODE', // Код пустой
	'IE_SORT', // Сортировка
];
foreach ($props_list as $key => $value) {
	array_push($create_data[0], 'IP_PROP'.$value['ID']);
}
array_push($create_data[0], 'IC_GROUP0');
array_push($create_data[0], 'IC_GROUP1');
array_push($create_data[0], 'IC_GROUP2');

//pre($for_import);

foreach ($for_import as $key => $value) {
	$jey = $key + 1;
//	$value = get_object_vars($value);
//	pre($value);
	$create_data[$jey] = [
		createCode($value['FOLDER_ID'].'_'.$value['VIN']), // XML ID
		$value['FOLDER_ID'], // Название
		'', // ПревьюКарт
		'', // ПревьюТекст
		'', // ТипПТ
		'', // ДетКарт
		$value['DESCRIPTION'], // ДетТекст
		'', // ТипДТ
		createCode($value['FOLDER_ID'].'_'.$value['VIN']), // Код пустой
		$jey, // Сортировка
	];
	foreach ($props_list as $ley => $prop) {
		//array_push($create_data[$jey], $prop['VALUE']);
		array_push($create_data[$jey], $value[$prop['CODE']]);
	}
	array_push($create_data[$jey], $value['MARK_ID']);
	array_push($create_data[$jey], '');
	array_push($create_data[$jey], '');
}
pre($create_data);
kama_create_csv_file($create_data, $_SERVER['DOCUMENT_ROOT'].'/upload/csv_file.csv');
?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>