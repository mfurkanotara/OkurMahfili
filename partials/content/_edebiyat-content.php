<?php
    require 'C:\xampp\htdocs\okur-mahfili\libs\variables.php';
    require 'C:\xampp\htdocs\okur-mahfili\libs\functions.php';
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