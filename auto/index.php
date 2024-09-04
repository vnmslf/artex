<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"main",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "PHOTOS",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ASK_FORM_ID" => "",
		"BASKET_URL" => "/personal/basket.php",
		"BIG_GALLERY_PROP_CODE" => "GALLEY_BIG",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMMENTS_COUNT" => "5",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "main",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COMPATIBLE_MODE" => "Y",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BLOCKS_ALL_ORDER" => "sale,desc,char,reviews,big_gallery,video,sku,tariffs,services,projects,news,articles,docs,staff,faq,partners,vacancy,goods,buy,payment,delivery,dops,comments",
		"DETAIL_BLOCKS_ORDER" => "tabs,sku,sale,big_gallery,services,projects,news,articles,staff,partners,vacancy,goods,comments",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,tariffs,video,docs,faq,reviews,buy,payment,delivery,dops,complects",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_FB_APP_ID" => "APP_ID",
		"DETAIL_FB_TITLE" => "Facebook",
		"DETAIL_FB_USE" => "Y",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PROPERTY_CODE" => array(0=>"BLOG_POST_ID",1=>"POPUP_VIDEO",2=>"BLOG_COMMENTS_CNT",3=>"SHOW_ON_INDEX_PAGE",4=>"LINK_REGION",5=>"STATUS",6=>"LINK_SKU",7=>"ARTICLE",8=>"FORM_QUESTION",9=>"PRICE",10=>"FORM_ORDER",11=>"PRICE_CURRENCY",12=>"PRICEOLD",13=>"ECONOMY",14=>"FILTER_PRICE",15=>"BNR_TOP",16=>"DATE_COUNTER",17=>"INCLUDE_TEXT",18=>"VIDEO",19=>"HIT",20=>"VIDEO_IFRAME",21=>"BEST_ITEM",22=>"LINK_STUDY",23=>"LINK_PARTNERS",24=>"LINK_PROJECTS",25=>"LINK_STAFF",26=>"LINK_ARTICLES",27=>"BRAND",28=>"LINK_TARIF",29=>"LINK_TIZERS",30=>"LINK_VACANCY",31=>"LINK_REVIEWS",32=>"LINK_NEWS",33=>"LINK_SERVICES",34=>"LINK_FAQ",35=>"LINK_SALE",36=>"LINK_GOODS_FILTER",37=>"LINK_GOODS",38=>"SUPPLIED",39=>"AGE",40=>"KARTOPR",41=>"HEIGHT",42=>"DEPTH",43=>"DEEP",44=>"GRUZ_STRELI",45=>"GRUZ",46=>"DIAGONAL",47=>"DLINA_STRELI",48=>"DLINA",49=>"CATEGORY",50=>"CLASS",51=>"CLIMAT_CLASS",52=>"KOL_FORMULA",53=>"USERS",54=>"EXTENSION",55=>"MARK_STEEL",56=>"MASS",57=>"MODEL",58=>"ENGINE_POWER",59=>"UPDATES",60=>"VOLUME",61=>"SIZE",62=>"PLACE",63=>"RESOLUTION",64=>"LIGHTS_LOCATION",65=>"RECOMMEND",66=>"SERIES",67=>"SPEED",68=>"DURATION",69=>"PROIZVODSTVO",70=>"TEMPERATURE",71=>"TYPE",72=>"TYPE_TUR",73=>"THICKNESS",74=>"MARK",75=>"INCREASE",76=>"COLOR",77=>"FREQUENCY",78=>"FREQUENCE",79=>"WIDTH_PROHOD",80=>"WIDTH_PROEZD",81=>"WIDTH",82=>"LANGUAGES",83=>"CODE_TEXT",84=>"EDITION_1C",85=>"LINK_COMPLECT",86=>"DEMO_URL",87=>"MORE_PHOTO",88=>"",89=>'CUSTOM',90=>'WHEEL'),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_VK_API_ID" => "API_ID",
		"DETAIL_VK_TITLE" => "ВКонтакте",
		"DETAIL_VK_USE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DOCS_PROP_CODE" => "DOCUMENTS",
		"ELEMENTS_LIST_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENTS_PRICE_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENTS_TABLE_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
		"FILE_404" => "",
		'IBLOCK_ID' => \Dao\App::ib('aspro_allcorp3_catalog')->id(),
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LANDING_IBLOCK_ID" => "44",
		"LANDING_SECTION_COUNT" => "20",
		"LANDING_SECTION_COUNT_VISIBLE" => "3",
		"LANDING_TIZER_IBLOCK_ID" => "2",
		"LINE_ELEMENT_COUNT" => "3",
		"LINKED_ELEMENT_TAB_SORT_FIELD" => "sort",
		"LINKED_ELEMENT_TAB_SORT_FIELD2" => "id",
		"LINKED_ELEMENT_TAB_SORT_ORDER" => "asc",
		"LINKED_ELEMENT_TAB_SORT_ORDER2" => "desc",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PROPERTY_CODE" => array(0=>"STATUS",1=>"LINK_SKU",2=>"ARTICLE",3=>"FORM_QUESTION",4=>"PRICE",5=>"FORM_ORDER",6=>"PRICE_CURRENCY",7=>"PRICEOLD",8=>"ECONOMY",9=>"FILTER_PRICE",10=>"DATE_COUNTER",11=>"HIT",12=>"BEST_ITEM",13=>"BRAND",14=>"DEPTH",15=>"GRUZ_STRELI",16=>"GRUZ",17=>"DLINA_STRELI",18=>"VOLUME",19=>"RECOMMEND",20=>"SPEED",21=>"WIDTH_PROHOD",22=>"WIDTH_PROEZD",23=>'CUSTOM',24=>'WHEEL'),
		"MAX_GALLERY_ITEMS" => "5",
		"MESSAGE_404" => "",
		"OPT_BUY" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => "",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_DISPLAY_PROPERTY" => "UF_VIEWTYPE",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_ITEM_LIST_IMG_CORNER" => "N",
		"SECTION_ITEM_LIST_OFFSET_CATALOG" => "Y",
		"SECTION_ITEM_LIST_TEXT_CENTER" => "N",
		"SECTION_LIST_DISPLAY_TYPE" => "3",
		"SECTION_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SECTION_TOP_BLOCK_TITLE" => "Лучшие предложения",
		"SECTION_TOP_DEPTH" => "2",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"SEF_FOLDER" => "/auto/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("sections"=>"","section"=>"#SECTION_CODE_PATH#/","element"=>"#SECTION_CODE_PATH#/#ELEMENT_CODE#/","compare"=>"compare.php?action=#ACTION_CODE#","smart_filter"=>"#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_ASK_BLOCK" => "Y",
		"SHOW_BIG_GALLERY" => "Y",
		"SHOW_BUY" => "Y",
		"SHOW_CHILD_SECTIONS" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DELIVERY" => "Y",
		"SHOW_DOPS" => "Y",
		"SHOW_GALLERY" => "Y",
		"SHOW_HINTS" => "Y",
		"SHOW_LANDINGS" => "Y",
		"SHOW_LIST_TYPE_SECTION" => "Y",
		"SHOW_ONE_CLINK_BUY" => "Y",
		"SHOW_PAYMENT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SECTION_DESC" => "Y",
		"SHOW_TOP_ELEMENTS" => "N",
		"SKU_IBLOCK_ID" => "21",
		"SKU_PROPERTY_CODE" => array(0=>"FORM_ORDER",1=>"STATUS",2=>"ARTICLE",3=>"PRICE_CURRENCY",4=>"PRICE",5=>"PRICEOLD",6=>"ECONOMY",7=>"COLOR",8=>"GOST",9=>"DLINA",10=>"VYLET_STRELY",11=>"MARK_STEEL",12=>"WIDTH",),
		"SKU_SORT_FIELD" => "sort",
		"SKU_SORT_FIELD2" => "name",
		"SKU_SORT_ORDER" => "asc",
		"SKU_SORT_ORDER2" => "asc",
		"SKU_TREE_PROPS" => array(0=>"COLOR",1=>"DIAMETER",2=>"DLINA",3=>"VYLET_STRELY",4=>"THICKNESS_STEEL",5=>"WIDTH",),
		"SORT_DIRECTION" => "desc",
		"SORT_PROP" => array(0=>"name",1=>"sort",2=>"FILTER_PRICE",),
		"SORT_PROP_DEFAULT" => "sort",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_PROPERTY_CODE" => array(0=>"",1=>"",),
		"TYPE_BIG_GALLERY" => "BIG",
		"T_ARTICLES" => "",
		"T_BIG_GALLERY" => "",
		"T_BUY" => "",
		"T_CHAR" => "",
		"T_DELIVERY" => "",
		"T_DESC" => "",
		"T_DOCS" => "",
		"T_DOPS" => "",
		"T_FAQ" => "",
		"T_GOODS" => "Вам может понравиться",
		"T_NEWS" => "",
		"T_PARTNERS" => "",
		"T_PAYMENT" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SALE" => "",
		"T_SERVICES" => "",
		"T_SKU" => "",
		"T_STAFF" => "",
		"T_TARIFFS" => "",
		"T_VACANCY" => "",
		"T_VIDEO" => "",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"USE_DETAIL_TABS" => "FROM_MODULE",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_SHARE" => "Y",
		"USE_STORE" => "N",
		"VARIABLE_ALIASES" => array("compare"=>array("ACTION_CODE"=>"action",),),
		"VIEW_TYPE" => "table",
		"VISIBLE_PROP_COUNT" => "6"
	)
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>