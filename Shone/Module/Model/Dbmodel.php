<?php
namespace Shone\Module\Model;

use Magento\Framework\Model\AbstractModel;
use Shone\Module\Model\ResourceModel\Dbmodel as dbmodelResourceModel;

class Dbmodel extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(dbmodelResourceModel::class);
    }
}