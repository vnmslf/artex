<?php

namespace Sprint\Migration;


class Version20240903000254 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.8.2";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'aspro_allcorp3_catalog',
            'aspro_allcorp3_catalog'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'EXEED',
    'CODE' => 'exeed',
    'SORT' => '10',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_VIEWTYPE' => NULL,
    'UF_TOP_SEO' => NULL,
    'UF_SHOW_ON_INDEX_PAG' => '0',
    'UF_INCLUDE_TEXT' => NULL,
    'UF_POPUP_VIDEO' => NULL,
    'UF_ELEMENT_DETAIL' => '18',
    'UF_SECTION_ICON' => NULL,
    'UF_TRANSPARENT_PICTURE' => NULL,
    'UF_GALLERY_SIZE' => '23',
    'UF_PICTURE_RATIO' => NULL,
    'UF_SECTION_TIZERS' => 
    array (
    ),
    'UF_TABLE_PROPS' => NULL,
    'UF_INCLUDE_SUBSECTION' => NULL,
    'UF_OFFERS_TYPE' => NULL,
  ),
  1 => 
  array (
    'NAME' => 'Geely',
    'CODE' => 'geely',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_VIEWTYPE' => NULL,
    'UF_TOP_SEO' => NULL,
    'UF_SHOW_ON_INDEX_PAG' => '0',
    'UF_INCLUDE_TEXT' => NULL,
    'UF_POPUP_VIDEO' => NULL,
    'UF_ELEMENT_DETAIL' => '18',
    'UF_SECTION_ICON' => NULL,
    'UF_TRANSPARENT_PICTURE' => NULL,
    'UF_GALLERY_SIZE' => '23',
    'UF_PICTURE_RATIO' => NULL,
    'UF_SECTION_TIZERS' => false,
    'UF_TABLE_PROPS' => NULL,
    'UF_INCLUDE_SUBSECTION' => NULL,
    'UF_OFFERS_TYPE' => NULL,
  ),
  2 => 
  array (
    'NAME' => 'Solaris',
    'CODE' => 'solaris',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'text',
    'UF_VIEWTYPE' => NULL,
    'UF_TOP_SEO' => NULL,
    'UF_SHOW_ON_INDEX_PAG' => '0',
    'UF_INCLUDE_TEXT' => NULL,
    'UF_POPUP_VIDEO' => NULL,
    'UF_ELEMENT_DETAIL' => '18',
    'UF_SECTION_ICON' => NULL,
    'UF_TRANSPARENT_PICTURE' => NULL,
    'UF_GALLERY_SIZE' => '23',
    'UF_PICTURE_RATIO' => NULL,
    'UF_SECTION_TIZERS' => false,
    'UF_TABLE_PROPS' => NULL,
    'UF_INCLUDE_SUBSECTION' => NULL,
    'UF_OFFERS_TYPE' => NULL,
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
