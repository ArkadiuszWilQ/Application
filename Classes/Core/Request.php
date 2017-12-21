<?php
namespace Classes\Core;

class Request
{
    public function getFromGET(string $key, $defaultValue = null)
    {
        if (array_key_exists($key, $_GET)) {
            return $_GET[$key];
        } else {
            return $defaultValue;
        }
    }

}