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
} $vacios=0;
if (isset($_POST['boton']))  {
 	$err=0;   
  if  ($_POST['boton']=="Guardar Cambios") {
	if ( (trim($_POST['Cod'])!="") && (trim($_POST['Nom'])!="") && (trim($_POST['Ape'])!="") && (trim($_POST['Cargo'])!="")
	    && ((trim($_POST['ListaArea'])!="")||(trim($_POST['Area'])!="")) && ((trim($_POST['ListaEsp'])!="")||(trim($_POST['Esp'])!=""))
		&& (trim($_POST['Depart'])!="") )
	{ 
		
		$Cad_Area=''; $Cad_Esp='';
		if (trim($_POST['ListaArea'])!=""){$Cad_Area=$_POST['ListaArea'];}else{$Cad_Area=$_POST['Area'];}
		if (trim($_POST['ListaEsp'])!=""){$Cad_Esp=$_POST['ListaEsp'];}else{$Cad_Esp=$_POST['Esp'];}
		$nom_arch=$_FILES["Foto"]["name"];
		 mysql_query("BEGIN",$conexion); 
         $insertvend = sprintf("update personal set Nombre=%s,Apellido=%s,Cargo=%s, Inf_Contacto=%s, Sintesis=%s, Categoria=%s, 
	                    Area=%s, Dpto=%s where Cod=%s",
					   GetSQLValueString($_POST['Nom'], "text"),
                       GetSQLValueString($_POST['Ape'], "text"),
					   GetSQLValueString($_POST['Cargo'], "text"),
					   GetSQLValueString($_POST['Info'], "text"),
					   GetSQLValueString($_POST['Sintesis'], "text"),
					   GetSQLValueString($Cad_Esp, "text"),
					   GetSQLValueString($Cad_Area, "text"),
					   GetSQLValueString($_POST['Depart'], "int"),					   
					   GetSQLValueString($_POST['Cod'], "text"));
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}
		
		if (($err==0)&&($nom_arch!='')){		
		   copy($Foto, "Personal/".$nom_arch);
		   $insertvend = sprintf("update personal set  Dir_Foto=%s where Cod=%s",
					   GetSQLValueString($nom_arch, "text"),					   
					   GetSQLValueString($_POST['Cod'], "text"));
           $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		   if (mysql_errno() != 0){$err=1;}
		}
		if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else*/
	  
	}else {$vacios=1;}
 
  }//del aceptar

  if ($vacios==0){ header("Location: investigador.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&Cod=".$_GET["Cod"]);}
  else{
        if (trim($_POST['ListaArea'])!=""){$are=$_POST['ListaArea'];}else{$are=$_POST['Area'];}
		if (trim($_POST['ListaEsp'])!=""){$cate=$_POST['ListaEsp'];}else{$cate=$_POST['Esp'];}
  }
}else{
 $query_reg_most = "SELECT personal.Cod, personal.Nombre, Apellido, Cargo, Dir_Foto, Inf_Contacto, Sintesis, Categoria, 
                   departamento.Nombre as Dpto, departamento.Cod as CodD, Area  FROM personal left join departamento on 
				   Dpto=departamento.Cod where personal.Cod='".$_GET["Cod"]."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error()); $rowEdimar = mysql_fetch_assoc($reg_most);
 $Cod=$rowEdimar['Cod']; $Nom=$rowEdimar['Nombre']; $Ape=$rowEdimar['Apellido']; $Cargo=$rowEdimar['Cargo']; 
 $Foto=$rowEdimar['Dir_Foto']; $Sintesis=$rowEdimar['Sintesis']; $cate=$rowEdimar['Categoria']; $are=$rowEdimar['Area'];
 $Dpto=$rowEdimar['Dpto']; $CodDpto=$rowEdimar['CodD'];  $Info=$rowEdimar['Inf_Contacto'];
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
            <td height="30" align="center" class="Titulo">&nbsp;</td>
            <td width="21%" align="center" class="Titulo">&nbsp;</td>
            <td width="24%" align="center" >&nbsp;</td>
          </tr>
          <tr align="left">
            <td height="30" colspan="3" class="Borde_PunteadoII" ><p class="Titulo_II">Datos Generales</p> </td>
          </tr>
          <tr>
            <td height="30" colspan="3" align="center" ><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30" colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td width="16%" height="30" align="left">*Nombre:</td>
                <td width="24%" align="left"><input name="Nom" type="text" id="Nom" value="<?php echo $Nom;?>"></td>
                <td width="11%">*Apellido:</td>
                <td width="49%" align="left"><input name="Ape" type="text" id="Ape" value="<?php echo $Ape;?>">
                  <input name="Cod" type="hidden" id="Cod" value="<?php echo $Cod;?>"></td>
              </tr>
              <tr>
                <td height="40" align="left" >*Cargo:</td>
                <td height="30" colspan="3" align="left"><input name="Cargo" type="text" size="65" value="<?php echo $Cargo;?>"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="55%" rowspan="2" valign="top">
                <table width="95%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="31%" height="40" align="left" >*Area:</td>
					<?php 
					   $query="SELECT Distinct Area FROM personal where Idioma='".$id."'";
                       $reg_Area=mysql_query($query, $conexion) or die(mysql_error());
					  ?>
                    <td width="69%" class="Titulo_II"><select name="ListaArea" id="ListaArea">
					<option value="<?php echo $are?>"><?php echo $are; ?> </option>
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
                      <input name="Area" type="text" id="Area2" value="<?php echo $Area;?>">
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
					<option value="<?php echo $cate?>"><?php echo $cate; ?> </option>
					 <?php while ($row_Esp = mysql_fetch_assoc($reg_Esp)){ ?>
                      <option value="<?php echo $row_Esp['Categoria']?>"><?php echo $row_Esp['Categoria']; ?> </option>
                      <?php }   ?>	
                    </select>
                      <?php if (isset($_POST['Esp'])){?>
                      <script language="vbscript">
					Document.forma.ListaEsp.disabled="true"</script>
                      <?php }?></td>
                  </tr>
                  <tr>
                    <td height="20">&nbsp;&nbsp;
                      <input name="NuevEsp" type="checkbox" id="NuevEsp" value="checkbox">
					  <?php if (isset($_POST['NuevEsp'])){?><script language="vbscript">Document.forma.NuevEsp.checked="true"</script><?php }?>
Nueva Esp.:</td>
                    <td height="20"><span class="Titulo_II">
                      <input name="Esp" type="text" id="Area3" value="<?php echo $Esp;?>">
					   <?php if (empty($_POST['Esp'])){?><script language="vbscript">Document.forma.Esp.disabled="true"</script><?php }?>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="40" align="left">*Departamento:</td>
					<?php 
					   $query="SELECT Cod, Nombre FROM departamento where Idioma='".$id."'";
                       $reg_Dpto=mysql_query($query, $conexion) or die(mysql_error());
					  ?>
                    <td height="30"><select name="Depart" id="Depart">
					<option value="<?php echo $CodDpto?>"><?php echo $Dpto; ?> </option>
					 <?php while ($row_Dpto = mysql_fetch_assoc($reg_Dpto)){ ?>
                      <option value="<?php echo $row_Dpto['Cod']?>"><?php echo $row_Dpto['Nombre']; ?> </option>
                      <?php }   ?>	
                    </select></td>
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
            <td  height="246" colspan="2" align="center" valign="top" class="borde_rayado"><p><img name="foto" src="<?php echo "personal/".$rowEdimar["Dir_Foto"]?>" width="201" height="215" alt=""></p>
              <br>          
              <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="40">Foto:</td>
                  <td><input name="Foto" type="file" id="Foto" value="<?php echo $Foto;?>" ></td>
                </tr>
              </table>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" class="borde_rayado">&nbsp;</td>
          </tr>
		  <tr>
		    <td height="40" colspan="3" >Sintesis de Investigaci&oacute;n (<em>M&aacute;ximo 150 Palabras</em>):</td>
		    </tr>
		  <tr align="center">
		   <td colspan="3" valign="top" ><textarea name="Sintesis" cols="70" rows="7" id="Sintesis"><?php echo $Sintesis;?></textarea></td>
		  </tr>
		  <tr align="right">
		    <td height="40" colspan="3" class="Borde_Punteado" ><input name="boton" type="submit" id="boton" value="Guardar Cambios"></td>
		    </tr>
		  <tr align="center">
		    <td height="30" colspan="3" >&nbsp;</td>
		    </tr>
		  </form>
        </table>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" class="Borde_PunteadoII"> <p class="Titulo_II">Titulos Obtenidos </p></td>
            </tr>
            <tr>
              <td><p>&nbsp;</p>
                <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" class="cuadro">
                <tr bgcolor="#6699CC">
                  <td width="49%" height="30" align="center" bgcolor="#6699CC" class="Titulo_I">T&iacute;tulo</td>
                  <td width="33%" align="center" class="Titulo_I">Universidad</td>
                  <td width="13%" align="center" class="Titulo_I">Fecha</td>
                  <td width="5%" class="Titulo_I">&nbsp;</td>
                </tr>
				<?php $tipo='';$i=1;
					$query_reg = "SELECT * from titulo where Cod='".$_GET["Cod"]."'  order by Tipo desc";
                    $Titulo = mysql_query($query_reg, $conexion) or die(mysql_error());
				while ($regTitulo = mysql_fetch_assoc($Titulo)) {
					if ($tipo!=$regTitulo["Tipo"]){
					   $tipo=$regTitulo["Tipo"];
					?>
                <tr bgcolor="#B9DCFF">
                  <td height="20" colspan="4" class="borde_Sup"><?php echo $regTitulo["Tipo"].":";?></td>
                </tr>
				  <?php };?>
                <tr>
                  <td height="30" class="borde_SupI"><p class="Parrafo_II"><?php echo $regTitulo["Titulo"];?></p></td>
                  <td class="borde_SupI"><?php echo $regTitulo["Universidad"];?></td>
                  <td class="borde_SupI"><?php echo $regTitulo["Mes"]." ".$regTitulo["ano"];?></td>
                  <td class="borde_Sup"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarTitulo.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET['Cod']."&CodT=".$regTitulo["Titulo"];?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elim".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar Título" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                    </tr>
                  </table></td>
                </tr>
				<?php $i++;}; ?>
              </table></td>
            </tr>
            <tr>
              <td height="40" align="right" class="Borde_Punteado"><A  title="Añadir Nueva Facilidad" href="<?php echo "Inserttitulo.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET['Cod'];?>">			  <img src="Imagenes/nuevo.jpg" width="21" height="23" border="0">A&ntilde;adir</A></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" class="Borde_PunteadoII">
                <p class="Titulo_II">Especialidades</p></td>
            </tr>
            <tr>
              <td><p>&nbsp;</p>
                  <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" class="cuadro">
                    <tr bgcolor="#6699CC">
                      <td width="88%" height="30" align="center" class="Titulo_I">T&iacute;tulo</td>
                      <td width="12%" class="Titulo_I">&nbsp;</td>
                    </tr>
                    <?php $tipo='';$i=1;
					$query_reg = "SELECT * from especialidad where Cod='".$_GET["Cod"]."'";
                    $Esp = mysql_query($query_reg, $conexion) or die(mysql_error());
				while ($regEsp = mysql_fetch_assoc($Esp)) {
					
					?>
                    
                    <tr>
                      <td height="30" class="borde_SupI"><p class="Parrafo_II"><?php echo $regEsp["Descrip"];?></p></td>
                      <td class="borde_Sup"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center"><a href="#" onClick="window.open('<?php echo "eliminarEsp.php?".$UR."Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET['Cod']."&CodT=".$regEsp["Descrip"];?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('<?php echo "elimE".$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar T&iacute;tulo" name="<?php echo "elimE".$i;?>" width="21" height="23" border="0"></a></td>
                          </tr>
                      </table></td>
                    </tr>
                    <?php $i++;}; ?>
                </table></td>
            </tr>
            <tr>
              <td height="40" align="right" class="Borde_Punteado"><A  title="A&ntilde;adir Nueva Facilidad" href="<?php echo "InsertEsp.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET['Cod'];?>"> <img src="Imagenes/nuevo.jpg" width="21" height="23" border="0">A&ntilde;adir</A></td>
            </tr>
          </table>          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        <td width="14%" valign="top" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td ><iframe frameborder="0"  width="100%" height="800" src="<?php echo "linknoti.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr?>"></iframe></td>
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