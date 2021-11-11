<?php
namespace Cargo\Base;

abstract class BaseAbstract implements BaseInterface
{
    /**
     * @var array
     */
    public $config = [];
    /**
     * @var string
     */
    public $request;
    /**
     * @var string
     */
    public $response;
    /**
     * @var array
     */
    public $statusMapping = [];
    /**
     * @var array
     */
    public function __construct($config){
        $this->config = $config;
    }

   public function auth($params = []): array
   {
       return [];
   }

    public function isAuth(): bool
    {
        if(!empty($this->auth()))
        {
            return true;
        }

        return false;
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

    public function setRequest($request) :string
    {
       $this->request = $request;
    }

    public function getRequest() :string
    {
        return $this->request;
    }

    public function setResponse($response)
    {
        $this->response = $response;
    }

    public function getResponse() :string
    {
        return $this->response;
    }

    public function setRequestMapping($statusMapping = []) :array
    {
        $this->statusMapping = $statusMapping;
    }

    public function getRequestMapping() :array
    {
        return $this->statusMapping;
    }
}