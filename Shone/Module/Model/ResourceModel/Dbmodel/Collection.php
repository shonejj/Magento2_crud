<?php
namespace Shone\Module\Model\ResourceModel\Dbmodel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Shone\Module\Model\Dbmodel as DbmodelModel;
use Shone\Module\Model\ResourceModel\Dbmodel as DbmodelResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(DbmodelModel::class, DbmodelResourceModel::class);
    }
}
