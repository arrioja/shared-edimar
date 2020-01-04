<?php include('conexion.php');
 
 
if (isset($_POST['boton']))  {
 	    
  if  ($_POST['boton']=="Aceptar") {
    //modificar  noticias
	if ((trim($_FILES['Imagen']["name"])!="")&&(trim($_FILES['VP']["name"])!="")){
	$nom_arch=$_FILES["Imagen"]["name"]; $cad='';
	$nom_arch2=$_FILES["VP"]["name"];
	if ($nom_arch!=''){copy($Imagen, "Galeria/".$_POST['Dpto']."/".$nom_arch);}
	if ($nom_arch2!=''){copy($VP, "Galeria/thumbnails/".$_POST['Dpto']."/tn_".$nom_arch);}
	
	
	  
	}else {$vacios=1;}
 
 }//del aceptar
  if ($vacios==0){header("Location: galeria.php?".$UR."&Id=".$_GET["Id"]."&Usr=".$_GET["Usr"]."&permiso=".$_GET["permiso"]);}
}else{
 
}//del if isset


   
 $query_reg_most = "SELECT Titulo FROM  edimar where Idioma='".$id."'";
 $reg_most = mysql_query($query_reg_most, $conexion) or die(mysql_error());
 $rowEdimar = mysql_fetch_assoc($reg_most);
 

 
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
    <td><table width="98%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" class="Titulo"><br>
            <?php echo "Insertar Nueva Imagen"?> </td>
      </tr>
      <tr>
        <td ><br>
            <br>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="52%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <form action="" method="post" enctype="multipart/form-data" name="form2">
                      <tr >
                        <td align="center" colspan="2" ><table width="100%"  border="0" cellspacing="0" cellpadding="0">

                            <tr align="left">
                              <td width="16%" height="40">*Departamento:</td>
                              <td width="84%" height="40">
                                  <select name="Dpto" id="Dpto">                                    
                                    <option value="Biologia Marina">Biología Marina </option> 
									<option value="Biologia Pesquera">Biología Pesquera </option>   
									<option value="Control de Calidad">Control de Calidad </option>   
									<option value="Cultivos">Cultivos </option>   
									<option value="Estudios Especiales">Estudios Especiales</option>   
									<option value="Oceanografia">Oceanografía </option>     
									<option value="SIGAM">SIGAM </option>
                                 
                                  </select>
                               </td>
                            </tr>
                            <tr>
                              <td height="40">*Imagen a mostrar: </td>
                              <td align="left"><input name="Imagen" type="file" id="Imagen" value="">
                                  <input name="Img" type="hidden" id="Img" value="<?php echo $Img?>"></td>
                            </tr>
                            <tr>
                              <td height="40">*Vista miniatura: </td>
                              <td align="left"><input name="VP" type="file" id="VP" value=""></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td width="69%" height="50" class="Borde_Punteado Estilo1">* Datos Obligatorios</td>
                        <td width="31%" height="20" align="center">&nbsp;</td>
                      <tr>
                        <td height="30" >&nbsp;</td>
                        <td height="35" align="center" class="Borde_Punteado"><input name="boton" type="submit" id="boton" value="Aceptar">
                            <input name="boton" type="submit" id="boton" value="Cancelar"></td>
                    </form>
                </table></td>
              </tr>
            </table>
          <p class="Parrafo">&nbsp; </p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php if ($vacios==1){?>
 <script language="JavaScript" >
 	         alert('Debe introducir todos los campos obligatorios');
           </script>
<?php }?>
