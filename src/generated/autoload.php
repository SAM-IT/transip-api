<?php


 function autoload_b17492cc2cb1e5242b33dfb5557d6184($class)
{
    $classes = array(
        'SamIT\TransIP\WebhostingService' => __DIR__ .'/WebhostingService.php',
        'SamIT\TransIP\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'SamIT\TransIP\ArrayOfWebhostingPackage' => __DIR__ .'/ArrayOfWebhostingPackage.php',
        'SamIT\TransIP\WebhostingPackage' => __DIR__ .'/WebhostingPackage.php',
        'SamIT\TransIP\WebHost' => __DIR__ .'/WebHost.php',
        'SamIT\TransIP\ArrayOfCronjob' => __DIR__ .'/ArrayOfCronjob.php',
        'SamIT\TransIP\Cronjob' => __DIR__ .'/Cronjob.php',
        'SamIT\TransIP\ArrayOfMailBox' => __DIR__ .'/ArrayOfMailBox.php',
        'SamIT\TransIP\MailBox' => __DIR__ .'/MailBox.php',
        'SamIT\TransIP\ArrayOfDb' => __DIR__ .'/ArrayOfDb.php',
        'SamIT\TransIP\Db' => __DIR__ .'/Db.php',
        'SamIT\TransIP\ArrayOfMailForward' => __DIR__ .'/ArrayOfMailForward.php',
        'SamIT\TransIP\MailForward' => __DIR__ .'/MailForward.php',
        'SamIT\TransIP\ArrayOfSubDomain' => __DIR__ .'/ArrayOfSubDomain.php',
        'SamIT\TransIP\SubDomain' => __DIR__ .'/SubDomain.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b17492cc2cb1e5242b33dfb5557d6184');

// Do nothing. The rest is just leftovers from the code generation.
{
}
