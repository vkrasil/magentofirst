<?php

namespace Krasil\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Krasil\Blog\Model\Post;
use Krasil\Blog\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       $this->_init(Post::class,PostResource::class);
    }
}
