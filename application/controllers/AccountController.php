<?php
namespace application\controllers;

use application\core\Controller;
class AccountController extends Controller{

  public function __construct($route) {
    parent::__construct($route);
    $this->view->layout = 'account';
  }
  public function loginAction(){
    if(!empty($_POST)){
      // if (!$this->model->loginValidate($_POST)) {
			// 	$this->view->message('error', $this->model->error);
			// }
      if($this->model->checkUser($_POST['login'])){
        $password =$_POST['password'];
        $hash =   $this->model->getPassword($_POST['login']);
     if(password_verify($password, $hash)){
       $this->model->login($_POST['login']);
       $this->view->location('educationProject/account/profile');
     }
     }else{
       $this->view->location('educationProject/account/login');
     }
     }
    $this->view->render('Страница входа');


  }


  public function profileAction(){
    $this->view->render('Профиль');
  }

  public function logoutAction(){
    unset($_SESSION['authorize']);
    $this->view->redirect('educationProject/main/index');
  }

  public function registerAction(){
       if(!empty($_POST)){
         $this->model->register($_POST);

       }
      $this->view->render('Страница регистрации');
  }

  public function listAction(){
      $vars = [
			'list' => $this->model->postToSub($this->route['id']),

		];
    $this->view->render('Список', $vars);
}

   public function postAction(){
     $vars = [
       'data' => $this->model->postData($this->route['id'])[0],
     ];
     $this->view->render($vars['data']['name'], $vars);
   }
}
