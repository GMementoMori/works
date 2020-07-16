<?php
namespace Task\App\Model\Admin;

use Task\App\Model\Interfaces\Admin\AdminUsersModelInterface;
use Task\App\Model\Connect;

class AdminUsersModel extends Connect implements AdminUsersModelInterface
{


	public function getListAdmins(){
	   $sql = "SELECT * FROM `admins`;";

       $data = $this -> db -> query($sql);

       return $data;
	}

}
?>