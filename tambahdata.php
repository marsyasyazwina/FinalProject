<?php

require 'function.php';

if( isset ($_POST["submit"])){
    if(tambahData($_POST) > 0){
        echo "<script>
               alert( 'data berhasil ditambahkan');
               document.location.href= 'index.php';
               </script>";

        // echo "Data berhasil ditambahkan";
    } else {
        // echo "Data gagal ditambahkan";
        echo "<script>
               alert( 'data gagal ditambahkan');
               document.location.href= 'index.php';
               </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wisata</title>
</head>
<body>
    <h1> Tambah Data Wisata</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    
    Img: <input type="text" name="Img" required>
    <br><br>
    Place: <input type="text" name="Place" required>
    <br><br>
    Country: <input type="text" name="Country" required>
    <br><br>
    City: <input type="text" name="City" required>
    <br><br>
    description: <input type="text" name="description" required>
    <br><br>
    <button type="submit" name="submit">Tambah Data </button>

    

</body>
</html>