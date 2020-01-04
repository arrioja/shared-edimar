<?php include('conexion.php');
 
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
    
	if ((trim($_POST['Part'])!="")&&(trim($_POST['Cargo'])!="")){
	 mysql_query("BEGIN",$conexion);
	    $insertvend = sprintf("INSERT INTO per_proy (Cod_Pro, Cod_Pe, Cargo) VALUES (%s, %s, %s)",
                       GetSQLValueString($_GET['Cod'], "text"),
					   GetSQLValueString($_POST['Part'], "text"),
					   GetSQLValueString($_POST['Cargo'], "text"));   
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  if (mysql_errno() != 0){$err=1;}else{
	 $insertvend = sprintf("update edimar,departamento, proyecto set edimar.FechaA=%s, departamento.FechaA=%s where departamento.Cod=proyecto.Dpto and departamento.Idioma=edimar.Idioma and proyecto.Idioma=departamento.Idioma and proyecto.Cod=%s",
                       GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString(date('Y/m/d'), "text"),
					   GetSQLValueString($_GET['Cod'], "text"));
            $Result3 = mysql_query($insertvend, $conexion) or die(mysql_error());
			if (mysql_errno() != 0){$err=1;}
	 }  
	  if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
	  }else{
		    mysql_query("COMMIT",$conexion);
	  } //else*/
	  
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: instProy.php?".$UR."&Id=".$_GET["Id"]."&Op=M&Usr=".$_GET["Usr"]."&Cod=".$_GET["Cod"]."&T=".$_GET["T"]);}

}//del if isset


   

 
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
            <td align="center" > <div  class="Titulo"><br> <?php  echo  "Nuevo Participante"; ?></div>      </td>
          </tr>
          <tr>
            <td >
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
					<form name="form2" method="post" action="">
                      <tr>
                        <td height="30" colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="20" colspan="2" class="Titulo_II">                          <table width="90%"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="30">*Participante:</td>
							  <?php
							   $query="SELECT Cod, Nombre, Apellido, Cod_Pro FROM personal left join  per_proy on Cod=Cod_Pe and
							           Cod_Pro='".$_GET['Cod']."' and Idioma='".$id."' where Cod_Pro is null";
                               $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); 
							   ?>
                              <td><select name="Part" id="Part">
							   <?php while ($row_Per = mysql_fetch_assoc($reg_Per)){ ?>
                                   <option value="<?php echo $row_Per['Cod']?>"><?php echo $row_Per['Nombre']." ".$row_Per['Apellido']; ?> </option>
                                <?php }   ?>
                              </select></td>
                            </tr>
                            <tr>
                              <td width="28%" height="30">*Cargo:</td>
                              <td width="72%"><select name="Cargo" id="Cargo">
                                <option value="Coordinador">Coordinador</option>
                                <option value="Investigador">Investigador</option>
                              </select></td>
                            </tr>
                          </table></td>
                      </tr>
                      
                      <tr >
                        <td align="center" colspan="2" >&nbsp;                            </td>
                      </tr>
                      <tr>
                        <td width="72%" height="40" class="Borde_Punteado Estilo1">* Datos Obligatorios</td>
                        <td width="28%" height="20" align="center">&nbsp;</td>
                      <tr><td height="30" >&nbsp;</td>
                
	                    <td height="35" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton" value="Aceptar">
	                      <input name="boton" type="submit" id="boton" value="Cancelar"></td>
                      </form>
                    </table></td>
                    </tr>
                </table>
                <p class="Parrafo">&nbsp; </p></td>
          </tr>
        </table></td>
        <td width="14%" valign="top" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td valign="top" ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
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
<?php }?>
