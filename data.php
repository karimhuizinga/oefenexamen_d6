<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "d6_oefenexamen";

$conn = new mysqli($serverName, $userName, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT naam, achternaam, telefoonnummer, email, postcode, tijdslot, autonaam, prijs, btw, totaalprijs FROM factuur  WHERE id=(SELECT MAX(id) FROM factuur)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo
        "<br>" . "naam: " . $row["naam"].
        "<br>" . "achternaam: " . $row["achternaam"].
        "<br>" . "telefoonnummer: " . $row["telefoonnummer"].
        "<br>" . "postcode: " . $row["postcode"].
        "<br>" . "tijdslot: " . $row["tijdslot"].
        "<br>" . "autonaam: " . $row["autonaam"].
        "<br>" . "prijs: " . $row["prijs"].
        "<br>" . "btw: " . $row["btw"].
        "<br>" . "totaalprijs: " . $row["totaalprijs"]. "<br></br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    echo "© Copyright 2021 FastDevelopment bv";
?>
