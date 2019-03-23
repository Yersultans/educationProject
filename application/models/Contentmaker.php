<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Contentmaker extends Model {

	public $error;

	// public function loginValidate($post) {
	// 	$config = require 'application/config/admin.php';
	// 	if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
	// 		$this->error = 'Логин или пароль указан неверно';
	// 		return false;
	// 	}
	// 	return true;
	// }
  public function login( $login) {
  		$params = [
        'login' => $login,
        'role_id' => 3,
  		];
  		$data = $this->db->row('SELECT * FROM users WHERE  login = :login and role_id = :role_id', $params);
  	 	$_SESSION['contentmaker'] = $data[0];


  	}
		public function checkUser($login) {
      $params = [
        'login' => $login,
        'role' => 3

      ];
      $data = $this->db->row('SELECT * FROM users WHERE login = :login and role_id = :role', $params);
      if(!empty($data[0])){
        return true;
      }
      return false;
    }
		public function getPassword($login){
			$params = [
				'login' => $login,
			];
			$data = $this->db->row('SELECT password FROM users WHERE  login = :login', $params);
			return $data[0]['password'];
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
	}
