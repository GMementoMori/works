<?php

namespace Task\App\Controller\Admin;

use Task\App\Model\Admin\AdminModel;
use Task\App\Controller\Interfaces\Admin\AdminControllerInterface;

class AdminController
{
	protected $data;

	function __construct(){

       $this -> data = new AdminModel();

	}

	public function getInfo($table){
      
      $values = [];

      $result = $this -> data -> getListTable($table);

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
      $this -> data -> addInfo($selectTable, $arrValues, $arrColumn);
    }

  }

  public function checkInfoToChange($selectTable, $idField, $newValues, $columns){
    if (isset($selectTable) && 
        isset($idField) &&
        isset($newValues) &&
        isset($columns)) 
    {
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


?>