<?
$pais=$_POST['fabricante'];
$tabla=strtolower("paquetes_".$_POST['fabricante'].$_POST['destino']);
?>
<html>
<head>
<title>Editando destino destacado...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p><strong>Destino destacado:</strong> <br>
  Indique el precio oferta del destino destacado, el destino, y la foto correspondiente 
  al destino y que aparecera en el anuncio del destino destacado.</p>
<p>Pais:<b> <? echo $pais?></b> </p>
<form action="add_foto.php" method="post" enctype="multipart/form-data" name="formulario">
  <p>Precios desde: 
    <input type="text" name="precio">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input name="pais" type="hidden" id="pais" value="<? echo $pais?>">
    <input name="tabla" type="hidden" id="tabla" value="<? echo $tabla?>">
    <input name="dest" type="hidden" id="dest" value="<? echo $_POST['destino']?>">
    Foto: 
    <input name="userfile" type="file">
    <br>
    Destino: 
    <input name="destino" type="text" id="destino">
    <br>
    <br>
    <input type="submit" name="Submit" value="Continuar">
  <p><a href="../index.php">Volver </a>
</form>
</p>
</body>
</html>