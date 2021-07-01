<?php

if (file_exists(__DIR__ . '/config/config.dev.php')) {
    require __DIR__ . '/config/config.dev.php';
}

if (file_exists(__DIR__ . '/config/config.prod.php')) {
    require __DIR__ . '/config/config.prod.php';
}