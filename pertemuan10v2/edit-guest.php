<?php

require 'koneksi.php';

$id = $_GET["id"];
$guests = showTable($id, "guests");

if (isset($_POST["submit"])) {
    $data = $_POST;
    if (editTable($data, $id, "guests") > 0) {
        echo
        "<script>
        alert ('changed succes')
        documet.location.href = 'index.php'
        </script>";
    } else
        echo
        "<script>
    alert('changed filed')
    document.location.href = 'index.php'
    </script>";
}




?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>

    <form action="" method="post" class="max-w-sm mx-auto mt-8 bg-white rounded-lg shadow-lg shadow-blue-600 p-6">
        <div class="mb-5">
            <!-- <input type="hidden" name="id" value="<?= $guests[0]["$id"]; ?>"> -->
            <label for="nomor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Tamu</label>
            <input type="text" aria-placeholder="nama tamu" name="nama_tamu" id="nama_tamu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="input ur name" required value="<?= $guests[0]["nama_tamu"]; ?>" />
        </div>
        <div class="mb-5">
            <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Kamar</label>
            <input type="text" name="nomor_kamar" placeholder="nomor kamar" id="nomor_kamar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="<?= $guests[0]["nomor_kamar"]; ?>" />
        </div>
        <div class="mb-5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Check in</label>
            <input type="text" name="tanggal_check_in" placeholder="tanggal" id="tanggal_check_in" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="<?= $guests[0]["tanggal_check_in"]; ?>" />
        </div>
        <div class="mb-5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Check out</label>
            <input type="text" name="tanggal_check_out" placeholder="tanggal" id="tanggal_check_out" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="<?= $guests[0]["tanggal_check_out"]; ?>" />
        </div>

        <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 transition-all ease-in-out duration-500 dark:focus:ring-blue-800">GAASS!</button>
    </form>
    <a href="./index.php">
        <div class="flex justify-center items-center p-2 rounded-lg mt-6 mb-4 ml-4 bg-blue-500 w-32 h-10 shadow-lg shadow-blue-500 hover:bg-blue-950 transition-all ease-in-out duration-700">Back?</div>
    </a>

</body>