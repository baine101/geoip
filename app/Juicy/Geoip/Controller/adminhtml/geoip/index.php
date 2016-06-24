<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Juciy\Geoip\Controller\Adminhtml\Geoip;
use Magento\Framework\Controller\ResultFactory;
class Index extends \Juicy\Geoip\Controller\Adminhtml\Geoip
{
    public function executeInternal()
    {
        $resultPage = $this->_initAction();
        $resultPage->getConfig()->getTitle()->prepend(__('QTV'));
        return $resultPage;
    }
}