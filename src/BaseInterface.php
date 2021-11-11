<?php

namespace Cargo\Base;

interface BaseInterface
{
    public function doRequest($url, $request, $headers = [], $auth = []);

    public function setServiceUrl($serviceUrl): string;

    public function getServiceUrl(): string;

    public function setConfig($config = []): array;

    public function getConfig(): array;

    public function isConfig(): bool;

    public function createPackage();

    public function cancelPackage();

    public function getStatus();

    public function setRequest($request): string;

    public function getRequest(): string;

    public function setCreatePackageResponse($response);

    public function getCreatePackageResponse(): object;

    public function setCargoTrackingResponse($response) :string;

    public function getCargoTrackingResponse() :object;

    public function setResultCode($resultCode): string;

    public function getResultCode(): string;

    public function setResultMessage($resultMessage);

    public function getResultMessage(): string;

    public function setReason($reason): string;

    public function getReason(): string;

    public function setIntegrationCode($integrationCode): string;

    public function getIntegrationCode(): string;

    public function setTrackingNumber($trackingNumber): string;

    public function getTrackingNumber(): string;

    public function setSenderName($senderName): string;

    public function getSenderName(): string;

    public function setReceiverName($receiverName): string;

    public function getReceiverName(): string;

    public function setReceiverAddress($receiverAddress): string;

    public function getReceiverAddress(): string;

    public function setReceiverPhone($receiverPhone): string;

    public function getReceiverPhone(): string;

    public function setReceiverCity($receiverCity): string;

    public function getReceiverCity(): string;

    public function setReceiverTown($receiverTown): string;

    public function getReceiverTown(): string;

    public function setTrackingUrl($trackingUrl): string;

    public function getTrackingUrl(): string;

    public function setPrice($price): string;

    public function getPrice(): string;

}