<?php

namespace Shone\Module\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Dbmodel extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('testtable', 'id');
    }
}
