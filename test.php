<?php
include 'src/vendor/autoload.php';


$factory = new \SamIT\TransIP\ServiceFactory(include 'settings.php');


foreach ($factory->getHaipService()->getHaips() as $haip) {

    echo "{$haip->getName()} {$haip->getVpsName()}\n";
}