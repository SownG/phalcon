<?php
namespace App\Router;

use Phalcon\Mvc\Router\Group as RouterGroup;

class Post extends RouterGroup {

    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'controller' => 'post',
            ]
        );

        // Add a route to the group
        $this->add(
            '/post',
            [
                'action' => 'getPosts',
            ]
        );
    }
}