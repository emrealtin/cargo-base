<?php
namespace Cargo\Base;

interface BaseInterface
{
    public function setServiceUrl($serviceUrl) :string;
    public function getServiceUrl() :string;
    public function setConfig($config = []) :array;
    public function getConfig() :array;
    public function isConfig() :bool;
    public function createPackage();
    public function cancelPackage();
    public function getStatus();
    public function doRequest($url, $request, $headers = [], $auth = []);
    public function setRequest($request) :string;
    public function getRequest() :string;
    public function setResponse($response);
    public function getResponse() :string;
    public function setRequestMapping($statusMapping = []) :array;
    public function getRequestMapping() :array;

}