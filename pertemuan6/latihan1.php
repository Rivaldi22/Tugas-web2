<?php
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Array yang berisi nilai
$segitiga = array(
    array("alas" => 5, "tinggi" => 7),
    array("alas" => 7, "tinggi" => 10),
    array("alas" => 3, "tinggi" => 7),
    array("alas" => 4, "tinggi" => 9),
    array("alas" => 6, "tinggi" => 12)
);

// Menghitung dan menampilkan luas segitiga
foreach ($segitiga as $key => $data) {
    $luas = hitungLuasSegitiga($data["alas"], $data["tinggi"]);
    echo "Luas segitiga ke-" . ($key + 1) . " dengan alas {$data['alas']} dan tinggi {$data['tinggi']} adalah: " . $luas . "<br>";
}

?>
