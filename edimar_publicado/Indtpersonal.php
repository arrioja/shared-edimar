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
 	$err=0;    
  if  ($_POST['boton']=="Aceptar") {
    
	if ((trim($_POST['Nom'])!="")&&(trim($_POST['Ape'])!="")&&(trim($_POST['Cargo'])!="")
	    &&((trim($_POST['ListaArea'])!="")||(trim($_POST['Area'])!=""))&&((trim($_POST['ListaEsp'])!="")||(trim($_POST['Esp'])!=""))
		){ 
		$Cad_Area=''; $Cad_Esp='';
		if (trim($_POST['ListaArea'])!=""){$Cad_Area=$_POST['ListaArea'];}else{$Cad_Area=$_POST['Area'];}
		if (trim($_POST['ListaEsp'])!=""){$Cad_Esp=$_POST['ListaEsp'];}else{$Cad_Esp=$_POST['Esp'];};
		  $nom_arch=$_FILES["Foto"]["name"]; $Dpto='';
		 if ($_GET["CodD"]!=''){$Dpto=$_GET["CodD"];}else{$Dpto=$_POST['Depart'];};  
         $insertvend = sprintf("INSERT INTO personal (Nombre,Apellido,Cargo,Inf_Contacto,Sintesis,Categoria, Area, Idioma,Dir_Foto,Dpto) values(
		                        %s,%s,%s, %s, %s, %s,%s,%s, %s,%s)",
					   GetSQLValueString($_POST['Nom'], "text"),
                       GetSQLValueString($_POST['Ape'], "text"),
					   GetSQLValueString($_POST['Cargo'], "text"),
					   GetSQLValueString($_POST['Info'], "text"),
					   GetSQLValueString($_POST['Sintesis'], "text"),
					   GetSQLValueString($Cad_Esp, "text"),
					   GetSQLValueString($Cad_Area, "text"),
					   GetSQLValueString($id, "text"),
					   GetSQLValueString( $nom_arch, "text"),
					   GetSQLValueString($Dpto, "int"));
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if ($nom_arch!=''){				 
		  copy($arch, "Personal/".$nom_arch);}

	  
	}else {$vacios=1;}
 
  }//del aceptar
  if ($vacios==0){header("Location: investigadores.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]);}
  else{if (trim($_POST['ListaArea'])!=""){$are=$_POST['ListaArea'];}else{$are=$_POST['Area'];}
		if (trim($_POST['ListaEsp'])!=""){$cate=$_POST['ListaEsp'];}else{$cate=$_POST['Esp'];}}
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
<script language="vbscript">
sub NuevArea_onClick()
 if (Document.forma.NuevArea.checked) then
    Document.forma.ListaArea.disabled="true"
    Document.forma.Area.disabled="false"
	 Document.forma.Area.focus
 else
    Document.forma.Area.value=""
 	Document.forma.ListaArea.disabled="false"
    Document.forma.Area.disabled="true"
 end if	 
end sub
sub NuevEsp_onClick()
 if (Document.forma.NuevEsp.checked) then
    Document.forma.ListaEsp.disabled="true"
    Document.forma.Esp.disabled="false"
	 Document.forma.Esp.focus
 else
    Document.forma.Esp.value=""
 	Document.forma.ListaEsp.disabled="false"
    Document.forma.Esp.disabled="true"
 end if	 
end sub
</script>
<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><iframe name="cabecera" frameborder="0"  width="100%" height="124" src="<?php echo "Cabecera.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
		<form action="" method="post" enctype="multipart/form-data" name="forma">
          <tr>
            <td height="30" colspan="2" align="center" class="Titulo">&nbsp;</td>
            </tr>
          <tr align="left">
            <td height="30" colspan="2" class="Borde_PunteadoII" ><p class="Titulo_II">Datos Generales</p> </td>
          </tr>
          <tr>
            <td height="30" colspan="2" align="center" ><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30" colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td width="16%" height="30" align="left">*Nombre:</td>
                <td width="24%" align="left"><input name="Nom" type="text" id="Nom" ></td>
                <td width="11%">*Apellido:</td>
                <td width="49%" align="left"><input name="Ape" type="text" id="Ape" >                  </td>
              </tr>
              <tr>
                <td height="40" align="left" >*Cargo:</td>
                <td height="30" colspan="3" align="left"><input name="Cargo" type="text" size="65" ></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="246" colspan="2" valign="top">
                <table width="95%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="31%" height="40" align="left" >*Area:</td>
					<?php 
					   $query="SELECT Distinct Area FROM personal where Idioma='".$id."'";
                       $reg_Area=mysql_query($query, $conexion) or die(mysql_error());
					  ?>
                    <td width="69%" class="Titulo_II"><select name="ListaArea" id="ListaArea">
					 <?php while ($row_Area = mysql_fetch_assoc($reg_Area)){ ?>
                      <option value="<?php echo $row_Area['Area']?>"><?php echo $row_Area['Area']; ?> </option>
                      <?php }   ?>	
                    </select><?php if (isset($_POST['Area'])){?>
					<script language="vbscript">
					Document.forma.ListaArea.disabled="true"</script>
					<?php }?> </td>
                  </tr>
                  <tr>
                    <td height="20" align="left"><p>&nbsp;&nbsp;
                        <input name="NuevArea" type="checkbox" id="NuevArea" value="checkbox">
						<?php if (isset($_POST['NuevArea'])){?><script language="vbscript">Document.forma.NuevArea.checked="true"</script><?php }?>
  Nueva Area:                   </p></td>
                    <td height="20"><span class="Titulo_II">
                      <input name="Area" type="text" id="Area2">
					  <?php if (empty($_POST['Area'])){?><script language="vbscript">Document.forma.Area.disabled="true"</script><?php }?>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="40" align="left">*Especialidad:</td>
					<?php 
					   $query="SELECT Distinct Categoria FROM personal where Idioma='".$id."'";
                       $reg_Esp=mysql_query($query, $conexion) or die(mysql_error());
					  ?>
                    <td height="20"><select name="ListaEsp" id="ListaEsp">
					
					 <?php while ($row_Esp = mysql_fetch_assoc($reg_Esp)){ ?>
                      <option value="<?php echo $row_Esp['Categoria']?>"><?php echo $row_Esp['Categoria']; ?> </option>
                      <?php }   ?>	
                    </select><?php if (isset($_POST['Esp'])){?>
					<script language="vbscript">
					Document.forma.ListaEsp.disabled="true"</script>
					<?php }?>  </td>
                  </tr>
                  <tr>
                    <td height="20">&nbsp;&nbsp;
                      <input name="NuevEsp" type="checkbox" id="NuevEsp" value="checkbox">
					  <?php if (isset($_POST['NuevEsp'])){?><script language="vbscript">Document.forma.NuevEsp.checked="true"</script><?php }?>
Nueva Esp.:</td>
                    <td height="20"><span class="Titulo_II">
                      <input name="Esp" type="text" id="Area3" >
					   <?php if (empty($_POST['Esp'])){?><script language="vbscript">Document.forma.Esp.disabled="true"</script><?php }?>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="40" align="left">*Departamento:</td>
					<td height="30">
					<?php if ($_GET["CodD"]==''){
					   $query="SELECT Cod, Nombre FROM departamento where Idioma='".$id."'";
                       $reg_Dpto=mysql_query($query, $conexion) or die(mysql_error());
					  ?>
                    <select name="Depart" id="Depart">
					 <?php while ($row_Dpto = mysql_fetch_assoc($reg_Dpto)){ ?>
                      <option value="<?php echo $row_Dpto['Cod']?>"><?php echo $row_Dpto['Nombre']; ?> </option>
                      <?php }   ?>	
                    </select><?php }  else {echo $_GET["NomD"];} ?>	</td>
                  </tr>
                  <tr>
                    <td height="40" align="left">Foto:</td>
                    <td height="40" align="left"><input name="Foto" type="file" id="Foto" value="" ></td>
                  </tr>
                  <tr>
                    <td height="40" align="left" colspan="2">Informacion de contacto: </td>
                  </tr>
                  <tr>
                    <td height="40" align="left" colspan="2"><textarea name="Info" cols="40" rows="4" id="Info"><?php echo $Info?></textarea></td>
                  </tr>
				  <?php 
				    $query_reg = "SELECT * from especialidad where Cod='".$_GET["Cod"]."'";
                    $Esp = mysql_query($query_reg, $conexion) or die(mysql_error());
				  while ($regEsp = mysql_fetch_assoc($Esp)){?>
				  <?php }?>
                </table>                </td>
            </tr>
		  <tr>
		    <td height="40" colspan="2" >Sintesis de Investigaci&oacute;n (<em>M&aacute;ximo 150 Palabras</em>):</td>
		    </tr>
		  <tr align="center">
		   <td colspan="2" align="left" valign="top" ><textarea name="Sintesis" cols="70" rows="7" id="Sintesis"><?php echo $Sintesis;?></textarea></td>
		  </tr>
		  <tr align="right">
		    <td width="66%" height="40" align="left" class="Borde_Punteado Estilo1" >*Datos Obligatotios </td>
		    <td width="34%"  >&nbsp;</td>
		  </tr>
		  <tr align="right">
		    <td height="40" >&nbsp;</td>
		    <td height="40" class="Borde_Punteado" ><input name="boton" type="submit" id="boton3" value="Aceptar">
              <input name="boton" type="submit" id="boton3" value="Cancelar"></td>
		  </tr>
		  <tr align="center">
		    <td height="30" colspan="2" >&nbsp;</td>
		    </tr>
		  </form>
        </table>        </td>
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