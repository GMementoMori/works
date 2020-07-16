<?php
namespace Task\App\Controller\Interfaces\Admin;

interface AdminControllerInterface
{
	public function getInfo($table);

	public function checkInfoToAdd($selectTable, $arrValues, $arrColumn);

    public function checkInfoToChange($selectTable, $idField, $newValues, $columns);

    public function checkInfoToDel($selectTable, $idField);

}
?>