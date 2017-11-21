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
        <form name:" " method="post" action="fun.php">
     
<CENTER>
      <div class="row">
    <select name="tipo">
      <option value="" disabled selected>Elije el tipo de reporte</option>
      <option value="anillos">Anillos</option>
      <option value="aretes">Aretes</option>
      <option value="reloj">Reloj</option>
    </select>
    <label>REPORTE A REALIZAR</label>
    <input type="submit">
</form>
  </div>
</CENTER>
      <form name:" " method="post" action="funcion2.php">
  <?php require('funcion2.php');
  $Tipo=$_POST['tipo'];?>  
<CENTER>
      <div class="row">
    <select name="tipo">
      <option value="" disabled selected>Elije el tipo de joya</option>
      <option value="anillos">Anillos</option>
      <option value="aretes">Aretes</option>
      <option value="reloj">Reloj</option>
    </select>
    <label>REPORTE A REALIZAR</label>
    <input type="submit">

    
</form>
  </div>
</CENTER>
     