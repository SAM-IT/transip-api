<?php


namespace SamIT\TransIP;

class BaseFactory
{
    private $defaultOptions;

    public function __construct($userName, $privateKey, $mode = 'readonly', $defaultOptions = [])
    {
        $this->defaultOptions = array_merge([
            'privateKey' => $privateKey,
            'userName' => $userName,
            'mode' => $mode
        ], $defaultOptions);
    }

    protected function constructService($class, $options = [])
    {
        return new $class(array_merge($this->defaultOptions, $options));
    }
}
