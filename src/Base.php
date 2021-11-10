<?php

namespace Vendor\Cargo;

abstract class Base
{
    public function __construct(){}
    public function auth(){}
    public function createPackage(){}
    public function cancelPackage(){}
    public function getStatus(){}
    public function doRequest(){}
    public function setRequest(){}
    public function getRequest(){}
    public function setResponse(){}
    public function getResponse(){}
    public function setRequestMapping(){}
    public function getRequestMapping(){}
}