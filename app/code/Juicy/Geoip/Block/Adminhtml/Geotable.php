<?php

namespace Juicy\Geoip\Block\Adminhtml;

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

use \Juicy\Geoip\Model\Config\Source\origin;
use \Juicy\Geoip\Model\Config\Source\store;
class Geotable extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray
{

    protected  $_colNames;
    protected $_elementFactory;
    protected $_groupRenderer;


    public function __construct(\Magento\Backend\Block\Template\Context $context ,\Magento\Store\Model\ResourceModel\Store\Collection $collectionFactory, \Magento\Framework\Data\Form\Element\Factory $elementFactory  ,array $data = [])
    {
        parent::__construct($context, $data);
        $this->_elementFactory = $elementFactory;

    }

    protected function _getOriginRenderer()
    {

        if (!$this->_groupRenderer) {
        $this->_groupRenderer = $this->getLayout()->getBlock('Juicy\Geoip\Block\Adminhtml\Form\Field');
        //$html = $this->_groupRenderer->toHtml();
        }

      var_dump($this->_groupRenderer);

        //return $html;
    }

    protected function _prepareToRender()
    {
              $this->addColumn(
            'country',
            [
                'label'     => __('Country'),
                'type'      => 'select',
                'renderer'     =>  $this->_getOriginRenderer()
            ]
        );

        $this->addColumn(
            'store',
            [
                'label'     => __('Store'),
                'type'      => 'select',
                'renderer' => $this->_storeArray()
            ]
        );

        $this->addColumn(
            'currency',
            [
                'label'     => __('Currency'),
                'renderer'  => $this->_currencyArray(),
            ]
        );
        $this->_addAfter = false;

        //@TODO make add new line button

    }

    protected function _countryArray()
    {

       /* $this->_toHtml()
        $originDS = new origin();*/

        //@TODO render  the source for the dropdowns
/*
        return $originDS->toOptionArray();*/
    }

    protected function _storeArray()
    {

        //@TODO render  the source for the dropdowns

        return "store";
    }

    protected function _currencyArray()
    {
        //@TODO render  the source for the dropdowns

        return "currency";
    }
}