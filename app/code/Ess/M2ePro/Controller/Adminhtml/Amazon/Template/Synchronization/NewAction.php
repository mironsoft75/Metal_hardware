<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Amazon\Template\Synchronization;

use Ess\M2ePro\Controller\Adminhtml\Amazon\Template;

/**
 * Class NewAction
 * @package Ess\M2ePro\Controller\Adminhtml\Amazon\Template\Synchronization
 */
class NewAction extends Template
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
