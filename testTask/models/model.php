<?php

class WorkDB 
{
	protected $connect;
    function __construct($pdoConect){
        $this -> connect = $pdoConect;
    }
    public function show_table($table){
        $sql = "SELECT * FROM `$table`";
        $result = $this -> connect -> query($sql);
        return $result;
    }
}
class Courses extends WorkDB
{

    public function add_course($title, $teacher){
       if (isset($title)) {
       	   $sql = "INSERT INTO `courses` (`title`,`teacher`) VALUES ('$title', '$teacher')";
       	   $this -> connect -> query($sql);
       }
    }
    public function change_course($column, $title, $value){
    	if (isset($column) && !empty($column)) {
    		$sql = "UPDATE `courses` SET `$column` = '$value' WHERE `title` = '$title'";
            $this -> connect -> query($sql);
    	}
    }
    public function delete_course($title){
    	if (isset($title) && !empty($title)) {
    		$sql = "DELETE FROM `courses` WHERE `title` = '$title'";
    		$this -> connect -> query($sql);
    	}
    }
}
class Students extends WorkDB
{
    
    public function add_student($surname, $name, $email, $photo){
       if (isset($surname) && !empty($surname)) {
       	   $sql = "INSERT INTO `students` (`surname`,`name`,`email`,`index_photo`) VALUES ('$surname', '$name', '$email', '$photo')";
       	   $this -> connect -> query($sql);
       }
    }
    public function change_student($column, $id, $value){
    	if (isset($column) && !empty($column)) {
    		$sql = "UPDATE `students` SET `$column` = '$value' WHERE `id` = '$id'";
            $this -> connect -> query($sql);
    	}
    }
    public function delete_student($id){
    	if (isset($id) && !empty($id)) {
    		$sql = "DELETE FROM `students` WHERE `id` = '$id'";
    		$this -> connect -> query($sql);
    	}
    }
}

class StudentCourse extends WorkDB
{
    
    public function add_student_course($idStudent, $idCourse){
       if (isset($idStudent) && !empty($idStudent)) {
       	   $sql = "INSERT INTO `course_student` (`id_course`,`id_student`) VALUES ('$idCourse', '$idStudent')";
       	   $this -> connect -> query($sql);
       }
    }
    public function delete_student_course($idStudent, $idCourse){
    	if (isset($idStudent) && !empty($idStudent)) {
    		$sql = "DELETE FROM `course_student` WHERE `id_student` = '$idStudent' and `id_course` = '$idCourse'";
    		$this -> connect -> query($sql);
    	}
    }
    public function show_relative(){
    	    $sql = "SELECT * FROM `courses` as `c` INNER JOIN `students` as `s` INNER JOIN `course_student` as `cs` on(`c`.`id` = `cs`.`id_course` and `s`.`id` = `cs`.`id_student`);";
    		$resQuery = $this -> connect -> query($sql);
            return $resQuery;
    }
}
$host = '127.0.0.1';
$db   = 'testTask';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

?>