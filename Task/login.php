<?php
session_start();
require __DIR__."/vendor/autoload.php"; //require autoloader

use Task\App\Controller\Admin\AdminUsersController;

if (isset($_POST["login"]) && isset($_POST["pass"])){

      $login = htmlspecialchars($_POST["login"]);
      $pass = htmlspecialchars($_POST["pass"]);

      $block = new AdminUsersController();

      $arrayValues = $block -> checkAdmin($login, $pass);

      if ($arrayValues[0] === true) {
         if ($arrayValues[1] === true) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $pass;
            header('location: App/view/admin_page.phtml');
         }else{
            echo "Password is not right";
         }
      }else{
          echo "Login is not right";
      }
}
require __DIR__."/public/html/login.html";
?>

