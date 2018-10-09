<?php
 session_start();

 if (!empty($_SESSION['id']) && !empty($_SESSION['pass'])) {
  
  HTML::cabeceras(array('title' =>'Sistema seguro', 'description'=>'Lo que sea....'));
 $body = array('contenedor'=> array('uno'=> '<p>Usuario Valido</p>',
                                    'dos'=>'<a href="cerrar.php">Cerrar Sesión</a>'));
 
 HTML::cuerpo($body);

 HTML::pie();
 } else {
    //echo 'Área prohibida';
    header('Location: .?error=1');
 }