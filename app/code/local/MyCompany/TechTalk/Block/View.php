<?php
class MyCompany_TechTalk_Block_View extends Mage_Core_Block_Template
{
    public function getRequestedRecord()
    {
        return Mage::getModel('techtalk/contact')->load(1);
    }
}