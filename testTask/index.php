<?php 
require("views/header.phtml");
require_once("models/model.php");
if (isset($_POST['okCourse']) && !empty($_POST['okCourse'])) {
	$controlCourse = new Courses($pdo);
	if (isset($_POST['addCTitle']) && !empty($_POST['addCTitle'])) {
		$controlCourse -> add_course($_POST['addCTitle'],$_POST['addCTeacher']);
	}
	else if (isset($_POST['changeCColumn']) && !empty($_POST['changeCColumn'])) {
		$controlCourse -> change_course($_POST['changeCColumn'],$_POST['changeCTitle'],$_POST['changeCValue']);
	}
	else if (isset($_POST['delC']) && !empty($_POST['delC'])) {
		$controlCourse -> delete_course($_POST['delC']);
	}
}
if (isset($_POST['okStudent']) && !empty($_POST['okStudent'])) {
	$controlCourse = new Students($pdo);
	if (isset($_POST['addSSurname']) && !empty($_POST['addSSurname'])) {
		$controlCourse -> add_student($_POST['addSSurname'],$_POST['addSName'],$_POST['addSEmail'],$_POST['addSTitlePhoto']);
	}
	else if (isset($_POST['changeSColumn']) && !empty($_POST['changeSColumn'])) {
		$controlCourse -> change_student($_POST['changeSColumn'],$_POST['changeSId'],$_POST['changeSValue']);
	}
	else if (isset($_POST['delS']) && !empty($_POST['delS'])) {
		$controlCourse -> delete_student($_POST['delS']);
	}
}
else if (isset($_POST['okStudentCourse']) && !empty($_POST['okStudentCourse'])) {
	$controlCourse = new StudentCourse($pdo);
	if (isset($_POST['addSidToC']) && !empty($_POST['addSidToC'])) {
		$controlCourse -> add_student_course($_POST['addSidToC'],$_POST['addStoCid']);
	}
	else if (isset($_POST['delSidFromC']) && !empty($_POST['delSidFromC'])) {
		$controlCourse -> delete_student_course($_POST['delSidFromC'],$_POST['delSFromCid']);
	}
}
$tableRel = new StudentCourse($pdo);
$resultRel = $tableRel -> show_relative();

require("views/headerTable.phtml");
	foreach ($resultRel as $key => $value) {
		foreach ($value as $k => $v) {
			if (!is_numeric($k)) {
				if ($k === 'title') {
					$title = $v;
				}
				else if ($k === 'teacher') {
					$teacher = $v;
				}
				else if ($k === 'id') {
					$id = $v;
				}
				else if ($k === 'surname') {
					$surname = $v;
				}
				else if ($k === 'name') {
					$name = $v;
				}
				else if ($k === 'email') {
					$email = $v;
				}
				else if ($k === 'index_photo') {
					$photo = $v;
				}
								
			}
		   
		}
		require("views/positionsTable.phtml");
	}
require("views/footerTable.phtml");

$tablesC_S = new WorkDB($pdo);
$studentsT = $tablesC_S -> show_table('students');
require("views/tableHeaderStudents.phtml");
	foreach ($studentsT as $key => $value) {
		foreach ($value as $k => $v) {
			if (!is_numeric($k)) {
				if ($k === 'id') {
					$idS = $v;
				}
				else if ($k === 'surname') {
					$surnameS = $v;
				}
				else if ($k === 'name') {
					$nameS = $v;
				}
				else if ($k === 'email') {
					$emailS = $v;
				}
				else if ($k === 'index_photo') {
					$photoS = $v;
				}
			}
		}
		require("views/tablePositionsStudents.phtml");
	}
require("views/footerTable.phtml");

$coursesT = $tablesC_S -> show_table('courses');
require("views/tableHeaderCourses.phtml");
	foreach ($coursesT as $key => $value) {
		foreach ($value as $k => $v) {
			if (!is_numeric($k)) {
				if ($k === 'id') {
					$idC = $v;
				}
				else if ($k === 'title') {
					$titleC = $v;
				}
				else if ($k === 'teacher') {
					$teacherC = $v;
				}
			}
		}
		require("views/tablePositionsCourses.phtml");
	}
require("views/footerTable.phtml");

require("views/forms.phtml");

require("views/footer.phtml");
?>
