<?php include('conexion.php');
   /*$query="SELECT  ProyectoE as Permiso FROM permisopag";
   $reg_Per=mysql_query($query, $conexion) or die(mysql_error()); $rowPer = mysql_fetch_assoc($reg_Per);*/
   ///////////////////////////////////////////funciones/////////////

function parametrosBuq($campo,$palabras){ 
 $num=count($palabras); $i=1;
 $parametro= $campo." like '%".$palabras[0]."%'";
    while ($i<$num){
     $parametro.=" or ".$campo." like '%".$palabras[$i]."%'";
	 $i++;
    }
	return $parametro;	
}
  /////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  $parametro="";
  $parametro2="";
 if (trim($_POST["busqueda"])!=""){
    $Busq=trim($_POST["busqueda"]);
    $palabras= explode(" ",$Busq);
    //*$num=count($palabras); $i=1;
    /*$parametro="'%".$palabras[0]."%'";
    while ($i<$num){
     $parametro.=" or '%".$palabras[$i]."%'";
	 $i++;
    }*/
   $parametro=parametrosBuq('Titulo',$palabras);
  $parametro2=parametrosBuq('Descrip',$palabras);
    $query = "SELECT linea_invest.Cod, Titulo, LEFT(Descrip,100) as Descrip, Dpto, Nombre FROM linea_invest inner join departamento on Dpto=departamento.Cod and linea_invest.Idioma='".$id."' and linea_invest.Idioma=departamento.Idioma WHERE ".$parametro." or ".$parametro2."  order by Dpto" ;
  $reg_most = mysql_query($query, $conexion) or die(mysql_error());
  $totalRows_reg_most = mysql_num_rows($reg_most);
  

 }
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
        <td width="74%" valign="top"><br>
          <table width="98%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" class="Titulo"> <br></td>
            </tr>
            <tr>
              <td valign="top"><?php if ($totalRows_reg_most!=0){?><br>
                <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
			   <tr>
			      <td width="88%" height="40" align="center" ><span class="Titulo">
			        <?php  
			  $cad=''; 
			  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{$cad='Line of Investigation';}else
			{echo "Lineas de Investigaci&oacute;n";}; ?>
			      </span></td>
			      </tr>
			    
               <?php $dpto=0;$i=1;
			  while($rowEdimar = mysql_fetch_assoc($reg_most)){
			  if ($dpto!=$rowEdimar["Dpto"]){
			  $dpto=$rowEdimar["Dpto"];?>
			    <tr>
                <td height="40" class="Borde_PunteadoII"><p class="Titulo_II"><br><?php echo $rowEdimar["Nombre"];?></p>                  </td>
                </tr> <?php }?>
                <tr>
                  <td height="50" class="Parrafo_II"><a href="<?php echo "linea.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$rowEdimar["Cod"]."&Usr=".$usr;?>"><?php echo $rowEdimar["Titulo"];?></a><br><?php echo $rowEdimar["Descrip"];?></td>
                  </tr>
			    <?php $i++;}
				
				?>
              </table>              
                <p>
                  <?php } 
				  $parametro=parametrosBuq('Titulo',$palabras);
                  $parametro2=parametrosBuq('Objetivos',$palabras);
				    $query = "SELECT proyecto.Cod, Titulo, LEFT(Objetivos,100) as Descrip, Dpto, Nombre, Tipo FROM proyecto inner                                        join departamento on     Dpto=departamento.Cod and proyecto.Idioma='".$id."' and             proyecto.Idioma=departamento.Idioma WHERE  ".$parametro. " or ".$parametro2."  order by Dpto" ;
                        $regProy = mysql_query($query, $conexion) or die(mysql_error());
                       $totalRowsProy = mysql_num_rows($regProy);
				  
				  if ($totalRowsProy!=0){?>
                </p>
                <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="88%" height="40" align="center" ><span class="Titulo">
                      <?php  
			  $cad=''; 
			  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{$cad='Projects of Investigation ';}else
			{echo "Proyectos de Investigaci&oacute;n";}; ?>
                    </span></td>
                  </tr>
                  <?php $dpto=0;$i=1;
			  while($rowProy = mysql_fetch_assoc($regProy)){
			  if ($dpto!=$rowProy["Dpto"]){
			  $dpto=$rowProy["Dpto"];?>
                  <tr>
                    <td height="40" class="Borde_PunteadoII"><p class="Titulo_II"><br>
                          <?php echo $rowProy["Nombre"];?></p></td>
                  </tr>
                  <?php }?>
                  <tr>
                    <td height="50" class="Parrafo_II"><a href="<?php echo "proyecto.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$rowProy["Cod"]."&Usr=".$usr;?>"><?php echo $rowProy["Titulo"];?></a><br>
                        <?php echo $rowProy["Descrip"];?></td>
                  </tr>
                  <?php $i++;}?>
                </table>   <?php }?>              <p>
                  <?php 
				  $parametro=parametrosBuq('Descrip',$palabras);
                  $query = "SELECT publicacion.Cod, Descrip,Dir, Dpto, Nombre, Tipo FROM publicacion inner                                        join departamento on     Dpto=departamento.Cod and publicacion.Idioma='".$id."' and             publicacion.Idioma=departamento.Idioma WHERE  ".$parametro."  order by Dpto" ;
                        $regPubli = mysql_query($query, $conexion) or die(mysql_error());
                       $totalRowsPubli= mysql_num_rows($regPubli);
				  
				 if ($totalRowsPubli!=0){?>
</p>
                <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="40" colspan="2" align="center" ><span class="Titulo">
                      <?php  
			  $cad=''; 
			  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{$cad='Publications ';}else
			{echo "Publicaciones";}; ?>
                    </span></td>
                  </tr>
                  <?php $dpto=0;$i=1;
			  while($rowPubli = mysql_fetch_assoc($regPubli)){
			  if ($dpto!=$rowPubli["Dpto"]){
			  $dpto=$rowPubli["Dpto"];?>
                  <tr>
                    <td height="40" colspan="2" class="Borde_PunteadoII"><p class="Titulo_II"><br>
                            <?php echo $rowPubli["Nombre"];?></p></td>
                  </tr>
                  <?php }?>
                  <tr>
                    <td width="92%" height="50" class="Parrafo_II">
                        <?php echo $rowPubli["Descrip"];?></td>
                    <td width="8%" align="center" class="Parrafo_II"><span class="borde_rayado">
                      <?php if ($rowPubli["Dir"]!=''){?>
                      <a href="<?php echo "Publicaciones/".$rowPubli["Dir"];?>"><img border="0" name="<?php echo "pdf".$i;?>" src="Imagenes/pdf.gif" width="35" height="33"></a>
                      <?php }else{?>
                      &nbsp;
                      <?php }?>
                    </span></td>
                  </tr>
                  <?php $i++;}?>
                </table>
                <?php  }?>
                <p>
                  <?php 
				  $parametro=parametrosBuq('Titulo',$palabras);
                  $parametro2=parametrosBuq('Descrip',$palabras);
				    $query = "SELECT Cod, Titulo, LEFT(Descrip,100) as Descrip, Tipo FROM noticia WHERE  ".$parametro. " or ".$parametro2;
                        $regNot = mysql_query($query, $conexion) or die(mysql_error());
                       $totalRowsNot = mysql_num_rows($regNot);
				  
				  if ($totalRowsNot!=0){?>
</p>
                <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="88%" height="40" align="center" ><span class="Titulo">
                      <?php  
			  $cad=''; 
			  if ((isset($_GET["Id"]))&& ($_GET["Id"]=='_Ing'))
			{echo "Ultimas Noticias";}else
			{echo "Ultimas Noticias";}; ?>
                    </span></td>
                  </tr>
                  <?php $dpto=0;$i=1;
			  while($rowNot = mysql_fetch_assoc($regNot)){?>
                  <tr>
                    <td height="50" class="Borde_PunteadoII"> <p class="Parrafo_II"><a href="<?php echo "noticia.php?".$UR."&Id=".$_GET["Id"]."&Cod=".$rowNot["Cod"]."&Usr=".$usr."&T=".$rowNot["Tipo"];?>"><?php echo $rowNot["Titulo"];?></a><br>
                        <?php echo $rowNot["Descrip"];?></p></td>
                  </tr>
                  <?php $i++;}?>
                </table>
                <?php }?>
                <p><br>               
                </p></td>
            </tr>
        </table>
          </td>
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
