<?php
/**
 * Created by PhpStorm.
 * User: sandor
 * Date: 23/08/16
 * Time: 16:24
 */

namespace Czettner\Savelogger\Observer;


use Magento\Framework\Event\Observer;

class Products implements \Magento\Framework\Event\ObserverInterface
{
    /** @var \Magento\Framework\Logger\Monolog */
    protected $_logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_logger = $logger;
    }


    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->_logger->debug('Product has been saved');
    }
}