<?php


use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function response($data = null) {
        $response = new \Phalcon\Http\Response();
        $response->setContentType('application/json', 'UTF-8');
        $response->setContent(json_encode($data));
        return $response;
    }

    public function getRequest() {
        return $this->request->getJsonRawBody();
    }

}
