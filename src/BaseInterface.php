<?php
namespace Cargo\Base;

interface BaseInterface
{
    public function doRequest($url, $request, $headers = [], $auth = []);

    public function setServiceUrl($serviceUrl) :string;
    public function getServiceUrl() :string;

    public function setConfig($config = []) :array;
    public function getConfig() :array;

    public function isConfig() :bool;

    public function createPackage();
    public function cancelPackage();
    public function getStatus();

    public function setRequest($request) :string;
    public function getRequest() :string;

    public function setResponse($response);
    public function getResponse() :string;

    public function setRequestMapping($statusMapping = []) :array;
    public function getRequestMapping() :array;

    public function setReason($reason) :string;
    public function getReason() :string;

    public function setIntegrationCode($integrationCode) :string;
    public function getIntegrationCode() :string;

    public function setTrackingNumber($trackingNumber) :string;
    public function getTrackingNumber() :string;

    public function setSender($sender) :string;
    public function getSender() :string;

    public function setTrackingUrl($trackingUrl) :string;
    public function getTrackingUrl() :string;

    public function setPrice($price) :string;
    public function getPrice() :string;

}