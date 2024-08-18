<?php

    $hikaye = array(
        "1" => array(
            "resim" => "../photos/books/hikaye/ayvayi-yedik-muzesi.jpg",
            "kitapAdi" => "Ayvayı Yedik Müzesi",
            "kitapYazari" => "Mert Arık",
            "kitapFiyati" => "₺52,19",
        ),
        "2" => array(
            "resim" => "../photos/books/hikaye/naneyi-yedik-lokantasi.jpg",
            "kitapAdi" => "Naneyi Yedik Lokantası",
            "kitapYazari" => "Mert Arık",
            "kitapFiyati" => "₺57,10",
        ),
        "3" => array(
            "resim" => "../photos/books/hikaye/cantamdan-fil-cikti.jpg",
            "kitapAdi" => "Çantamdan Fil Çıktı",
            "kitapYazari" => "Mert Arık",
            "kitapFiyati" => "₺52,19",
        ),
        "4" => array(
            "resim" => "../photos/books/hikaye/bu-kadar-tantana-yeter.jpg",
            "kitapAdi" => "Bu Kadar Tantana Yeter",
            "kitapYazari" => "Mert Arık",
            "kitapFiyati" => "₺51,56",
        ),
        "5" => array(
            "resim" => "../photos/books/hikaye/carpi-iki.jpg",
            "kitapAdi" => "Çarpı 2",
            "kitapYazari" => "Hatice Kübra Tongar",
            "kitapFiyati" => "₺71,10",
        ),
        "6" => array(
            "resim" => "../photos/books/hikaye/yedek-kaleci.jpg",
            "kitapAdi" => "Yedek Kaleci",
            "kitapYazari" => "Hüseyin Keleş",
            "kitapFiyati" => "₺58,44",
        ),
        "7" => array(
            "resim" => "../photos/books/hikaye/dinozorumun-saklandigi-yer.jpg",
            "kitapAdi" => "Dinozorumun Saklandığı Yer",
            "kitapYazari" => "Mert Arık",
            "kitapFiyati" => "₺41,96",
        ),
        "8" => array(
            "resim" => "../photos/books/hikaye/dunyanin-en-korkak-hayvani.jpg",
            "kitapAdi" => "Dünyanın En Korkak Hayvanı",
            "kitapYazari" => "Caner Sarıoğlu",
            "kitapFiyati" => "₺44,00",
        ),
        "9" => array(
            "resim" => "../photos/books/hikaye/faruk.jpg",
            "kitapAdi" => "Çantamdan Fil Çıktı",
            "kitapYazari" => "Caner Sarıoğlu",
            "kitapFiyati" => "₺58,44",
        ),

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
            <img src="<?php echo $hikaye ["1"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["1"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["1"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["2"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["2"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["2"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["3"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["3"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["3"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["4"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["4"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["4"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["5"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["5"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["5"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["6"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["6"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["6"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["7"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["7"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["7"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["8"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["8"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["8"]["kitapFiyati"]?></h4>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
        <div class="card">
            <img src="<?php echo $hikaye ["9"]["resim"]?>">
            <h5 class="card-title"><?php echo $hikaye ["9"]["kitapAdi"]?></h5>
            <h4><?php echo $hikaye ["9"]["kitapFiyati"]?></h4>
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