<?php
require __DIR__."/../../vendor/autoload.php"; //require autoloader

use App\Controller\Admin\AdminController;

session_start();

if (isset($_SESSION['login']) && isset($_SESSION['password'])){

    $block = new AdminController();

    $arrayValues = $block -> checkAdmin($_SESSION['login'], $_SESSION['password']);

    if ($arrayValues[0] === true && $arrayValues[1] === true) {

        //require head
        require __DIR__."/../../public/html/admin_head.html";

        echo "<a href='../../login.php' id='exit'>EXIT</a>";

        //require admin buttons to change table
        require __DIR__."/adminhtml/templates/admin_button_tables.html";

        //select table
        $_SESSION['Table'] = (isset($_GET['title_tabel'])) ? $_GET['title_tabel'] : 'news';

        //select min id for load
        $_SESSION['Min_Numb'] = (isset($_GET['min_numb'])) ? $_GET['min_numb'] : 0;
        
        if (isset($_GET['actual_block'])) {  //select actual render buttons
  
            $actualButtonsNumber = $_GET['actual_block'];

            if ($actualButtonsNumber >= 3) {

               //pointBefore is value for button before actual
               $pointBefore = $actualButtonsNumber - 1;

               $actualButtonsNumber += 1;

            }else{

               $actualButtonsNumber = 2;

               $pointBefore = $actualButtonsNumber - 1;

               $actualButtonsNumber += 1;
            }
        }
        else{

            $actualButtonsNumber = 2;

            $pointBefore = $actualButtonsNumber - 1;

            $actualButtonsNumber += 1;

        }
        if (isset($_POST['arrInfoAdd'])) {//add element

       	   $block -> checkInfoToAdd($_SESSION['Table'],
       	   	                        $_POST['arrInfoAdd'][0],
       	   	                        $_POST['arrInfoAdd'][1]);

        }

        if (isset($_POST['arrToChange'])) {//update elements

        	$block -> checkInfoToChange($_SESSION['Table'],
        		                        $_POST['arrToChange'][0],
        		                        $_POST['arrToChange'][1],
        		                        $_POST['arrToChange'][2]);

        }

        if (isset($_POST['selectElemDel'])) {//delete elements

        	$block -> checkInfoToDel($_SESSION['Table'],
        		                        $_POST['selectElemDel']);

        }

        if (isset($_POST['exit'])) {

        	 unset($_SESSION['login']);
           unset($_SESSION['password']);

        }

        if (isset($_SESSION['Table'])) {

            $tableInfo = $block -> getInfo($_SESSION['Table'], $_SESSION['Min_Numb']);
             
            $slectTableTxt = ($_SESSION['Table'] === 'admins') ? 'Admins' : 'News';

            $count_elems = $block -> getCountElems($_SESSION['Table']);

            //show inputs add to tables
            
            echo "<h2 id='admin_txt_table'>$slectTableTxt</h2>";

            echo "<div id='mainAdminInfo'>";

            echo "<div id='divValuesToAdd'>";

            foreach ($tableInfo[0] as $array_keys_inputs => $value_inputs) {

           	   if (!is_numeric($array_keys_inputs)) {

                    if ($array_keys_inputs !== 'id' && $array_keys_inputs !== 'publication_date') {

                       $nameColumn = $array_keys_inputs;

                        //require admin_add
                       require __DIR__."/adminhtml/templates/admin_add_values.html";
                    }
           	   }
            }

            echo "<input type='button' title='Add Field' class='add_values' value='Add'>";

            echo "</div>";

            echo "<table>
	                <tr>";

            foreach ($tableInfo[0] as $array_keys => $array_names) {

           	   if (!is_numeric($array_keys)) {

           	      	echo "<th>$array_keys </th>";

           	   }

            }
            
            echo "<th>&#10004</th>";

            echo "<th>&#10006;</th>";

            echo" </tr>";

            $table_values = array_values($tableInfo);

            $idField = $count_elems;

            foreach ($table_values as $keys => $values) {

                echo "<tr>";

                foreach ($values as $key => $value) {

           	       if (!is_numeric($key)) {

                      if ($key === 'id'){

                    	 $idField = $value;

                      }

                      $selectColumn = $key;

           	      	  require __DIR__."/adminhtml/templates/admin_inputs_tochange.html";

           	        }

                }

                require __DIR__."/adminhtml/templates/admin_button_save_field.html";

                require __DIR__."/adminhtml/templates/admin_button_delete_field.html";

                echo "</tr>";

            }

            echo "</table>";
            echo "</div>";

            $actual_number = 0;

            if ($count_elems[0]['Count'] >= 10) {

              require __DIR__."/adminhtml/templates/admin_back_to_start_button.html";

              for ($i=0; $i <= $count_elems[0]['Count']; $i++) { 

                if ($i >=10) {

                  if ($i % 10 === 0) {

                    $actual_number++;

                    $min = $i;

                    if ($actual_number >= $pointBefore && $actual_number <= $actualButtonsNumber) {

                     require __DIR__."/adminhtml/templates/admin_render_list_button.html";

                    }

                  }
                }

              }
               //values for 'to end' button 

               $endButton = $actual_number; 

               $end = $min;

               require __DIR__."/adminhtml/templates/admin_back_to_end_button.html";
            }

        } //end of table

       require __DIR__."/../../public/html/admin_foot.html"; //require admin_foot
       
    }else{
  	    header('location: ../../login.php');
    }
}else{
	header('location: ../../login.php');
}
?>
