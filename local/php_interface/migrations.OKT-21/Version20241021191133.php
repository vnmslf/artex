<?php

namespace Sprint\Migration;


class Version20241021191133 extends Version
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

        $helper->UserGroup()->saveGroup('kon_manager',array (
  'ACTIVE' => 'Y',
  'C_SORT' => '100',
  'ANONYMOUS' => 'N',
  'NAME' => 'Контент менеджеры',
  'DESCRIPTION' => '',
  'SECURITY_POLICY' => 
  array (
  ),
));
    }

}
