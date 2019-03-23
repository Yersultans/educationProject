<?php

namespace application\models;


use application\core\Model;

class Account extends Model{

  public function validate($input, $post){

  }
  public function login( $login) {
  		$params = [
        'login' => $login,
        'role' => 2,
  		];
  		$data = $this->db->row('SELECT * FROM users WHERE  login = :login and role_id = :role', $params);
  	 	$_SESSION['authorize'] = $data[0];


  	}

    public function getPassword($login){
      $params = [
        'login' => $login,
      ];
      $data = $this->db->row('SELECT password FROM users WHERE  login = :login', $params);
      return $data[0]['password'];
    }

    public function checkUser($login) {
      $params = [
        'login' => $login,
        'role' => 2

      ];
      $data = $this->db->row('SELECT * FROM users WHERE login = :login and role_id = :role', $params);
      if(!empty($data[0])){
        return true;
      }
      return false;
    }

    public function postToSub($subject_id){
      $params = [
        'subject_id' => $subject_id,
      ];
      	return $this->db->row('SELECT * FROM posts WHERE subject_id = :subject_id', $params);
    }

    public function postData($id){
      $params = [
        'id' => $id,
      ];
      return $this->db->row('SELECT * FROM posts WHERE id = :id', $params);
    }





  public function register($post){
    $params =[
      'id' => '',
      'name' => $post['name'],
      'surname' => $post['surname'],
      'login' => $post['login'],
      'password' => password_hash($post['password'],PASSWORD_BCRYPT),
      'role_id' => 2
    ];
    $this->db->query('INSERT INTO users VALUES(:id, :name, :surname, :login, :password, :role_id)',$params);


  }




}
