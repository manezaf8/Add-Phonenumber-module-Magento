<?php

/**
 * Copyright © maneza f8 All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Maneza\Phonenumber\Helper;
use Magento\Framework\App\Helper\Context;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Helper that gets a custom attribute
 */
class Data extends AbstractHelper
{
    /**
     * Magento\Customer\Api\CustomerRepositoryInterface;
     *
     * @var CustomerRepositoryInterface
     */
    protected $customerRepository;

    /**
     * Constructor 
     *
     * @param Context $context
     * @param CustomerRepositoryInterface $customerRepository
     * @param CustomerSession $customerSession
     */
    public function __construct(
        Context $context,
        CustomerRepositoryInterface $customerRepository,
        CustomerSession $customerSession
        )
    {
        $this->customerRepository = $customerRepository;
        $this->customerSession = $customerSession;
        parent::__construct($context);
    }

    /**
     * Get Contact number to pass it in the .phtml files
     *
     * @return String
     */
    public function getContactNumber()
    {
        $customerId  = $this->customerSession->getCustomer()->getId();
        $customer = $this->customerRepository->getById($customerId);
        return $customer->getCustomAttribute('contact_number')->getValue();
    }
}