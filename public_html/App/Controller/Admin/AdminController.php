<?php

namespace App\Controller\Admin;

use App\Model\Admin\AdminModel;
use App\Controller\Interfaces\Admin\AdminControllerInterface;

class AdminController
{
	protected $data;

	function __construct(){

       $this -> data = new AdminModel();

	}
    
  public function getCountElems($selectTable){

    $result = $this -> data -> countElems($selectTable);

    return $result;

  }

  public function checkAdmin($login, $password){

    $arrayResults = [];

    $result = $this -> data -> getAdmin($login);
    
      foreach($result as $row => $value) {

        foreach ($value as $keys => $items) {

          if ($keys === 'login') {

              if ($items === $login) {

                 $arrayResults[0] = true;

              }

          }

          if ($keys === 'password') {

              if (password_verify($password, $items)) {

                 $arrayResults[1] = true;

              }

          }

        }

      }
      
      return $arrayResults;
  }

	public function getInfo($table, $minPart){

      $values = [];

      $result = $this -> data -> getListTable($table, $minPart);

      foreach ($result as $key => $value) {

      	 	$values[$key] = $value;
          
      }

      return $values;
	}

  public function checkInfoToAdd($selectTable, $arrValues, $arrColumn){

    if (isset($selectTable) &&
        isset($arrValues) &&
        isset($arrColumn))
    {
      for ($i=0; $i < count($arrValues); $i++) { 

        $arrValues[$i] = trim($arrValues[$i]);

      }

      if ($selectTable === 'admins') {

          $arrValues[1] = password_hash($arrValues[1], PASSWORD_BCRYPT);

          $checkLogin = $this -> checkAdmin($arrValues[0], $arrValues[1]);

          if ($checkLogin[0]) {

             echo "<h3>WARRNING: You have account with that login! </h3>";

          }else{
              
             $this -> data -> addInfo($selectTable, $arrValues, $arrColumn);

          }

      }else{

          $arrColumn[] = 'publication_date';
          
          $arrValues[] = date("Y-m-d");

          $this -> data -> addInfo($selectTable, $arrValues, $arrColumn);

      }

    }

  }

  public function checkInfoToChange($selectTable, $idField, $newValues, $columns){
    if (isset($selectTable) &&
        isset($idField) &&
        isset($newValues) &&
        isset($columns))
    {

      for ($i=0; $i < count($newValues); $i++) { 

        $newValues[$i] = trim($newValues[$i]);

      }

      if ($selectTable === 'admins') {

          unset($newValues[2]);
          unset($columns[2]);

      }
          
      $this -> data -> updateInfo($selectTable, $idField, $newValues, $columns);

    }

  }

  public function checkInfoToDel($selectTable, $idField){
    if (isset($selectTable) &&
        isset($idField))
    {
      
      $countFields = 0;
      $fields = $this -> data -> getListTable($selectTable);

      foreach ($fields as $keys => $items) {

          $countFields++;

      }
      if ($countFields > 1) {

          $this -> data -> deleteField($selectTable, $idField);


      }else{

          echo "<h3>WARRNING: You have only 1 field! Create second field, then delete this. </h3>";

      }

    }

  }

}



