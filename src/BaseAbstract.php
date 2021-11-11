<?php
namespace Cargo\Base;

use Cargo\Base\library\CurlRequest;

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

   public function setConfig($config = []): array
   {
       $this->config = $config;
   }

   public function getConfig() :array
   {
        return $this->config;
   }

    public function isConfig(): bool
    {
        if(!empty($this->config))
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

    public function doRequest($url, $request, $headers = [], $auth = [])
    {
        $curl = $this->http ?? new CurlRequest($url);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        $curl->setOption(CURLOPT_CUSTOMREQUEST, 'POST');
        $curl->setOption(CURLOPT_FOLLOWLOCATION, true);
        $curl->setOption(CURLOPT_MAXREDIRS, 10);
        $curl->setOption(CURLOPT_TIMEOUT, 30);
        $curl->setOption(CURLOPT_POSTFIELDS, $request);
        $curl->setOption(CURLOPT_HTTPHEADER, $headers);

        if ($this->isConfig()) {
            $curl->setOption(CURLOPT_USERPWD, $this->config['username'] . ':' . $this->config['password']);
        }

        return $curl->execute();
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