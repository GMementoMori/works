<?php
namespace App\Model\Admin;

use App\Model\Interfaces\Admin\AdminModelInterface;
use App\Model\Connect;

class AdminModel extends Connect implements AdminModelInterface
{

  public function countElems($selectTable){
        
       $result = $this -> db -> query("SELECT count(*) AS `Count` FROM `$selectTable`;");

       $data = $result -> fetchAll(\PDO::FETCH_ASSOC);

       return $data;

  }

  public function getAdmin($login){

       $sql = "SELECT * FROM `admins` WHERE `login` = '$login';";

       $data = $this -> db -> query($sql);

       return $data;
  }

	public function getListTable($table, $minPart){

	     $sql = "SELECT * FROM `$table` ORDER BY `id` DESC LIMIT $minPart, 10;";

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
