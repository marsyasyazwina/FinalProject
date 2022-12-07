
<?php

require 'function.php';

$wisata = query("SELECT * FROM wisata");


// var_dump($result);
// if(!$result){
//     echo mysqli_error($conn);
// }

// ambil data siswi dari object result (fetch) ada 4 cara
// msyqli_fetch_row()

// $si = mysqli_fetch_row($result);
// var_dump($si);

// mysqli_fetch_assoc() -> array numeric
// $si = mysqli_fetch_assoc($result);
// var_dump($si);

// mysqli menampilan jurusan saja
// $si = mysqli_fetch_assoc($result);
// var_dump($si["Jurusan"]);

// mysqli_fetch_array() -> numeric / assosiatif
// $si = mysqli_fetch_array($result);
// var_dump($si["Email"]);

// mysqli_fetch_object()
// $si = mysqli_fetch_object($result);
// var_dump($si->Email);

// while($si = mysqli_fetch_assoc($result) ){
//     var_dump($si);
// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar tempat wisata </title>
    <link rel="stylesheet" type="text/css" href="wisata.css">
</head>
<body>

<nav>
        <div class="Hume">
            <img src="logo (2).png">
        </div>
        <!-- <h2 class="Hume">Waryuy</h2> -->
        <ul>
            <li><a href = "#">Home</a></li>
            <li><a href = "#">Profile</a></li>
            <li><a href = "#tata">Wisata</a></li>
            <li><a href = "#">Contact</a></li>
    </nav>

    <header id="Beranda">
        <h2> Wisata Nyaman </h2>
        <h3> Kantong Aman</h3>
        <h4> Ingin liburan dengan murah meriah?<br> Liburan nyaman dengan budget yang aman untuk kantong</h4>
    </header>
<aside id="about">
            <div class="about-me">
                <img src="Image/wisata.png"  >
           <div class="About-text">
            <h2> About WIWEB</h2>
            <p style="text-align:justify ;"> Selamat datang di WIWEB, wiweb adalah website nomor 1 yang berguna untuk anda berwisata dengan murah meriah. Tunggu apalagi? Pesan ticket wisata anda di wiweb </p>
        </div>
        </div>
        </aside>
<a href="tambahdata.php">Tambah Data Wisata</a>
<table id="tata" border= "1" cellpadding="20" cellspacing="0">
<tr>
        <th> Img </th>
        <th> Place </th>
        <th> WisataId </th>
        <th> Country </th>
        <th> City </th>
        <th> description </th>
        <th> Aksi </th>

</tr>

<?php $i=1 ?>

<?php foreach($wisata as $row):?>

<tr>
<td><img src="Image/<?= $row["Img"] ?>" alt="" width="90"></td>
    <td><?php echo $row["Place"] ?></td>
    <td><?php echo $i ?></td>
    <td><?php echo $row["Country"] ?></td>
    <td><?php echo $row["City"] ?></td>
    <td><?php echo $row["description"] ?></td>
    <td>
        <a href="">Ubah</a>
        <a href="hapus.php?Id=<?= $row["WisataId"];?>" onclick="return confirm('Yakin deck?')">Hapus</a>
    </td>
    
    <!-- <td>Marsya Putri</td>
    <td>12345</td>
    <td>marsya@gmail.com</td>
    <td>Programmer</td>
    <td><img src="image/marsya.jpg" alt="" width="50"></td>
    <td>
        <a href="">Ubah</a>
        <a href="">Hapus</a>
    </td> -->
</tr>
<?php $i++ ?>
<?php endforeach?>

</table>

<footer class= "footer-bottom">
        <p> 2022 WIWEB. Maki Agency Marketing, Jakarta Selatan, Indonesia. All Rights Reserved </p>  
    </div>
</footer>

</body>
</html>