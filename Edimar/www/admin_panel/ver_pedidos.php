<?
session_start();

if(!isset($_SESSION['tipo']))
 {
 $_SESSION['tipo']=0;
 }
if($_SESSION['tipo']!=3)
 {
 header("location:check.php");
 }

include("../config.php");
$linko8=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
$ssqlo8="select * from catalogos order by nombre asc";
$resulto8=mysql_query($ssqlo8);
$nums8=mysql_num_rows($resulto8);
//***-*-*-*-*-***********************************************************ADMIN
$ss_a="select * from administracion";
$re_a=mysql_query($ss_a);
$ro_a=mysql_fetch_array($re_a);
$max_pro_pag=$ro_a['max_pro_pag'];
$pagina=$ro_a['pagina'];
$dir=$ro_a['dir'];
$geren=$ro_a['geren'];
$titulo=$ro_a['titulo'];
$moneda=$ro_a['moneda'];
//***********************************************************************FIN ADMIN
mysql_close($linko8);

$subcatalogo=$_POST['subcatalogo'];
$TAMANO_PAGINA=$pagina;

if(!isset($_GET['pagina']))
 {
 $_GET['pagina']=1;
 }

$pagina = $_GET["pagina"]; 
 if (!$pagina) {
  $inicio = 0;
  $pagina=1; 
  } 
   else 
    {    
	 $inicio = ($pagina - 1) * $TAMANO_PAGINA; 
	} 
$txt_criterio="";
?>
<html>
<head>
<title>Edicion de clientes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style3 {font-size: 10px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.style5 {font-size: 10px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #000000; }
.style6 {color: #000000}
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<script>
function comentarios(testo)
 {
 status=testo
 }

function status2(num)
{
nume=num
window.open ('status.php?id='+nume, 'etiqueta', 'width=400,height=150,top=10,left=10,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=no,resizable=no')
}

function borrar(nume3){
var num3=nume3
resp=confirm("Seguro que desea Continuar?")
 if(resp==true)
  {

window.open ('../erase_pedido.php?pos='+num3, 'etiqueta', 'width=480,height=300,top=10,left=10,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=yes,resizable=yes');
 }
}

function datos_cliente(num2)
{
nume2=num2
window.open ('datos_cliente.php?id='+nume2, 'e3t2iqueta', 'width=640,height=480,top=10,left=10,toolbar=no,directories=no,menubar=no,status=yes,scrollbars=no,resizable=yes')
}
</script>
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
.style8 {
	color: #0369A7;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><table width="696" height="136" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0369A7">
      <tr>
        <td width="692" height="21" background="../img/barra.gif"><div align="center" class="style8"><font size="2" face="Arial, Helvetica, sans-serif">Pedidos</font></div></td>
      </tr>
      <tr>
        <td valign="top"><table width="513" height="595" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="513" height="595" valign="top"><table width="225" border="0">
                    <tr>
                      <td><div align="right">
                          <form action="ver_pedidos.php" method="get">
                            <font size="2" face="Arial, Helvetica, sans-serif">
                            <label></label>
                            </font>
                          </form>
                      </div></td>
                    </tr>
                    <tr>
                      <td><table width="846" height="13" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="50" bgcolor="#AEC0D4"><div align="center"><span class="style5">ID_Pedido</span></div></td>
                            <td width="40" bgcolor="#AEC0D4"><div align="center" class="style6">
                                <div align="center"><span class="style3">Pedido</span></div>
                            </div></td>
                            <td width="30" bgcolor="#AEC0D4"><div align="center" class="style6">
                                <div align="center"><span class="style3">Fecha</span></div>
                            </div></td>
                            <td width="39" bgcolor="#AEC0D4"><div align="center" class="style6">
                                <div align="center"><span class="style3">Monto</span></div>
                            </div></td>
                            <td width="40" bgcolor="#AEC0D4"><div align="center" class="style6">
                                <div align="center"><span class="style3">Status</span></div>
                            </div></td>
                            <td width="43" bgcolor="#AEC0D4"><div align="center"><span class="style3">Cliente</span></div></td>
                            <td width="36" bgcolor="#AEC0D4"><div align="center"><span class="style3">Forma Pago </span></div></td>
                            <td width="88" bgcolor="#AEC0D4"><div align="center"><span class="style3">Deposito</span></div></td>
                            <td width="100" bgcolor="#AEC0D4"><div align="center"><span class="style3">Banco</span></div></td>
                            <td width="10" bgcolor="#AEC0D4">&nbsp;</td>
                          </tr>
                          <tr>
                            <? 
            
		//miro a ver el n&uacute;mero total de campos que hay en la tabla con esa b&uacute;squeda 
		$conn=mysql_connect($dbhost,$dbuser,$dbpass);
		mysql_select_db($db);
		$ssql = "select * from pedidos"; 
		$rs=mysql_query($ssql); 
		$num_total_registros=mysql_num_rows($rs); //calculo el total de p&aacute;ginas 
		$total_paginas=ceil($num_total_registros/$TAMANO_PAGINA); //pongo el n&uacute;mero de registros total, el tama&ntilde;o de p&aacute;gina y la p&aacute;gina que se muestra 
		echo "<font face='arial' size='2'>Se han encontrado: <b>".$num_total_registros."</b> Pedidos</font><p>"; 
		
		//construyo la sentencia SQL 
		$ssql= "select * from pedidos limit ".$inicio.",".$TAMANO_PAGINA; 
		$rs = mysql_query($ssql); 
		
		while ($fila = mysql_fetch_object($rs))
		 {     
		  $conta++;//para cambiarle el color a las filas
		   
		print('<tr>
                 <td background="'.$back.'" bgcolor="#eae2ce"><font size="2" face="arial">'.$fila->id.'<a href="javascript:borrar('.$fila->id.')"> <img src="../images/i.p.delete.gif" alt="Borrar Pedido..." border="0"></a></font></td>
                 <td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial"><a href="../carrito_admin.php?carrito='.$fila->carrito.'&cantidad='.$fila->cantidad.'&id_cliente='.$fila->id_cliente.'" class="categoria" target="selasss">Ver productos...</font></center></td>
                 <td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial">'.$fila->fecha.'</font></td>
                 <td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial">'.$fila->monto." ".$moneda.'</font></td>
				 <td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial"><a href="javascript:status2('.$fila->id.')" title="Cambiar Status...">'.$fila->status.'</font></td>
<td background="'.$back.'" bgcolor="#cccccc"><center><font size="2" face="arial"><a href="javascript:datos_cliente('.$fila->id.')" title="Ver Datos...">Ver Cliente...</a></font></td>

<td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial">'.$fila->forma_pago.'</font></td>
<td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial">'.$fila->deposito.'</font></td>
<td background="'.$back.'" bgcolor="#eae2ce"><center><font size="2" face="arial">'.$fila->banco_receptor.'</font></td>
               </tr>
');
		
	} 
		 mysql_free_result($rs); 
		 mysql_close($conn); 
?>
                          </table></td>
                    </tr>
                  </table>
                <p align="center"><span class="style7">-Paginas</span><br>
                      <? 
		  if ($total_paginas > 1){ 
		    for ($i=1;$i<=$total_paginas;$i++)
			  {        
			   if ($pagina == $i)//si muestro el &iacute;ndice de la p&aacute;gina actual, no coloco enlace
			      echo $pagina . " ";
				else //si el &iacute;ndice no corresponde con la p&aacute;gina mostrada actualmente, coloco el enlace para ir a esa p&aacute;gina           
				 echo "<a href='ver_pedidos.php?pagina=".$i."&criterio=".$txt_criterio."'>".$i."</a> ";
				    } 
				 } 
		  ?>
                  </p>
                <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><br>
                </a></font></p>
                <table width="123" border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="123"><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="regresar.gif" width="117" height="34" border="0"></a></font></td>
                  </tr>
                </table></td>
            </tr>
          </table>
            <p>&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>