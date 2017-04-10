<?php

namespace SamIT\TransIP;

class ServiceFactory extends BaseFactory
{

    /**
     * @param array $options The options for the SoapClient
     * @return ColocationService A SoapClient instance for the ColocationService
     */
    public function getColocationService(array $options = [])
    {
        return $this->constructService(ColocationService::class, $options);
    }

    /**
     * @param array $options The options for the SoapClient
     * @return DomainService A SoapClient instance for the DomainService
     */
    public function getDomainService(array $options = [])
    {
        return $this->constructService(DomainService::class, $options);
    }

    /**
     * @param array $options The options for the SoapClient
     * @return ForwardService A SoapClient instance for the ForwardService
     */
    public function getForwardService(array $options = [])
    {
        return $this->constructService(ForwardService::class, $options);
    }

    /**
     * @param array $options The options for the SoapClient
     * @return HaipService A SoapClient instance for the HaipService
     */
    public function getHaipService(array $options = [])
    {
        return $this->constructService(HaipService::class, $options);
    }

    /**
     * @param array $options The options for the SoapClient
     * @return VpsService A SoapClient instance for the VpsService
     */
    public function getVpsService(array $options = [])
    {
        return $this->constructService(VpsService::class, $options);
    }

    /**
     * @param array $options The options for the SoapClient
     * @return WebhostingService A SoapClient instance for the WebhostingService
     */
    public function getWebhostingService(array $options = [])
    {
        return $this->constructService(WebhostingService::class, $options);
    }

}
