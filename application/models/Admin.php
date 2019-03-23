<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}



	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
	//	$descriptionLen = iconv_strlen($post['description']);
	//	$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;}
		// } elseif ($descriptionLen < 3 or $descriptionLen > 100) {
		// 	$this->error = 'Описание должно содержать от 3 до 100 символов';
		// 	return false;
		// } elseif ($textLen < 10 or $textLen > 5000) {
		// 	$this->error = 'Текст должнен содержать от 10 до 5000 символов';
		// 	return false;
		// }
		// if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
		// 	$this->error = 'Изображение не выбрано';
		// 	return false;
		// }
		return true;
	}

	public function postAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'content' => $post['content'],
			'subject_id' => $post['subject_id'],
		];
		$this->db->query('INSERT INTO posts VALUES (:id, :name, :content, :subject_id)', $params);
		return $this->db->lastInsertId();
	}



	public function postEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'content' => $post['content'],
			'subject_id' => $post['subject_id'],
		];
		$this->db->query('UPDATE posts SET name = :name, content = :content, subject_id = :subject_id WHERE id = :id', $params);
	}

	public function postUploadImage($path, $id) {
		$img = new Imagick($path);
		$img->cropThumbnailImage(1080, 600);
		$img->setImageCompressionQuality(80);
		$img->writeImage('../public/materials/'.$id.'.jpg');
	}

	public function isPostExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
	}

	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
		//unlink('../public/materials/'.$id.'.jpg');
	}

	public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
	}

	public function subjectsList(){
	   return $this->db->row('SELECT * FROM subjects');
	}

	public function addSubject($post){
		$params = [
			'id' => '',
			'name' => $post['name'],
		];
		$this->db->query('INSERT INTO subjects VALUES(:id, :name)',$params);

	}

	public function subjectDelete($id){
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM subjects WHERE id = :id', $params);

	}

	public function addContentmaker($post){
		$params = [
			'id' => '',
			'name' => $post['name'],
			'surname' => $post['surname'],
			'login' => $post['login'],
			'password' => password_hash($post['password'],PASSWORD_BCRYPT),
			'role_id' => 3
		];
		$this->db->query('INSERT INTO	users VALUES(:id, :name, :surname, :login, :password, :role_id)', $params);
	}

	public function contentmakers(){
   return $this->db->query('SELECT * FROM users WHERE role_id = 3');
	}

}
