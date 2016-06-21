<?php
namespace Juciy\Geoip\Model\ResourceModel\geoip;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Juicy\Geoip\Model\geoip', 'Juicy\Geoip\Model\ResourceModel\Geoip');
    }
}