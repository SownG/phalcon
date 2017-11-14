<?php

use App\Router\User;
use App\Router\Post;

$router = $di->getRouter();

$router->mount(new User());
$router->mount(new Post());
