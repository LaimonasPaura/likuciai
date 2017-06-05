<!DOCTYPE html>
<html>
<head>
	<title>ProjektasZ</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
 <div class="row">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
    
      <div class="col s2">       
          <div class="input-field col">
            <select name="Tipas">
              <option value="Lova">Lova</option>
              <option value="Stalas">Stalas</option>
              <option value="Kede">Kede</option>
          </select>
          <label>Tipas</label>
      </div>
      </div>
      <div class="col s2">       
          <div class="input-field col">
            <select name="Spalva">
              <option value="Balta">Balta</option>
              <option value="Juoda">Juoda</option>
              <option value="Zalia">Zalia</option>
          </select>
          <label>Spalva</label>
      </div>
      </div>
      <div class="col s2">       
          <div class="input-field col">
            <select name="Medziaga">
              <option value="Medis">Medis</option>
              <option value="Metalas">Metalas</option>
              <option value="Oda">Oda</option>
          </select>
          <label>Medziaga</label>
      </div>
      </div>
    <div class="row">
      <div class="col s12">
          <input type="submit" value="ieskom">
       </div>
  </form>
  </div>

<!--   <?php 
  echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Kodas</th><th>Pavadinimas</th><th>Spalva</th><th>Medziaga</th><th>Id</th><th>Id</th><th>Id</th><th>Id</th><th>Id</th><th>Id</th></tr>";
?> -->

<?php include('form.php');?>



 
<script type="text/javascript" src="js/script.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>