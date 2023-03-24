<?php

use Src\Router;

Router::GET('/', 'home');
Router::GET('/about', 'about');
Router::GET('/contact', 'contact');

Router::GET('/posts', 'posts/index');
Router::GET('/post', 'posts/show');
Router::GET('/posts/create', 'posts/create');
Router::POST('/posts/store', 'posts/store');
