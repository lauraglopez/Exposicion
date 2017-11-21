<?php 
include("conexion.php");
?>
<html>
<!DOCTYPE html>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/estilosiconos.css">
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Patrick+Hand" />

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
         <script>
         $(document).ready(function() {
            $('select').material_select();
              });
      </script>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
       <div class="navbar-fixed" id="runners">
       <nav>
    <div class="nav-wrapper amber" id="runners">
      <a href="#!" class="brand-logo"><i class="material-icons">local_florist</i>Moda, calidad y lujo </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="Index.php"><i class="material-icons left">filter_vintage</i>Inicio</a></li>
        <li><a href="InsertarJoya.html"><i class="material-icons left">add_shopping_cart</i>Registro de nueva joyer&iacutea</a></li>
        <li><a href="Eliminajoya.php"><i class="material-icons left">grid_off</i>Eliminar registros</a></li>
        <li><a href="reporte.php"><i class="material-icons left">photo_library</i>Reporte</a></li>
        <li><a href="Contacto.html"><i class="material-icons left">local_library</i>Contabilidad</a></li>
      </ul>
      </div>
       </nav>
      </div>
<center>
<form method="POST" action="Eliminar.php">
	Vender alg&uacute;na joya<br>
IDJoya:<input type="text" name="Idj"><br>
<input type="submit" name="Enviar" value="Eliminar registro">
<input type="reset" name="Limpiar" value="Nuevo">
</center>
</form>

 <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Seleccionar</option>
       <?php 
       $SQLconsulta="SELECT * FROM joyas ORDER BY Tipo DESC";
        $ejecuta=mysql_query($SQLconsulta);
        while ($datos=mysql_fetch_array($ejecuta)) {?>
      <option value="<?php echo $datos['Idjoyas']?>"><?php echo $datos['Tipo'];?></option>
       <?php } ?>
    </select>

        <table class="striped">
        <thead>
          <tr>
              <th>Idjoyas</th>
              <th>Tipo</th>
              <th>Descripci&oacute;n</th>
              <th>Precio</th>
              <th>Cantidad</th>
          </tr>
        </thead>

        <tbody>
        <?php $SQLconsulta="SELECT * FROM joyas ORDER BY Tipo DESC";
        $ejecuta=mysql_query($SQLconsulta);
        while ($datos=mysql_fetch_array($ejecuta)) {?>
          <tr>
            <td><?php echo $datos['Idjoyas']?></td>
            <td><?php echo $datos['Tipo']?></td>
            <td><?php echo $datos['Descripcion']?></td>
            <td><?php echo $datos['Precio']?></td>
            <td><?php echo $datos['Cantidad']?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>


  </form>
</body>
</html>