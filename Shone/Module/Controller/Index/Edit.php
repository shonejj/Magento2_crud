<?php

namespace Shone\Module\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Edit extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
         return $this->resultPageFactory->create();
        return $this->_DbmodelFactory->create()->getCollection();
        //  echo "<h1> this worked congracts </h1>";
    }
    
}
