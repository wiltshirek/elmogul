<?php
class EM_SlideshowWidget_Block_Chooser extends Mage_Adminhtml_Block_Template
{
    public function prepareElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $uniqId = Mage::helper('core')->uniqHash($element->getId());
        $sourceUrl = $this->getBaseUrl().'slideshowwidget/admin_chooser/chooser/uniq_id/'.$uniqId.'/use_massaction/false';
        $chooser = $this->getLayout()->createBlock('slideshowwidget/widget')
            ->setElement($element)
            ->setTranslationHelper($this->getTranslationHelper())
            ->setConfig($this->getConfig())
            ->setFieldsetId($this->getFieldsetId())
            ->setSourceUrl($sourceUrl)
            ->setUniqId($uniqId);
        $element->setData('after_element_html', $chooser->toHtml());
        return $element;
    }
    
  
}
?>