<?php
namespace  Juicy\Geoip\Model\ResourceModel;

class Affiliate extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Geoip', 'geoip_id');
    }
}