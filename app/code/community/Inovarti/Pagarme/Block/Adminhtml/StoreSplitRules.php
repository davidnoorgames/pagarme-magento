<?php

class Inovarti_Pagarme_Block_Adminhtml_StoreSplitRules
    extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Inovarti_Pagarme_Block_Adminhtml_Banks constructor.
     */
    public function __construct()
    {
        $this->_controller = "adminhtml_storeSplitRules";
        $this->_blockGroup = "pagarme";
        $this->_headerText = Mage::helper("pagarme")->__("Store Split Rules");
        $this->_addButtonLabel = Mage::helper("pagarme")->__("Add New split rule");

        parent::__construct();
    }
}
