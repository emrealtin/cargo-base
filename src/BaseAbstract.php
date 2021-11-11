<?php
namespace Cargo\Base;

use Cargo\Base\library\CurlRequest;

abstract class BaseAbstract implements BaseInterface
{
    /**
     * @var string
     */
    public $serviceUrl;
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
     * @var string
     */
    public $integrationCode;
    /**
     * @var string
     */
    public $trackingNumber;
    /**
     * @var string
     */
    public $sender;
    /**
     * @var string
     */
    public $trackingUrl;
    /**
     * @var float
     */
    public $price;
    /**
     * @var string
     */
    public $reason;

    public function setServiceUrl($serviceUrl): string
    {
        $this->serviceUrl = $serviceUrl;
    }

    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

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

    public function setIntegrationCode($integrationCode): string
    {
        $this->integrationCode = $integrationCode;
    }

    public function getIntegrationCode(): string
    {
        return $this->integrationCode;
    }

    public function setTrackingNumber($trackingNumber): string
    {
        $this->trackingNumber = $trackingNumber;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setReason($reason): string
    {
        $this->reason = $reason;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setSender($sender): string
    {
        $this->sender = $sender;
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setTrackingUrl($trackingUrl): string
    {
        $this->trackingUrl = $trackingUrl;
    }

    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    public function setPrice($price): string
    {
        $this->price = $price;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}