# transip-api
A modern PHP client for the Transip API.
This API client is automatically generated (see build.php) from the WSDL provided by TransIP.

The TransIP official API client does a couple of bad things:
1. It supports PHP5.3 and thus requires ugly workarounds.
2. It primarily uses static functons.
3. It does not support composer or autoloading.

This client does all that.

# Example usage:
````
include 'src/vendor/autoload.php';


$factory = new \SamIT\TransIP\ServiceFactory([
    'login' => 'some-user',
    'password' => 'your-key-not-your-login-password'
]);


foreach ($factory->getHaipService()->getHaips() as $haip) {

    echo "{$haip->getName()} {$haip->getVpsName()}\n";
}
````

The factory (@see https://github.com/SAM-IT/transip-api/blob/master/src/generated/ServiceFactory.php) has getters for all services exposed by the API.

# Installation
````
composer require sam-it/transip-api
````

# Building
If you prefer to build your own classes require the dev dependencies use the build script for reference.