<?php
namespace application\controllers;

use application\core\Controller;
class AccountController extends Controller{


  public function loginAction(){
    echo 'Страница входа';
    $this->view->render('Страница входа');
    var_dump($this->route);
  }

  public function registerAction(){
    echo 'Страница регистрации';
      $this->view->render('Страница регистрации');
  }
}
