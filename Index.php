<?php 
include("conexion.php");
if(!empty($_POST['tipo'])&& !empty($_POST['des']) &&!empty($_POST['precio'])&&!empty($_POST['cantidad'])){
  $SQL="INSERT INTO joyas(Tipo,Descripcion,Precio,Cantidad) VALUES
  ('".$_POST['tipo']."','".$_POST['des']."','".$_POST['precio']."','".$_POST['cantidad']."');";
  $query=mysql_query($SQL);
}
 ?>
 <!DOCTYPE html>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/Personal.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

  $(document).ready(function() {
    $('select').material_select();
  });
        
      </script>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Joyer&iacute;a</title>
</head>
<body>
    <form name:" " method="post" accion="Insertar.php">
      <CENTER>
      <p><b>Formulario</b></p>
      </CENTER>
  <BR>
  <table align='center' border='5' bgcolor='pink'>
    <tr>
      <th align='center'>Tipo de joya </th> <td> 
      <div class="input-field col s12 m6">
    <select name='tipo' class="icons" >
      <option value="" disabled selected>Choose your option</option>
      <option value="reloj" data-icon="images/re.jpg" class="circle">Reloj</option>
      <option value="anillos" data-icon="images/Anillos.jpg" class="circle">Anillos</option>
      <option value="aretes" data-icon="images/aretes.jpg" class="circle">Aretes</option>
    </select></td>
    </tr>
    <tr>
      <th align='center'>Descripci&oacute;n </th> <td> 
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name='des'></textarea>
          <label for="icon_prefix2">Descripci&oacute;n</label>
        </div>
      </div>
    </form>
  </div>
  <tr>
      <th align='center'>Precio</th> <td> <input type="number" name="precio"></td>
    </tr>
    <tr>
      <th align='center'>Cantidad</th> <td> <input type="number" name="cantidad"></td>
    </tr>
    <TR>
      <td><input type="submit"></td>
  </table>
  </BR>
  </form>
</body>
</html>
