<?php 
$nameFile = $_FILES['image_obat']['name'];
$typeFile = $_FILES['image_obat']['type'];
$tmpfile = $_FILES['image_obat']['tmp_name'];

$c_put_object = curl_init();
$headers = array("opc-multipart:true");
curl_setopt($c_put_object, CURLOPT_URL, 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/5HGEcB82xYexVNP5xdMc0B-069HbPlpOeNhl8RwxHmECWZYQtNN0rhmgVQPzoOlS/n/sdwpma8thrwk/b/elrahmaan-assets/o/' . $nameFile);
curl_setopt($c_put_object, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($c_put_object, CURLOPT_HTTPHEADER, $headers);
curl_setopt($c_put_object, CURLOPT_RETURNTRANSFER, TRUE);

$output = curl_exec($c_put_object);

$data = json_decode($output, true);
echo $output;
