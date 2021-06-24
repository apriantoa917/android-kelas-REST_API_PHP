<?php
include "./config.php";
if (isset($_POST['kode'])) {
    $kode = $_POST['kode'];
    $get_result = mysqli_query($db, "DELETE from barang  where kode = '$kode';");
    $hasilnya = array();
    $hasilnya['hasil'][] = array("kode" => $kode);
    mysqli_close($db);
    if ($get_result === true) {
        // echo "Successfully Registered";
        echo json_encode($hasilnya);
    } else {
        echo "Not Registered";
    }

} else {
    echo "error";
}