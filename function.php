<?php

// Koneksi ke database kita
//host, username admin, password, nama database

$conn = mysqli_connect("localhost", "root", "", "wisatadb");

function query($query){
    global $conn;
    // ambil dat di database
$result = mysqli_query($conn, $query);
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
return $rows;

}

function tambahData($data){
    global $conn;

    $Img = htmlspecialchars($data["Img"]);
    $Place = htmlspecialchars($data["Place"]);
    $Country = htmlspecialchars($data["Country"]);
    $City = htmlspecialchars($data["City"]);
    $description = htmlspecialchars($data["description"]);

    $query = "INSERT INTO wisata VALUES('$Img', '$Place', ' ', '$Country', '$City', '$description')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapusData($WisataId){
    global $conn;
    mysqli_query($conn, "DELETE FROM wisata WHERE WisataId = $WisataId");

    return mysqli_affected_rows($conn);
}
    
?>