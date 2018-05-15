<?php
class Vijay_Pricecountdown_Helper_Data extends Mage_Core_Helper_Abstract {

    const XML_PATH_ENABLED = 'vijay_pricecountdown/configurations/enabled';
    const XML_PATH_SHOW_PLP = 'vijay_pricecountdown/configurations/show_plp';
    const XML_PATH_SHOW_PLP_TITLE = 'vijay_pricecountdown/configurations/show_plp_title';
    const XML_PATH_PLP_TITLE = 'vijay_pricecountdown/configurations/plp_title';
    const XML_PATH_CLOCK_STYLE_PLP = 'vijay_pricecountdown/configurations/clock_style_plp';
    const XML_PATH_SHOW_PDP = 'vijay_pricecountdown/configurations/show_pdp';
    const XML_PATH_SHOW_PDP_TITLE = 'vijay_pricecountdown/configurations/show_pdp_title';
    const XML_PATH_PDP_TITLE = 'vijay_pricecountdown/configurations/pdp_title';
    const XML_PATH_CLOCK_STYLE_PDP = 'vijay_pricecountdown/configurations/clock_style_pdp';

    public function getStatus() {
    	$isConfigEnabled = Mage::getStoreConfigFlag(self::XML_PATH_ENABLED, Mage::app()->getStore());
        $isModuleEnabled = $this->isModuleEnabled();
        $isModuleOutputEnabled = $this->isModuleOutputEnabled();
        return $isConfigEnabled && $isModuleEnabled && $isModuleOutputEnabled;
    }

    public function getProductListPageStatus() {
    	return Mage::getStoreConfigFlag(self::XML_PATH_SHOW_PLP,Mage::app()->getStore());
    }

    public function getPlpTitle() {
        if(Mage::getStoreConfigFlag(self::XML_PATH_SHOW_PLP_TITLE,Mage::app()->getStore())) {
            return Mage::getStoreConfig(self::XML_PATH_PLP_TITLE);
        }
        return false;
    }

    public function getProductListPageClockStyle() {
        return (int) Mage::getStoreConfig(self::XML_PATH_CLOCK_STYLE_PLP);
    }

    public function getProductViewPageStatus() {
        return Mage::getStoreConfigFlag(self::XML_PATH_SHOW_PDP,Mage::app()->getStore());
    }

    public function getPdpTitle() {
        if(Mage::getStoreConfigFlag(self::XML_PATH_SHOW_PDP_TITLE,Mage::app()->getStore())) {
            return Mage::getStoreConfig(self::XML_PATH_PDP_TITLE);
        }
        return false;
    }

    public function getProductViewPageClockStyle() {
    	return (int) Mage::getStoreConfig(self::XML_PATH_CLOCK_STYLE_PDP);
    }

    public function validatePriceCountDown($fromdate, $todate, $specialPrice){

    	$currentDate = Mage::getModel('core/date')->date('Y-m-d h:i:s A');
    	if($specialPrice != 0 || $specialPrice) {
    		if($todate != null) {
    			if(strtotime($todate) >= strtotime($currentDate) && strtotime($fromdate) <= strtotime($currentDate)){
    				return true;
    			}
    		}
    	}
    	return false;
    	
    }
}
