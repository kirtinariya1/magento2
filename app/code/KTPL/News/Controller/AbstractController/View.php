<?php
namespace KTPL\News\Controller\AbstractController;

use Magento\Framework\App\Action;
use Magento\Framework\View\Result\PageFactory;

abstract class View extends Action\Action
{
    /**
     * @var \KTPL\News\Controller\AbstractController\NewsLoaderInterface
     */
    protected $newsLoader;

	/**
     * @var PageFactory
     */
    protected $resultPageFactory;
	
    /**
     * @param Action\Context $context
     * @param OrderLoaderInterface $orderLoader
	 * @param PageFactory $resultPageFactory
     */
    public function __construct(Action\Context $context, NewsLoaderInterface $newsLoader, PageFactory $resultPageFactory)
    {
        $this->newsLoader = $newsLoader;
		$this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * News view page
     *
     * @return void
     */
    public function execute()
    {
        if (!$this->newsLoader->load($this->_request, $this->_response)) {
            return;
        }

        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
		return $resultPage;
    }
}
