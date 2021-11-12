<?php

namespace Cargo\Base\Library;

interface HttpRequest
{
    public function setOption($name, $value);

    public function execute();

    public function getInfo($name);
}
