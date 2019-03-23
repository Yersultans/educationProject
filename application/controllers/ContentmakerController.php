<?php
namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;
class ContentmakerController extends Controller{

  public function __construct($route) {
    parent::__construct($route);
    $this->view->layout = 'contentmaker';
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
      $this->view->location('educationProject/contentmaker/add');
    }
    }else{
      $this->view->location('educationProject/contentmaker/login');
    }
    }
   $this->view->render('Страница входа');
 }


 public function addAction() {
   if (!empty($_POST)) {

     if (!$this->model->postValidate($_POST, 'add')) {
       $this->view->message('error', $this->model->error);
     }

     $id = $this->model->postAdd($_POST);

     if (!$id) {
       $this->view->message('success', 'Ошибка обработки запроса');
     }
     // $this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
     // $this->view->message('success', 'Пост добавлен');
   }
   $vars = [
     'subjects' => $this->model->subjectsList(),
   ];

   $this->view->render('Добавить пост',$vars);
 }

 public function editAction() {
   if (!$this->model->isPostExists($this->route['id'])) {
     $this->view->errorCode(404);
   }
   if (!empty($_POST)) {
     if (!$this->model->postValidate($_POST, 'edit')) {
       $this->view->message('error', $this->model->error);
     }
     $this->model->postEdit($_POST, $this->route['id']);
     // if ($_FILES['img']['tmp_name']) {
     // 	$this->model->postUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
     // }
     $this->view->message('success', 'Сохранено');
   }
   $vars = [
     'data' => $this->model->postData($this->route['id'])[0],
     'subjects' => $this->model->subjectsList(),
   ];
   $this->view->render('Редактировать пост', $vars);
 }

 public function deleteAction() {
   if (!$this->model->isPostExists($this->route['id'])) {
     $this->view->errorCode(404);
   }
   $this->model->postDelete($this->route['id']);
   $this->view->redirect('educationProject/contentmaker/posts');
 }

 public function logoutAction() {
   unset($_SESSION['admin']);
   $this->view->redirect('educationProject/contentmaker/login');
 }

 public function subjectsAction(){
    if(!empty($_POST)){
     $this->model->addSubject($_POST);
       $this->view->location('educationProject/admin/subjectsList');
   }

   $this->view->render('Добавить предмет');


 }
 public function subjectsListAction(){
   $vars=[
     'list' => $this->model->subjectsList(),
   ];
   $this->view->render('Предметы', $vars);

 }
 public function subjectDeleteAction(){
   // if (!$this->model->isPostExists($this->route['id'])) {
   // 	$this->view->errorCode(404);
   // }
   $this->model->subjectDelete($this->route['id']);
   $this->view->redirect('educationProject/contentmaker/subjectsList');
 }



 public function postsAction() {
   $mainModel = new Main;
   $pagination = new Pagination($this->route, $mainModel->postsCount());
   $vars = [
     'pagination' => $pagination->get(),
     'list' => $mainModel->postsList($this->route),
   ];
   $this->view->render('Посты', $vars);
 }
}
