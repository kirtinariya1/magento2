<?php
namespace KTPL\News\Controller\AbstractController;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;

interface NewsLoaderInterface
{
    /**
     * Load order
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return \KTPL\News\Model\News
     */
    public function load(RequestInterface $request, ResponseInterface $response);
}
