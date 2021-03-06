<?php
namespace Magento\Framework\HTTP\PhpEnvironment\Response;

/**
 * Interceptor class for @see \Magento\Framework\HTTP\PhpEnvironment\Response
 */
class Interceptor extends \Magento\Framework\HTTP\PhpEnvironment\Response implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function sendContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendContent');
        if (!$pluginInfo) {
            return parent::sendContent();
        } else {
            return $this->___callPlugins('sendContent', func_get_args(), $pluginInfo);
        }
    }
}
