<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabel php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tabel_penduduk";
$result = $conn->query($sql);

echo "<a href='input/index.html'>Input</a>";

echo "<style>
    body {
        margin: 0;
        padding: 0;
    }
</style>";

if ($result->num_rows > 0) {
    echo "<table border='1px'>
    <tr>
        <th>ID</th>
        <th>Kecamatan</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Luas</th>
        <th>Jumlah Penduduk</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["Kecamatan"] . "</td>";
        echo "<td>" . $row["Longitude"] . "</td>";
        echo "<td>" . $row["Latitude"] . "</td>";
        echo "<td>" . $row["Luas"] . "</td>";
        echo "<td>" . $row["Jumlah Penduduk"] . "</td>";
        echo "</tr>"; 
    }
    
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>