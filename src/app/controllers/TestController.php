<?php

class TestController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->disable();
        $this->response->setJSONContent([
            "status" => "OK",
        ]);
        $this->response->send();
    }

    public function testAction()
    {
        $this->view->hello = "hey, hello!";
    }
}
