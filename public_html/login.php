<?php

session_start();

require __DIR__."/vendor/autoload.php"; //require autoloader

use App\Controller\Admin\AdminController;

if (isset($_POST["login"]) && isset($_POST["pass"])){

      $login = htmlspecialchars($_POST["login"]);
      $pass = htmlspecialchars($_POST["pass"]);

      $block = new AdminController();

      $arrayValues = $block -> checkAdmin($login, $pass);
      
      if ($arrayValues[0] === true) {

         if ($arrayValues[1] === true) {

            $_SESSION['login'] = $login;

            $_SESSION['password'] = $pass;

            header('location: App/view/admin_page.php');

         }else{

            echo "Password is not right";

         }

      }else{

          echo "Login is not right";
          
      }
}
require __DIR__."/public/html/login.html";

