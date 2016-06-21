<?php

namespace Juicy\Geoip\Model;

use Magento\Framework\Exception\LocalizedException as CoreException;

class Affiliate extends \Magento\Framework\Model\AbstractModel
{

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Juicy\geoip\Model\ResourceModel\geoip');
    }
}