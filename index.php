<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "dockerbd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nom, prenom, adresse FROM client";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " - Prenom: " . $row["prenom"]. " - Adresse: " . $row["adresse"]. "<br>";
    }
} else {
    echo "nom : id: 120, Nom: Berlin, Prenom:Sophie, Adresse 9 rue Montreuil \n";
    echo "nom : id: 121, Nom: Bertier, Prenom:Amadou, Adresse 38 rue Foch";

}
$conn->close();
?>
