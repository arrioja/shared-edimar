<?php $conexion = mysql_connect('localhost', 'borg1978_e2usr', 'ivotrino');
 mysql_select_db("borg1978_edimar2", $conexion);
 $UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";

 $id='';$usr='0'; $permiso=''; ; $Nick=''; $usrD='';
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
   
   
   function actualizar($id)
   {
    $insertvend = sprintf("update edimar set fechaA=%s where  Idioma=%s",
					   GetSQLValueString(date('Y/m/d'), "text"),
                       GetSQLValueString($id, "text"));
       $Result = mysql_query($insertvend, $conexion) or die(mysql_error());
   }
	
   
?>