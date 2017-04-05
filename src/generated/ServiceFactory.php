<?php

namespace SamIT\TransIP;

class ServiceFactory
{

    public function __construct($defaultOptions = [])
    {
        $this->defaultOptions = $defaultOptions;
    }

    /**
     * @param array $options The options for the SoapClient
     * @return ColocationService A SoapClient instance for the ColocationService
     */
    public function getColocationService(array $options = [])
    {
        return new ColocationService(array_merge($this->defaultOptions, $options));
    }

    /**
     * @param array $options The options for the SoapClient
     * @return DomainService A SoapClient instance for the DomainService
     */
    public function getDomainService(array $options = [])
    {
        return new DomainService(array_merge($this->defaultOptions, $options));
    }

    /**
     * @param array $options The options for the SoapClient
     * @return ForwardService A SoapClient instance for the ForwardService
     */
    public function getForwardService(array $options = [])
    {
        return new ForwardService(array_merge($this->defaultOptions, $options));
    }

    /**
     * @param array $options The options for the SoapClient
     * @return HaipService A SoapClient instance for the HaipService
     */
    public function getHaipService(array $options = [])
    {
        return new HaipService(array_merge($this->defaultOptions, $options));
    }

    /**
     * @param array $options The options for the SoapClient
     * @return VpsService A SoapClient instance for the VpsService
     */
    public function getVpsService(array $options = [])
    {
        return new VpsService(array_merge($this->defaultOptions, $options));
    }

    /**
     * @param array $options The options for the SoapClient
     * @return WebhostingService A SoapClient instance for the WebhostingService
     */
    public function getWebhostingService(array $options = [])
    {
        return new WebhostingService(array_merge($this->defaultOptions, $options));
    }

}
