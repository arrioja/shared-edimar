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

$ido2=fopen("especiales.txt","a+");
$text=fgets($ido2,1000);
fclose($ido2);

$dato=explode("|",$text);

?>
<html>
<head>
<title>Modificar Especiales...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
-->
</style>
</head>
<body>
<p align="center">&nbsp;</p>
<p><strong><font size="2" face="Arial, Helvetica, sans-serif"><img src="../images/Img.gif" width="18" height="18"> 
  Modificar Especiales</font></strong></p>
<p><font size="2" face="Arial, Helvetica, sans-serif">Especiales se muestran a 
  continuacion cambie el texto para modificar,</font></p>
<form action="modifica_especiales.php" method="post" name="formo">
  <p><font size="2" face="Arial, Helvetica, sans-serif">Especial 1:</font></p>
  <p> <font size="2" face="Arial, Helvetica, sans-serif"> 
    <textarea name="esp1" cols="30" rows="6" id="esp1"><? echo $dato[0]?></textarea>
    </font></p>
  <p> <font size="2" face="Arial, Helvetica, sans-serif">Especial 2:<br>
    <textarea name="esp2" cols="30" rows="6" id="esp2"><? echo $dato[1]?></textarea>
    </font></p>
  <p><font size="2" face="Arial, Helvetica, sans-serif">Especial 3:<br>
    <textarea name="esp3" cols="30" rows="6" id="esp3"><? echo $dato[2]?></textarea>
    </font></p>
  <p><font size="2" face="Arial, Helvetica, sans-serif"> 
    <input type="submit" name="Submit" value="Modificar Especiales...">
    </font></p>
  <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="index.php"><img src="../images/icon_newest_reply.gif" width="18" height="9" border="0"> 
    Volver al panel</a></font></p>
</form>
<br>
</body>
</html>
