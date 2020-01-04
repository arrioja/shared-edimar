<?php $conexion = mysql_connect('localhost:8889', 'root', 'root');
 mysql_select_db("bd_edimar", $conexion);
 $UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";

 $id='';$usr='0'; $permiso=''; ; $Nick=''; $usrD=''; $err=0;
 if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){  $id='I'; $Id='_Ing';} else { $id='E'; $Id='_E';}



///////////////////////////////////////////captura el periso del usuario////////////////////////////////////////////////////////////
  if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
    if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
      $query="SELECT Cod, Nick, CodDpto, Permiso, Nombre, Apellido, Correo FROM usuario LEFT JOIN usrdpto ON codU = cod
                 WHERE Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
      $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
      $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];$usrD=$rowUsr["CodDpto"];
	 }
   }else{$query="SELECT Cod, Nick, CodDpto, Permiso,Nombre, Apellido, Correo FROM usuario LEFT JOIN usrdpto ON codU = cod
                 WHERE Cod='".$_GET["Usr"]."'";
     $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
     $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];$usrD=$rowUsr["CodDpto"];
   }
   
   

	
   
?>