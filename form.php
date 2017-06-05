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
		$sql = "SELECT  Kodas, Pavadinimas, Spalva, Kategorija, Sand, Lik, Rez, Yra, Kaina, TiekejoPavadinimas, SuPVM FROM baldailent where Pavadinimas = '". $Tipas . "' AND Spalva = '". $Spalva ."'";
		$result = mysqli_query($conn, $sql);


		$value = mysqli_fetch_assoc($result);

// echo file_get_contents('rezults.php');


 ?> 
<table style="width:100%">
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
