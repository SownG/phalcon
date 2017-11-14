<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/14/2017
 * Time: 11:44 AM
 */

namespace App\Requests;

use Phalcon\Validation;

abstract class RequestValidation extends Validation
{
    public function validateRequest($data = null)
    {
        $result = [];
        $data = is_array($data) ? $data : (array) $data;
        $validation = $this->validate($data);
        if (count($validation) > 0) {
            foreach ($validation as $key => $message) {
                $result[$message->getField()] = $message->getMessage();
            }
        }

        return $result;
    }
}