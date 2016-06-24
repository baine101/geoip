<?php

namespace Juicy\Geoip\Block\Adminhtml;

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);


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

            /**
             * render the OriginGroup block
             *
             * @var Juicy\Geoip\Block\Adminhtml\Form\Field\OriginGroup
             *
             */

            $this->_groupRenderer = $this->getLayout()->createBlock(
                'Juicy\Geoip\Block\Adminhtml\Form\Field\OriginGroup',
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );

        }
        return $this->_groupRenderer;
    }

    protected function _getStoreRenderer()
    {
        if (!$this->_groupRenderer) {

            /**
             * render the OriginGroup block
             *
             * @var Juicy\Geoip\Block\Adminhtml\Form\Field\StoreGroup
             *
             */

            $this->_groupRenderer = $this->getLayout()->createBlock(
                'Juicy\Geoip\Block\Adminhtml\Form\Field\StoreGroup',
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );

        }
        return $this->_groupRenderer;
    }

    protected function _getCurrencyRenderer()
    {
        if (!$this->_groupRenderer) {

            /**
             * render the OriginGroup block
             *
             * @var Juicy\Geoip\Block\Adminhtml\Form\Field\CurrencyGroup
             *
             */

            $this->_groupRenderer = $this->getLayout()->createBlock(
                'Juicy\Geoip\Block\Adminhtml\Form\Field\CurrencyGroup',
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );

        }
        return $this->_groupRenderer;
    }



    protected function _prepareToRender()
    {
              $this->addColumn(
            'country',
            [
                'label'     => __('Country'),
                'renderer'     =>  $this->_getOriginRenderer()
            ]
        );

        $this->addColumn(
            'store',
            [
                'label'     => __('Store'),
                'renderer' => $this->_getStoreRenderer()
            ]
        );

        $this->addColumn(
            'currency',
            [
                'label'     => __('Currency'),
                'renderer'  => $this->_getCurrencyRenderer()
            ]
        );
        $this->_addAfter = true;

        //@TODO make add new line button

    }


    protected function _countryArray()
    {

        //@TODO render  the source for the dropdowns

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