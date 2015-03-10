<?php
class Luckycycle_Snippetsdk_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("LuckyCycle"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("luckycycle", array(
                "label" => $this->__("LuckyCycle"),
                "title" => $this->__("LuckyCycle")
		   ));

      $this->renderLayout(); 
	  
    }
}