<?php

namespace Krasil\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Krasil\Blog\Model\ResourceModel\Post as PostResource;

class Post extends AbstractModel
{
    /**
     * @inheirtDoc
     */
    protected function _construct()
    {
        $this->_init(PostResource::class);
    }
}
