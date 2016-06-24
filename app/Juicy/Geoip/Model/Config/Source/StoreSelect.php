<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 17/06/2016
 * Time: 13:58
 */
namespace Juicy\Geoip\Model\Config\Source;

class StoreSelect implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var array
     */
    protected $_options;
    protected $_storesFactory;
    /**
     * @var \Magento\Store\Model\ResourceModel\Store\CollectionFactory
     *
     */
    public function __construct(\Magento\Store\Model\ResourceModel\Store\CollectionFactory $storesFactory)
    {
        $this->_storesFactory = $storesFactory;
        $this->toOptionArray();
    }
    /**
     * @return array
     */
    public function toOptionArray()
    {
        // TODO: Implement toOptionArray() method.

       if(!$this->_options){
           /** @var $stores \Magento\Store\Model\ResourceModel\Store\Collection */
           $stores = $this->_storesFactory->create();
           $this->_options = $stores->load()->toOptionArray();
       }

        return $this->_options;
    }

}