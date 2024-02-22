<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace IriksIT\WhereAmI\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Backend\Model\Auth\Session;
use Magento\Store\Model\ScopeInterface;

class Environment extends AbstractHelper
{

    /**
     * @var Session
     */
    protected $authSession;

    /**
     * Settings constructor.
     * @param Session|null $authSession
     * @param Context $context
     */
    public function __construct(
        Session  $authSession = null,
        Context  $context
    )
    {
        $this->authSession = $authSession ?: null;
        parent::__construct($context);
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function IsEnabled($storeId = null)
    {
        return $this->scopeConfig->getValue(
            'iriksit_whereami/general/enabled', ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function WhatEnvironment($storeId = null)
    {
        return $this->scopeConfig->getValue(
            'iriksit_whereami/general/environment', ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param $storeId
     * @return mixed|string
     */
    public function GetCustomLabel($storeId = null){
        $environment = $this->scopeConfig->getValue(
            'iriksit_whereami/general/environment', ScopeInterface::SCOPE_STORE, $storeId
        );
        if($environment == 5){
            return $this->scopeConfig->getValue(
                'iriksit_whereami/general/custom_label', ScopeInterface::SCOPE_STORE, $storeId
            );
        }
        return '';
    }
}

