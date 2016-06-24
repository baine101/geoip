<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Juicy\Geoip\Block\Adminhtml\Form\Field;

use Juicy\Geoip\Model\Config\Source\StoreSelect;
/**
 * Backend system config array field renderer
 */
class StoreGroup extends \Magento\Framework\View\Element\Html\Select
{

    protected $_StoreSelect;
    /**
     * @var \Magento\Framework\Data\Form\Element\Factory
     */
    protected $_elementFactory;

    /**
     * @var \Magento\Framework\View\Design\Theme\LabelFactory
     */
    protected $_labelFactory;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Data\Form\Element\Factory $elementFactory
     * @param \Magento\Framework\View\Design\Theme\LabelFactory $labelFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Data\Form\Element\Factory $elementFactory,
        \Magento\Framework\View\Design\Theme\LabelFactory $labelFactory,
        array $data = []
    ) {
        $this->_elementFactory = $elementFactory;
        $this->_labelFactory = $labelFactory;
        parent::__construct($context, $data);

    }
    /**
     * Render block HTML
     *
     * @return string
     */
    public function _toHtml()
    {
        $this->_StoreSelect = new StoreSelect();
        $array = $this->_StoreSelect->toOptionArray();


        //loop trough array making an option for each value
        foreach($array as $groupId => $groupLabel) {
            $this->addOption($groupId, addslashes($groupLabel['value']));
        }
        return parent::_toHtml();
    }



}