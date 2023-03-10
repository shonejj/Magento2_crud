<?php

namespace Shone\Module\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;

class Index extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}