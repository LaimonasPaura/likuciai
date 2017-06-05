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
		$Medziaga = $_POST["Medziaga"];
		$sql = "SELECT  Kodas, Pavadinimas, Spalva, Medziaga, Kategorija, Sand, Lik, Rez, Yra, Kaina, TiekejoPavadinimas, SuPVM FROM baldailent where Pavadinimas = '". $Tipas . "' AND Spalva = '". $Spalva ."' AND Medziaga = '". $Medziaga ."'";
		$result = mysqli_query($conn, $sql);


		// $value = mysqli_fetch_assoc($result);

// echo file_get_contents('rezults.php');
if ($result->num_rows > 0) {
    echo "<table><tr><th>Kodas</th><th>Pavadinimas</th><th>Spalva</th><th>Medziaga</th><th>TiekejoPavadinimas</th><th>Kategorija</th><th>Sand</th><th>Lik</th><th>Rez</th><th>Yra</th><th>Kaina</th><th>SuPVM</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Kodas"]."</td><td>".$row["Pavadinimas"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td><td>".$row["Spalva"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
 ?> 
<!-- <table style="width:100%">
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
</table> -->
