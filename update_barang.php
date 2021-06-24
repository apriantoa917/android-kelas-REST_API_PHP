<?php
include "./config.php";
if (isset($_POST['kode'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $satuan = $_POST['satuan'];
    $hbeli = $_POST['hbeli'];
    $hjual = $_POST['hjual'];
    $diskon = $_POST['diskon'];
    $query = "update barang set nama = '$nama', satuan = '$satuan', hargajual = '$hjual', hargabeli =  '$hbeli', diskon = '$diskon' where kode = '$kode';";
    $get_result = mysqli_query($db, $query);
    $hasilnya = array();
    $hasilnya['hasil'][] = array("kode" => $kode, "nama" => $nama,
        "satuan" => $satuan, "hargabeli" => $hbeli, "hargajual" => $hjual, "diskon" => $diskon);
    mysqli_close($db);
    if ($get_result === true) {
        // echo "Successfully Registered";
        echo json_encode($hasilnya);
    } else {
        echo "Not Registered : ".$query;
    }

} else {
    echo "error";
}