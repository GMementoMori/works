<?php
namespace Task\App\Controller\News;

use Task\App\Controller\Interfaces\News\NewsControllerInterface;
use Task\App\Model\News\News as ModelNews;

class News implements NewsControllerInterface
{
	protected $data;

	function __construct(){

       $this -> data = new ModelNews();

	}
    public function countElems(){

        $result = 0;

    	$ids = $this -> data -> getIds(); 

        foreach ($ids as $item) {

        	$result++;
            
        }
            
        return $result;

    }
    public function getTitleBlock($id = ''){

        $title = $this -> data -> getTitle($id); 

        foreach ($title as $item) {
            return $item;
        }
            
    }
	public function getShortInfo($partMin){
       
        $countItems = $this -> countElems();

        $arr_bloks = [];

        $dataList = $this -> data -> getDataList($partMin);

        foreach ($dataList as $key => $value) {

        	foreach ($value as $keyValue => $item) {

        		if (!is_numeric($keyValue)) {

        			$arr_bloks[$key][] = $item;
        			
        		}
        	}
        }

        return $arr_bloks;
	}
    
    public function getInfoById($id = ''){
        
        $arr_info = [];

        $dataList = $this -> data -> getFullInfo($id);

        foreach ($dataList as $key => $value) {

            foreach ($value as $keyValue => $item) {

                if (!is_numeric($keyValue)) {

                    $arr_info[] = $item;
                    
                }
            }
        }

        return $arr_info;
    }
}
?>