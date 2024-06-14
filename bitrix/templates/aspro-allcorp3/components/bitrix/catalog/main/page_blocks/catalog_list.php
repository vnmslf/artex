<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"catalog_list",
	Array(
		"CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
		"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
		"CACHE_FILTER"	=>	$arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"HIT_PROP" => "HIT",
		"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
		"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
		"ASK_FORM_ID" => trim($arParams["ASK_FORM_ID"]),
		"DISPLAY_COMPARE"	=>	TSolution::GetFrontParametrValue('CATALOG_COMPARE'),

		"SKU_IBLOCK_ID"	=>	$arParams["SKU_IBLOCK_ID"],
		"SKU_TREE_PROPS"	=>	$arParams["SKU_TREE_PROPS"],
		"SKU_PROPERTY_CODE"	=>	$arParams["SKU_PROPERTY_CODE"],
		"SKU_SORT_FIELD" => $arParams["SKU_SORT_FIELD"],
		"SKU_SORT_ORDER" => $arParams["SKU_SORT_ORDER"],
		"SKU_SORT_FIELD2" => $arParams["SKU_SORT_FIELD2"],
		"SKU_SORT_ORDER2" =>$arParams["SKU_SORT_ORDER2"],

		"PAGE_ELEMENT_COUNT" => $arParams['PAGE_ELEMENT_COUNT'],
		"TO_ORDER_TEXT" =>  $arParams["TO_ORDER_TEXT"],
		"PROPERTY_CODE"	=>	$arParams["LIST_PROPERTY_CODE"],
		"ELEMENT_SORT_FIELD" => $arAvailableSort[$sort]["SORT"],
		"ELEMENT_SORT_ORDER" => strtoupper($order),
		"ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
		"ELEMENT_SORT_ORDER2" =>$arParams["ELEMENT_SORT_ORDER2"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"ELEMENTS_TABLE_TYPE_VIEW" => "FROM_MODULE",
		"SHOW_SECTION" => "Y",
		"COUNT_IN_LINE" => $arParams["LINE_ELEMENT_COUNT"],
		"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
		"SHOW_DISCOUNT_TIME" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_PREVIEW_TEXT" => "N",
		"SHOW_DISCOUNT_PRICE" => "Y",
		"SHOW_GALLERY" => $arParams["SHOW_GALLERY"],
		"ADD_PICT_PROP" => $arParams['ADD_PICT_PROP'],
		"MAX_GALLERY_ITEMS" => $arParams["MAX_GALLERY_ITEMS"],
		"DISPLAY_TOP_PAGER"	=>	$arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER"	=>	$arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE"	=>	$arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE"	=>	$arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS"	=>	$arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING"	=>	$arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
		"SHOW_ALL_WO_SECTION" => "Y",
		"SECTION_COUNT_ELEMENTS" => $arParams['SECTION_COUNT_ELEMENTS'],
		"IS_CATALOG_PAGE" => ($arParams['INCLUDE_SUBSECTIONS'] == 'N' ? '' : 'Y'),
		"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
		"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
		"BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
		"ADD_SECTIONS_CHAIN" => ($iSectionsCount && $arParams['INCLUDE_SUBSECTIONS'] == "N") ? 'N' : $arParams["ADD_SECTIONS_CHAIN"],
		"MOBILE_SCROLLED" => $bMobileItemsCompact,
		"MOBILE_ONE_ROW" => $bMobileOneRow,
		"ITEMS_OFFSET" => 'Y',
		"SHOW_ONE_CLINK_BUY" => $arParams["SHOW_ONE_CLINK_BUY"],
		"GRID_GAP" => "20",
		"AJAX_REQUEST" => $isAjax,
		"SHOW_ONE_CLICK_BUY" => TSolution::GetFrontParametrValue('SHOW_ONE_CLICK_BUY'),
		"USE_FAST_VIEW_PAGE_DETAIL" => TSolution::GetFrontParametrValue('USE_FAST_VIEW_PAGE_DETAIL'),
		"EXPRESSION_FOR_FAST_VIEW" => TSolution::GetFrontParametrValue('EXPRESSION_FOR_FAST_VIEW'),
		"ORDER_VIEW" => TSolution::GetFrontParametrValue('ORDER_VIEW') == 'Y',
		"CHANGE_TITLE_ITEM_LIST" => TSolution::GetFrontParametrValue('CHANGE_TITLE_ITEM_LIST'),
		"REPLACE_NOIMAGE_WITH_SECTION_PICTURE" => TSolution::GetFrontParametrValue('REPLACE_NOIMAGE_WITH_SECTION_PICTURE') === 'Y',
	),
	$component, array('HIDE_ICONS' => $isAjax)
);?>