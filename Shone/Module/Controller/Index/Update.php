<?php

namespace Shone\Module\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Update extends Action

{
    protected $_DbmodelFactory;
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory, \Shone\Module\Model\DbmodelFactory $DbmodelFactory )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->_DbmodelFactory = $DbmodelFactory;
    }

    // public function execute()
    // {
    //     //return $this->resultPageFactory->create();


    //     if ($this->getRequest()->isPost()) {
    //         $input = $this->getRequest()->getPostValue();
    //         $postData = $this->_DbmodelFactory->create();

    //         $postData->setData($input)->save();
    //         $this->messageManager->addSuccessMessage("Data updated successfully!");
    //         return $this->_redirect('night/index/show');
    //     }
    //     //echo "<h1> saved page </h1>";
    // }
    


//     public function execute()
// {
//     if ($this->getRequest()->isPost()) {
//         $input = $this->getRequest()->getPostValue();
//         $id = $this->getRequest()->getParam('id');
//         $postData = $this->_DbmodelFactory->create();
        
//         $postData->load($id);
//         $postData->setData($input)->save();
        
//         $this->messageManager->addSuccessMessage("Data updated successfully!");
//         return $this->_redirect('night/index/show');
//     }
// }


public function execute()
{
    if ($this->getRequest()->isPost()) {
        $input = $this->getRequest()->getPostValue(); // get data from the post method form  
        $id = $this->getRequest()->getParam('id'); // get id from url 
        //$id = $input['id']; 
        $postData = $this->_DbmodelFactory->create()->load($id); // using model loading the exiting record by id
        $postData->addData($input)->save(); // save data 
        $this->messageManager->addSuccessMessage("Data updated successfully!");
        return $this->_redirect('night/index/show');
    }
}



}