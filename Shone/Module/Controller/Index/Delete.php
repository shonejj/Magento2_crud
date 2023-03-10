<?php

namespace Shone\Module\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Delete extends Action
{
    protected $_DbmodelFactory;
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory, \Shone\Module\Model\DbmodelFactory $DbmodelFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->_DbmodelFactory = $DbmodelFactory;
    }


    public function execute()
    {
        $id = $this->getRequest()->getParam('id'); // get id from url 
        $postData = $this->_DbmodelFactory->create()->load($id); // using model loading the exiting record by id
        $postData->delete(); // delete data 
        $this->messageManager->addSuccessMessage("Data deleted successfully!");
        return $this->_redirect('night/index/show');

    }

}