<?php 

// $Tipas = isset($_POST['Tipas'] ? $_POST['Tipas'] : '');
// $Spalva= isset($_POST['Spalva'] ? $_POST['Spalva'] : '');
// printArray($_POST);

// function printArray($array){
//      foreach ($array as $key => $value){
//         echo "$key => $value";
//         if(is_array($value)){ //If $value is an array, print it as well!
//             printArray($value);
//         }  
//         // if ($key == "Tipas")
//         // {
//         // 	$Tipas = $key;
//         // }
//     } 
// }

// header('Content-Type: text/html; charset=utf-8');
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "baldai";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		mysqli_set_charset($conn, "utf8");
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		if ($conn) 
		{ 	
			// print "<br/>";
			// print "Connection ok";
		}
// print "<br/>";
		$id = $_POST["Tipas"];
		// print($id);
		// print "<br/>";
		$sql = "SELECT  Kodas, Pavadinimas, Spalva, Kategorija, Sand, Lik, Rez, Yra, Kaina, TiekejoPavadinimas, SuPVM FROM baldailent where Pavadinimas = '". $id . "'";
		$result = mysqli_query($conn, $sql);
		// print($id)

		$value = mysqli_fetch_assoc($result);
// print "<br/>";
// 		print $value["Kodas"];
// echo file_get_contents('rezults.php');

		// $ch = curl_init("rezults.html");
		// curl_exec($ch);

// $Tipas=""; if(isset($_POST["Tipas"])) { $Tipas = $_POST["Tipas"]; }
// $Spalva=""; if(isset($_POST["Spalva"])) { $Spalva = $_POST["Spalva"]; }
 // print  $Tipas; 
 // print "<br />"; 
 // print  $Spalva; 
 // print "<br />"; 
 // print ($Tipas);
 ?> 