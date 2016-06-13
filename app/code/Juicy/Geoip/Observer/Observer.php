<?php

namespace Juicy\Geoip\Observer;


class Observer
{
    protected $_geoipData;
    protected $_registry = null;

    public function __construct(\Juicy\Geoip\Helper\Data $geoipData, \Magento\Framework\Registry $registry
    )
    {
        $this->_geoipData = $geoipData;
        $this->_registry = $registry;
    }

    public function geoipStart(\Magento\Framework\Event\Observer $observer)
    {


    }


}