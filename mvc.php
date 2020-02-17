<?php

class User {
    public $id;
    public $name;
    public $password;
}

interface UserGateway {
    function SaveUser($user);
    function GetUser($id);
}

class UserDbGateway implements UserGateway {
    function SaveUser($user) {

    }
    function GetUser($id) {

    }
}

interface Controller {
    function action($params);
}

abstract class BaseController {
    protected $userGateway;
    public $view;
    function __construct()
    {
     // UserGateway   
    }
}

class UserRegisterController extends BaseController implements Controller {

    public function action($params) {
        $this->userGateway->SaveUser();
        return new UserIndex($user);
    }
}

interface View {
    function render();
}

class UserIndex implements View {
    function render() {
        echo "form";
    }
}

class UserError implements View {
    function render() {
        echo "error";
    }
}

$action = $_GET['action'];
$userGateway = new UserDbGateway();

if ($action == "userRegister") {
    $controller = new UserRegisterController($userGateway);
    
} 

$params = [];
    $view = $controller->action($params);
    $view->render();