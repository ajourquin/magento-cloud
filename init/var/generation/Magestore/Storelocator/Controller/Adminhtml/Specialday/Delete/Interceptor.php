<?php
namespace Magestore\Storelocator\Controller\Adminhtml\Specialday\Delete;

/**
 * Interceptor class for @see \Magestore\Storelocator\Controller\Adminhtml\Specialday\Delete
 */
class Interceptor extends \Magestore\Storelocator\Controller\Adminhtml\Specialday\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Escaper $escaper, \Magento\Ui\Component\MassAction\Filter $massActionFilter, \Magento\Framework\Registry $coreRegistry, \Magestore\Storelocator\Helper\Image $imageHelper, \Magento\Backend\Helper\Js $backendHelperJs, $mainModelName = null, $mainCollectionName = null)
    {
        $this->___init();
        parent::__construct($context, $escaper, $massActionFilter, $coreRegistry, $imageHelper, $backendHelperJs, $mainModelName, $mainCollectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
