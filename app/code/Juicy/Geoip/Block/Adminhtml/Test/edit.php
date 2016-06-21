<?php

namespace Juicy\Geoip\Block\Adminhtml\Test;

/**
 * geoip item edit form container
 */
class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'test_id';
        $this->_blockGroup = 'Geoip_Test';
        $this->_controller = 'adminhtml_test';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save Item'));
        $this->buttonList->update('delete', 'label', __('Delete Item'));

        $this->buttonList->add(
            'saveandcontinue',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'saveAndContinueEdit', 'target' => '#edit_form']],
                ]
            ],
            -100
        );

    }

    /**
     * Get edit form container header text
     *
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {
        if ($this->_coreRegistry->registry('test_item')->getId()) {
            return __("Edit Block '%1'", $this->escapeHtml($this->_coreRegistry->registry('test_item')->getName()));
        } else {
            return __('New Item');
        }
    }
}