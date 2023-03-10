<?php

namespace Shone\Module\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;

class Show extends Template
{
    public function __construct(Context $context, array $data = [], \Shone\Module\Model\DbmodelFactory $DbmodelFactory)
    {
        parent::__construct($context, $data);
        $this->_DbmodelFactory = $DbmodelFactory;
    }

    public function getCustomerCollection() { 

        return $this->_DbmodelFactory->create()->getCollection();
}
}