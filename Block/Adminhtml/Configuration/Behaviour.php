<?php
namespace Tagalys\Sync\Block\Adminhtml\Configuration;
use Magento\Backend\Block\Template;

class Behaviour extends Template
{

    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Backend\Model\UrlInterface $urlInterface,
        \Magento\Framework\Url $fronUrlHelper,
        array $data = []
    ) {
        $this->urlInterface = $urlInterface;
        $this->fronUrlHelper = $fronUrlHelper;
        parent::__construct($context, $data);
    }

    public function syncManuallyUrl()
    {
        return $this->urlInterface->getUrl('/sync/now');
    }

    public function syncStatusUrl()
    {
        return $this->urlInterface->getUrl('/sync/status');
    }
    public function test()
    {
        return $this->fronUrlHelper->getUrl('tagalys/syncfiles/callback/');
    }

}