<?php

require 'koneksi.php';

$id = $_GET["id"];

if (deleteReservations($id) > 0) {
    echo
    "<script>
    alert ('data berhasi di hapus')
    document.location.href = 'index.php';
    </script>";
} else
    echo
    "<script>
alert ('data gagal di hapus')
document.location.href = 'index.php';
</script>";
