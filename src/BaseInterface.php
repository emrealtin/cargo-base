<?php
namespace Cargo\Base;

interface BaseInterface
{
    public function setConfig($config = []) :array;
    public function getConfig() :array;
    public function isConfig() :bool;
    public function createPackage();
    public function cancelPackage();
    public function getStatus();
    public function doRequest($request);
    public function setRequest($request) :string;
    public function getRequest() :string;
    public function setResponse($response);
    public function getResponse() :string;
    public function setRequestMapping($statusMapping = []) :array;
    public function getRequestMapping() :array;

}