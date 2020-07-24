<?php
require __DIR__."/../../public/html/headMain.html"; //require tag head

use App\Controller\News\News;

$block = new News();

if (isset($_GET['data_min_block'])) {  //select actual render buttons
  
    $partMin = $_GET['data_min_block'];

    $actualButtonsNumber = $_GET['actual_block'];

    if ($actualButtonsNumber >= 3) {

    		  $pointBefore = $actualButtonsNumber - 1;

    	    $actualButtonsNumber += 1;

    }else{

         	$actualButtonsNumber = 2;

          $pointBefore = $actualButtonsNumber - 1;

          $actualButtonsNumber += 1;
    }
}
else{

   $partMin = 0;

   $actualButtonsNumber = 2;

   $pointBefore = $actualButtonsNumber - 1;

   $actualButtonsNumber += 1;

}


$short_info = $block -> getShortInfo($partMin); //get array block news

$countBlocks = 0;

foreach ($short_info as $key => $value) {

  $countBlocks++;

  if ($countBlocks <= 10) {

	   foreach ($value as $keyValue => $item) {

		    switch ($keyValue) {
		     	case 0:
				    $id = $item;
				    break;
			    case 1:
			    	$title = $item;
			     	break;
			    case 2:
				    $short_descriptions = $item;
				    break;
			    case 4:
			    	$publication_date = $item;
				  break;

		    }

	    }

	    require __DIR__."/frontend/templates/home_short_descriptions.html"; //require template with div news

   }else{

   	  break;

   }
}

$count_elems = $block -> countElems();

$number_list = 0;

if ($count_elems >= 10) {

  require __DIR__."/frontend/templates/back_tostart_button.html";

    for ($i=0; $i <= $count_elems; $i++) { // buttons to render list news

	      if ($i % 10 === 0) {

              $number_list++;
              
              $min = $i;
              
              if ($number_list >= $pointBefore && $number_list <= $actualButtonsNumber) {

	                //rquire buttons to change list news

                  require __DIR__."/frontend/templates/render_list_buttons.html";

               }

	       }
    }

  //values for 'to end' button 

  $endButton = $number_list; 

  $end = $min;

  require __DIR__."/frontend/templates/back_toend_button.html";
}

require __DIR__."/../../public/html/foot.html"; //require footer html
?>
