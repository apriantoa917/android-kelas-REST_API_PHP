<?php
include "./config.php";
$hasilnya = array();
if(isset($_POST['kode'])){
    $kode = $_POST['kode'];
    $hasil = mysqli_query($db,"select * from barang where kode = '$kode';");
    while($row=mysqli_fetch_assoc($hasil)){
        $hasilnya['hasil'][] = $row;
    }
}else{
    $hasilnya['eror'][] = null;

}
echo json_encode($hasilnya);
?>