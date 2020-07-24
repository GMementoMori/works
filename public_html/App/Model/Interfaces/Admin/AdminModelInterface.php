<?php
namespace App\Model\Interfaces\Admin;

interface AdminModelInterface
{
	
	public function countElems($selectTable);

    public function getAdmin($login);
	
	public function getListTable($table,$minPart);

	public function addInfo($selectTable, $arrValues, $arrColumn);

	public function updateInfo($selectTable, $idField, $newValues, $columns);

	public function deleteField($selectTable, $idField);

}
