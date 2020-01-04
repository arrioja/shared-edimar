<?php $conexion = mysql_connect("localhost", "root", ""); 
mysql_select_db("bd_edimar", $conexion);
 $UR="fti=yes&curmbox=00000000%2d0000%2d0000%2d0000%2d000000000001&a=c49ada04efe4dbbebabf65088e7c412b19e55dc687b349189bd90b9e41231034";
$id='';$usr='0'; $permiso=''; ; $Nick=''; $subtitulo=''; $Dpto1='';$CodDpto=''; $Tipo='';$CodT='';
 if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing')){  $id='I';} else { $id='E';}
 
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
	if ((trim($_POST['Participantes'])!="")&&(trim($_POST['Titulo'])!="")&&(trim($_POST['Tip'])!="")&&(trim($_POST['Objetivos'])!="")&&(trim($_POST['Dpto'])!="")){
	 $nom_arch=$_FILES["arch"]["name"];
	 if ($_GET["Op"]=='M'){
	   mysql_query("BEGIN",$conexion); 
       $insertvend = sprintf("update proyecto set Fase=%s, Titulo=%s, Objetivos=%s, Participantes=%s, Dpto=%s, Tipo=%s where Cod=%s",
	                   GetSQLValueString($_POST['Fase'], "text"),
					   GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Objetivos'], "text"),
					   GetSQLValueString($_POST['Participantes'], "text"),
					   GetSQLValueString($_POST['Dpto'], "text"),
					   GetSQLValueString($_POST['Tip'], "text"),
					   GetSQLValueString($_GET['Cod'], "text"));
       $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	   if (mysql_errno() != 0){$err=1;}
		// $num = count($nomFoto)-1; 
		if (($err==0)&&($nom_arch!='')){		
		 
		  copy($arch, "Proyectos/".$nom_arch);
		  $insertvend = sprintf("update proyecto set  Descarga=%s where Cod=%s",
					   GetSQLValueString($nom_arch, "text"),					   
					   GetSQLValueString($_GET['Cod'], "text"));
          $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
		if (mysql_errno() != 0){$err=1;}
		}
		
		if ($err==1){
		    mysql_query("ROLLBACK",$conexion);
		 }else{
		    mysql_query("COMMIT",$conexion);
		 } //else
	    
	  }else{
	  if ($nom_arch!=''){		copy($arch, "Proyectos/".$nom_arch);}
	    $insertvend = sprintf("INSERT INTO proyecto (Titulo, Fase, Objetivos, Participantes,Dpto, Tipo, Descarga,Idioma) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Titulo'], "text"),
					   GetSQLValueString($_POST['Fase'], "text"),
					   GetSQLValueString($_POST['Objetivos'], "text"),
					   GetSQLValueString($_POST['Participantes'], "text"),
					   GetSQLValueString($_POST['Dpto'], "text"),
					   GetSQLValueString($_POST['Tip'], "text"),
					   GetSQLValueString($nom_arch, "text"),
					   GetSQLValueString($id, "text"));
        $Result2 = mysql_query($insertvend, $conexion) or die(mysql_error());
	  } // $_GET["Op"] 
	  
	}else {$vacios=1;}
 
}//del aceptar
  if ($vacios==0){header("Location: proyectosE.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&T=".$_GET["T"]);}
}else{
  if ($_GET["Op"]=='M'){
  $query_reg_most = "SELECT proyecto.Cod, Nombre as Dpto, departamento.Cod as CodDpto, Titulo, Fase, Objetivos,
                    Participantes, Tipo  FROM proyecto inner join 
                    departamento on Dpto=departamento.Cod and departamento.Idioma='".$id."' 
					and proyecto.Cod='".$_GET["Cod"]."'";
  $Proy = mysql_query($query_reg_most, $conexion) or die(mysql_error());
  $rowProy = mysql_fetch_assoc($Proy);
  $Titulo=$rowProy["Titulo"]; $Fase=$rowProy["Fase"];$Objetivos=$rowProy["Objetivos"];$Participantes=$rowProy["Participantes"];
  $Dpto1=$rowProy["Dpto"];$CodDpto=$rowProy["CodDpto"];
  if ($rowProy["Tipo"]=='E'){$Tipo='Ejecución'; $CodT='E';}else{$Tipo='Culminado';$CodT='C';}
  }
}//del if isset

///////////////////////////////////////////captura el periso del usuario////////////////////////////////////////////////////////////
 if ((empty($_GET["Usr"]))||($_GET["Usr"]=='0')){  
  if ((!empty($_POST["nick"]))&&(!empty($_POST["pass"]))){
   $query="SELECT Cod, Permiso, Nick FROM usuario where Nick='".$_POST["nick"]."' and Pass='".$_POST["pass"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
 }else{$query="SELECT Cod, Permiso, Nick FROM usuario where Cod='".$_GET["Usr"]."'";
   $reg_Usr=mysql_query($query, $conexion) or die(mysql_error());
   $rowUsr = mysql_fetch_assoc($reg_Usr); $usr=$rowUsr["Cod"]; $permiso=$rowUsr["Permiso"];$Nick=$rowUsr["Nick"];}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
 $query_reg_most = "SELECT Titulo FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 
 if ($_GET["Op"]=='M'){  $subtitulo='Modificar Proyecto Investigación'; }else{$subtitulo='Añadir Nuevo Proyecto de Investigación';}
 
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

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('Imagenes/eliminar.jpg')">
<script language="JavaScript1.2">mmLoadMenus('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Izq.jpg" width="319" height="82"></td>
                <td width="96%"><img src="Imagenes/Centro_Sup.jpg" width="100%" height="36"></td>
                <td width="2%" rowspan="2"><img src="Imagenes/Banner_Der_Sup.jpg" width="385" height="82"></td>
              </tr>
              <tr>
                <td height="46" align="right" background="Imagenes/Linea_R.jpg"><a href="<?php echo "index.php?Usr=".$usr;?>">Espa&ntilde;ol</a> /<a href="<?php echo "index.php?Id=_Ing&Usr=".$usr;?>"> Ingles</a></td>
              </tr>
          </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="143"><table width="143"  border="0" cellspacing="0" cellpadding="0" height="42">
          <tr>
            <td width="50" rowspan="2" align="left"><img src="Imagenes/Curva_II.jpg" width="50" height="42"></td>
            <td width="71" ><table width="71"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="29" align="left"><img src="Imagenes/casa.jpg" width="29" height="23"></td>
                  <td width="13"><img src="Imagenes/Centro_M.jpg" width="13" height="23"></td>
                  <td width="29" align="right"><img src="Imagenes/Sobre.jpg" width="29" height="23"></td>
                </tr>
            </table></td>
            <td width="22" rowspan="2" align="left"><img src="Imagenes/Curva_III.jpg" width="22" height="42"></td>
          </tr>
          <tr>
            <td  valign="bottom"><img src="Imagenes/curva_I.jpg" width="71" height="19"></td>
          </tr>
        </table></td>
        <td width="363" align="center" background="Imagenes/Centro_Inf_II.jpg"><table width="95%" height="35" cellpadding="0" cellspacing="0"  class="Borde_Punteado">
          <form name="form1" method="post" action="">
            <tr>
              <td width="41%" class="letra_Busq"><div align="right">Busqueda /Search: &nbsp;</div></td>
              <td width="43%">
                <input type="text" name="textfield">
              </td>
              <td width="16%"><input type="submit" name="Submit" value="  Ir "></td>
            </tr>
          </form>
        </table></td>
        <td >&nbsp;</td>
        <td width="296" align="right"><img src="Imagenes/Banner_Der_Inf.jpg" width="296" height="42"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12%" valign="top"><script language="JavaScript">menuP('<?php echo $_GET["Id"];?>','<?php echo $usr;?>');</script></td>
        <td width="74%" valign="top"><table width="98%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="Titulo"> <br> 
              <?php echo $subtitulo;?>      </td>
          </tr>
          <tr>
            <td align="right" ><br>
              <br>                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <form action="" method="post" enctype="multipart/form-data" >
                        <tr >
                          <td align="center" colspan="2" >
                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="40" align="left" colspan="4" class="Borde_PunteadoII"><p class="Titulo_II">Datos Generales</p> </td>
                              
                              </tr>
                              <tr>
                                <td width="16%" height="40" align="left">*Titulo:</td>
                                <td colspan="3" align="left">&nbsp;</td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4"><textarea name="Titulo" cols="75" rows="2" id="textarea3"><?php echo $Titulo;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40">*Fase:</td>
                                <td height="40"><input name="Fase" type="text" id="Fase2" size="60" value="<?php echo $Fase;?>"></td>
                                <td height="40">*Estado:</td>
                                <td height="40"><select name="Tip" id="Tip">
								<?php if ($_GET["Op"]=='M'){ ?>
								<option value="<?php echo $CodT;?>"><?php echo $Tipo;?></option><?php }?>
                                  <option value="E">Ejecucui&oacute;n</option>
                                  <option value="C">Culminado</option>
                                </select></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Objetivos:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Objetivos" cols="75" rows="6" id="textarea4"><?php echo $Objetivos;?></textarea></td>
                              </tr>
                              <tr align="left">
                                <td height="40" colspan="4">*Participantes:</td>
                              </tr>
                              <tr align="left">
                                <td colspan="4"><textarea name="Participantes" cols="75" rows="6" id="textarea5"><?php echo $Participantes;?></textarea></td>
                              </tr>
                              <?php /* if ($_GET["Op"]=='M'){ ?>
                              <tr align="left">
                                <td height="40" colspan="4"><table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="40%" height="30">Personal Edimar</td>
                                      <td width="13%" rowspan="2" align="center"><input name="boton2" type="button" value="    &gt;    "
								                                            onClick="move(this.form.per,this.form.perI)" >
                                          <br>
                                          <input type="button" name="Submit2" value="   &lt;&lt;   " onClick="move(this.form.perI,this.form.per)">
                                      </td>
                                      <td width="47%">Personal Involucrado </td>
                                    </tr>
                                    <?php
							   $query="SELECT Cod, Nombre, Apellido FROM personal where Idioma='".$id."'";
                               $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); 
							   ?>
                                    <tr>
                                      <td><select name="per" size="6" multiple id="select">
                                          <?php while ($row_Per = mysql_fetch_assoc($reg_Per)){ ?>
                                          <option value="<?php echo $row_Per['Cod']?>"><?php echo $row_Per['Nombre']." ".$row_Per['Apellido']; ?> </option>
                                          <?php }   ?>
                                      </select></td>
                                      <?php
							   $query="SELECT Cod, Nombre, Apellido FROM personal, per_proy where Cod=Cod_Pe and Cod_Pro='".$_GET["Cod"]."'";
                               $reg_PerI=mysql_query($query, $conexion) or die(mysql_error()); 
							   ?>
                                      <td width="47%"><select name="perI" size="6" multiple id="perI" onclick="chequear(this.form.perI)">
                                          <?php while ($row_PerI = mysql_fetch_assoc($reg_PerI)){ ?>
                                          <option value="<?php echo $row_PerI['Cod']?>" selected><?php echo $row_PerI['Nombre']." ".$row_PerI['Apellido']; ?> </option>
                                          <?php }   ?>
                                      </select></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <?php }*/?>
                              <tr align="left">
                                <td height="40">*Departamento:</td>
                                <?php 
					           $query="SELECT Cod, Nombre FROM departamento where Idioma='".$id."'";
                               $reg_Dpto=mysql_query($query, $conexion) or die(mysql_error());
					        ?>
                                <td height="40" colspan="3"><select name="Dpto" id="select2">
                                    <?php  if ($_GET["Op"]=='M'){?>
                                    <option value="<?php echo $CodDpto?>"><?php echo $Dpto1; ?> </option>
                                    <?php }?>
                                    <?php while ($row_Dpto = mysql_fetch_assoc($reg_Dpto)){ ?>
                                    <option value="<?php echo $row_Dpto['Cod']?>"><?php echo $row_Dpto['Nombre']; ?> </option>
                                    <?php }   ?>
                                </select></td>
                              </tr>
                             
                              <tr>
                                <td height="40">Adjuntar Archivo: </td>
                                <td width="39%" align="left"><input name="arch" type="file" id="arch2" value="<?php echo $arch;?>"></td>
                                <td width="22%" align="left">**Permiso de Archivo:</td>
                                <td width="23%" align="left"><select name="select">
                                    <option value="0">Todo P&uacute;blico</option>
                                    <option value="2">Usuario Registrado</option>
                                </select></td>
                              </tr>
                             
                          </table></td>
                        </tr>
                        <tr>
                          <td width="69%" height="30" align="left" valign="bottom" >&nbsp;</td>
                          <td width="31%" height="20" align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="50" align="left" class="Borde_Punteado Estilo1"> * Datos Obligatorios<br>
**Dato Obligatorio si Adjunta un Archivo</td>
                          <td height="35" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton2" value="Aceptar">
                          </td>
                        </tr>
                        <?php  if ($_GET["Op"]=='M'){ ?>
                        <tr align="left">
                          <td height="40" colspan="2" class="Borde_PunteadoII" ><p class="Titulo_II">Personal de Edimar Involucrado en el Proyecto </p></td>
                        </tr>
                        <tr align="left">
                          <td height="20" colspan="2" > </td>
                        </tr>
                        <tr>
                          <td height="50" colspan="2" ><table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0" class="cuadro">
                              <tr align="center" class="Titulo_I" bgcolor="#6699CC">
                                <td width="53%" height="30" >Personal</td>
                                <td width="40%" >Cargo</td>
                                <td width="7%">&nbsp;</td>
                              </tr>
                              <?php
					        $query="SELECT Cod, Nombre, Apellido, per_proy.Cargo FROM personal, per_proy where Cod=Cod_Pe and Cod_Pro='".$_GET["Cod"]."'";
                            $reg_PerI=mysql_query($query, $conexion) or die(mysql_error()); $i=1;
							while ($row_PerI = mysql_fetch_assoc($reg_PerI)){ ?>
                              <tr>
                                <td height="30" align="center" class="borde_SupI"><?php echo $row_PerI["Nombre"]." ".$row_PerI["Apellido"]?></td>
                                <td align="center" class="borde_SupI"><?php echo $row_PerI["Cargo"]?></td>
                                <td class="borde_Sup"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="center"><a href="#" onClick="window.open('<?php echo "elimPerPro.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET['Cod']."&CodPe=".$row_PerI["Cod"];?>','','height=200,width=375');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('$i;?>','','Imagenes/eliminar.jpg',1)"><img src="Imagenes/eliminar2.jpg" alt="Eliminar T&iacute;tulo" name="<?php echo "elim".$i;?>" width="21" height="23" border="0"></a></td>
                                    </tr>
                                </table></td>
                              </tr>
                              <?php $i++;}//while?>
                          </table>
                            <p align="right"><span class="Borde_Punteado"><A  title="A&ntilde;adir Nueva Facilidad" href="<?php echo "Insertperpro.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$usr."&Cod=".$_GET['Cod']."&T=".$_GET["T"];?>"><img src="Imagenes/nuevo.jpg" width="21" height="23" border="0">A&ntilde;adir</A> </span></p></td>
                        </tr>
                        <?php }?>
                      </form>
                  </table></td>
                </tr>
              </table>             </td>
          </tr>
          <tr>
            <td height="30" align="right" class="Borde_Punteado" >&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right"  >&nbsp;</td>
          </tr>
        </table></td>
        <td width="14%" class="borde_rayado"><table width="100%" height="535"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
              <td >Noticias</td>
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
