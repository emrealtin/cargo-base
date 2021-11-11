<?php
namespace Cargo\Base;

interface BaseInterface
{
    public function auth($params = []) :bool;
    public function isAuth() :bool;
    public function createPackage();
    public function cancelPackage();
    public function getStatus();
    public function doRequest($request);
    public function setRequest();
    public function getRequest();
    public function setResponse($data = []);
    public function getResponse();
    public function setRequestMapping($data = []) :array;
    public function getRequestMapping();

}