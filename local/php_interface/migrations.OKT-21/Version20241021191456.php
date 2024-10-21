<?php

namespace Sprint\Migration;


class Version20241021191456 extends Version
{
    protected $author = "dev-artex";

    protected $description = "";

    protected $moduleVersion = "4.13.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('aspro_allcorp3_news', 'aspro_allcorp3_content');
    $helper->Iblock()->saveGroupPermissions($iblockId, array (
  'administrators' => 'X',
  'everyone' => 'R',
  'kon_manager' => 'W',
));

    }
}
