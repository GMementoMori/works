<?php

namespace Task\App\Controller\Admin;

use Task\App\Model\Admin\AdminUsersModel;

class AdminUsersController
{
	protected $data;

	function __construct(){

       $this -> data = new AdminUsersModel();

	}

	public function checkAdmin($login = '', $password = ''){

      $arrayResults = [];
	  	
	  $result = $this -> data -> getListAdmins();

      foreach ($result as $row => $value) {

        foreach ($value as $keys => $items) {
          if ($keys === 'login') {
              if ($items === $login) {
                 $arrayResults[0] = true;
              }
          }
          if ($keys === 'password') {
              if ($items === $password) {
                 $arrayResults[1] = true;
              }
          }
        }
      }
      return $arrayResults;
	}
}
?>