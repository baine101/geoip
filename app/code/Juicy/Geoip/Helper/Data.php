<?php

namespace Juicy\Geoip\Helper;

use  Juicy\Geoip\Model\Config\Source;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_origin;
    protected $_source;
    protected $_URL;

    public function getConfig($reg)
    {
        return $this->scopeConfig->getValue('Source');
    }


}