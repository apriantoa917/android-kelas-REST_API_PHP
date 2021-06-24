<?php
include "./config.php";
if (isset($_POST['kode'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $satuan = $_POST['satuan'];
    $hbeli = $_POST['hbeli'];
    $hjual = $_POST['hjual'];
    $diskon = $_POST['diskon'];
    $get_result = mysqli_query($db, "INSERT INTO barang (kode, nama, satuan, hargabeli, hargajual,diskon) VALUES
('$kode', '$nama', '$satuan', '$hbeli', '$hjual', '$diskon')");
    $hasilnya = array();
    $hasilnya['hasil'][] = array("kode" => $kode, "nama" => $nama,
        "satuan" => $satuan, "hargabeli" => $hbeli, "hargajual" => $hjual, "diskon" => $diskon);
    if ($get_result === true) {

        // echo "Successfully Registered";
        echo json_encode($hasilnya);
    } else {
        echo "Not Registered";
    }

} else {
    echo "error";
}