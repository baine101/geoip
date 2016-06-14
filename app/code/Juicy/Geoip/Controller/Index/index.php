<?php
/**
 * Created by PhpStorm.
 * User: baine101
 * Date: 14/06/16
 * Time: 00:10
 */
namespace Juicy\Geoip\Controller\Index;

class index extends \Magento\Framework\App\Action\Action
{
    /**
     *
     * @var \Magento\Framework\View\Resutlt\PageFactory
     *
     */
    protected $resultPageFactory;

    /**
     * indexC constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactopry
     *
     */
    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $pageFactory;
    }

    public function execute()
    {
        $result = $this->resultPageFactory->create();
        return $result;
    }

}