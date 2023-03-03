<?php

require('../src/helpers/include.php');

spl_autoload_register(function ($class) {
    require base_path() .'src/'.$class . '.php';
});

require(base_path() . 'src/router.php');
