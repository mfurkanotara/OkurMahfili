<?php

    $yeniCikanlar = array(
        "1" => array(
            "resim" => "../photos/books/yeni-cikanlar/sadece-Allaha-muhtacsin.jpg",
            "kitapAdi" => "Sadece Allah'a Muhtaçsın",
            "kitapYazari" => "Nilsun Urallı",
            "kitapFiyati" => "₺220,00",
        ),
        "2" => array(
            "resim" => "../photos/books/yeni-cikanlar/abherul-asikin.jpg",
            "kitapAdi" => "Abherül Aşıkın",
            "kitapYazari" => "Ruzbihan Bakli",
            "kitapFiyati" => "₺89,38",
        ),
        "3" => array(
            "resim" => "../photos/books/yeni-cikanlar/aldim-biraz-konustum.png",
            "kitapAdi" => "Aldım, Biraz Konuştum",
            "kitapYazari" => "Bayram Ali Artar",
            "kitapFiyati" => "₺100,00",
        ),
        "4" => array(
            "resim" => "../photos/books/yeni-cikanlar/dokuntuler.jpg",
            "kitapAdi" => "Döküntüler",
            "kitapYazari" => "Dila Cengiz",
            "kitapFiyati" => "₺65,00",
        ),
        "5" => array(
            "resim" => "../photos/books/yeni-cikanlar/suphe.jpg",
            "kitapAdi" => "Şüphe: Hayri Bey'in Vefatı İntihar mı Cinayet mi?",
            "kitapYazari" => "Prof. Dr. Ali Akyıldız",
            "kitapFiyati" => "₺178,75",
        ),
        "6" => array(
            "resim" => "../photos/books/yeni-cikanlar/altmis-oyku.jpg",
            "kitapAdi" => "Altmış Öykü",
            "kitapYazari" => "Dino Buzzati",
            "kitapFiyati" => "₺214,50",
        ),
        "7" => array(
            "resim" => "../photos/books/yeni-cikanlar/japon-masallari.jpg",
            "kitapAdi" => "Japon Masalları",
            "kitapYazari" => "Kunio Yanagita",
            "kitapFiyati" => "₺100,00",
        ),
        "8" => array(
            "resim" => "../photos/books/yeni-cikanlar/suyun-rengi.jpg",
            "kitapAdi" => "Suyun Rengi",
            "kitapYazari" => "Açelya Daştan",
            "kitapFiyati" => "₺100,00",
        ),
        "9" => array(
            "resim" => "../photos/books/yeni-cikanlar/aci-gecer-sizi-kalir.png",
            "kitapAdi" => "Acı Geçer Sızı Kalır",
            "kitapYazari" => "Memduh Şevket Esendal",
            "kitapFiyati" => "₺22,85",
        )

    )

?>
<div class="container mb-3">
    <div class="card">
        <b style="font-size: 25pt;">YENİ ÇIKAN KİTAPLAR</b>
    </div>
</div>
<div class="container mb-3">
    <div class="card-container">
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["1"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["1"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["1"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["2"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["2"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["2"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["3"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["3"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["3"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["4"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["4"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["4"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["5"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["5"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["5"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["6"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["6"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["6"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["7"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["7"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["7"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["8"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["8"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["8"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $yeniCikanlar ["9"]["resim"]?>">
            <h5 class="card-title"><?php echo $yeniCikanlar ["9"]["kitapAdi"]?></h5>
            <h4><?php echo $yeniCikanlar ["9"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
</div>

<style>

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.card {
    flex: 1 1 calc(33.333% - 20px);
    box-sizing: border-box;
    padding: 20px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto 15px auto;
    border-radius: 5px;
}

.card-title {
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
}

.card h4 {
    margin: 15px 0; /* Kitap fiyatı için üst ve alt boşluk */
    font-family: Montserrat;
}

.card a.btn {
    margin-top: 10px;
    align-self: center; /* Butonu yatayda ortalar */
    font-family: Montserrat;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

h5 {
    font-family: Montserrat;
}


</style>