<?php

$kitaplar = array();

function kitapEkle(&$kitaplar, string $kitapAdi, string $aciklama, string $resim){
    $yeniKitap[count($kitaplar) + 1] = array(
        "kitapAdi" => $kitapAdi,
        "aciklama" => $aciklama,
        "resim" => $resim
    );

    $kitaplar = array_merge($kitaplar, $yeniKitap);
}


?>