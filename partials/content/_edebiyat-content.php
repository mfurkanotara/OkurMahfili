<?php

    $edebiyat = array(
        "1" => array(
            "resim" => "../photos/books/edebiyat/dortgun-ucgece.jpg",
            "kitapAdi" => "4 Gün 3 Gece",
            "kitapYazari" => "Ayşe Kulin",
            "kitapFiyati" => "₺102,02",
        ),
        "2" => array(
            "resim" => "../photos/books/edebiyat/soyleme-bilmesinler.jpg",
            "kitapAdi" => "Söyleme Bilmesinler",
            "kitapYazari" => "Şermin Yaşar",
            "kitapFiyati" => "₺123,20",
        ),
        
        "3" => array(
            "resim" => "../photos/books/edebiyat/insanligimi-yitirirken.png",
            "kitapAdi" => "İnsanlığımı Yitirirken",
            "kitapYazari" => "Osamu Dazai",
            "kitapFiyati" => "₺12,88",
        ),
        "4" => array(
            "resim" => "../photos/books/edebiyat/salkim-sokak.jpg",
            "kitapAdi" => "Salkım Sokak No:3",
            "kitapYazari" => "İclal Aydın",
            "kitapFiyati" => "₺168,19",
        ),
        "5" => array(
            "resim" => "../photos/books/edebiyat/kaplanin-sirtinda.jpg",
            "kitapAdi" => "Kaplanın Sırtında",
            "kitapYazari" => "Zülfü Livaneli",
            "kitapFiyati" => "₺108,90",
        ),
        "6" => array(
            "resim" => "../photos/books/edebiyat/saatleri-ayarlama-enstitusu.jpg",
            "kitapAdi" => "Saatleri Ayarlama Enstitüsü",
            "kitapYazari" => "Ahmet Hamdi Tanpınar",
            "kitapFiyati" => "₺240,00",
        ),
        "7" => array(
            "resim" => "../photos/books/edebiyat/labirent.jpg",
            "kitapAdi" => "Labirent",
            "kitapYazari" => "Amin Maalouf",
            "kitapFiyati" => "₺103,41",
        ),
        "8" => array(
            "resim" => "../photos/books/edebiyat/nietzsche-agladiginda.jpg",
            "kitapAdi" => "Nietzsche Ağladığında",
            "kitapYazari" => "Irvin D. Yalom",
            "kitapFiyati" => "₺178,20",
        ),
        "9" => array(
            "resim" => "../photos/books/edebiyat/yasamak.jpg",
            "kitapAdi" => "Yaşamak",
            "kitapYazari" => "Yu Hua",
            "kitapFiyati" => "₺109,38",
        )

    )

?>
<div class="container mb-3">
    <div class="card">
        <b style="font-size: 25pt;">EDEBİYAT / ROMAN</b>
    </div>
</div>
<div class="container mb-3">
    <div class="card-container">
        <div class="card">
            <img src="<?php echo $edebiyat ["1"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["1"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["1"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["2"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["2"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["2"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["3"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["3"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["3"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["4"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["4"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["4"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["5"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["5"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["5"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["6"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["6"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["6"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["7"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["7"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["7"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["8"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["8"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["8"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $edebiyat ["9"]["resim"]?>">
            <h5 class="card-title"><?php echo $edebiyat ["9"]["kitapAdi"]?></h5>
            <h4><?php echo $edebiyat ["9"]["kitapFiyati"]?></h4>
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