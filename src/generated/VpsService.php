<?php

namespace SamIT\TransIP;

class VpsService extends \SamIT\TransIP\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfProduct' => 'SamIT\\TransIP\\ArrayOfProduct',
      'Product' => 'SamIT\\TransIP\\Product',
      'ArrayOfstring' => 'SamIT\\TransIP\\ArrayOfstring',
      'ArrayOfPrivateNetwork' => 'SamIT\\TransIP\\ArrayOfPrivateNetwork',
      'PrivateNetwork' => 'SamIT\\TransIP\\PrivateNetwork',
      'Vps' => 'SamIT\\TransIP\\Vps',
      'ArrayOfVps' => 'SamIT\\TransIP\\ArrayOfVps',
      'ArrayOfSnapshot' => 'SamIT\\TransIP\\ArrayOfSnapshot',
      'Snapshot' => 'SamIT\\TransIP\\Snapshot',
      'ArrayOfVpsBackup' => 'SamIT\\TransIP\\ArrayOfVpsBackup',
      'VpsBackup' => 'SamIT\\TransIP\\VpsBackup',
      'ArrayOfOperatingSystem' => 'SamIT\\TransIP\\ArrayOfOperatingSystem',
      'OperatingSystem' => 'SamIT\\TransIP\\OperatingSystem',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.transip.nl/wsdl/?service=VpsService';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @return ArrayOfProduct
     */
    public function getAvailableProducts()
    {
      return $this->__soapCall('getAvailableProducts', array());
    }

    /**
     * @return ArrayOfProduct
     */
    public function getAvailableAddons()
    {
      return $this->__soapCall('getAvailableAddons', array());
    }

    /**
     * @param string $vpsName
     * @return ArrayOfProduct
     */
    public function getActiveAddonsForVps($vpsName)
    {
      return $this->__soapCall('getActiveAddonsForVps', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return ArrayOfProduct
     */
    public function getAvailableUpgrades($vpsName)
    {
      return $this->__soapCall('getAvailableUpgrades', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return ArrayOfProduct
     */
    public function getAvailableAddonsForVps($vpsName)
    {
      return $this->__soapCall('getAvailableAddonsForVps', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return ArrayOfProduct
     */
    public function getCancellableAddonsForVps($vpsName)
    {
      return $this->__soapCall('getCancellableAddonsForVps', array($vpsName));
    }

    /**
     * @param string $productName
     * @param ArrayOfstring $addons
     * @param string $operatingSystemName
     * @param string $hostname
     * @return void
     */
    public function orderVps($productName, ArrayOfstring $addons, $operatingSystemName, $hostname)
    {
      return $this->__soapCall('orderVps', array($productName, $addons, $operatingSystemName, $hostname));
    }

    /**
     * @param string $vpsName
     * @return void
     */
    public function cloneVps($vpsName)
    {
      return $this->__soapCall('cloneVps', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @param ArrayOfstring $addons
     * @return void
     */
    public function orderAddon($vpsName, ArrayOfstring $addons)
    {
      return $this->__soapCall('orderAddon', array($vpsName, $addons));
    }

    /**
     * @return void
     */
    public function orderPrivateNetwork()
    {
      return $this->__soapCall('orderPrivateNetwork', array());
    }

    /**
     * @param string $vpsName
     * @param string $upgradeToProductName
     * @return void
     */
    public function upgradeVps($vpsName, $upgradeToProductName)
    {
      return $this->__soapCall('upgradeVps', array($vpsName, $upgradeToProductName));
    }

    /**
     * @param string $vpsName
     * @param string $endTime
     * @return void
     */
    public function cancelVps($vpsName, $endTime)
    {
      return $this->__soapCall('cancelVps', array($vpsName, $endTime));
    }

    /**
     * @param string $vpsName
     * @param string $addonName
     * @return void
     */
    public function cancelAddon($vpsName, $addonName)
    {
      return $this->__soapCall('cancelAddon', array($vpsName, $addonName));
    }

    /**
     * @param string $privateNetworkName
     * @param string $endTime
     * @return void
     */
    public function cancelPrivateNetwork($privateNetworkName, $endTime)
    {
      return $this->__soapCall('cancelPrivateNetwork', array($privateNetworkName, $endTime));
    }

    /**
     * @param string $vpsName
     * @return ArrayOfPrivateNetwork
     */
    public function getPrivateNetworksByVps($vpsName)
    {
      return $this->__soapCall('getPrivateNetworksByVps', array($vpsName));
    }

    /**
     * @return ArrayOfPrivateNetwork
     */
    public function getAllPrivateNetworks()
    {
      return $this->__soapCall('getAllPrivateNetworks', array());
    }

    /**
     * @param string $vpsName
     * @param string $privateNetworkName
     * @return void
     */
    public function addVpsToPrivateNetwork($vpsName, $privateNetworkName)
    {
      return $this->__soapCall('addVpsToPrivateNetwork', array($vpsName, $privateNetworkName));
    }

    /**
     * @param string $vpsName
     * @param string $privateNetworkName
     * @return void
     */
    public function removeVpsFromPrivateNetwork($vpsName, $privateNetworkName)
    {
      return $this->__soapCall('removeVpsFromPrivateNetwork', array($vpsName, $privateNetworkName));
    }

    /**
     * @param string $vpsName
     * @return UNKNOWN
     */
    public function getTrafficInformationForVps($vpsName)
    {
      return $this->__soapCall('getTrafficInformationForVps', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return void
     */
    public function start($vpsName)
    {
      return $this->__soapCall('start', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return void
     */
    public function stop($vpsName)
    {
      return $this->__soapCall('stop', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return void
     */
    public function reset($vpsName)
    {
      return $this->__soapCall('reset', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @param string $description
     * @return void
     */
    public function createSnapshot($vpsName, $description)
    {
      return $this->__soapCall('createSnapshot', array($vpsName, $description));
    }

    /**
     * @param string $vpsName
     * @param string $snapshotName
     * @return void
     */
    public function revertSnapshot($vpsName, $snapshotName)
    {
      return $this->__soapCall('revertSnapshot', array($vpsName, $snapshotName));
    }

    /**
     * @param string $sourceVpsName
     * @param string $snapshotName
     * @param string $destinationVpsName
     * @return void
     */
    public function revertSnapshotToOtherVps($sourceVpsName, $snapshotName, $destinationVpsName)
    {
      return $this->__soapCall('revertSnapshotToOtherVps', array($sourceVpsName, $snapshotName, $destinationVpsName));
    }

    /**
     * @param string $vpsName
     * @param string $snapshotName
     * @return void
     */
    public function removeSnapshot($vpsName, $snapshotName)
    {
      return $this->__soapCall('removeSnapshot', array($vpsName, $snapshotName));
    }

    /**
     * @param string $vpsName
     * @param int $vpsBackupId
     * @return void
     */
    public function revertVpsBackup($vpsName, $vpsBackupId)
    {
      return $this->__soapCall('revertVpsBackup', array($vpsName, $vpsBackupId));
    }

    /**
     * @param string $vpsName
     * @return Vps
     */
    public function getVps($vpsName)
    {
      return $this->__soapCall('getVps', array($vpsName));
    }

    /**
     * @return ArrayOfVps
     */
    public function getVpses()
    {
      return $this->__soapCall('getVpses', array());
    }

    /**
     * @param string $vpsName
     * @return ArrayOfSnapshot
     */
    public function getSnapshotsByVps($vpsName)
    {
      return $this->__soapCall('getSnapshotsByVps', array($vpsName));
    }

    /**
     * @param string $vpsName
     * @return ArrayOfVpsBackup
     */
    public function getVpsBackupsByVps($vpsName)
    {
      return $this->__soapCall('getVpsBackupsByVps', array($vpsName));
    }

    /**
     * @return ArrayOfOperatingSystem
     */
    public function getOperatingSystems()
    {
      return $this->__soapCall('getOperatingSystems', array());
    }

    /**
     * @param string $vpsName
     * @param string $operatingSystemName
     * @param string $hostname
     * @return void
     */
    public function installOperatingSystem($vpsName, $operatingSystemName, $hostname)
    {
      return $this->__soapCall('installOperatingSystem', array($vpsName, $operatingSystemName, $hostname));
    }

    /**
     * @param string $vpsName
     * @param string $operatingSystemName
     * @param string $base64InstallText
     * @return void
     */
    public function installOperatingSystemUnattended($vpsName, $operatingSystemName, $base64InstallText)
    {
      return $this->__soapCall('installOperatingSystemUnattended', array($vpsName, $operatingSystemName, $base64InstallText));
    }

    /**
     * @param string $vpsName
     * @return ArrayOfstring
     */
    public function getIpsForVps($vpsName)
    {
      return $this->__soapCall('getIpsForVps', array($vpsName));
    }

    /**
     * @return ArrayOfstring
     */
    public function getAllIps()
    {
      return $this->__soapCall('getAllIps', array());
    }

    /**
     * @param string $vpsName
     * @param string $ipv6Address
     * @return void
     */
    public function addIpv6ToVps($vpsName, $ipv6Address)
    {
      return $this->__soapCall('addIpv6ToVps', array($vpsName, $ipv6Address));
    }

    /**
     * @param string $ipAddress
     * @param string $ptrRecord
     * @return void
     */
    public function updatePtrRecord($ipAddress, $ptrRecord)
    {
      return $this->__soapCall('updatePtrRecord', array($ipAddress, $ptrRecord));
    }

    /**
     * @param string $vpsName
     * @param boolean $enabled
     * @return void
     */
    public function setCustomerLock($vpsName, $enabled)
    {
      return $this->__soapCall('setCustomerLock', array($vpsName, $enabled));
    }

    /**
     * @param string $vpsName
     * @param string $targetAccountname
     * @return void
     */
    public function handoverVps($vpsName, $targetAccountname)
    {
      return $this->__soapCall('handoverVps', array($vpsName, $targetAccountname));
    }

}
