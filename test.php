<?php
include 'src/vendor/autoload.php';

$settings = include 'settings.php';

$factory = new \SamIT\TransIP\ServiceFactory($settings['login'], $settings['password'], 'readwrite');
$vpsByName = [];
/** @var \SamIT\TransIP\Vps[] $vpsByDesc */
$vpsByDesc = [];
foreach($factory->getVpsService()->getVpses() as $vps) {
    echo "{$vps->getName()} {$vps->getIpAddress()} {$vps->getDescription()}\n";
    $vpsByName[$vps->getName()] = $vps;
    $vpsByDesc[$vps->getDescription()] = $vps;
}
sleep(2);
$haip = $factory->getHaipService()->getHaips()[0];
echo "{$haip->getName()} {$haip->getIpv4Address()} --> {$vpsByName[$haip->getVpsName()]->getDescription()} {$haip->getVpsIpv4Address()} \n";
sleep(2);
// Changing HA-IP to vps4.
var_dump($factory->getHaipService()->changeHaipVps($haip->getName(), $vpsByDesc['vps3']->getName()));
