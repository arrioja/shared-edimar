<?
session_start();
include("config.php");

?>
<html>
<head>
<title>Modifica las fotos, Prestige</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="movilstilos.css">
<script language="javascript">
function BotonDerecho(e) {
   var mensaje = "No es posible, disculpe las molestias."
   if (navigator.appName == 'Netscape' && e.which == 3) {
      alert(mensaje)
      return false
   } else if (navigator.appName == 'Microsoft Internet Explorer' && event.button == 2) {
      alert(mensaje)
      return false
   }
   
   return true
}
if (navigator.appName == 'Netscape') 
   document.captureEvents(Event.MOUSEDOWN)
	
document.onmousedown = BotonDerecho

function album()
 {
 venta2=window.open("album.php?idc2=<? echo $_SESSION['id']?>","","menubar=no resizable=yes location=no status=no directories=no scrollbars=yes") 
 }
</script>
</head>
<body>
<form enctype="multipart/form-data" action="<?PHP echo $PHP_SELF ?>" 
method="post">
<div align="left">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
      <strong><font size="2" face="Arial, Helvetica, sans-serif">Enviar un archivo:</font></strong> 
      <input name="userfile" type="file">
    </p>
    <p><font size="2" face="Arial, Helvetica, sans-serif"><strong>Modificar:</strong></font> 
      <select name="cual">
        <option value="foto1" selected>Foto 1</option>
      </select>
      <em>(Para Borrar alguna foto simplemente deje en blanco el campo...)</em> 
    </p>
    <p> 
      <input type="submit" name="submit" value="Enviar" class="caja">
    </p>
  </div>
</form>
<?PHP 

// directorio en donde se copian las imagenes
$dir="img/productos/"; 

// copy the file to the server 
if (isset($submit)){ 

if (!is_uploaded_file ($userfile)){ 

echo ""; 
} 

// check whether it has been uploaded 
if($userfile!="")
 {
$num=rand(1,10000);
if (is_uploaded_file ($userfile)){ 
move_uploaded_file($userfile,$dir.$num.$userfile_name) ;
if($_POST['cual']) //verifica si se ha enviado un post, sino no hace la conexion a la bd
 {
$foto=$_POST['cual'];
$linko=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

$ssqlo_file="select * from productos where idpro='".$_SESSION['pid']."'";
$re_file=mysql_query($ssqlo_file);
$ro_file=mysql_fetch_array($re_file);
 if($ro_file[$foto]!='img/nofoto.gif')
  {
  unlink($ro_file[$foto]);
  }
  
$ssqlo="update productos set ".$foto."='".$dir.$num.$userfile_name."' where idpro='".$_SESSION['pid']."'";
mysql_query($ssqlo);
mysql_close($linko);
$msg="Tu foto ha sido grabada con exito!";
}
} 
}
else
 {
 $foto=$_POST['cual'];
 $linko=mysql_connect($dbhost,$dbuser,$dbpass);
 mysql_select_db($db);
 $ssqlo="update productos set ".$foto."='img/nofoto.gif' where idpro='".$_SESSION['pid']."'";
 mysql_query($ssqlo);
 mysql_close($linko);
 $msg="Se ha borrado su foto...";
 }
echo "<font size='2' face='arial'><b>".$msg."</b></font>";//!! <a href=\"$userfile_name\" target=\"_blank\" >abrirlo</a>"; 
} 
?>
</body>
</html>