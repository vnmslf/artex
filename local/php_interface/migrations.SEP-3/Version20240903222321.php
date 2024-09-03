<?php

namespace Sprint\Migration;


class Version20240903222321 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.8.2";

    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'aspro.allcorp3',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'aspro.allcorp3',
  'NAME' => 'WIZARD_DEMO_INSTALLED',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'aspro.allcorp3',
  'NAME' => 'wizard_installed',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'bizproc',
  'NAME' => 'SkipNonPublicCustomTypes',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'blog',
  'NAME' => 'socNetNewPerms',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'calendar',
  'NAME' => '~ft_b_calendar_event',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'allowed_currencies',
  'VALUE' => 'RUB',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'allowed_group_fields',
  'VALUE' => 'IC_GROUP',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'allowed_price_fields',
  'VALUE' => 'CV_PRICE,CV_CURRENCY',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'allowed_product_fields',
  'VALUE' => 'IE_XML_ID,IE_NAME,IE_SORT,IE_PREVIEW_PICTURE,IE_PREVIEW_TEXT,IE_PREVIEW_TEXT_TYPE,IE_DETAIL_PICTURE,IE_DETAIL_TEXT,IE_DETAIL_TEXT_TYPE,IE_CODE,CP_QUANTITY,CP_WEIGHT,CP_WIDTH,CP_HEIGHT,CP_LENGTH',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'avail_content_groups',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'deactivate_1c_no_price',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'default_catalog_1c',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'default_outfile_action',
  'VALUE' => 'D',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'default_product_vat_included',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'default_use_store_control',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'enable_processing_deprecated_events',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'enable_reservation',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'enable_viewed_products',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'export_default_path',
  'VALUE' => '/bitrix/catalog_export/',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'D',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'GROUP_DEFAULT_TASK',
  'VALUE' => '24',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'num_catalog_levels',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'product_form_show_offer_name',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'product_form_show_offers_iblock',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'product_form_simple_search',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'save_product_with_empty_price_range',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'save_product_without_price',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'should_show_batch_method_onboarding',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'show_catalog_tab_with_offers',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'show_store_shipping_center',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'subscribe_repeated_notify',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'use_offer_marking_code_group',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'viewed_count',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'viewed_period',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'viewed_time',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'yandex_agent_file',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'catalog',
  'NAME' => 'yandex_xml_period',
  'VALUE' => '24',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'conversion',
  'NAME' => 'GENERATE_INITIAL_DATA',
  'VALUE' => 'generated',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'conversion',
  'NAME' => 'START_DATE_TIME',
  'VALUE' => '2024-04-05 16:02:06',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'currency',
  'NAME' => 'installed_currencies',
  'VALUE' => 'RUB,USD,EUR,UAH,BYN',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => '~allowed_components',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => '~script_files',
  'VALUE' => 'php,php3,php4,php5,php6,phtml,pl,asp,aspx,cgi,exe,ico,shtm,shtml',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'archive_step_time',
  'VALUE' => '30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'default_edit',
  'VALUE' => 'html',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'default_edit_groups',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'different_set',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'editor_body_class',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'editor_body_id',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'google_map_api_key',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'D',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'GROUP_DEFAULT_TASK',
  'VALUE' => '35',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'hide_physical_struc',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'log_menu',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'log_page',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_max_height',
  'VALUE' => '3600',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_max_width',
  'VALUE' => '3600',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_media_available_ext',
  'VALUE' => 'jpg,jpeg,gif,png,flv,mp4,wmv,wma,mp3,ppt,aac',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_media_extentions',
  'VALUE' => 'jpg,jpeg,gif,png,flv,mp4,wmv,wma,mp3,ppt',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_thumb_height',
  'VALUE' => '105',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_thumb_width',
  'VALUE' => '140',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'ml_use_default',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'replace_new_lines',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'search_mask',
  'VALUE' => '*.php',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'search_max_open_file_size',
  'VALUE' => '1024',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'search_max_res_count',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'search_time_step',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'show_inc_icons',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'stickers_use_hotkeys',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_code_editor',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_custom_spell',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_editor_3',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_medialib',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_pspell',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_separeted_dics',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_translit',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'use_translit_google',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'user_dics_path',
  'VALUE' => '/bitrix/modules/fileman/u_dics',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'fileman',
  'NAME' => 'yandex_map_api_key',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'form',
  'NAME' => 'SIMPLE',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'forum',
  'NAME' => 'FILTER',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'iblock',
  'NAME' => 'combined_list_mode',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'iblock',
  'NAME' => 'use_htmledit',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'chat_rights_rename_all_to_member_default',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'chat_rights_rename_all_to_member_values',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'chat_rights_rename_all_to_member_values_can_post',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'chat_update_ai_provider',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'default_configuration_preset',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'fix_fake_message_in_recent',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'im_general_chat_new_rights',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'im_link_file_migration',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'im_link_url_migration',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'normalize_settings_value',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'relation_last_send_message_id_to_default',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'relation_last_send_message_id_to_not_null',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'im',
  'NAME' => 'remove_human_type_stepper',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'landing',
  'NAME' => 'pub_path_s1',
  'VALUE' => '/lp/',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'learning',
  'NAME' => '~LearnInstall201203ConvertDB::_IsAlreadyConverted',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'location',
  'NAME' => 'address_format_code',
  'VALUE' => 'RU',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'mail',
  'NAME' => 'mail_invited_group',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~cpf_map_value',
  'VALUE' => 'YToyOntpOjA7czo1OiJTbWFsbCI7aToxO3M6MzoiQmlnIjt9',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_im_conference',
  'VALUE' => 
  array (
    'PASSWORD' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_mail_oauth',
  'VALUE' => 
  array (
    'TOKENS' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_socialservices_user',
  'VALUE' => 
  array (
    'OATOKEN' => true,
    'REFRESH_TOKEN' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_user_auth_code',
  'VALUE' => 
  array (
    'OTP_SECRET' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_user_phone_auth',
  'VALUE' => 
  array (
    'OTP_SECRET' => true,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~mp24_paid',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~mp24_paid_date',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~new_license18_0_sign',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_CLIENT_LANG',
  'VALUE' => 'ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_COMPOSITE',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_FINISH_DATE',
  'VALUE' => 'd8a057059d52dabfdcc4abf5b6b966fb63f8e0e22f0f073fed46c819ea077dbc.2024-11-30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_MAX_SERVERS',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_MAX_USERS',
  'VALUE' => 'a6fe4adec6e759646759adae055309fb7335725327279e365b1746c9a64a859e.0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_PARTNER_ID',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_PHONE_SIP',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~sale_converted_15',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~sale_paysystem_converted',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~show_composite_banner',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~support_finish_date',
  'VALUE' => '2024-11-30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~update_autocheck_result',
  'VALUE' => 
  array (
    'check_date' => 1712322235,
    'result' => false,
    'error' => '',
    'modules' => 
    array (
    ),
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'admin_lid',
  'VALUE' => 'ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'all_bcc',
  'VALUE' => 'sales@gk-artex.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'allow_qrcode_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'allow_socserv_authorization',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'ALLOW_SPREAD_COOKIE',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'attach_images',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_components_template',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_controller_sso',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_multisite',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auto_time_zone',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'bx_fast_download',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'CAPTCHA_arBorderColor',
  'VALUE' => 'BDBDBD',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'CAPTCHA_arTextColor_1',
  'VALUE' => '636363',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'CAPTCHA_arTextColor_2',
  'VALUE' => '636363',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'captcha_registration',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'captcha_restoring_password',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'collect_geonames',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'component_cache_on',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'compres_css_js_files',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'control_file_duplicates',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'convert_mail_header',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'convert_original_file_name',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'CONVERT_UNIX_NEWLINE_2_WINDOWS',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'cookie_name',
  'VALUE' => 'BITRIX_SM',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'crc_code',
  'VALUE' => 'UENZQ0NMN3hZbQ==',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'custom_register_page',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'device_history_cleanup_days',
  'VALUE' => '180',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'disk_space',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_archive_size_limit',
  'VALUE' => '104857600',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_log',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_search',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_stat',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_bucket_id',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_do_clouds',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_encrypt',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_file_kernel',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_file_public',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_integrity_check',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_exec_time',
  'VALUE' => '20',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_exec_time_sleep',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_file_size',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_site_id',
  'VALUE' => 
  array (
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_use_compression',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'duplicates_max_size',
  'VALUE' => '100',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'email_from',
  'VALUE' => 'imd@gk-artex.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'error_reporting',
  'VALUE' => '85',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_block_user',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_cleanup_days',
  'VALUE' => '7',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_file_access',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_group_policy',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_login_fail',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_login_success',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_logout',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_marketplace',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_module_access',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_password_change',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_password_request',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_permissions_fail',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_register',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_register_fail',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_task',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_delete',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_edit',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_groups',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'fill_to_mail',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'gather_catalog_stat',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'D',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'GROUP_DEFAULT_TASK',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'hide_panel_for_users',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'image_resize_quality',
  'VALUE' => '95',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'imageeditor_proxy_enabled',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'imageeditor_proxy_white_list',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'inactive_users_block_days',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'INSTALL_STATISTIC_TABLES',
  'VALUE' => '05.04.2024 16:02:24',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'last_files_count',
  'VALUE' => '136475',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'last_mp_modules_result',
  'VALUE' => 
  array (
    'check_date' => 1712322880,
    'update_module' => 
    array (
      'aspro.allcorp3' => 
      array (
        'ID' => 'aspro.allcorp3',
        'NAME' => 'Аспро: Корпоративный сайт 3.0',
        'DESCRIPTION' => '
Аспро: Корпоративный сайт 3.0 — технологически продвинутая платформа Аспро для создания веб-сайта. Ее возможности позволяют создать и запустить онлайн-проект в любой отрасли, а тематики помогут это сделать быстрее.

В платформе детально проработаны и представлены на выбор 8 конфигураций универсального сайта. При этом количество возможных представлений настроек приближается к бесконечности. Все...',
        'IMAGE' => '',
        'IMAGE_HEIGHT' => '',
        'IMAGE_WIDTH' => '',
        'BUYED' => '',
        'PARTNER' => 'Аспро',
        'PARTNER_ID' => '310879',
        'DATE_CREATE' => '',
        'DATE_UPDATE' => '',
        'CATEGORY' => 'Готовые сайты, Каталог товаров, услуг, Корпоративный сайт, Другое',
        'TYPE' => 'Компоненты, Модуль, Мастера создания, Шаблоны сайтов, Мастера создания (установка)',
      ),
    ),
    'end_update' => 
    array (
    ),
    'new_module' => 
    array (
    ),
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_additional_parameters',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_event_bulk',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_event_period',
  'VALUE' => '14',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_gen_text_version',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_link_protocol',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'map_left_menu_type',
  'VALUE' => 'left',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'map_top_menu_type',
  'VALUE' => 'top',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'max_file_size',
  'VALUE' => '20000000',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'move_js_to_body',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mp_modules_date',
  'VALUE' => 
  array (
    0 => 
    array (
      'ID' => 'sprint.migration',
      'NAME' => 'Миграции для разработчиков',
      'TMS' => 1723409586,
    ),
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_required',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_uniq_check',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_phone_auth',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_phone_required',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_cleanup_days',
  'VALUE' => '7',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_def_group',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_email_confirmation',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'optimize_css_files',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'optimize_js_files',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'PARAM_MAX_SITES',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'PARAM_MAX_USERS',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'phone_number_default_country',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_history_cleanup_days',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_height',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_size',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_width',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group',
  'VALUE' => '4',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group_add',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group_delete',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group_add',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group_delete',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_type',
  'VALUE' => 'auto',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_authority_rating',
  'VALUE' => '2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_authority_weight_formula',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_authority',
  'VALUE' => '30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_last_visit',
  'VALUE' => '90',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_size',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_count_vote',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_normalization',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_normalization_type',
  'VALUE' => 'auto',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_self_vote',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_start_authority',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_d',
  'VALUE' => 'Это нравится',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_n',
  'VALUE' => 'Не нравится',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_y',
  'VALUE' => 'Нравится',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_show',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_template',
  'VALUE' => 'like',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_type',
  'VALUE' => 'like',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_weight',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'save_original_file_name',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'secure_logout',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'send_mid',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'server_name',
  'VALUE' => 'artexauto.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'server_uniq_id',
  'VALUE' => '62qvp6k43cq2uykoliorchhizjnrq0ea',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_auth_only',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_expand',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_show_message',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'show_panel_for_users',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'signer_default_key',
  'VALUE' => '27a10e9da1c424aadeae5becc36f95944007247c15916550b00b523ff756b9b838dd8b7b708271a0b4c0688ac668430a12cd0346b8aaaeda58d3978ac35d19e6',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'site_name',
  'VALUE' => 'Официальный дилер автомобилей ArtexGroup',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'skip_mask',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'skip_mask_array',
  'VALUE' => 
  array (
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'smile_gallery_id',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'smile_last_update',
  'VALUE' => '1712322061',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'sms_default_service',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'stable_versions_only',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'store_password',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'strong_update_check',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'track_outgoing_emails_click',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'track_outgoing_emails_read',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'translate_key_yandex',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'translit_original_file_name',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_autocheck',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_devsrv',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_is_gzip_installed',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_load_timeout',
  'VALUE' => '30',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_safe_mode',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site',
  'VALUE' => 'www.1c-bitrix.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_ns',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_addr',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_pass',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_port',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_user',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_stop_autocheck',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_system_check',
  'VALUE' => '19.04.2024 12:15:33',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_system_update',
  'VALUE' => '24.07.2024 18:52:08',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'upload_dir',
  'VALUE' => 'upload',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'url_preview_enable',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'url_preview_save_images',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_digest_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_encrypted_auth',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_hot_keys',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_minified_assets',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_secure_password_cookies',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_time_zones',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_device_geodata',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_device_history',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_device_notify',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_profile_history',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'vendor',
  'VALUE' => '1c_bitrix',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'wizard_firstllcorp3_s1',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'messageservice',
  'NAME' => 'clean_up_period',
  'VALUE' => '14',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'messageservice',
  'NAME' => 'force_region',
  'VALUE' => 'ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'rest',
  'NAME' => 'app_immune',
  'VALUE' => 
  array (
    0 => 'infoservice.migrator_amocrm',
    1 => 'informunity.excel',
    2 => 'integrations24ru.pipedrive',
    3 => 'integrations24ru.asana',
    4 => 'integrations24ru.sugar',
    5 => 'bitrix.eshop',
    6 => 'bitrix.1cdoc',
    7 => 'bitrix.assistant',
    8 => 'bitrix.denominationby',
    9 => 'bitrix.propertiesbot',
    10 => 'bitrix.giphybot',
    11 => 'bitrix.1c',
    12 => 'bitrix.restapi',
    13 => 'bitrix.partnerlandingexport',
    14 => 'bitrix.partnerapplication',
    15 => 'bitrix.partnerlanding',
    16 => 'bitrix.1ctotal',
    17 => 'integrations24.pipedrive',
    18 => 'integrations24ru.pipedrive',
    19 => 'integrations24.zoho',
    20 => 'integrations24.asana',
    21 => 'integrations24ru.asana',
    22 => 'integrations24.sugar',
    23 => 'integrations24ru.sugar',
    24 => 'integrations24.jira_migration',
    25 => 'integrations24.qbinventory',
    26 => 'integrations24.zohoinventory',
    27 => 'integrations24.trello',
    28 => 'integrations24ru.slack_migration',
    29 => 'SEVERCODE.trello_migrator',
    30 => 'htmls.ms_migrator',
    31 => 'integrations24.mns_kazakhstan_poisk_po_bin',
    32 => 'integrations24.portal_nalog_gov_by',
    33 => 'integrations24ru.microsoft_teams_migration',
    34 => 'bitrix.pbi_all',
    35 => 'bitrix.pbi_company',
    36 => 'bitrix.pbi_company_uf',
    37 => 'bitrix.pbi_contact',
    38 => 'bitrix.pbi_contact_uf',
    39 => 'bitrix.pbi_crm_activity',
    40 => 'bitrix.pbi_deal_product_row',
    41 => 'bitrix.pbi_deal_stage_history',
    42 => 'bitrix.pbi_deals_ru',
    43 => 'bitrix.pbi_lead',
    44 => 'bitrix.pbi_lead_product_row',
    45 => 'bitrix.pbi_lead_uf',
    46 => 'bitrix.pbi_leads_ru',
    47 => 'bitrix.pbi_socialnetwork_group',
    48 => 'bitrix.pbi_telephony',
    49 => 'bitrix.pbi_user',
    50 => 'bitrix.gds_all',
    51 => 'bitrix.gds_company',
    52 => 'bitrix.gds_company_uf',
    53 => 'bitrix.gds_contact',
    54 => 'bitrix.gds_contact_uf',
    55 => 'bitrix.gds_crm_activity',
    56 => 'bitrix.gds_deal_product_row',
    57 => 'bitrix.gds_deal_stage_history',
    58 => 'bitrix.gds_deals_ru',
    59 => 'bitrix.gds_lead',
    60 => 'bitrix.gds_lead_product_row',
    61 => 'bitrix.gds_lead_uf',
    62 => 'bitrix.gds_leads_ru',
    63 => 'bitrix.gds_socialnetwork_group',
    64 => 'bitrix.gds_telephony',
    65 => 'bitrix.gds_user',
    66 => 'bitrix.gds_activity',
    67 => 'bitrix.gds_deal_uf',
    68 => 'bitrix.gds_telephony_call',
    69 => 'itsolutionru.gptconnector',
    70 => 'asmo.ai',
    71 => 'bitrix.bic_datasets_en',
    72 => 'bitrix.bic_datasets_kz',
    73 => 'bitrix.bic_datasets_ru',
    74 => 'bitrix.bic_deals_en',
    75 => 'bitrix.bic_deals_kz',
    76 => 'bitrix.bic_deals_ru',
    77 => 'bitrix.bic_leads_en',
    78 => 'bitrix.bic_leads_kz',
    79 => 'bitrix.bic_leads_ru',
    80 => 'bitrix.bic_sales_en',
    81 => 'bitrix.bic_sales_kz',
    82 => 'bitrix.bic_sales_ru',
    83 => 'bitrix.bic_sales_struct_en',
    84 => 'bitrix.bic_sales_struct_kz',
    85 => 'bitrix.bic_sales_struct_ru',
    86 => 'bitrix.bic_telephony_en',
    87 => 'bitrix.bic_telephony_kz',
    88 => 'bitrix.bic_telephony_ru',
    89 => 'bitrix.bic_deals_complex',
    90 => 'bitrix.bic_general_stat',
    91 => 'bitrix.bic_lead_generation',
    92 => 'bitrix.kompleksnaya_analitika_sdelok',
    93 => 'bitrix.bic_telephony_ru',
    94 => 'bitrix.bic_sales_struct_ru',
    95 => 'bitrix.bic_sales_ru',
    96 => 'bitrix.bic_leads_ru',
    97 => 'bitrix.bic_deals_ru',
    98 => 'bitrix.bic_datasets_ru',
    99 => 'bitrix.bic_datasets_en',
    100 => 'bitrix.bic_deals_en',
    101 => 'bitrix.bic_leads_en',
    102 => 'bitrix.bic_sales_en',
    103 => 'bitrix.bic_sales_struct_en',
    104 => 'bitrix.bic_telephony_en',
    105 => 'bitrix.bic_datasets_kz',
    106 => 'bitrix.bic_deals_kz',
    107 => 'bitrix.bic_leads_kz',
    108 => 'bitrix.bic_sales_kz',
    109 => 'bitrix.bic_sales_struct_kz',
    110 => 'bitrix.bic_telephony_kz',
    111 => 'bitrix.bic_deals_complex',
    112 => 'bitrix.bic_general_stat',
    113 => 'bitrix.bic_lead_generation',
    114 => 'bitrix.bic_retention',
    115 => 'bitrix.bic_abcanalysis',
    116 => 'bitrix.khellouin_ru',
    117 => 'bitrix.den_zashchitnika_otechestva_2_ru',
    118 => 'bitrix.mezhdunarodnyy_zhenskiy_den_2_ua',
    119 => 'bitrix.mezhdunarodnyy_zhenskiy_den_3_ua',
    120 => 'bitrix.mezhdunarodnyy_zhenskiy_den_ua',
    121 => 'bitrix.den_smekha_ua',
    122 => 'bitrix.den_svyatogo_valentina_ua',
    123 => 'bitrix.den_vsekh_vlyublyennykh_ua',
    124 => 'bitrix.katolicheskaya_paskha_ua',
    125 => 'bitrix.novyy_god_ua',
    126 => 'bitrix.rozhdestvo_ua',
    127 => 'bitrix.valentinov_den_ua',
    128 => 'bitrix.pravoslavnaya_paskha_ua',
    129 => 'bitrix.chernaya_pyatnitsa_ua',
    130 => 'bitrix.khellouin_ua',
    131 => 'bitrix.den_zashchitnika_otechestva_3_ru',
    132 => 'bitrix.den_zashchitnika_otechestva_ru',
    133 => 'bitrix.den_zashchitnika_otechestva_by',
    134 => 'bitrix.den_zashchitnika_otechestva_2_by',
    135 => 'bitrix.den_zashchitnika_otechestva_3_by',
    136 => 'bitrix.den_zashchitnika_otechestva_kz',
    137 => 'bitrix.den_zashchitnika_otechestva_2_kz',
    138 => 'bitrix.den_zashchitnika_otechestva_3_kz',
    139 => 'bitrix.pravoslavnaya_paskha_ru',
    140 => 'bitrix.pravoslavnaya_paskha_by',
    141 => 'bitrix.pravoslavnaya_paskha_kz',
    142 => 'bitrix.den_smekha_ru',
    143 => 'bitrix.den_smekha_by',
    144 => 'bitrix.den_smekha_kz',
    145 => 'bitrix.valentinov_den_ru',
    146 => 'bitrix.valentinov_den_by',
    147 => 'bitrix.valentinov_den_kz',
    148 => 'bitrix.rozhdestvo_ru',
    149 => 'bitrix.rozhdestvo_by',
    150 => 'bitrix.rozhdestvo_kz',
    151 => 'bitrix.novyy_god_ru',
    152 => 'bitrix.novyy_god_by',
    153 => 'bitrix.novyy_god_kz',
    154 => 'bitrix.katolicheskaya_paskha_ru',
    155 => 'bitrix.katolicheskaya_paskha_by',
    156 => 'bitrix.katolicheskaya_paskha_kz',
    157 => 'bitrix.den_vsekh_vlyublyennykh_ru',
    158 => 'bitrix.den_vsekh_vlyublyennykh_by',
    159 => 'bitrix.den_vsekh_vlyublyennykh_kz',
    160 => 'bitrix.den_svyatogo_valentina_ru',
    161 => 'bitrix.den_svyatogo_valentina_by',
    162 => 'bitrix.den_svyatogo_valentina_kz',
    163 => 'bitrix.mezhdunarodnyy_zhenskiy_den_ru',
    164 => 'bitrix.mezhdunarodnyy_zhenskiy_den_by',
    165 => 'bitrix.mezhdunarodnyy_zhenskiy_den_kz',
    166 => 'bitrix.mezhdunarodnyy_zhenskiy_den_2_ru',
    167 => 'bitrix.mezhdunarodnyy_zhenskiy_den_2_by',
    168 => 'bitrix.mezhdunarodnyy_zhenskiy_den_2_kz',
    169 => 'bitrix.mezhdunarodnyy_zhenskiy_den_3_ru',
    170 => 'bitrix.mezhdunarodnyy_zhenskiy_den_3_by',
    171 => 'bitrix.mezhdunarodnyy_zhenskiy_den_3_kz',
    172 => 'bitrix.thanksgiving_day_en',
    173 => 'bitrix.april_fools_day_en',
    174 => 'bitrix.valentine_s_day_en',
    175 => 'bitrix.valentine_s_day_2_en',
    176 => 'bitrix.valentine_s_day_3_en',
    177 => 'bitrix.chernaya_pyatnitsa_ru',
    178 => 'bitrix.chernaya_pyatnitsa_by',
    179 => 'bitrix.chernaya_pyatnitsa_kz',
    180 => 'bitrix.khellouin_by',
    181 => 'bitrix.khellouin_kz',
    182 => 'bitrix.easter_en',
    183 => 'bitrix.halloween_en',
    184 => 'bitrix.christmas_en',
    185 => 'bitrix.new_year_en',
    186 => 'bitrix.black_friday_en',
    187 => 'bitrix.kraytvirtualtravel_ru',
    188 => 'bitrix.kraytvirtualtravel_by',
    189 => 'bitrix.kraytvirtualtravel_kz',
    190 => 'bitrix.kraytvirtualtravel_ua',
    191 => 'bitrix.kraytnutritionist_ru',
    192 => 'bitrix.kraytnutritionist_by',
    193 => 'bitrix.delobotcorporatetraining_en',
    194 => 'bitrix.delobotblackfriday_en',
    195 => 'bitrix.delobotcleaningcompany_en',
    196 => 'bitrix.delobotfitness_en',
    197 => 'bitrix.delobotfooddelivery_en',
    198 => 'bitrix.delobotvisagiste_en',
    199 => 'bitrix.delobotpsychologist_en',
    200 => 'bitrix.delobotflorist_en',
    201 => 'bitrix.delobotdecoration_en',
    202 => 'bitrix.delobotcarservice_en',
    203 => 'bitrix.kraytagency_en',
    204 => 'bitrix.kraytagriculture_en',
    205 => 'bitrix.kraytarchitecture_en',
    206 => 'bitrix.kraytbusiness_en',
    207 => 'bitrix.kraytdelivery_en',
    208 => 'bitrix.kraytevents_en',
    209 => 'bitrix.kraythalloween_en',
    210 => 'bitrix.kraytvetclinic_en',
    211 => 'bitrix.kraytmasterforhour_en',
    212 => 'bitrix.kraytinstagramcontacts_en',
    213 => 'bitrix.kraytinstagramstock_en',
    214 => 'bitrix.kraytinstagramtarget_en',
    215 => 'bitrix.kraytonlinebabysitter_en',
    216 => 'bitrix.kraytpetservice_en',
    217 => 'bitrix.kraytsolarenergy_en',
    218 => 'bitrix.kraytsportonline_en',
    219 => 'bitrix.kraytsummersale_en',
    220 => 'bitrix.krayttravelblog_en',
    221 => 'bitrix.kraytvebinar_en',
    222 => 'bitrix.kraytartificialintelligence_en',
    223 => 'bitrix.kraytbakeryproducts_en',
    224 => 'bitrix.kraytchildrensschool_en',
    225 => 'bitrix.kraytfooddelivery_en',
    226 => 'bitrix.kraytfurniture_en',
    227 => 'bitrix.kraytvirtualtravel_en',
    228 => 'bitrix.kraytyoutubechannel_en',
    229 => 'bitrix.kraytknitting_en',
    230 => 'bitrix.kraytnutritionist_en',
    231 => 'bitrix.kraytnailservice_en',
    232 => 'bitrix.kraytmedicine_en',
    233 => 'bitrix.kraytprofipage_en',
    234 => 'bitrix.kraytsale11_en',
    235 => 'bitrix.delobotblackfriday_ua',
    236 => 'bitrix.delobotcleaning_ua',
    237 => 'bitrix.delobotcorporatetraining_ua',
    238 => 'bitrix.delobotfitness_ua',
    239 => 'bitrix.delobotfooddelivery_ua',
    240 => 'bitrix.delobotvisagiste_ua',
    241 => 'bitrix.kraytagency_ua',
    242 => 'bitrix.kraytagriculture_ua',
    243 => 'bitrix.kraytarchitecture_ua',
    244 => 'bitrix.kraytbusiness_ua',
    245 => 'bitrix.kraytevents_ua',
    246 => 'bitrix.kraythalloween_ua',
    247 => 'bitrix.kraytinstagramcontacts_ua',
    248 => 'bitrix.kraytinstagramstock_ua',
    249 => 'bitrix.kraytinstagramtarget_ua',
    250 => 'bitrix.kraytpetservice_ua',
    251 => 'bitrix.kraytsolarenergy_ua',
    252 => 'bitrix.kraytsummersale_ua',
    253 => 'bitrix.krayttravelblog_ua',
    254 => 'bitrix.kraytvebinar_ua',
    255 => 'bitrix.kraytvetclinic_ua',
    256 => 'bitrix.kraytnutritionist_ua',
    257 => 'bitrix.kraytnutritionist_kz',
    258 => 'bitrix.kraytfurniture_by',
    259 => 'bitrix.kraytfurniture_ru',
    260 => 'bitrix.kraytfurniture_kz',
    261 => 'bitrix.kraytfurniture_ua',
    262 => 'bitrix.kraytmedicine_ru',
    263 => 'bitrix.kraytmedicine_by',
    264 => 'bitrix.kraytmedicine_kz',
    265 => 'bitrix.kraytmedicine_ua',
    266 => 'bitrix.kraytsale11_ru',
    267 => 'bitrix.kraytsale11_by',
    268 => 'bitrix.kraytsale11_kz',
    269 => 'bitrix.kraytsale11_ua',
    270 => 'bitrix.kraytnailservice_ru',
    271 => 'bitrix.kraytnailservice_by',
    272 => 'bitrix.kraytnailservice_kz',
    273 => 'bitrix.kraytnailservice_ua',
    274 => 'bitrix.kraytknitting_ru',
    275 => 'bitrix.kraytknitting_by',
    276 => 'bitrix.kraytknitting_kz',
    277 => 'bitrix.kraytknitting_ua',
    278 => 'bitrix.kraytfooddelivery_ru',
    279 => 'bitrix.kraytfooddelivery_by',
    280 => 'bitrix.kraytfooddelivery_kz',
    281 => 'bitrix.kraytfooddelivery_ua',
    282 => 'bitrix.kraytbakeryproducts_ru',
    283 => 'bitrix.kraytbakeryproducts_by',
    284 => 'bitrix.kraytbakeryproducts_kz',
    285 => 'bitrix.kraytbakeryproducts_ua',
    286 => 'bitrix.kraytschoolmusic_ru',
    287 => 'bitrix.kraytschoolmusic_by',
    288 => 'bitrix.kraytschoolmusic_kz',
    289 => 'bitrix.kraytschoolmusic_ua',
    290 => 'bitrix.kraytautomechanic_ru',
    291 => 'bitrix.kraytautomechanic_by',
    292 => 'bitrix.kraytautomechanic_kz',
    293 => 'bitrix.kraytautomechanic_ua',
    294 => 'bitrix.kraytpresents_ru',
    295 => 'bitrix.kraytpresents_by',
    296 => 'bitrix.kraytpresents_kz',
    297 => 'bitrix.kraytpresents_ua',
    298 => 'bitrix.kraytportfoliophotographer_ru',
    299 => 'bitrix.kraytportfoliophotographer_by',
    300 => 'bitrix.kraytportfoliophotographer_kz',
    301 => 'bitrix.kraytportfoliophotographer_ua',
    302 => 'bitrix.kraytcrm_ru',
    303 => 'bitrix.delobotcleaningcompany_ru',
    304 => 'bitrix.delobotblackfriday_ru',
    305 => 'bitrix.delobotblackfriday_by',
    306 => 'bitrix.delobotblackfriday_kz',
    307 => 'bitrix.delobotcleaningcompany_by',
    308 => 'bitrix.delobotcleaningcompany_kz',
    309 => 'bitrix.delobotcorporatetraining_ru',
    310 => 'bitrix.delobotcorporatetraining_by',
    311 => 'bitrix.delobotcorporatetraining_kz',
    312 => 'bitrix.delobotfitness_ru',
    313 => 'bitrix.delobotfitness_by',
    314 => 'bitrix.delobotfitness_kz',
    315 => 'bitrix.delobotfooddelivery_ru',
    316 => 'bitrix.delobotfooddelivery_by',
    317 => 'bitrix.delobotfooddelivery_kz',
    318 => 'bitrix.delobotvisagiste_ru',
    319 => 'bitrix.delobotvisagiste_by',
    320 => 'bitrix.delobotvisagiste_kz',
    321 => 'bitrix.delobotgiftsforwomensday_ru',
    322 => 'bitrix.delobotgiftsforwomensday_by',
    323 => 'bitrix.delobotgiftsforwomensday_kz',
    324 => 'bitrix.delobotgiftsforwomensday_ua',
    325 => 'bitrix.delobotwebdesigner_ru',
    326 => 'bitrix.delobotwebdesigner_by',
    327 => 'bitrix.delobotwebdesigner_kz',
    328 => 'bitrix.delobotwebdesigner_ua',
    329 => 'bitrix.delobotatelier_ru',
    330 => 'bitrix.delobotatelier_by',
    331 => 'bitrix.delobotatelier_kz',
    332 => 'bitrix.delobotatelier_ua',
    333 => 'bitrix.delobotconstructioncompany_ru',
    334 => 'bitrix.delobotconstructioncompany_by',
    335 => 'bitrix.delobotconstructioncompany_ua',
    336 => 'bitrix.delobotlanguageschool_ru',
    337 => 'bitrix.delobotlanguageschool_by',
    338 => 'bitrix.delobotlanguageschool_kz',
    339 => 'bitrix.delobotlanguageschool_ua',
    340 => 'bitrix.delobotcoffee_ru',
    341 => 'bitrix.delobotcoffee_by',
    342 => 'bitrix.delobotcoffee_kz',
    343 => 'bitrix.delobotcoffee_ua',
    344 => 'bitrix.kraytcrm_by',
    345 => 'bitrix.kraytcrm_kz',
    346 => 'bitrix.kraytcrm_ua',
    347 => 'bitrix.kraytonlinebabysitter_ru',
    348 => 'bitrix.kraytonlinebabysitter_by',
    349 => 'bitrix.kraytonlinebabysitter_kz',
    350 => 'bitrix.kraytonlinebabysitter_uaa',
    351 => 'bitrix.kraytsportonline_ru',
    352 => 'bitrix.kraytsportonline_by',
    353 => 'bitrix.kraytsportonline_kz',
    354 => 'bitrix.kraytsportonline_ua',
    355 => 'bitrix.kraytmasterforhour_ru',
    356 => 'bitrix.kraytmasterforhour_by',
    357 => 'bitrix.kraytmasterforhour_kz',
    358 => 'bitrix.kraytmasterforhour_ua',
    359 => 'bitrix.kraytdelivery_ru',
    360 => 'bitrix.kraytdelivery_by',
    361 => 'bitrix.kraytdelivery_kz',
    362 => 'bitrix.kraytdelivery_ua',
    363 => 'bitrix.kraytrepairservice_ru',
    364 => 'bitrix.kraytrepairservice_by',
    365 => 'bitrix.kraytrepairservice_kz',
    366 => 'bitrix.kraytrepairservice_ua',
    367 => 'bitrix.kraytprofipage_ru',
    368 => 'bitrix.kraytprofipage_by',
    369 => 'bitrix.kraytprofipage_kz',
    370 => 'bitrix.kraytprofipage_ua',
    371 => 'bitrix.krayttutor_ru',
    372 => 'bitrix.krayttutor_by',
    373 => 'bitrix.krayttutor_kz',
    374 => 'bitrix.krayttutor_ua',
    375 => 'bitrix.kraytartificialintelligence_ru',
    376 => 'bitrix.kraytartificialintelligence_by',
    377 => 'bitrix.kraytartificialintelligence_kz',
    378 => 'bitrix.kraytartificialintelligence_ua',
    379 => 'bitrix.kraytyoutubechannel_ru',
    380 => 'bitrix.kraytyoutubechannel_by',
    381 => 'bitrix.kraytyoutubechannel_kz',
    382 => 'bitrix.kraytyoutubechannel_ua',
    383 => 'bitrix.kraytchildrensschool_ru',
    384 => 'bitrix.kraytchildrensschool_by',
    385 => 'bitrix.kraytchildrensschool_kz',
    386 => 'bitrix.kraytchildrensschool_ua',
    387 => 'bitrix.krayttravelagency_ru',
    388 => 'bitrix.krayttravelagency_by',
    389 => 'bitrix.krayttravelagency_kz',
    390 => 'bitrix.krayttravelagency_ua',
    391 => 'bitrix.krayttranslator_ru',
    392 => 'bitrix.krayttranslator_by',
    393 => 'bitrix.krayttranslator_kz',
    394 => 'bitrix.krayttranslator_ua',
    395 => 'bitrix.kraytstylist_ru',
    396 => 'bitrix.kraytstylist_by',
    397 => 'bitrix.kraytstylist_kz',
    398 => 'bitrix.kraytstylist_ua',
    399 => 'bitrix.kraytstretchingstudio_ru',
    400 => 'bitrix.kraytstretchingstudio_by',
    401 => 'bitrix.kraytstretchingstudio_kz',
    402 => 'bitrix.kraytstretchingstudio_ua',
    403 => 'bitrix.kraytsportschool_ru',
    404 => 'bitrix.kraytsportschool_by',
    405 => 'bitrix.kraytsportschool_kz',
    406 => 'bitrix.kraytsportschool_ua',
    407 => 'bitrix.kraytsitedesigner_ru',
    408 => 'bitrix.kraytsitedesigner_by',
    409 => 'bitrix.kraytsitedesigner_kz',
    410 => 'bitrix.kraytsitedesigner_ua',
    411 => 'bitrix.kraytsport_ru',
    412 => 'bitrix.kraytsport_by',
    413 => 'bitrix.kraytsport_kz',
    414 => 'bitrix.kraytsport_ua',
    415 => 'bitrix.kraytmobileapp_ru',
    416 => 'bitrix.kraytmobileapp_by',
    417 => 'bitrix.kraytmobileapp_kz',
    418 => 'bitrix.kraytmobileapp_ua',
    419 => 'bitrix.kraytrealestate_ru',
    420 => 'bitrix.kraytrealestate_by',
    421 => 'bitrix.kraytrealestate_kz',
    422 => 'bitrix.kraytrealestate_ua',
    423 => 'bitrix.delobotnewyearsale_ru',
    424 => 'bitrix.delobotnewyearsale_by',
    425 => 'bitrix.delobotnewyearsale_kz',
    426 => 'bitrix.delobotnewyearsale_ua',
    427 => 'bitrix.delobotyoga_ru',
    428 => 'bitrix.delobotyoga_by',
    429 => 'bitrix.delobotyoga_kz',
    430 => 'bitrix.delobotyoga_ua',
    431 => 'bitrix.delobotcake_ru',
    432 => 'bitrix.delobotcake_by',
    433 => 'bitrix.delobotcake_kz',
    434 => 'bitrix.delobotcake_ua',
    435 => 'bitrix.delobotveterinarian_ru',
    436 => 'bitrix.delobotveterinarian_by',
    437 => 'bitrix.delobotveterinarian_kz',
    438 => 'bitrix.delobotveterinarian_ua',
    439 => 'bitrix.delobotpsychologist_ru',
    440 => 'bitrix.delobotpsychologist_by',
    441 => 'bitrix.delobotpsychologist_kz',
    442 => 'bitrix.delobotpsychologist_ua',
    443 => 'bitrix.delobotdecoration_ru',
    444 => 'bitrix.delobotdecoration_by',
    445 => 'bitrix.delobotdecoration_kz',
    446 => 'bitrix.delobotdecoration_ua',
    447 => 'bitrix.delobotflorist_ru',
    448 => 'bitrix.delobotflorist_by',
    449 => 'bitrix.delobotflorist_kz',
    450 => 'bitrix.delobotflorist_ua',
    451 => 'bitrix.delobotcarservice_ru',
    452 => 'bitrix.delobotcarservice_by',
    453 => 'bitrix.delobotcarservice_kz',
    454 => 'bitrix.delobotcarservice_ua',
    455 => 'bitrix.delobotcargotransportation_ru',
    456 => 'bitrix.delobotcargotransportation_by',
    457 => 'bitrix.delobotcargotransportation_kz',
    458 => 'bitrix.delobotcargotransportation_ua',
    459 => 'bitrix.delobotrealtor_ru',
    460 => 'bitrix.delobotrealtor_by',
    461 => 'bitrix.delobotrealtor_kz',
    462 => 'bitrix.delobotrealtor_ua',
    463 => 'bitrix.delobotfurnituremanufacturing_ru',
    464 => 'bitrix.delobotfurnituremanufacturing_by',
    465 => 'bitrix.delobotfurnituremanufacturing_kz',
    466 => 'bitrix.delobotfurnituremanufacturing_ua',
    467 => 'bitrix.delobotorganizationofholidays_ru',
    468 => 'bitrix.delobotorganizationofholidays_by',
    469 => 'bitrix.delobotorganizationofholidays_kz',
    470 => 'bitrix.delobotorganizationofholidays_ua',
    471 => 'bitrix.delobotconcertannounce_ru',
    472 => 'bitrix.delobotconcertannounce_by',
    473 => 'bitrix.delobotconcertannounce_kz',
    474 => 'bitrix.delobotconcertannounce_ua',
    475 => 'bitrix.delobotphotographersservice_ru',
    476 => 'bitrix.delobotphotographersservice_by',
    477 => 'bitrix.delobotphotographersservice_kz',
    478 => 'bitrix.delobotphotographersservice_ua',
    479 => 'bitrix.kraytsecurityagency_ru',
    480 => 'bitrix.kraytsecurityagency_by',
    481 => 'bitrix.kraytsecurityagency_kz',
    482 => 'bitrix.kraytsecurityagency_ua',
    483 => 'bitrix.kraytrecordingstudio_ru',
    484 => 'bitrix.kraytrecordingstudio_by',
    485 => 'bitrix.kraytrecordingstudio_kz',
    486 => 'bitrix.kraytrecordingstudio_ua',
    487 => 'bitrix.kraytrealestateagent_ru',
    488 => 'bitrix.kraytrealestateagent_by',
    489 => 'bitrix.kraytrealestateagent_kz',
    490 => 'bitrix.kraytrealestateagent_ua',
    491 => 'bitrix.delobotdecorationhouses_ru',
    492 => 'bitrix.delobotdecorationhouses_by',
    493 => 'bitrix.delobotdecorationhouses_kz',
    494 => 'bitrix.delobotdecorationhouses_ua',
    495 => 'bitrix.delobotairconditioners_ru',
    496 => 'bitrix.delobotairconditioners_by',
    497 => 'bitrix.delobotairconditioners_kz',
    498 => 'bitrix.delobotairconditioners_ua',
    499 => 'bitrix.delobotdesignworkshop_ru',
    500 => 'bitrix.delobotdesignworkshop_by',
    501 => 'bitrix.delobotdesignworkshop_kz',
    502 => 'bitrix.delobotdesignworkshop_ua',
    503 => 'bitrix.delobotcitygreeningproject_ru',
    504 => 'bitrix.delobotcitygreeningproject_by',
    505 => 'bitrix.delobotcitygreeningproject_kz',
    506 => 'bitrix.delobotcitygreeningproject_ua',
    507 => 'bitrix.delobotecoproducts_ru',
    508 => 'bitrix.delobotecoproducts_by',
    509 => 'bitrix.delobotecoproducts_kz',
    510 => 'bitrix.delobotecoproducts_ua',
    511 => 'bitrix.delobotsoundrecordingservices_ru',
    512 => 'bitrix.delobotsoundrecordingservices_by',
    513 => 'bitrix.delobotsoundrecordingservices_kz',
    514 => 'bitrix.delobotsoundrecordingservices_ua',
    515 => 'bitrix.delobotsecurityservice_ru',
    516 => 'bitrix.delobotsecurityservice_by',
    517 => 'bitrix.delobotsecurityservice_kz',
    518 => 'bitrix.delobotsecurityservice_ua',
    519 => 'bitrix.delobotsportschool_ru',
    520 => 'bitrix.delobotsportschool_by',
    521 => 'bitrix.delobotsportschool_kz',
    522 => 'bitrix.delobotsportschool_ua',
    523 => 'bitrix.delobotfamilyleisure_ru',
    524 => 'bitrix.delobotfamilyleisure_by',
    525 => 'bitrix.delobotfamilyleisure_kz',
    526 => 'bitrix.delobotfamilyleisure_ua',
    527 => 'bitrix.delobotdoctortherapist_ru',
    528 => 'bitrix.delobotdoctortherapist_by',
    529 => 'bitrix.delobotdoctortherapist_kz',
    530 => 'bitrix.delobotdoctortherapist_ua',
    531 => 'bitrix.kraytagency_ru',
    532 => 'bitrix.kraytagency_by',
    533 => 'bitrix.kraytagency_kz',
    534 => 'bitrix.kraytarchitecture_ru',
    535 => 'bitrix.kraytarchitecture_by',
    536 => 'bitrix.kraytarchitecture_kz',
    537 => 'bitrix.kraytagriculture_ru',
    538 => 'bitrix.kraytagriculture_by',
    539 => 'bitrix.kraytagriculture_kz',
    540 => 'bitrix.kraytbusiness_ru',
    541 => 'bitrix.kraytbusiness_by',
    542 => 'bitrix.kraytbusiness_kz',
    543 => 'bitrix.kraytevents_ru',
    544 => 'bitrix.kraytevents_by',
    545 => 'bitrix.kraytevents_kz',
    546 => 'bitrix.kraythalloween_ru',
    547 => 'bitrix.kraythalloween_by',
    548 => 'bitrix.kraythalloween_kz',
    549 => 'bitrix.kraytinstagramtarget_ru',
    550 => 'bitrix.kraytinstagramtarget_by',
    551 => 'bitrix.kraytinstagramtarget_kz',
    552 => 'bitrix.kraytinstagramcontacts_ru',
    553 => 'bitrix.kraytinstagramcontacts_by',
    554 => 'bitrix.kraytinstagramcontacts_kz',
    555 => 'bitrix.kraytinstagramstock_ru',
    556 => 'bitrix.kraytinstagramstock_by',
    557 => 'bitrix.kraytinstagramstock_kz',
    558 => 'bitrix.kraytpetservice_ru',
    559 => 'bitrix.kraytpetservice_by',
    560 => 'bitrix.kraytpetservice_kz',
    561 => 'bitrix.kraytsolarenergy_ru',
    562 => 'bitrix.kraytsolarenergy_by',
    563 => 'bitrix.kraytsolarenergy_kz',
    564 => 'bitrix.kraytsummersale_ru',
    565 => 'bitrix.kraytsummersale_by',
    566 => 'bitrix.kraytsummersale_kz',
    567 => 'bitrix.krayttravelblog_ru',
    568 => 'bitrix.krayttravelblog_by',
    569 => 'bitrix.krayttravelblog_kz',
    570 => 'bitrix.kraytvebinar_ru',
    571 => 'bitrix.kraytvebinar_by',
    572 => 'bitrix.kraytvebinar_kz',
    573 => 'bitrix.kraytvetclinic_ru',
    574 => 'bitrix.kraytvetclinic_by',
    575 => 'bitrix.kraytvetclinic_kz',
    576 => 'bitrix.kraytrestaurant_ru',
    577 => 'bitrix.kraytrestaurant_by',
    578 => 'bitrix.kraytrestaurant_kz',
    579 => 'bitrix.kraytrestaurant_ua',
    580 => 'bitrix.kraytweddingservices_ru',
    581 => 'bitrix.kraytweddingservices_by',
    582 => 'bitrix.kraytweddingservices_kz',
    583 => 'bitrix.kraytweddingservices_ua',
    584 => 'bitrix.kraytoptics_ru',
    585 => 'bitrix.kraytoptics_by',
    586 => 'bitrix.kraytoptics_kz',
    587 => 'bitrix.kraytoptics_ua',
    588 => 'bitrix.krayt3dprint_ru',
    589 => 'bitrix.krayt3dprint_by',
    590 => 'bitrix.krayt3dprint_kz',
    591 => 'bitrix.krayt3dprint_ua',
    592 => 'bitrix.kraytbusinesspremisesdesign_ru',
    593 => 'bitrix.kraytbusinesspremisesdesign_by',
    594 => 'bitrix.kraytbusinesspremisesdesign_kz',
    595 => 'bitrix.kraytbusinesspremisesdesign_ua',
    596 => 'bitrix.kraytcentersproject_ru',
    597 => 'bitrix.kraytcentersproject_by',
    598 => 'bitrix.kraytcentersproject_kz',
    599 => 'bitrix.kraytcentersproject_ua',
    600 => 'bitrix.kraytcitygreening_ru',
    601 => 'bitrix.kraytcitygreening_by',
    602 => 'bitrix.kraytcitygreening_kz',
    603 => 'bitrix.kraytcitygreening_ua',
    604 => 'bitrix.kraytclimatesystems_ru',
    605 => 'bitrix.kraytclimatesystems_by',
    606 => 'bitrix.kraytclimatesystems_kz',
    607 => 'bitrix.kraytclimatesystems_ua',
    608 => 'bitrix.kraytclinicmomandbaby_ru',
    609 => 'bitrix.kraytclinicmomandbaby_by',
    610 => 'bitrix.kraytclinicmomandbaby_kz',
    611 => 'bitrix.kraytclinicmomandbaby_ua',
    612 => 'bitrix.kraytdesignerclothing_ru',
    613 => 'bitrix.kraytdesignerclothing_by',
    614 => 'bitrix.kraytdesignerclothing_kz',
    615 => 'bitrix.kraytdesignerclothing_ua',
    616 => 'bitrix.kraytprivatedoctor_ru',
    617 => 'bitrix.kraytprivatedoctor_by',
    618 => 'bitrix.kraytprivatedoctor_kz',
    619 => 'bitrix.kraytprivatedoctor_ua',
    620 => 'bitrix.kraytprintinghouse_ru',
    621 => 'bitrix.kraytprintinghouse_by',
    622 => 'bitrix.kraytprintinghouse_kz',
    623 => 'bitrix.kraytprintinghouse_ua',
    624 => 'bitrix.kraytpersonalcoach_ru',
    625 => 'bitrix.kraytpersonalcoach_by',
    626 => 'bitrix.kraytpersonalcoach_kz',
    627 => 'bitrix.kraytpersonalcoach_ua',
    628 => 'bitrix.kraytperfumer_ru',
    629 => 'bitrix.kraytperfumer_by',
    630 => 'bitrix.kraytperfumer_kz',
    631 => 'bitrix.kraytperfumer_ua',
    632 => 'bitrix.kraytnewsblog_ru',
    633 => 'bitrix.kraytnewsblog_by',
    634 => 'bitrix.kraytnewsblog_kz',
    635 => 'bitrix.kraytnewsblog_ua',
    636 => 'bitrix.kraytmakeupstudio_ru',
    637 => 'bitrix.kraytmakeupstudio_by',
    638 => 'bitrix.kraytmakeupstudio_kz',
    639 => 'bitrix.kraytmakeupstudio_ua',
    640 => 'bitrix.kraytlawyer_ru',
    641 => 'bitrix.kraytlawyer_by',
    642 => 'bitrix.kraytlawyer_kz',
    643 => 'bitrix.kraytlawyer_ua',
    644 => 'bitrix.kraytlandscapedesign_ru',
    645 => 'bitrix.kraytlandscapedesign_by',
    646 => 'bitrix.kraytlandscapedesign_kz',
    647 => 'bitrix.kraytlandscapedesign_ua',
    648 => 'bitrix.kraytjewelryrepairshop_ru',
    649 => 'bitrix.kraytjewelryrepairshop_by',
    650 => 'bitrix.kraytjewelryrepairshop_kz',
    651 => 'bitrix.kraytjewelryrepairshop_ua',
    652 => 'bitrix.kraytinteriordesign_ru',
    653 => 'bitrix.kraytinteriordesign_by',
    654 => 'bitrix.kraytinteriordesign_kz',
    655 => 'bitrix.kraytinsurancecompany_ru',
    656 => 'bitrix.kraytinsurancecompany_kz',
    657 => 'bitrix.kraytinsurancecompany_ua',
    658 => 'bitrix.kraytillustrator_ru',
    659 => 'bitrix.kraytillustrator_by',
    660 => 'bitrix.kraytillustrator_kz',
    661 => 'bitrix.kraytillustrator_ua',
    662 => 'bitrix.kraytgiftsvalentineday_ru',
    663 => 'bitrix.kraytgiftsvalentineday_by',
    664 => 'bitrix.kraytgiftsvalentineday_kz',
    665 => 'bitrix.kraytgiftsvalentineday_ua',
    666 => 'bitrix.kraytfebruary23_ru',
    667 => 'bitrix.kraytfebruary23_by',
    668 => 'bitrix.kraytfebruary23_kz',
    669 => 'bitrix.kraytfebruary23_ua',
    670 => 'bitrix.kraytequipmentrepair_ru',
    671 => 'bitrix.kraytequipmentrepair_by',
    672 => 'bitrix.kraytequipmentrepair_kz',
    673 => 'bitrix.kraytequipmentrepair_ua',
    674 => 'bitrix.kraytdentistry_ru',
    675 => 'bitrix.kraytdentistry_by',
    676 => 'bitrix.kraytdentistry_kz',
    677 => 'bitrix.kraytdentistry_ua',
    678 => 'bitrix.kraytdancemarathon_ru',
    679 => 'bitrix.kraytdancemarathon_by',
    680 => 'bitrix.kraytdancemarathon_kz',
    681 => 'bitrix.kraytdancemarathon_ua',
    682 => 'bitrix.kraytcourseformothers_ru',
    683 => 'bitrix.kraytcourseformothers_by',
    684 => 'bitrix.kraytcourseformothers_kz',
    685 => 'bitrix.kraytcourseformothers_ua',
    686 => 'bitrix.kraytcosmetologist_ru',
    687 => 'bitrix.kraytcosmetologist_by',
    688 => 'bitrix.kraytcosmetologist_kz',
    689 => 'bitrix.kraytcosmetologist_ua',
    690 => 'bitrix.kraytconstructionofprivatehouses_ru',
    691 => 'bitrix.kraytconstructionofprivatehouses_by',
    692 => 'bitrix.kraytconstructionofprivatehouses_kz',
    693 => 'bitrix.kraytconstructionofprivatehouses_ua',
    694 => 'bitrix.kraytconfectionery_ru',
    695 => 'bitrix.kraytconfectionery_by',
    696 => 'bitrix.kraytconfectionery_kz',
    697 => 'bitrix.kraytconfectionery_ua',
    698 => 'bitrix.kraytcoffeehouse_ru',
    699 => 'bitrix.kraytcoffeehouse_by',
    700 => 'bitrix.kraytcoffeehouse_kz',
    701 => 'bitrix.kraytcoffeehouse_ua',
    702 => 'bitrix.kraytcleaningservice_ru',
    703 => 'bitrix.kraytcleaningservice_by',
    704 => 'bitrix.kraytcleaningservice_kz',
    705 => 'bitrix.kraytcleaningservice_ua',
    706 => 'bitrix.kraytbeautystudio_ru',
    707 => 'bitrix.kraytbeautystudio_by',
    708 => 'bitrix.kraytbeautystudio_kz',
    709 => 'bitrix.kraytbeautystudio_ua',
    710 => 'bitrix.kraytbarbershop_ru',
    711 => 'bitrix.kraytbarbershop_by',
    712 => 'bitrix.kraytartworkshop_by',
    713 => 'bitrix.kraytbarbershop_kz',
    714 => 'bitrix.kraytbarbershop_ua',
    715 => 'bitrix.kraytartworkshop_ru',
    716 => 'bitrix.kraytartworkshop_kz',
    717 => 'bitrix.kraytartworkshop_ua',
    718 => 'bitrix.kraytaprilfoolsdaygifts_ru',
    719 => 'bitrix.kraytaprilfoolsdaygifts_by',
    720 => 'bitrix.kraytaprilfoolsdaygifts_kz',
    721 => 'bitrix.kraytaprilfoolsdaygifts_ua',
    722 => 'bitrix.kraytwindowinstallation_ru',
    723 => 'bitrix.kraytwindowinstallation_by',
    724 => 'bitrix.kraytwindowinstallation_kz',
    725 => 'bitrix.kraytwindowinstallation_ua',
    726 => 'bitrix.kraytwindowdesign_ru',
    727 => 'bitrix.kraytwindowdesign_by',
    728 => 'bitrix.kraytwindowdesign_kz',
    729 => 'bitrix.kraytwindowdesign_ua',
    730 => 'bitrix.krayttelecommunications_ru',
    731 => 'bitrix.krayttelecommunications_by',
    732 => 'bitrix.krayttelecommunications_kz',
    733 => 'bitrix.krayttelecommunications_ua',
    734 => 'bitrix.kraytsportsnutritionorder_ru',
    735 => 'bitrix.kraytsportsnutritionorder_by',
    736 => 'bitrix.kraytsportsnutritionorder_kz',
    737 => 'bitrix.kraytsportsnutritionorder_ua',
    738 => 'bitrix.kraytreconstructionoffices_ru',
    739 => 'bitrix.kraytreconstructionoffices_by',
    740 => 'bitrix.kraytreconstructionoffices_kz',
    741 => 'bitrix.kraytreconstructionoffices_ua',
    742 => 'bitrix.kraytpremisestrade_ru',
    743 => 'bitrix.kraytpremisestrade_by',
    744 => 'bitrix.kraytpremisestrade_ua',
    745 => 'bitrix.kraytinsulationhouses_ru',
    746 => 'bitrix.kraytinsulationhouses_by',
    747 => 'bitrix.kraytinsulationhouses_kz',
    748 => 'bitrix.kraytinsulationhouses_ua',
    749 => 'bitrix.kraytinstallsecuritysystems_ru',
    750 => 'bitrix.kraytinstallsecuritysystems_by',
    751 => 'bitrix.kraytinstallsecuritysystems_kz',
    752 => 'bitrix.kraytinstallsecuritysystems_ua',
    753 => 'bitrix.kraytinstallbathrooms_ru',
    754 => 'bitrix.kraytinstallbathrooms_by',
    755 => 'bitrix.kraytinstallbathrooms_kz',
    756 => 'bitrix.kraytinstallbathrooms_ua',
    757 => 'bitrix.kraythousedesign_ru',
    758 => 'bitrix.kraythousedesign_by',
    759 => 'bitrix.kraythousedesign_kz',
    760 => 'bitrix.kraythousedesign_ua',
    761 => 'bitrix.kraythospitalforfamily_ru',
    762 => 'bitrix.kraythospitalforfamily_by',
    763 => 'bitrix.kraythospitalforfamily_kz',
    764 => 'bitrix.kraythospitalforfamily_ua',
    765 => 'bitrix.kraythomedecoration_ru',
    766 => 'bitrix.kraythomedecoration_by',
    767 => 'bitrix.kraythomedecoration_kz',
    768 => 'bitrix.kraythomedecoration_ua',
    769 => 'bitrix.kraytfurniturettransformer_ru',
    770 => 'bitrix.kraytfurniturettransformer_by',
    771 => 'bitrix.kraytfurniturettransformer_kz',
    772 => 'bitrix.kraytfurniturettransformer_ua',
    773 => 'bitrix.kraytfloristics_ru',
    774 => 'bitrix.kraytfloristics_by',
    775 => 'bitrix.kraytfloristics_kz',
    776 => 'bitrix.kraytfloristics_ua',
    777 => 'bitrix.kraytfestiveevents_ru',
    778 => 'bitrix.kraytfestiveevents_by',
    779 => 'bitrix.kraytfestiveevents_kz',
    780 => 'bitrix.kraytfestiveevents_ua',
    781 => 'bitrix.kraytecogreen_ru',
    782 => 'bitrix.kraytecogreen_by',
    783 => 'bitrix.kraytecogreen_kz',
    784 => 'bitrix.kraytecogreen_ua',
    785 => 'bitrix.kraytdoorinstallation_ru',
    786 => 'bitrix.kraytdoorinstallation_by',
    787 => 'bitrix.kraytdoorinstallation_kz',
    788 => 'bitrix.kraytdoorinstallation_ua',
    789 => 'bitrix.kraytdoordesign_ru',
    790 => 'bitrix.kraytdoordesign_by',
    791 => 'bitrix.kraytdoordesign_kz',
    792 => 'bitrix.kraytdoordesign_ua',
    793 => 'bitrix.kraytdesigningpeopledisabilities_ru',
    794 => 'bitrix.kraytdesigningpeopledisabilities_by',
    795 => 'bitrix.kraytdesigningpeopledisabilities_kz',
    796 => 'bitrix.kraytdesigningpeopledisabilities_ua',
    797 => 'bitrix.delobotkindergarten_ru',
    798 => 'bitrix.kraytvideostudio_ru',
    799 => 'bitrix.kraytlegalservices_ru',
    800 => 'bitrix.kraytaccountingservices_ru',
    801 => 'bitrix.kraytbookannouncement_ru',
    802 => 'bitrix.kraytcharity_ru',
    803 => 'bitrix.kraytspa_ru',
    804 => 'bitrix.kraythandmadecosmetics_ru',
    805 => 'bitrix.delobotmusic_ru',
    806 => 'bitrix.kraythotelforanimals_ru',
    807 => 'bitrix.kraytcityguide_ru',
    808 => 'bitrix.delobotfoodblog_ru',
    809 => 'bitrix.delobotgamedeveloper_ru',
    810 => 'bitrix.delobotrenovationoffices_ru',
    811 => 'bitrix.delobotcourses_ru',
    812 => 'bitrix.delobotcityb__beautification_ru',
    813 => 'bitrix.delobotaidfund_ru',
    814 => 'bitrix.delobotnewsblog_ru',
    815 => 'bitrix.delobottransportservices_ru',
    816 => 'bitrix.delobotguide_ru',
    817 => 'bitrix.delobotnnturalcosmetic_ru',
    818 => 'bitrix.delobotboutiqueforsale_ru',
    819 => 'bitrix.delobotorganizationweddings_ru',
    820 => 'bitrix.delobotbeautyandrecreationcenter_ru',
    821 => 'bitrix.delobotwriter_ru',
    822 => 'bitrix.kraytotel',
    823 => 'bitrix.kraytigrovoyklub',
    824 => 'bitrix.kraytbazaotdykha',
    825 => 'bitrix.kraytkurspotiktoku',
    826 => 'bitrix.kraytkadrovoeagenstvo',
    827 => 'bitrix.kraytportfoliomodeli',
    828 => 'bitrix.kraytminecraftserver',
    829 => 'bitrix.kraytigrovayakompaniya',
    830 => 'bitrix.delobotuslugivideoproizvodstva',
    831 => 'bitrix.delobotportfolioaktera',
    832 => 'bitrix.delobotpub',
    833 => 'bitrix.delobotminihotel',
    834 => 'bitrix.delobotcamping',
    835 => 'bitrix.delobotcafe',
    836 => 'bitrix.delobotizgotovlenieduxov',
    837 => 'bitrix.delobotbuhgalterskoeobslujivanie',
    838 => 'bitrix.delobotarendanedvizimosti',
    839 => 'bitrix.delobotalternativnayaenergetika',
    840 => 'bitrix.delobotagentstvoponaimy',
    841 => 'bitrix.kraytpodarkikjenskomydny',
    842 => 'bitrix.kraytinstagramcontacts_ru1',
    843 => 'bitrix.kraytinstagramstock_ru1',
    844 => 'bitrix.kraytinstagramtarget_ru1',
    845 => 'bitrix.kraytkhimchistka',
    846 => 'bitrix.krayt_detskaya_odezhda_na_zakaz',
    847 => 'bitrix.krayt_retsepty_blyud',
    848 => 'bitrix.krayt_detskaya_mebel',
    849 => 'bitrix.krayt_biblioteka',
    850 => 'bitrix.krayt_pitomnik_rasteniy',
    851 => 'bitrix.delobot_lawyer',
    852 => 'bitrix.delobot_oformlenie_dverey',
    853 => 'bitrix.delobot_montaj_dverey',
    854 => 'bitrix.delobot_manicure_and_pedicure',
    855 => 'bitrix.delobot_printing_services',
    856 => 'bitrix.delobot_plants',
    857 => 'bitrix.delobot_nutritionist',
    858 => 'bitrix.delobot_designer_tableware',
    859 => 'bitrix.delobot_montaj_okon',
    860 => 'bitrix.delobot_oformlenie_okon',
    861 => 'bitrix.krayt_zhurnalist',
    862 => 'bitrix.krayt_tato_salon',
    863 => 'bitrix.krayt_massajist',
    864 => 'bitrix.krayt_consulting',
    865 => 'bitrix.krayt_elektromontazh',
    866 => 'bitrix.krayt_rezyume_spetsialista',
    867 => 'bitrix.kraytportfoliophotographer',
    868 => 'bitrix.kraytbeautystudio_en',
    869 => 'bitrix.kraytautomechanic_en',
    870 => 'bitrix.kraytequipmentrepair_en',
    871 => 'bitrix.delobot_furniture_for_children',
    872 => 'bitrix.delobot_architectural_projects',
    873 => 'bitrix.delobot_scientists_page',
    874 => 'bitrix.delobot_tatoo_studio',
    875 => 'bitrix.delobot_journalist_resume',
    876 => 'bitrix.delobot_leather_goods',
    877 => 'bitrix.delobot_dance_marathon',
    878 => 'bitrix.krayt_art_gallery',
    879 => 'bitrix.krayt_leather_products',
    880 => 'bitrix.krayt_scientific_researcher',
    881 => 'bitrix.krayt_bureau_of_architecture',
    882 => 'bitrix.krayt_jewelry_designer',
    883 => 'bitrix.krayt_food_photographer',
    884 => 'bitrix.krayt_acting_studio',
    885 => 'bitrix.krayt_farm',
    886 => 'bitrix.krayt_fashion_blog',
    887 => 'bitrix.krayt_birthday_cakes',
    888 => 'bitrix.krayt_plussize_fashion',
    889 => 'bitrix.krayt_diving',
    890 => 'bitrix.krayt_it_services',
    891 => 'bitrix.krayt_beauty_blog',
    892 => 'bitrix.krayt_aquarium',
    893 => 'bitrix.krayt_sport_blog',
    894 => 'bitrix.delobot_online_library',
    895 => 'bitrix.delobot_diving_center',
    896 => 'bitrix.delobot_designer_jewelry',
    897 => 'bitrix.delobot_nail_art_course',
    898 => 'bitrix.delobot_art_galery',
    899 => 'bitrix.delobot_fashion_for_everyone',
    900 => 'bitrix.delobot_handmade_chocolate',
    901 => 'bitrix.krayt_chocolate_shop',
    902 => 'bitrix.krayt_advertising_agency',
    903 => 'bitrix.krayt_asian_food',
    904 => 'bitrix.krayt_avtorskiy_master_klass',
    905 => 'bitrix.krayt_utilizatsiya_otkhodov',
    906 => 'bitrix.krayt_italyanskaya_kukhnya',
    907 => 'bitrix.krayt_kurs_po_nogtevomu_servisu',
    908 => 'bitrix.krayt_begovoy_klub',
    909 => 'bitrix.krayt_gornyy_turizm',
    910 => 'bitrix.krayt_biznes_prostranstvo',
    911 => 'bitrix.krayt_shkola_iskusstv',
    912 => 'bitrix.krayt_onlayn_intensiv_inostrannogo_yazyka',
    913 => 'bitrix.delobot_reklama_brenda',
    914 => 'bitrix.delobot_italyanskiy_restoran',
    915 => 'bitrix.delobot_modnaya_stranichka',
    916 => 'bitrix.delobot_fotografiya_edy',
    917 => 'bitrix.krayt_pishchevoe_proizvodstvo',
    918 => 'bitrix.krayt_appetitnyy_blog',
    919 => 'bitrix.krayt_uslugi_remonta',
    920 => 'bitrix.krayt_onlayn_kurs_kreativnogo_prodyusera',
    921 => 'bitrix.krayt_detskie_prazdniki',
    922 => 'bitrix.krayt_svetotekhnika',
    923 => 'bitrix.krayt_urbanistika',
    924 => 'bitrix.krayt_otdykh_na_prirode',
    925 => 'bitrix.krayt_sportivnye_ploshchadki',
    926 => 'bitrix.krayt_oborudovanie_dlya_turizma',
    927 => 'bitrix.krayt_meksikanskaya_kukhnya',
    928 => 'bitrix.delobot_sports_blog_20',
    929 => 'bitrix.delobot_aziatskie_blyuda',
    930 => 'bitrix.delobot_beauty_blog',
    931 => 'bitrix.delobot_meksikanskiy_restoran_2_0',
    932 => 'bitrix.delobot_urban_project',
    933 => 'bitrix.delobot_drawing_school',
    934 => 'bitrix.delobot_tourism',
    935 => 'bitrix.delobot_runnig_club',
    936 => 'bitrix.delobot_lighting_company',
    937 => 'bitrix.delobot_garbage_disposal',
    938 => 'bitrix.delobot_master_class',
    939 => 'bitrix.delobot_it_outsourcing',
    940 => 'bitrix.krayt_rent_car',
    941 => 'bitrix.krayt_aviation',
    942 => 'bitrix.krayt_street_sport_club',
    943 => 'bitrix.krayt_kofemaniya',
    944 => 'bitrix.krayt_corporate_events',
    945 => 'bitrix.krayt_cooking_school',
    946 => 'bitrix.krayt_blacksmith_craft',
    947 => 'bitrix.krayt_med_lab',
    948 => 'bitrix.krayt_music_studio',
    949 => 'bitrix.krayt_web_application_development',
    950 => 'bitrix.krayt_tennis_club',
    951 => 'bitrix.krayt_bank_services',
    952 => 'bitrix.krayt_smart_furniture',
    953 => 'bitrix.krayt_dom_pod_klyuch',
    954 => 'bitrix.krayt_uslugi_mediatora',
    955 => 'bitrix.krayt_child_club',
    956 => 'bitrix.delobot_custom_made_cakes',
    957 => 'bitrix.delobot_online_yoga_classes',
    958 => 'bitrix.krayt_pevitsa',
    959 => 'bitrix.krayt_ozelenenie_pomeshcheniy',
    960 => 'bitrix.krayt_internet_agentstvo',
    961 => 'bitrix.krayt_kinolog',
    962 => 'bitrix.krayt_poleznye_sneki',
    963 => 'bitrix.krayt_oformlenie_interera',
    964 => 'bitrix.delobot_tourist_equipment',
    965 => 'bitrix.delobot_creative_producer',
    966 => 'bitrix.delobot_aviation_services',
    967 => 'bitrix.delobot_blacksmith_services',
    968 => 'bitrix.delobot_coffee_subscription',
    969 => 'bitrix.delobot_construction_company',
    970 => 'bitrix.delobot_business_premises',
    971 => 'bitrix.delobot_pet_hotel',
    972 => 'bitrix.delobot_food_industry',
    973 => 'bitrix.delobot_cars_for_rent',
    974 => 'bitrix.krayt_klub_dlya_geymerov',
    975 => 'bitrix.krayt_relaks_uslugi',
    976 => 'bitrix.krayt_sportivnyy_inventar',
    977 => 'bitrix.krayt_universitet',
    978 => 'bitrix.delobot_uslugi_kinologa',
    979 => 'bitrix.delobot_business_training',
    980 => 'bitrix.krayt_vebinar',
    981 => 'bitrix.krayt_kurs_po_iskusstvennomu_intellektu',
    982 => 'bitrix.delobot_vypechka_na_zakaz',
    983 => 'bitrix.delobot_osennaya_rasprodazh',
    984 => 'bitrix.krayt_onlayn_shkola_dlya_detey',
    985 => 'bitrix.krayt_arkhitekturnaya_kompaniya',
    986 => 'bitrix.krayt_den_blagodareniya',
    987 => 'bitrix.krayt_uslugi_nyani',
    988 => 'bitrix.krayt_uslugi_repetitora',
    989 => 'bitrix.krayt_logoped',
    990 => 'bitrix.krayt_chyernaya_pyatnitsa',
    991 => 'bitrix.krayt_sladosti_na_rozhdestvo',
    992 => 'bitrix.krayt_podarki_na_novyy_god',
    993 => 'bitrix.delobot_laboratory',
    994 => 'bitrix.delobot_street_sports_grounds',
    995 => 'bitrix.delobot_about_webinar',
    996 => 'bitrix.krayt_dostavka_gruza',
    997 => 'bitrix.delobot_online_travel',
    998 => 'bitrix.delobot_youtube_channel',
    999 => 'bitrix.delobot_interior_design',
    1000 => 'bitrix.krayt_kursy_po_interesam',
    1001 => 'bitrix.krayt_zimnyaya_rasprodazha',
    1002 => 'bitrix.krayt_tsifrovye_kommunikatsii',
    1003 => 'bitrix.krayt_avtosalon',
    1004 => 'bitrix.krayt_uslugi_stroitelnoy_kompanii',
    1005 => 'bitrix.krayt_vysshee_uchebnoe_zavedenie',
    1006 => 'bitrix.krayt_veterinar',
    1007 => 'bitrix.krayt_akademiya_iskusstv',
    1008 => 'bitrix.krayt_master_po_domu',
    1009 => 'bitrix.krayt_onlayn_trenirovki',
    1010 => 'bitrix.krayt_apart_otel',
    1011 => 'bitrix.krayt_tsvety_i_bukety_na_zakaz',
    1012 => 'bitrix.krayt_biznes_forum',
    1013 => 'bitrix.krayt_uslugi_stomatologii',
    1014 => 'bitrix.krayt_uslugi_avtoservisa',
    1015 => 'bitrix.delobot_winter_sale',
    1016 => 'bitrix.krayt_christmas_treats',
    1017 => 'bitrix.krayt_eksperty_tochnogo_zemledeliya',
    1018 => 'bitrix.krayt_servis_ukhoda_za_domom',
    1019 => 'bitrix.delobot_repetitor',
    1020 => 'bitrix.delobot_babysitter_for_children',
    1021 => 'bitrix.delobot_speech_therapist_services',
    1022 => 'bitrix.empty_template',
    1023 => 'bitrix.krayt_gift_wrapping',
    1024 => 'bitrix.delobot_fitness_clothes',
    1025 => 'bitrix.delobot_bathroom_renovation',
    1026 => 'bitrix.delobot_travel_arrangements',
    1027 => 'bitrix.krayt_music_classes',
    1028 => 'bitrix.delobot_klinika_dlya_mam_i_detok',
    1029 => 'bitrix.delobot_bankovskie_uslugi',
    1030 => 'bitrix.krayt_videoproizvodstvo',
    1031 => 'bitrix.krayt_manikyur',
    1032 => 'bitrix.krayt_meditsinskaya_pomoshch_onlayn',
    1033 => 'bitrix.krayt_oblagorazhivanie_goroda',
    1034 => 'bitrix.krayt_uslugi_barbershopa',
    1035 => 'bitrix.krayt_taksi',
    1036 => 'bitrix.delobot_optika',
    1037 => 'bitrix.delobot_klinika_stomatologii',
    1038 => 'bitrix.delobot_konditer',
    1039 => 'bitrix.delobot_3d_print_services',
    1040 => 'bitrix.delobot_uslugi_khimchistki',
    1041 => 'bitrix.delobot_obuchenie_po_iskusstvennomu_intellektu',
    1042 => 'bitrix.krayt_nutritsiologiya',
    1043 => 'bitrix.krayt_salon_krasoty',
    1044 => 'bitrix.krayt_uslugi_perevoda',
    1045 => 'bitrix.krayt_landshaftnyy_dizayner',
    1046 => 'bitrix.krayt_mebel_gotovaya_i_na_zakaz',
    1047 => 'bitrix.krayt_uslugi_yurista',
    1048 => 'bitrix.krayt_uslugi_po_bukhgalterii',
    1049 => 'bitrix.krayt_yuvelir',
    1050 => 'bitrix.krayt_stranichka_s_aktsiey',
    1051 => 'bitrix.krayt_den_vsekh_vlyublennykh',
    1052 => 'bitrix.krayt_stranichka_kontaktov',
    1053 => 'bitrix.krayt_uslugi_massazhista',
    1054 => 'bitrix.krayt_dostavka_edy_i_napitkov',
    1055 => 'bitrix.krayt_podarki_na_zhenskiy_den',
    1056 => 'bitrix.krayt_ekskursii',
    1057 => 'bitrix.krayt_proizvodstvo_kosmetiki',
    1058 => 'bitrix.krayt_logistika',
    1059 => 'bitrix.krayt_fotograf',
    1060 => 'bitrix.krayt_arenda_zhilya',
    1061 => 'bitrix.krayt_kliningovye_uslugi',
    1062 => 'bitrix.krayt_agentstvo_po_naymu',
    1063 => 'bitrix.krayt_dukhi_na_zakaz',
    1064 => 'bitrix.delobot_event_anounce',
    1065 => 'bitrix.delobot_barbershop',
    1066 => 'bitrix.delobot_italian_cafe',
    1067 => 'bitrix.delobot_application_development',
    1068 => 'bitrix.delobot_construction',
    1069 => 'bitrix.delobot_uslugi_khudozhnika',
    1070 => 'bitrix.krayt_prepodavatel',
    1071 => 'bitrix.krayt_dveri_na_zakaz',
    1072 => 'bitrix.krayt_kursy_po_gotovke',
    1073 => 'bitrix.krayt_interernyy_dizayn',
    1074 => 'bitrix.krayt_konsultatsii_po_zdorovyu',
    1075 => 'bitrix.krayt_uslugi_atele',
    1076 => 'bitrix.krayt_vizitka',
    1077 => 'bitrix.krayt_remont_zhilya',
    1078 => 'bitrix.krayt_voskhozhdenie_s_alpinistami',
    1079 => 'bitrix.krayt_vesennyaya_rasprodazha',
    1080 => 'bitrix.krayt_svadebnyy_salon',
    1081 => 'bitrix.kraytlawyer_en',
    1082 => 'bitrix.kraytinsurancecompany_en',
    1083 => 'bitrix.krayt_interior_designer',
    1084 => 'bitrix.delobot_bank',
    1085 => 'bitrix.delobot_custom_made_clothes',
    1086 => 'bitrix.delobot_telemedicine',
    1087 => 'bitrix.krayt_spetsialist_po_nedvizhimosti',
    1088 => 'bitrix.krayt_sportzal',
    1089 => 'bitrix.krayt_mebel',
    1090 => 'bitrix.krayt_tvorcheskie_kursy',
    1091 => 'bitrix.krayt_kosmetologiya',
    1092 => 'bitrix.krayt_remont_bytovoy_tekhniki',
    1093 => 'bitrix.delobot_stylist_services',
    1094 => 'bitrix.delobot_holidays_for_children',
    1095 => 'bitrix.delobot_logistics_services',
    1096 => 'bitrix.krayt_remont_avto',
    1097 => 'bitrix.krayt_torgovoe_oborudovanie',
    1098 => 'bitrix.krayt_rasteniya_i_zhivye_izgorodi',
    1099 => 'bitrix.krayt_organizatsiya_meropriyatiy',
    1100 => 'bitrix.krayt_o_psikhologe',
    1101 => 'bitrix.krayt_prozhivanie_v_otele',
    1102 => 'bitrix.krayt_dental_clinic',
    1103 => 'bitrix.krayt_barbershop',
    1104 => 'bitrix.krayt_personal_stylist',
    1105 => 'bitrix.delobot_muzykalnaya_shkola',
    1106 => 'bitrix.delobot_parfumer_services',
    1107 => 'bitrix.delobot_uslugi_po_upakovke_podarkov',
    1108 => 'bitrix.delobot_insurance',
    1109 => 'bitrix.delobot_zabota_o_zhivotnyh',
    1110 => 'bitrix.delobot_landscape_studio',
    1111 => 'bitrix.krayt_dizayn_saytov',
    1112 => 'bitrix.krayt_arenda_tekhniki',
    1113 => 'bitrix.krayt_kursy_dlya_sotrudnikov',
    1114 => 'bitrix.krayt_konditsionery_v_dom',
    1115 => 'bitrix.krayt_promyshlennost',
    1116 => 'bitrix.krayt_tantsy',
    1117 => 'bitrix.krayt_pechat_3d_figur',
    1118 => 'bitrix.krayt_o_biblioteke',
    1119 => 'bitrix.krayt_vyrashchivanie_zeleni',
    1120 => 'bitrix.krayt_okhrannye_sistemy',
    1121 => 'bitrix.krayt_zvukozapis',
    1122 => 'bitrix.krayt_rasprodazha',
    1123 => 'bitrix.form_template_with_product_galery_for_social_media',
    1124 => 'bitrix.form_template_with_offer',
    1125 => 'bitrix.facebook_form_template_with_offer',
    1126 => 'bitrix.facebook_form_template_with_product_images',
    1127 => 'bitrix.facebook_form_template_with_extra_communication_channels',
    1128 => 'bitrix.shablon_dlya_formy_v_vk_s_kartinkami_tovarov',
    1129 => 'bitrix.shablon_dlya_formy_v_vk_s_kanalami_svyazi',
    1130 => 'bitrix.shablon_dlya_formy_v_vk_s_promo_aktsiey',
    1131 => 'bitrix.form_template_with_offer_for_social_media',
    1132 => 'bitrix.form_template_with_contacts_for_social_media',
    1133 => 'bitrix.form_template_with_product_images_for_social_media',
    1134 => 'bitrix.form_template_with_communication_channels_for_social_media',
    1135 => 'bitrix.krayt_vypechka',
    1136 => 'bitrix.krayt_it_spetsialisty',
    1137 => 'bitrix.krayt_modnyy_konsultant',
    1138 => 'bitrix.krayt_agentstvo_po_turizmu',
    1139 => 'bitrix.krayt_uslugi_vizazhista',
    1140 => 'bitrix.krayt_fotostudiya',
    1141 => 'bitrix.krayt_vyazanie',
    1142 => 'bitrix.krayt_blagotvoritelnaya_organizatsiya',
    1143 => 'bitrix.krayt_uslugi_illyustratora',
    1144 => 'bitrix.delobot_intensiv_po_inostrannomu_yazyku',
    1145 => 'bitrix.delobot_uslugi_po_remontu_tekhniki',
    1146 => 'bitrix.delobot_stranichka_mobilnogo_prilozheniya',
    1147 => 'bitrix.delobot_kreativnaya_mebel',
    1148 => 'bitrix.delobot_klub_tsifrovykh_igr',
    1149 => 'bitrix.delobot_dizayn_dlya_doma',
    1150 => 'bitrix.krayt_studiya_spa',
    1151 => 'bitrix.krayt_proekt_po_utepleniyu_doma',
    1152 => 'bitrix.krayt_klining_kompaniya',
    1153 => 'bitrix.krayt_arkhitektor',
    1154 => 'bitrix.krayt_sladosti_na_zakaz',
    1155 => 'bitrix.krayt_fotografiya',
    1156 => 'bitrix.krayt_poligraficheskie_uslugi',
    1157 => 'bitrix.krayt_manikyur_i_pedikyur',
    1158 => 'bitrix.krayt_vyazanie_2',
    1159 => 'bitrix.krayt_kofe',
    1160 => 'bitrix.krayt_obuchenie_muzyke',
    1161 => 'bitrix.krayt_novosti',
    1162 => 'bitrix.delobot_spetsialist_po_tekstam',
    1163 => 'bitrix.delobot_uslugi_elektrika',
    1164 => 'bitrix.delobot_otslezhivanie_zdorovya',
    1165 => 'bitrix.delobot_studiya_dlya_aktyerov',
    1166 => 'bitrix.delobot_uslugi_kosmetologa',
    1167 => 'bitrix.delobot_kottedzhnyy_posyelok',
    1168 => 'bitrix.delobot_izdeliya_ot_yuvelira',
    1169 => 'bitrix.krayt_montazh_panelnykh_domov',
    1170 => 'bitrix.krayt_masterskaya_tekstilya',
    1171 => 'bitrix.krayt_razrabotka_igr',
    1172 => 'bitrix.krayt_organizatsiya_prazdnika',
    1173 => 'bitrix.krayt_stilnaya_odezhda_na_zakaz',
    1174 => 'bitrix.krayt_posuda_ot_dizaynera',
    1175 => 'bitrix.krayt_pomeshchenie_dlya_kovorkinga',
    1176 => 'bitrix.krayt_shokoladnaya_masterskaya',
    1177 => 'bitrix.krayt_podbor_personala',
    1178 => 'bitrix.krayt_uslugi_po_massazhu',
    1179 => 'bitrix.krayt_prirodnyy_otdykh',
    1180 => 'bitrix.krayt_agentstvo_po_reklame',
    1181 => 'bitrix.krayt_stomatolog',
    1182 => 'bitrix.krayt_povar_konditer',
    1183 => 'bitrix.krayt_uslugi_po_strakhovaniyu',
    1184 => 'bitrix.krayt_rasprodazha_osenyu',
    1185 => 'bitrix.krayt_kukhni_na_zakaz',
    1186 => 'bitrix.krayt_avtorskie_puteshestviya',
    1187 => 'bitrix.krayt_remont_gadzhetov',
    1188 => 'bitrix.krayt_proizvodstvo_produktsii',
    1189 => 'bitrix.krayt_mezhdunarodnaya_biznes_konferentsiya',
    1190 => 'bitrix.krayt_studiya_gibkosti',
    1191 => 'bitrix.krayt_biznes_konsultatsii',
    1192 => 'bitrix.krayt_brendingovoe_agentstvo',
    1193 => 'bitrix.krayt_thanksgiving_day',
    1194 => 'bitrix.krayt_architectural_company',
    1195 => 'bitrix.krayt_online_school_for_children',
    1196 => 'bitrix.krayt_ai_course',
    1197 => 'bitrix.krayt_it_services_2',
    1198 => 'bitrix.krayt_accounting_services',
    1199 => 'bitrix.krayt_gaming_club',
    1200 => 'bitrix.krayt_architectural_company_ru',
    1201 => 'bitrix.delobot_beauty_blog_en',
    1202 => 'bitrix.delobot_sladkoe_na_halloween',
    1203 => 'bitrix.krayt_biznes_ru',
    1204 => 'bitrix.krayt_business_en',
    1205 => 'bitrix.krayt_vebinar_ru',
    1206 => 'bitrix.delobot_music_band',
    1207 => 'bitrix.delobot_courses',
    1208 => 'bitrix.delobot_tours',
    1209 => 'bitrix.krayt_uslugi_okhrany',
    1210 => 'bitrix.krayt_agentstvo_nedvizhimosti',
    1211 => 'bitrix.krayt_didzhital_illyustrator',
    1212 => 'bitrix.krayt_landshaftnyy_dizayn',
    1213 => 'bitrix.krayt_ochki_i_linzy_na_zakaz',
    1214 => 'bitrix.krayt_organizatsiya_svadeb',
    1215 => 'bitrix.krayt_pitanie_s_dietologom',
    1216 => 'bitrix.krayt_uslugi_logistiki',
    1217 => 'bitrix.krayt_uslugi_pekarya',
    1218 => 'bitrix.krayt_uslugi_videostudii',
    1219 => 'bitrix.krayt_home_construction_company',
    1220 => 'bitrix.delobot_natural_cosmetics',
    1221 => 'bitrix.krayt_real_estate_agent',
    1222 => 'bitrix.krayt_spa_salon',
    1223 => 'bitrix.krayt_yoga',
    1224 => 'bitrix.krayt_uslugi_po_makiyajy',
    1225 => 'bitrix.krayt_uslugi_psikhoterapevta',
    1226 => 'bitrix.krayt_uslugi_advokat',
    1227 => 'bitrix.krayt_uchitel_matematiki',
    1228 => 'bitrix.krayt_portfolio_aktrisy',
    1229 => 'bitrix.krayt_online_shkola_dlya_detey',
    1230 => 'bitrix.krayt_odezhda_dlya_fitnesa',
    1231 => 'bitrix.krayt_obuchenie_sotrudnikov',
    1232 => 'bitrix.krayt_nabory_pravilnogo_pitaniya',
    1233 => 'bitrix.krayt_kurs_po_ii',
    1234 => 'bitrix.krayt_kontsert_gruppy',
    1235 => 'bitrix.krayt_kokteylnyy_bar',
    1236 => 'bitrix.krayt_khudozhnik',
    1237 => 'bitrix.delobot_arenduemaya_tekhnika',
    1238 => 'bitrix.delobot_franshiza_sportivnykh_zalov',
    1239 => 'bitrix.delobot_massazh',
    1240 => 'bitrix.delobot_oborudovanie_dlya_torgovli',
    1241 => 'bitrix.delobot_remontnye_raboty',
    1242 => 'bitrix.delobot_uslugi_po_remontu_avto',
    1243 => 'bitrix.delobot_yuridicheskaya_kompaniya',
    1244 => 'bitrix.delobot_yuridicheskiy_universitet',
    1245 => 'bitrix.krayt_kiberponedelnik',
    1246 => 'bitrix.krayt_koncert_gruppy',
    1247 => 'bitrix.krayt_kurs_po_neyrosetyam',
    1248 => 'bitrix.krayt_arenda_nedvizhimosti',
    1249 => 'bitrix.krayt_nyanya_dlya_detok',
    1250 => 'bitrix.krayt_uslugi_bukhgalterii',
    1251 => 'bitrix.krayt_ozelenenie_goroda',
    1252 => 'bitrix.krayt_proektirovanie_domov',
    1253 => 'bitrix.krayt_ustanovka_konditsionerov',
    1254 => 'bitrix.krayt_posuda',
    1255 => 'bitrix.krayt_furniture_manufacturer',
    1256 => 'bitrix.krayt_logistics',
    1257 => 'bitrix.krayt_renovations',
    1258 => 'bitrix.krayt_travel_agency',
    1259 => 'bitrix.krayt_electrical_services',
    1260 => 'bitrix.krayt_home_design_and_construction',
    1261 => 'bitrix.krayt_legal_services',
    1262 => 'bitrix.delobot_bathroom_renovations',
    1263 => 'bitrix.delobot_it_services',
    1264 => 'bitrix.delobot_konsaltingovaya_kompaniya',
    1265 => 'bitrix.delobot_branding',
    1266 => 'bitrix.delobot_mebel_dlya_rabochego_prostranstva',
    1267 => 'bitrix.delobot_stroitelstvo_zhilya',
    1268 => 'bitrix.delobot_zubnoy_vrach',
    1269 => 'bitrix.delobot_furnituremanufacturing_en',
    1270 => 'bitrix.krayt_university_en',
    1271 => 'bitrix.delobot_newsblog_en',
    1272 => 'bitrix.krayt_mobileapp_en',
    1273 => 'bitrix.krayt_hotel_en',
    1274 => 'bitrix.krayt_realestate_en',
    1275 => 'bitrix.delobot_banking_services',
    1276 => 'bitrix.krayt_website_designer',
    1277 => 'bitrix.delobot_transport_services',
    1278 => 'bitrix.krayt_recruitment_agency',
    1279 => 'bitrix.krayt_camping_retreat',
    1280 => 'bitrix.delobot_master_na_vse_ruki',
    1281 => 'bitrix.delobot_apart_gostinitsa',
    1282 => 'bitrix.delobot_tantsevalnye_kursy',
    1283 => 'bitrix.delobot_zakaz_dverey',
    1284 => 'bitrix.delobot_mediator',
    1285 => 'bitrix.delobot_istoricheskiy_muzey',
    1286 => 'bitrix.delobot_onlayn_vrach',
    1287 => 'bitrix.delobot_uslugi_po_reklame',
    1288 => 'bitrix.delobot_knigi_na_zakaz',
  ),
  'TYPE' => 'json',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'rest',
  'NAME' => 'entity_iblock_type',
  'VALUE' => 'rest_entity',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'rest',
  'NAME' => 'server_path',
  'VALUE' => '/rest',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'basket_discount_converted',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'expiration_processing_events',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'p2p_status_list',
  'VALUE' => 
  array (
    0 => 'N',
    1 => 'P',
    2 => 'F',
    3 => 'F_CANCELED',
    4 => 'F_DELIVERY',
    5 => 'F_PAY',
    6 => 'F_OUT',
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'product_reserve_clear_period',
  'VALUE' => '3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'product_viewed_save',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'sale_locationpro_enabled',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'sale_locationpro_import_performed',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'sale_locationpro_migrated',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'use_sale_discount_only',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'viewed_capability',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'viewed_count',
  'VALUE' => '10',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sale',
  'NAME' => 'viewed_time',
  'VALUE' => '5',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'dbnode_id',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'dbnode_status',
  'VALUE' => 'ok',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'suggest_save_days',
  'VALUE' => '250',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'use_social_rating',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'use_tf_cache',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'use_word_distance',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'search',
  'NAME' => 'version',
  'VALUE' => 'v2.0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'security',
  'NAME' => 'ipcheck_disable_file',
  'VALUE' => '/bitrix/modules/ipcheck_disable_4797c44be11e040e1f312f06f69ceeb8',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'security',
  'NAME' => 'redirect_sid',
  'VALUE' => 'khzq8c79wuvzhongz8sywx4arzrzqpzs',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialnetwork',
  'NAME' => 'sonet_use_legacy_counter',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'allow_encrypted_tokens',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'auth_services',
  'VALUE' => 
  array (
    'VKontakte' => 'Y',
    'MyMailRu' => 'Y',
    'Twitter' => 'Y',
    'Facebook' => 'Y',
    'Livejournal' => 'Y',
    'YandexOpenID' => 'Y',
    'Rambler' => 'Y',
    'MailRuOpenID' => 'Y',
    'Liveinternet' => 'Y',
    'Blogger' => 'N',
    'OpenID' => 'Y',
    'LiveID' => 'N',
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'bitrix24net_domain',
  'VALUE' => 'https://artexauto.ru',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'bitrix24net_id',
  'VALUE' => 'ext.660ff660093250.81104675',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'bitrix24net_secret',
  'VALUE' => 'bGJpy9kkOJwDy17lpsGjOyD7ujaK3jwxK6MbBS99icz42z0Rh2',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'google_api_key',
  'VALUE' => 'AIzaSyA7puwZwGDJgOjcAWsFsY7hQcrioC13A18',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'socialservices',
  'NAME' => 'google_appid',
  'VALUE' => '798910771106.apps.googleusercontent.com',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sprint.migration',
  'NAME' => 'upgrade3_17f297b2b7dfaa181a517c6d9cbeaa6e',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'sprint.migration',
  'NAME' => 'upgrade3_9f4130130b52dec16fe578a044f42c62',
  'VALUE' => '1',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'statistic',
  'NAME' => 'COUNTRY_INDEX_LOADED',
  'VALUE' => 'Y',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'statistic',
  'NAME' => 'dbnode_id',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'statistic',
  'NAME' => 'dbnode_status',
  'VALUE' => 'ok',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'statistic',
  'NAME' => 'IP_LOOKUP_CLASS',
  'VALUE' => 'CCityLookup_geoip_extension',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'storeassist',
  'NAME' => 'num_orders',
  'VALUE' => 
  array (
    'newDay' => 0,
    'prevDay' => 0,
  ),
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'storeassist',
  'NAME' => 'progress_percent',
  'VALUE' => '0',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'subscribe',
  'NAME' => 'subscribe_section',
  'VALUE' => '#SITE_DIR#cabinet/subscribe/',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'support',
  'NAME' => 'SEARCH_VERSION',
  'VALUE' => '12.0.3',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'vote',
  'NAME' => 'VOTE_COMPATIBLE_OLD_TEMPLATE',
  'VALUE' => 'N',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'vote',
  'NAME' => 'VOTE_DIR',
  'VALUE' => '',
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'wiki',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'R',
));
    }

    public function down()
    {
        //your code ...
    }
}
