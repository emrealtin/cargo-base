<?php
namespace Cargo\Base\library;

class CurlRequest implements HttpRequest
{
    private $handle = null;

    public function __construct($url) {
        $this->handle = curl_init($url);
    }

    public function setOption($name, $value) {
        curl_setopt($this->handle, $name, $value);
    }

    public function execute()
    {
        $response = curl_exec($this->handle);

        $this->close();

        return $response;
    }

    public function getInfo($name) {
        return curl_getinfo($this->handle, $name);
    }

    protected function close() {
        curl_close($this->handle);
    }
}
