<?php

require('../src/helpers/include.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path() . $class . '.php';
});

require(base_path() . 'src/router.php');
