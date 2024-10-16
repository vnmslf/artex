<?php

namespace Sprint\Migration;


class Version20241017022907 extends Version
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
            'aspro_allcorp3_news',
            'aspro_allcorp3_content'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'Общие',
    'CODE' => NULL,
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => '16',
    'DESCRIPTION' => 'Оперативные информационные сообщения, которые представляют политический, социальный или экономический интерес для аудитории в своей свежести, то есть сообщение о событиях произошедших недавно или происходящих в данный момент. Как правило, новости на телевидении и радио передаются несколько раз в день, начинаются в начале часа и длятся от двух минут до получаса. Новости обычно бывают из таких областей, как политика, экономика, наука, культура, спорт, с прогнозом погоды в заключении. Западной традицией предполагается, что новости должны быть изложены максимально нейтрально и объективно и отдельно от комментариев. Выбор новостей для подборки осуществляется редакцией.',
    'DESCRIPTION_TYPE' => 'html',
  ),
)        );
    }
}
