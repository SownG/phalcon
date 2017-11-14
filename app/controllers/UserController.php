<?php
use App\Models\Users as Users;
use App\Requests\User\SignUpRequest as SignUpRequest;

class UserController extends ControllerBase
{

    public function _constructor() {
    }

    public function indexAction() {
    }
    /**
     * @return string
     */
    public function getUsersAction() {
        return $this->response(Users::find());
    }

    public function getUserAction() {
        return $this->response(Users::find($this->dispatcher->getParam('id')));
    }

    public function createUserAction() {
        $signUpRequest = new SignUpRequest();
        $user = new Users();
        $validation = $signUpRequest->validateRequest($this->getRequest());

        if(!$validation) {
            //$user->create($this->getRequest());
            return $this->response();
        }
        return $this->response(($validation));
    }
}

