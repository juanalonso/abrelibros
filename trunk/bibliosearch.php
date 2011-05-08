<?php
//ini_set('display_errors', 1);

  session_start();

  require_once("includes/twitteroauth/twitteroauth.php");   
  require_once("includes/htmlhelper.php");
  require_once("includes/bibliohelper.php");
  



  
  
  //Si tenemos sesión, estamos registrados
  //y vamos a la página principal
  //Lo mismo habría que hacer algún tipo más de comprobación
  if(empty($_SESSION['username'])){  
    header('Location: logout.php');  
  }  
  
  if(empty($_SESSION['bibliokey'])){  
    header('Location: bibliochoose.php');  
  }   
 
  if(empty($_REQUEST['searchtext'])) {
    header('Location: main.php');
  }
  
  starthtml(1, rawurlencode($_REQUEST['searchtext']));
  cabecera(true);  
  
  echo <<<FIN
  <h2>Añade los libros a tu lista o ve a buscarlos</h2>
  <div id='searchlist'><img src='img/progress.gif'/>Cargando resultados...</div>
  <div class='line'></div>
  <div class='flright'><a class='button blue' href='main.php'>volver</a></div>
FIN;
    
  
  endhtml();    