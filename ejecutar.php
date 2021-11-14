<?php

/*Este es el primer formulario*/
 if(isset($_POST['Agregar'])){
  
  
  $id = $_POST["uno"];
  $numerot = $_POST['dos'];
  $nombre = $_POST['tres'];
  $mail = $_POST['cuatro'];
  $tipo = $_POST['cinco'];
  echo $id;
  echo $numerot;
  echo $nombre;
  echo $mail;
  echo $tipo;   
  echo "<br> Se agrego con exito!!";

 }
	  
	  
	  /*Este es el segundo formualrio*/
	  
	 if(isset($_POST['Consulta'])){
  
  
  $ret = $_POST['la'];
  $dep = $_POST['le'];
  $sal = $_POST['li'];

  echo $ret;
  echo $dep;
  echo $sal;
  
  echo "<br> Se ejecuto con exito!!"; 
	  
}
	  
?>