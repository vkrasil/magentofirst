<?php

namespace Krasil\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    private const TABLE_NAME = 'krasil_blog_post';
    private const PRIMARY_KEY = 'post_id';

    /**
     * @inheirtDoc
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }
}
