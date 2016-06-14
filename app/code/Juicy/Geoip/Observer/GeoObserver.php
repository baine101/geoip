<?php

namespace Juicy\Geoip\Observer;


use Magento\Framework\Event\ObserverInterface;
use Magento\TestFramework\Event\Magento;
use Juicy\Geoip\Controller\Index\index as index;

class GeoObserver implements ObserverInterface
{
    protected $_objectManager;


    public function __construct(\Juicy\Geoip\Helper\Data $geoipData, \Magento\Framework\Registry $registry
    )
    {
        $this->_geoipData = $geoipData;
        $this->_registry = $registry;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // TODO: Implement execute() method.

    }

}

