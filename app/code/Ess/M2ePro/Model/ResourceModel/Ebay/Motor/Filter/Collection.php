<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model\ResourceModel\Ebay\Motor\Filter;

/**
 * Class Collection
 * @package Ess\M2ePro\Model\ResourceModel\Ebay\Motor\Filter
 */
class Collection extends \Ess\M2ePro\Model\ResourceModel\ActiveRecord\Collection\AbstractModel
{
    //########################################

    public function _construct()
    {
        parent::_construct();
        $this->_init(
            'Ess\M2ePro\Model\Ebay\Motor\Filter',
            'Ess\M2ePro\Model\ResourceModel\Ebay\Motor\Filter'
        );
    }

    //########################################
}
