<?php
namespace App\Controllers;

(function () {
    $this->get('home', '*', new IndexController);
})($this);