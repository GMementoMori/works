<?php
namespace App\Controller\Interfaces\Admin;

interface AdminControllerInterface
{
    public function getCountElems($selectTable);

    public function checkAdmin($login, $password);
	
	public function getInfo($table, $minPart);

	public function checkInfoToAdd($selectTable, $arrValues, $arrColumn);

    public function checkInfoToChange($selectTable, $idField, $newValues, $columns);

    public function checkInfoToDel($selectTable, $idField);

}
