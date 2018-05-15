<?php
class Vijay_Pricecountdown_Model_Style
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('Style - 1')),
            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('Style - 2')),
            array('value' => 3, 'label' => Mage::helper('adminhtml')->__('Style - 3')),
            array('value' => 4, 'label' => Mage::helper('adminhtml')->__('Style - 4'))
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            1 => Mage::helper('adminhtml')->__('Style - 1'),
            2 => Mage::helper('adminhtml')->__('Style - 2'),
            3 => Mage::helper('adminhtml')->__('Style - 3'),
            4 => Mage::helper('adminhtml')->__('Style - 4')
        );
    }

}
