<?php
namespace Cargo\Base;

abstract class BaseAbstract implements BaseInterface
{
    public $config = [];

    public function __construct($config){
        $this->config = $config;
    }

   public function auth($params = []): bool
   {
       // TODO: Implement auth() method.
   }

    public function isAuth(): bool
    {
        // TODO: Implement isAuth() method.
    }

    public function createPackage()
    {
        // TODO: Implement createPackage() method.
    }

    public function cancelPackage()
    {
        // TODO: Implement cancelPackage() method.
    }

    public function getStatus()
    {
        // TODO: Implement getStatus() method.
    }

    public function doRequest($request)
    {
        // TODO: Implement doRequest() method.
    }

    public function setRequest()
    {
        // TODO: Implement setRequest() method.
    }

    public function getRequest()
    {
        // TODO: Implement getRequest() method.
    }

    public function setResponse($data = [])
    {
        // TODO: Implement setResponse() method.
    }

    public function getResponse()
    {
        // TODO: Implement getResponse() method.
    }

    public function setRequestMapping($data = []): array
    {
        // TODO: Implement setRequestMapping() method.
    }

    public function getRequestMapping()
    {
        // TODO: Implement getRequestMapping() method.
    }
}