<?php
namespace App\Model\News;

use App\Model\Connect;
use App\Model\Interfaces\News\NewsModelInterface;

class News extends Connect implements NewsModelInterface
{
	public function getIds(){

       $sql = "SELECT `id` FROM `news`;";

       $data = $this -> db -> query($sql);

       return $data;
	}

	public function getTitle($id = ''){
		
		if (!isset($id)) {

			$sql = "SELECT `title` FROM `news`;";

		}else{

			$sql = "SELECT `title` FROM `news` WHERE `id` = '$id';";

		}

         $data = $this -> db -> query($sql);

         return $data;
	}

	public function getShortDescription(){

	   $sql = "SELECT `short_description` FROM `news`;";

       $data = $this -> db -> query($sql);

       return $data;
	}

	public function getFullDescription(){
		
	   $sql = "SELECT `full_description` FROM `news`;";

       $data = $this -> db -> query($sql);

       return $data;
	}

	public function getPublicationDate(){

	   $sql = "SELECT `publication_date` FROM `news`;";

       $data = $this -> db -> query($sql);

       return $data;
	}

	public function getDataList($partMin){
       
	   $sql = "SELECT * FROM `news` 

	                    ORDER BY `publication_date` DESC LIMIT $partMin, 10;";

       $data = $this -> db -> query($sql);

       return $data;
	}

	public function getFullInfo($id = ''){

	   $sql = "SELECT * FROM `news` WHERE `id` = '$id';";

       $data = $this -> db -> query($sql);

       return $data;
	}

}


?>
