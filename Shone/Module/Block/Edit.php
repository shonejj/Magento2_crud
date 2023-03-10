<?php

namespace Shone\Module\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;

class Edit extends Template
{
    public function __construct(Context $context, array $data = [], \Shone\Module\Model\DbmodelFactory $DbmodelFactory)
    {
        parent::__construct($context, $data);
        $this->_DbmodelFactory = $DbmodelFactory;
    }

    public function getCustomerCollection() { 

        // return $this->resultPageFactory->create();
         return $this->_DbmodelFactory->create()->getCollection();
}
public function getFormData()
{
    $id = $this->getRequest()->getParam('id');
    $postData = $this->_DbmodelFactory->create()->load($id);
    return $postData->getData();
}

public function getFormAction()
{
    return $this->getUrl('night/index/update');
}
}
