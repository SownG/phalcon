<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/14/2017
 * Time: 11:48 AM
 */

namespace App\Requests\User;

use App\Requests\RequestValidation;
use Phalcon\Validation\Validator\Email as Email;
use Phalcon\Validation\Validator\PresenceOf as PresenceOf;

class SignUpRequest extends RequestValidation
{
    public function initialize()
    {


        $this->add(
            'email',
            new PresenceOf(
                [
                    'message' => 'The e-mail is required',
                ]
            )
        );

        $this->add(
            'email',
            new Email(
                [
                    'message' => 'The e-mail is not valid',
                ]
            )
        );

        $this->add(
            'name',
            new PresenceOf(
                [
                    'message' => 'The name is required',
                ]
            )
        );
    }
}