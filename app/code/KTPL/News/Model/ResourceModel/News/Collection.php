<?php
/**
 * News Resource Collection
 */
namespace KTPL\News\Model\ResourceModel\News;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('KTPL\News\Model\News', 'KTPL\News\Model\ResourceModel\News');
    }
}
