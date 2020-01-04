<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cambiar status...</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<style TYPE="text/css">
<!--
A { font-family: Arial,Helvetica,sans-serif; color: #000000;text-decoration:underline}
-->
</style>
</head>
<body>
<form action="change_status.php" method="post" name="form"><p class="style1">Cambiar Status a:</p>
<p class="style1">
  <select name="status">
   <option>Productos embalados...</option>
   <option>Verificando Pago...</option>
   <option>Pedido en Espera...</option>
   <option>Esperando Pago de Pedido</option>   
  </select>
  <input type="submit" name="Submit" value="Cambiar Status..." />
  <input name="id" type="hidden" id="id" value="<? echo $_GET['id']?>" />
</p>
</form>
</body>
</html>
