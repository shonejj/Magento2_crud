<?php

namespace Shone\Module\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Save extends Action

{
    protected $_DbmodelFactory;
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory, \Shone\Module\Model\DbmodelFactory $DbmodelFactory )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->_DbmodelFactory = $DbmodelFactory;
    }

    public function execute()
    {
        //return $this->resultPageFactory->create();


        if ($this->getRequest()->isPost()) {
            $input = $this->getRequest()->getPostValue();
            $postData = $this->_DbmodelFactory->create();

            $postData->setData($input)->save();
            $this->messageManager->addSuccessMessage("Data added successfully!");
            return $this->_redirect('night/index/index');
        }
        //echo "<h1> saved page </h1>";
    }
    
}