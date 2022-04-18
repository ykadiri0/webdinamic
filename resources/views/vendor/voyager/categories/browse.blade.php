@extends('voyager::master')
@section('content')
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=auth()->user()->id; 
$sql = "SELECT * FROM `etat` WHERE  proid=".$id."";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1>id: " . $row["proid"]. " <br><br>- Nom:" . $row["nomP"]. " <br><br>- Dossier_scientifique: " . $row["ETAT1"]. " <br><br>- Dossier_Pedagogique: " . $row["ETAT2"]. " <br> <br>- Dossier_administratif:" . $row["ETAT3"];
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
@endsection