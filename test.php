<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
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
		$CSV_str = iconv("UTF-8", "cp1251", $CSV_str);
		$done = file_put_contents($file, $CSV_str);
		return $done ? $CSV_str : false;
	}
	return $CSV_str;
}?>
<?$xml = simplexml_load_file('http://files.gk-artex.ru/artex-autogeely-stock.xml');
$array_xml = get_object_vars($xml);
foreach ($array_xml as $key => $value) {
	$for_import[] = $value->car;
}
//pre($xml);

$create_data = [
	[
		'IE_XML_ID', // ID пустой
		'IE_NAME', // Название
		'IE_ID', // ID element
		'IE_ACTIVE', // Активность
		'IE_ACTIVE_FROM', // Акт от
		'IE_ACTIVE_TO', // Акт до
		'IE_PREVIEW_PICTURE', // ПревьюКарт
		'IE_PREVIEW_TEXT', // ПревьюТекст
		'IE_PREVIEW_TEXT_TYPE', // ТипПТ
		'IE_DETAIL_PICTURE', // ДетКарт
		'IE_DETAIL_TEXT', // ДетТекст
		'IE_DETAIL_TEXT_TYPE', // ТипДТ
		'IE_CODE', // Код пустой
		'IE_SORT', // Сортировка
		'IE_TAGS', // Теги
		'IP_PROP535', // ID комментариев
		'IP_PROP537', // Видео ютуб
		'IP_PROP536', // Колво комм
		'IP_PROP531', // СладГлав
		'IP_PROP534', // Регион
		'IP_PROP532', // Наличие
		'IP_PROP533', // ТорПред
		'IP_PROP540', // Артикул
		'IP_PROP538', // Задать вопрос
		'IP_PROP539', // ЦенаВКарт
		'IP_PROP541', // ЗаказТов
		'IP_PROP542', // Рубль символ
		'IP_PROP543', // СтарЦен
		'IP_PROP544', // Экономия
		'IP_PROP545', // Цена
		'IP_PROP548', // АктКарт
		'IP_PROP547', // БаннСверху
		'IP_PROP556', // 
		'IP_PROP554', // 
		'IP_PROP552', // 
		'IP_PROP551', // 
		'IP_PROP555', // 
		'IP_PROP553', // 
		'IP_PROP546', // СНаезШап
		'IP_PROP549', // ФонКарт
		'IP_PROP550', // ЦветШапкиИТекста
		'IP_PROP562', // 
		'IP_PROP560', // 
		'IP_PROP558', // 
		'IP_PROP557', // 
		'IP_PROP561', // 
		'IP_PROP559', // 
		'IP_PROP566', // ДатДляСчет
		'IP_PROP565', // ПримПодс
		'IP_PROP564', // ФайлВидео
		'IP_PROP563', // ХитПродаж
		'IP_PROP567', // КодВидеоIFRAME
		'IP_PROP568', // Документы
		'IP_PROP569', // Галерея
		'IP_PROP570', // ГалереяБоль
		'IP_PROP571', // ТоваДня
		'IP_PROP576', // Курсы
		'IP_PROP572', // Партнеры
		'IP_PROP573', // Проекты
		'IP_PROP574', // Сотрудники
		'IP_PROP575', // Статьи
		'IP_PROP577', // Производитель
		'IP_PROP578', // Тарифы
		'IP_PROP579', // Тизеры
		'IP_PROP580', // Вакансии
		'IP_PROP581', // Отзывы
		'IP_PROP582', // Новости
		'IP_PROP583', // Услуги
		'IP_PROP584', // ФАК
		'IP_PROP585', // Акции
		'IP_PROP586', // Фильтры
		'IP_PROP587', // Товары
		'IP_PROP529', // Комплекты
		'IP_PROP637', // КлимКласс
		'IP_PROP606', // МаксКМЧ
		'IP_PROP610', // МассаКГ
		'IP_PROP608', // Модель
		'IP_PROP611', // МощностьЛС
		'IP_PROP640', // РаспПодсвет
		'IP_PROP621', // СтранаПроиз
		'IP_PROP638', // Температура
		'IP_PROP634', // Тип
		'IP_PROP639', // УвеличениеКрат
		'IP_PROP635', // Цвет
		'IC_GROUP0', // Категория №1
		'IC_GROUP1', // Категория №2
		'IC_GROUP2', // Категория №3
	],
];
foreach ($for_import as $key => $value) {
	$value = get_object_vars($value);
	pre($value);
	$create_data[] = [
		'IE_XML_ID', // ID пустой
		$value['folder_id'], // Название
		'IE_ID', // ID element
		'IE_ACTIVE', // Активность
		'IE_ACTIVE_FROM', // Акт от
		'IE_ACTIVE_TO', // Акт до
		'IE_PREVIEW_PICTURE', // ПревьюКарт
		'IE_PREVIEW_TEXT', // ПревьюТекст
		'IE_PREVIEW_TEXT_TYPE', // ТипПТ
		'IE_DETAIL_PICTURE', // ДетКарт
		'IE_DETAIL_TEXT', // ДетТекст
		'IE_DETAIL_TEXT_TYPE', // ТипДТ
		createCode($value['folder_id']), // Код пустой
		'IE_SORT', // Сортировка
		'IE_TAGS', // Теги
		'IP_PROP535', // ID комментариев
		'IP_PROP537', // Видео ютуб
		'IP_PROP536', // Колво комм
		'IP_PROP531', // СладГлав
		'IP_PROP534', // Регион
		$value['availability'], // Наличие
		'IP_PROP533', // ТорПред
		'IP_PROP540', // Артикул
		'IP_PROP538', // Задать вопрос
		'IP_PROP539', // ЦенаВКарт
		'IP_PROP541', // ЗаказТов
		'IP_PROP542', // Рубль символ
		'IP_PROP543', // СтарЦен
		'IP_PROP544', // Экономия
		'IP_PROP545', // Цена
		'IP_PROP548', // АктКарт
		'IP_PROP547', // БаннСверху
		'IP_PROP556', // 
		'IP_PROP554', // 
		'IP_PROP552', // 
		'IP_PROP551', // 
		'IP_PROP555', // 
		'IP_PROP553', // 
		'IP_PROP546', // СНаезШап
		'IP_PROP549', // ФонКарт
		'IP_PROP550', // ЦветШапкиИТекста
		'IP_PROP562', // 
		'IP_PROP560', // 
		'IP_PROP558', // 
		'IP_PROP557', // 
		'IP_PROP561', // 
		'IP_PROP559', // 
		'IP_PROP566', // ДатДляСчет
		'IP_PROP565', // ПримПодс
		'IP_PROP564', // ФайлВидео
		'IP_PROP563', // ХитПродаж
		'IP_PROP567', // КодВидеоIFRAME
		'IP_PROP568', // Документы
		'IP_PROP569', // Галерея
		'IP_PROP570', // ГалереяБоль
		'IP_PROP571', // ТоваДня
		'IP_PROP576', // Курсы
		'IP_PROP572', // Партнеры
		'IP_PROP573', // Проекты
		'IP_PROP574', // Сотрудники
		'IP_PROP575', // Статьи
		'IP_PROP577', // Производитель
		'IP_PROP578', // Тарифы
		'IP_PROP579', // Тизеры
		'IP_PROP580', // Вакансии
		'IP_PROP581', // Отзывы
		'IP_PROP582', // Новости
		'IP_PROP583', // Услуги
		'IP_PROP584', // ФАК
		'IP_PROP585', // Акции
		'IP_PROP586', // Фильтры
		'IP_PROP587', // Товары
		'IP_PROP529', // Комплекты
		'IP_PROP637', // КлимКласс
		'IP_PROP606', // МаксКМЧ
		'IP_PROP610', // МассаКГ
		'IP_PROP608', // Модель
		'IP_PROP611', // МощностьЛС
		'IP_PROP640', // РаспПодсвет
		'IP_PROP621', // СтранаПроиз
		'IP_PROP638', // Температура
		'IP_PROP634', // Тип
		'IP_PROP639', // УвеличениеКрат
		$value['color'], // Цвет
		$value['mark_id'], // Категория №1
		'IC_GROUP1', // Категория №2
		'IC_GROUP2', // Категория №3
	];
}
pre($create_data);
//kama_create_csv_file($create_data, $_SERVER['DOCUMENT_ROOT'].'/csv_file.csv');
?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>