<?php

namespace Cargo\Base;

class Response implements ResponseInterface
{
    /**
     * @var object
     */
    public $createPackageResponse;
    /**
     * @var object
     */
    public $cargoTrackingResponse;
    /**
     * @var string
     */
    public $resultCode;
    /**
     * @var string
     */
    public $resultMessage;

    public function setResultCode($resultCode): string
    {
        $this->resultCode = $resultCode;
    }

    public function getResultCode(): string
    {
        return $this->resultCode;
    }

    public function setResultMessage($resultMessage)
    {
        $this->resultMessage = $resultMessage;
    }

    public function getResultMessage(): string
    {
        return $this->resultMessage;
    }

    public function setCreatePackageResponse($response)
    {
        $this->createPackageResponse = $response;
    }

    public function getCreatePackageResponse(): object
    {
        return $this->createPackageResponse;
    }

    public function setCargoTrackingResponse($response): string
    {
        $this->cargoTrackingResponse = $response;
    }

    public function getCargoTrackingResponse(): object
    {
        return $this->cargoTrackingResponse;
    }
}