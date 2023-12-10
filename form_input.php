<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";
include "database_conection.php";

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
$get= "<button onclick =get()>Lihat data</button>";
$insert = "<button onclick =insert()>Tambah</button>";
$update = "<button onclick =update()>Udate</button>";
$delete = "<button onclick =delete()>Delete</button>";
$get->get();
$insert->insert();
$update->update();
$delete->delete();
echo $get,$insert,$update,$delete;
echo "</body></html>";
?>