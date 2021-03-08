<?php
require 'lib/aes.php';
require 'lib/aesctr.php';

$key = "qrcode";
$aesfile= $_POST["aesf"];
//$namaFile = file_get_contents($_FILES['doc']['tmp_name']);
$encFile = AesCtr::decrypt($aesfile,$key,128);
//$enkrip = file_put_contents("dekrip/".($_FILES['doc']['name']), $encFile.".jpg");
//$enkrip= echo()
if ($encFile) {
	echo $encFile;
}
?>