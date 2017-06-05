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
    <div class="row">
      <div class="col s12">
          <input type="submit" value="ieskom">
       </div>
  </form>
  </div>
<?php include('form.php');?>
   <!--  <div class="row">
 
  <form action="paieska.php" method="post">
   <div class="col s2 m2 l2">
<select name="Tipas ">
  <option value="Stalas">Stalas</option>
  <option value="Kede">Kede</option>
  <option value="Lova">Lova</option>
  <option value="Spinta">Spinta</option>
</select>
<label>Tipas</label>
</div>
 <div class="col s2 m2 l2">
<select name="Spalva">
  <option value="Balta">Balta</option>
  <option value="Juoda">Juoda</option>
  <option value="Geltona">Geltona</option>
  <option value="Zalia">Zalia</option>
</select>
</div>
 <div class="col s2 m2 l2">
 <input type="submit" value="ieskom2">
 </div>
 </form>
 </div> -->

 
<script type="text/javascript" src="js/script.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>