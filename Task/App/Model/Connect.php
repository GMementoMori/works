<?php

namespace Task\App\Model;

use PDO;

class Connect{

    private $db_name = 'blog_db';
    private $db_host = 'localhost';
    private $db_login = 'root';
    private $db_pass = '';

	protected $db;

    function __construct(){
		try 
        {
             $dns = "mysql:host=".$this -> db_host.";dbname=".$this -> db_name.";";
             $this -> db = new PDO($dns, $this -> db_login, $this -> db_pass);
        } 
        catch (Exception $ex) 
        { 
             die($ex->getMessage()); 
        }
	}
}


?>