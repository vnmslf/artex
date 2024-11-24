<?php

namespace Sprint\Migration;


class Version20241124231934 extends Version
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

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'aspro_allcorp3_services',
            'aspro_allcorp3_content'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
)        );
    }
}
