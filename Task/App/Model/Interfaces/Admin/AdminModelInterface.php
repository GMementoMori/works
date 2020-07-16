<?php
namespace Task\App\Model\Interfaces\Admin;

interface AdminModelInterface
{
 
	public function getListTable($table);

	public function addInfo($selectTable, $arrValues, $arrColumn);

	public function updateInfo($selectTable, $idField, $newValues, $columns);

	public function deleteField($selectTable, $idField);

}

?>