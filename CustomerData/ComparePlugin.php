<?php
namespace Binstellar\Compare\CustomerData;
use Magento\Customer\CustomerData\SectionSourceInterface;

class ComparePlugin extends \Magento\Catalog\CustomerData\CompareProducts implements SectionSourceInterface
{
	/**
     * @var \Magento\Catalog\Helper\Product\Compare
     */
    protected $helper;

    public function __construct(
        \Magento\Catalog\Helper\Product\Compare $helper
    ) {
        $this->helper = $helper;
    }

	public function afterGetSectionData(\Magento\Catalog\CustomerData\CompareProducts $subject, $result)
    {
    	
    	$count = $subject->helper->getItemCount();
        return [
            'count' => $count,
            'countCaption' => $count == 1 ? __('1') : __('%1', $count),
            'listUrl' => $subject->helper->getListUrl(),
            'items' => $count ? $subject->getItems() : [],
        ];
    }


}