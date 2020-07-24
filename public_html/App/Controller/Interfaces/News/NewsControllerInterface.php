<?php

namespace App\Controller\Interfaces\News;

interface NewsControllerInterface{

	public function countElems();

	public function getTitleBlock();

	public function getShortInfo($partMin);

	public function getInfoById();

}
