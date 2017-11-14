<?php
namespace App\Router;

use Phalcon\Mvc\Router\Group as RouterGroup;

class User extends RouterGroup {

    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'controller' => 'user',
            ]
        );

        // Add a route to the group
        $this->addGet(
            '/user',
            [
                'action' => 'getUsers',
            ]
        );

        $this->addGet(
            '/user/{id}',
            [
                'action' => 'getUser',
            ]
        );

        $this->addPost(
            '/user',
            [
                'action' => 'createUser',
            ]
        );

    }
}