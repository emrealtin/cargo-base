<?php

namespace Cargo\Base\library;

interface HttpRequest
{
    public function setOption($name, $value);

    public function execute();

    public function getInfo($name);
}
