<?php
include "./config.php";
$hasilnya = array();
$hasil = mysqli_query($db,'select * from barang');
mysqli_close($db);
while ($row = mysqli_fetch_assoc($hasil)) {
    $hasilnya['hasil'][] = $row;
}
echo json_encode($hasilnya);
?>