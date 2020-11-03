<?php
  define('LOGIN','1234');
  define('PASSWORD','julien');
  $errorMessage = '';
 
  if(!empty($_POST)) 
  {
    if(!empty($_POST['login']) && !empty($_POST['mdp'])) 
    {
      if($_POST['login'] !== LOGIN) 
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['mdp'] !== PASSWORD) 
      {  
        $errorMessage = 'Mauvais mot de passe !';
      }
        else
      {
        session_start();
        $_SESSION['login'] = LOGIN;
        header('Location: http://192.168.65.60/julien/TPWEB/PhP/TP1/Ex%20Final/ExFinal.php');
        exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez saisir correctement vos identifiants !';
    }
  }
?>
https://www.apprendre-php.com/tutoriels/tutoriel-14-les-sessions.html