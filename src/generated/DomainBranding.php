<?php

namespace SamIT\TransIP;

class DomainBranding
{

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $supportEmail
     */
    protected $supportEmail = null;

    /**
     * @var string $companyUrl
     */
    protected $companyUrl = null;

    /**
     * @var string $termsOfUsageUrl
     */
    protected $termsOfUsageUrl = null;

    /**
     * @var string $bannerLine1
     */
    protected $bannerLine1 = null;

    /**
     * @var string $bannerLine2
     */
    protected $bannerLine2 = null;

    /**
     * @var string $bannerLine3
     */
    protected $bannerLine3 = null;

    /**
     * @param string $companyName
     * @param string $supportEmail
     * @param string $companyUrl
     * @param string $termsOfUsageUrl
     * @param string $bannerLine1
     * @param string $bannerLine2
     * @param string $bannerLine3
     */
    public function __construct($companyName, $supportEmail, $companyUrl, $termsOfUsageUrl, $bannerLine1, $bannerLine2, $bannerLine3)
    {
      $this->companyName = $companyName;
      $this->supportEmail = $supportEmail;
      $this->companyUrl = $companyUrl;
      $this->termsOfUsageUrl = $termsOfUsageUrl;
      $this->bannerLine1 = $bannerLine1;
      $this->bannerLine2 = $bannerLine2;
      $this->bannerLine3 = $bannerLine3;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupportEmail()
    {
      return $this->supportEmail;
    }

    /**
     * @param string $supportEmail
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setSupportEmail($supportEmail)
    {
      $this->supportEmail = $supportEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyUrl()
    {
      return $this->companyUrl;
    }

    /**
     * @param string $companyUrl
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setCompanyUrl($companyUrl)
    {
      $this->companyUrl = $companyUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfUsageUrl()
    {
      return $this->termsOfUsageUrl;
    }

    /**
     * @param string $termsOfUsageUrl
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setTermsOfUsageUrl($termsOfUsageUrl)
    {
      $this->termsOfUsageUrl = $termsOfUsageUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getBannerLine1()
    {
      return $this->bannerLine1;
    }

    /**
     * @param string $bannerLine1
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setBannerLine1($bannerLine1)
    {
      $this->bannerLine1 = $bannerLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getBannerLine2()
    {
      return $this->bannerLine2;
    }

    /**
     * @param string $bannerLine2
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setBannerLine2($bannerLine2)
    {
      $this->bannerLine2 = $bannerLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getBannerLine3()
    {
      return $this->bannerLine3;
    }

    /**
     * @param string $bannerLine3
     * @return \SamIT\TransIP\DomainBranding
     */
    public function setBannerLine3($bannerLine3)
    {
      $this->bannerLine3 = $bannerLine3;
      return $this;
    }

}
