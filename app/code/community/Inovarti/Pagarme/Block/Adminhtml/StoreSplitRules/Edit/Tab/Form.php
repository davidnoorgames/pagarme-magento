<?php

class Inovarti_Pagarme_Block_Adminhtml_StoreSplitRules_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $formData = Mage::registry('storeSplitRules_data');

        $stores = $this->getStores();
        array_unshift($stores, array('' => 'Select'));

        $recipients = $this->getRecipients();
        array_unshift($recipients, array('' => 'Select'));

        $form = new Varien_Data_Form();
        $this->setForm($form);

        $fieldset = $form->addFieldset('ww_form', array('legend' => Mage::helper('pagarme')->__('Worldwine')));

        $fieldset->addField('split_rules_0_entity_id', 'hidden', array(
            'name'     => 'split_rules[0][entity_id]',
            'value'    => $formData['split_rules'][0]['entity_id']
        ));

        $fieldset->addField('split_rules_0_recipient_id', 'hidden', array(
            'name'     => 'split_rules[0][recipient_id]',
            'value'    => 'asdfasdfasdfasdfasdfsdafasd'
        ));

        $fieldset->addField('split_rules_0_charge_processing_fee', 'select', array(
            'label'   => Mage::helper('pagarme')->__('Charge Processing Fee'),
            'name'    => 'split_rules[0][charge_processing_fee]',
            'class'   => 'required-entry',
            'options' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'value'   => $formData['split_rules'][0]['charge_processing_fee'],
            'required' => true
        ));

        $fieldset->addField('split_rules_0_liable', 'select', array(
            'label'   => Mage::helper('pagarme')->__('Liable'),
            'name'    => 'split_rules[0][liable]',
            'class'   => 'required-entry',
            'options' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'value'   => $formData['split_rules'][0]['liable'],
            'required' => true
        ));

        $fieldset->addField('split_rules_0_amount', 'text', array(
            'label'   => Mage::helper('pagarme')->__('Amount (%)'),
            'name'    => 'split_rules[0][amount]',
            'class'   => 'required-entry',
            'value'   => $formData['split_rules'][0]['amount'],
            'required' => true
        ));

        $fieldset = $form->addFieldset('bbm_form', array('legend' => Mage::helper('pagarme')->__('BBM')));

        $fieldset->addField('split_rules_1_entity_id', 'hidden', array(
            'name'     => 'split_rules[1][entity_id]',
            'value'    => $formData['split_rules'][1]['entity_id']
        ));

        $fieldset->addField('split_rules_1_recipient_id', 'hidden', array(
            'name'     => 'split_rules[1][recipient_id]',
            'value'    => '2asdfasdfasdfasdfasdfsdafasd'
        ));

        $fieldset->addField('split_rules_1_charge_processing_fee', 'select', array(
            'label'   => Mage::helper('pagarme')->__('Charge Processing Fee'),
            'name'    => 'split_rules[1][charge_processing_fee]',
            'class'   => 'required-entry',
            'options' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'value'   => $formData['split_rules'][1]['charge_processing_fee'],
            'required' => true
        ));

        $fieldset->addField('split_rules_1_liable', 'select', array(
            'label'   => Mage::helper('pagarme')->__('Liable'),
            'name'    => 'split_rules[1][liable]',
            'class'   => 'required-entry',
            'options' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'value'   => $formData['split_rules'][1]['liable'],
            'required' => true
        ));

        $fieldset->addField('split_rules_1_amount', 'text', array(
            'label'   => Mage::helper('pagarme')->__('Amount (%)'),
            'name'    => 'split_rules[1][amount]',
            'class'   => 'required-entry',
            'value'   => $formData['split_rules'][1]['amount'],
            'required' => true
        ));

        $fieldset = $form->addFieldset('store_form', array('legend' => Mage::helper('pagarme')->__('Store')));

        $fieldset->addField('split_rules_2_entity_id', 'hidden', array(
            'name'     => 'split_rules[2][entity_id]',
            'value'    => $formData['split_rules'][2]['entity_id']
        ));

        $fieldset->addField('store_id', 'select', array(
            'label'    => Mage::helper('pagarme')->__('Loja'),
            'name'     => 'store_id',
            'class'    => 'required-entry',
            'options'  => $stores,
            'value'   => $formData['store_id'],
            'required' => true
        ));

        $fieldset->addField('split_rules_2_recipient_id', 'select', array(
            'label'    => Mage::helper('pagarme')->__('Recipient'),
            'name'     => 'split_rules[2][recipient_id]',
            'class'    => 'required-entry',
            'options'  => $recipients,
            'value'   => $formData['split_rules'][2]['recipient_id'],
            'required' => true
        ));

        $fieldset->addField('split_rules_2_charge_processing_fee', 'select', array(
            'label'   => Mage::helper('pagarme')->__('Charge Processing Fee'),
            'name'    => 'split_rules[2][charge_processing_fee]',
            'class'   => 'required-entry',
            'options' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'value'   => $formData['split_rules'][2]['charge_processing_fee'],
            'required' => true
        ));

        $fieldset->addField('split_rules_2_liable', 'select', array(
            'label'   => Mage::helper('pagarme')->__('Liable'),
            'name'    => 'split_rules[2][liable]',
            'class'   => 'required-entry',
            'value'   => $formData['split_rules'][2]['liable'],
            'options' => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'required' => true
        ));

        $fieldset->addField('split_rules_2_amount', 'text', array(
            'label'   => Mage::helper('pagarme')->__('Amount (%)'),
            'name'    => 'split_rules[2][amount]',
            'class'   => 'required-entry',
            'value'   => $formData['split_rules'][2]['amount'],
            'required' => true
        ));

        if (Mage::getSingleton("adminhtml/session")->getSplitRulesGroupData()) {
            $form->setValues(Mage::getSingleton("adminhtml/session")->getSplitRulesGroupData());
            Mage::getSingleton("adminhtml/session")->setSplitRulesGroupData(null);
        }

        $this->getStores();

        return parent::_prepareForm();
    }

    private function getRecipients()
    {
        $recipients = array();

        foreach (PagarMe_Recipient::all() as $recipient) {
            $recipients[$recipient->getId()] = $recipient->getBankAccount()->getLegalName();
        }

        return $recipients;
    }

    private function getStores()
    {
        $stores = array();
        foreach(Mage::app()->getStores() as $store)
        {
            $stores[$store->getId()] = $store->getName();
        }

        return $stores;
    }
}
