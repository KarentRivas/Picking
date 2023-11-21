<!DOCTYPE php>
  <link href='http://fonts.googleapis.com/css?family=Paprika|Merienda+One|Courgette' rel='stylesheet' type='text/css'>

<head>
	<style type="text/css">
		body {
        background: #fff url(images/blurred.jpg) no-repeat center top;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
      }
      h1 {
    font-family: 'Merienda One', cursive;
        font-size: 35px;
        text-shadow: 0.1em 0.1em 0.05em #C1BDC2;
        color: #703F06;
      }
	</style>
</head>
<body style="background-image: url(css/pattern.png), url(fondo.jpg);">

<br>
<br>
<br>
<br>

 <center>
  <h1>IMPORTANDO CONSUMOS INTERNOS</h1>
  <form action='csv_consumo.php' method='post' enctype="multipart/form-data">
   <h1>
   Importar Archivo : <input type='file' name='sel_file' size='20'>
   <input type='submit' name='submit' value='ACTUALIZAR BASE DE DATOS'>
  </form>
 </body>

 <form action="user.php" method="post">
   <br>
   <center>
     <button name="button">Volver</button>
 </form>
</html>
