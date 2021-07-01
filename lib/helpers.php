<?php

use Sunrise\Http\Message\ResponseFactory;

if (!function_exists('response')) {
    function response() {
        return new ResponseFactory;
    }
}