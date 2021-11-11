<?php

namespace Cargo\Base;

interface ResponseInterface
{
    public function setCreatePackageResponse($response);

    public function getCreatePackageResponse(): object;

    public function setCargoTrackingResponse($response): string;

    public function getCargoTrackingResponse(): object;

    public function setResultCode($resultCode): string;

    public function getResultCode(): string;

    public function setResultMessage($resultMessage);

    public function getResultMessage(): string;

}