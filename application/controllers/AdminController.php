<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction() {
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('educationProject/admin/add');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('educationProject/admin/add');

		}
		$this->view->render('Вход');
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
		$this->view->redirect('educationProject/admin/posts');
	}

	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->view->redirect('educationProject/admin/login');
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
		$this->view->redirect('educationProject/admin/subjectsList');
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

	public function contentmakersAction(){
		$vars = [
			'contentmakers' => $this->model->contentmakers()
		];
		$this->view->render('Контентмекеры', $vars);

	}


	public function contentmakerAction(){
		if(!empty($_POST)){
			$this->model->addContentmaker($_POST);
			$this->view->location('educationProject/admin/contentmakers');

		}
	 $this->view->render('Страница регистрации крнтентмакера');
	}
}
