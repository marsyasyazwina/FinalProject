<?php

require 'function.php';
// variable untuk menampung id yamg diambil dari database
$WisataId = $_GET["Id"];

if(hapusData($WisataId) > 0){
    echo "<script>
               alert( 'data berhasil dihapus');
               document.location.href= 'index.php';
               </script>";
} else {
    echo "<script>
               alert( 'data gagal ditambahkan');
               document.location.href= 'index.php';
               </script>";
}

?>