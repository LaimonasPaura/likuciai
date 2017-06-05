<!DOCTYPE html>
<html>
<head>
	<title>Rezultatai</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<?php 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "baldai";
	
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		mysqli_set_charset($conn, "utf8");
	
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$Tipas = $_POST["Tipas"];
		$Spalva = $_POST["Spalva"];	
		$sql = "SELECT  Kodas, Pavadinimas, Spalva, Medziaga, Kategorija, Sand, Lik, Rez, Yra, Kaina, TiekejoPavadinimas, SuPVM FROM baldailent where Pavadinimas = '". $Tipas . "' AND Spalva = '". $Spalva ."'";
		$result = mysqli_query($conn, $sql);


		$value = mysqli_fetch_assoc($result);

// echo file_get_contents('rezults.php');


 ?> 
<table style="width:100%;
 border:1px solid black">
<tr>
	<td>
		<?php echo $value["Kodas"];?>
	</td>
	<td>
		<?php echo $value["Pavadinimas"];?>
	</td>
	<td>
		<?php echo $value["Spalva"];?>
	</td>
	<td>
		<?php echo $value["Medziaga"];?>
	</td>
	<td>
		<?php echo $value["TiekejoPavadinimas"];?>
	</td>
	<td>
		<?php echo $value["Kategorija"];?>
	</td>
	<td>
		<?php echo $value["Sand"];?>
	</td>
	<td>
		<?php echo $value["Lik"];?>
	</td>
	<td>
		<?php echo $value["Rez"];?>
	</td>
	<td>
		<?php echo $value["Yra"];?>
	</td>
	<td>
		<?php echo $value["Kaina"];?>
	</td>
	<td>
		<?php echo $value["SuPVM"];?>
	</td>
</tr>
</table>



<script type="text/javascript" src="js/script.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>