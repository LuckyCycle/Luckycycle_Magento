<?php
class Luckycycle_Snippetsdk_Model_Luckycycle extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        $this->_init('snippetsdk/luckycycle');
        parent::_construct();
    }
}