<?php //file: oopmvc/index.php

// Memanggil model
require_once "model/anggota_model.php";

// Mendapatkan data anggota
$anggota = getAllAnggota();

// Memanggil list.php untuk menampilkan data anggota
require 'view/anggota/list.php';


