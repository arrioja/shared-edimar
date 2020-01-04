<?php include('conexion.php');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":       $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";       break;    
    case "int":       $theValue = ($theValue != "") ? intval($theValue) : "NULL";       break;
    case "double":       $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";       break;
    case "date":       $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";       break;
    case "defined":       $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;       break;
  }
  return $theValue;
  
}

if (isset($_POST['boton']))  {
 	    
  if  ($_POST['boton']=="Aceptar") {
    //modificar  noticias
	if ((trim($_POST['Nom'])!="")&&(trim($_POST['Ape'])!="")&&(trim($_POST['Correo'])!="")&&((trim($_POST['usrname'])!="")||($_GET["Usr"]=='1'))&&
    ((trim($_POST['pass'])=="")||(trim($_POST['Confpass'])!=""))){
	  $totalRows=0;
	  $query="SELECT Cod FROM usuario where Nick='".$_POST['usrname']."'";
      $reg_Usr2=mysql_query($query, $conexion) or die(mysql_error()); $totalRows = mysql_num_rows($reg_Usr2);
	  if (($totalRows==0)||($rowUsr["Nick"]==$_POST['usrname'])){
	   if ($_GET["Usr"]=='1'){$nick='root';}else{$nick=$_POST['usrname'];};
	   mysql_query("BEGIN",$conexion); 
       $insertvend = sprintf("update usuario set Nombre=%s, Apellido=%s, Correo=%s, Nick=%s where Cod=%s",
					   GetSQLValueString($_POST['Nom'], "text"),
					   GetSQLValueString($_POST['Ape'], "text"),
					   GetSQLValueString($_POST['Correo'], "text"),
					   GetSQLValueString($nick, "text"),
                       GetSQLValueString($_GET["Usr"], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
	   if ((trim($_POST['pass'])!="")&&(trim($_POST['Confpass'])!="")&&($_POST['Confpass']==$_POST['pass'])){
	       $insertvend = sprintf("update usuario set Pass=%s where Cod=%s",
					   GetSQLValueString($_POST['pass'], "text"),
					   GetSQLValueString($_GET["Usr"], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
	   }else{
	    if ((trim($_POST['Confpass'])!=trim($_POST['pass']))&&(trim($_POST['pass'])!=""))
		$err=2;
	   }// if verificar pass
	   if (($err==1)||($err==2)){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else
	  
	  }else{
	  $err=3;
	  }// if verificar nick
	}else {$vacios=1;}
 
}//del aceptar
  if (($vacios==0)&&($err==0)){header("Location: index.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
}else{
  $usrname=$rowUsr["Nick"];
  $Nom=$rowUsr["Nombre"];$Ape=$rowUsr["Apellido"]; $Correo=$rowUsr["Correo"]; 
}//del if isset

 
 if ($_GET["Op"]=='M'){  $subtitulo='Modificar Datos de Usuario'.$tipo; }else{$subtitulo='Registrar Usuario'.$tipo;}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Pagina Edimar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="Estilo_Edimar.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="menu_p.js"></script>

<script language="JavaScript" src="mm_menu.js"></script>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>" scrolling="no"></iframe></td>
  </tr>
  
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="81%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br> <?php  echo  $subtitulo; ?>      </td>
          </tr>
          <tr>
            <td ><br>
              <br>
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<form name="forma" method="post" action="">
                      <tr>
                        <td width="26%" height="40" >*Nombre:</td>
                        <td colspan="2" align="left"><input name="Nom" type="text" id="Nom" value="<?php echo $Nom;?>"></td>
                      </tr>
                      <tr>
                        <td height="30">*Apellido:</td>
                        <td colspan="2" align="left" ><input name="Ape" type="text" id="Ape"  value="<?php echo $Ape;?>">                        </td>
                      </tr>
                      <tr>
                        <td height="30">*Correo:</td>
                        <td height="30" colspan="2" class="Titulo_II"><input name="Correo" type="text" value="<?php echo $Correo;?>"></td>
                      </tr>
                      
                      <tr >
                        <td height="30" >*Nombre de Usuario:</td>
                        <td height="30" colspan="2" ><input name="usrname" type="text" id="usrname" value="<?php echo $usrname;?>">
						<?php if ($_GET['Usr']=='1'){?>
					     <script language="vbscript">
					     Document.forma.usrname.disabled="true"</script>
					    <?php }?> </td>
                      </tr>
                      <tr >
                        <td height="30" >Nueva Clave de Usuario: </td>
                        <td height="30" colspan="2" ><input name="pass" type="password" id="pass"></td>
                      </tr>
                      <tr >
                        <td height="30" >**Confirmar Clave: </td>
                        <td height="30" colspan="2" ><input name="Confpass" type="password" id="Confpass"></td>
                      </tr>
                      <tr>
                        <td height="60" class="Borde_Punteado Estilo1" colspan="2">* Datos Obligatorios<br>
                          <br>
                          **Dato Obligatorio en el caso de introducir
						 un Nueva Clave</td>
                        
                        <td height="20" align="center">&nbsp;</td>
                      <tr><td height="30" >&nbsp;</td>
                
	                    <td width="42%" height="35" align="center" >&nbsp;</td>
                        <td width="32%" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton" value="Aceptar">
                          <input name="boton" type="submit" id="boton" value="Cancelar"></td>
                      </form>
                    </table></td>
                    </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table></td>
        <td width="14%" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td valign="top"  ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><img src="Imagenes/barra_Inf.jpg" width="95%" height="27"></td>
  </tr>
</table>
</body>
</html>
<?php if ($vacios==1){?>
 <script language="JavaScript" >
 	         alert('Debe introducir todos los campos obligatorios');
           </script>
<?php }
if ($err=='2'){?>
 <script language="JavaScript" >
 	         alert('Confirmacion de Clave incorrecta');
           </script>
<?php } 
if ($err=='3'){?>
 <script language="JavaScript" >
 	         alert('Este Nombre de Usuario es utilizado por otra persona');
           </script>
<?php } ?>>
