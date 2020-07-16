<?php
namespace Task\App\Model\Admin;

use Task\App\Model\Interfaces\Admin\AdminModelInterface;
use Task\App\Model\Connect;

class AdminModel extends Connect implements AdminModelInterface
{

	public function getListTable($table){

	     $sql = "SELECT * FROM `$table`;";

       $data = $this -> db -> query($sql);

       return $data;
	}

	public function addInfo($selectTable, $arrValues, $arrColumn){

        $sql = "INSERT INTO `$selectTable` (";
     
        foreach ($arrColumn as $key => $value) {

          if ($key == '0') {

            $sql .= '`'. $value . '`';

          }else{

            $sql .= ',`'. $value . '`';

          }
        }
        $sql .= ") VALUES (";

        foreach ($arrValues as $key2 => $value2) {

          if ($key2 == '0') {

            $sql .= "'". $value2 . "'";

          }else{

            $sql .= ",'". $value2 . "'";

          }
        }
        $sql .= ");";

        $this -> db -> exec($sql);
        
	}
    public function updateInfo($selectTable, $idField, $newValues, $columns){

       $sql = "UPDATE `$selectTable` SET ";

       for ($i=0; $i < count($columns); $i++) { 

            if ($i == '0') {

               $sql .= "`". $columns[$i] . "` = '".$newValues[$i]."'";

            }else{
               
               $sql .= ",`". $columns[$i] . "` = '".$newValues[$i]."'";
            
            }
        }

        $sql .= " WHERE `id` = '$idField';";

        $this -> db -> query($sql);
    }

    public function deleteField($selectTable, $idField){
       	  $this -> db -> query("DELETE FROM `$selectTable` WHERE `id` = '$idField';");
    }

}
?>