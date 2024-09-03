<?php

    require "libs/functions.php";
    require "libs/variables.php";

?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../photos/slides/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photos/slides/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../photos/slides/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>

<div class="container">
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $oneCikanKitaplar ["1"]["resim"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oneCikanKitaplar ["1"]["kitapAdi"]?></h5>
            <p class="card-text">
                <?php if (strlen($oneCikanKitaplar["1"]["aciklama"]) > 50): ?>
                <?php echo substr($oneCikanKitaplar["1"]["aciklama"],0,50)."..." ?>
                <?php else: ?>
                <?php echo $oneCikanKitaplar["1"]["aciklama"]; ?>
                <?php endif ?>
            </p>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $oneCikanKitaplar ["2"]["resim"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oneCikanKitaplar ["2"]["kitapAdi"]?></h5>
            <p class="card-text">
                <?php if (strlen($oneCikanKitaplar["2"]["aciklama"]) > 50): ?>
                <?php echo substr($oneCikanKitaplar["2"]["aciklama"],0,50)."..." ?>
                <?php else: ?>
                <?php echo $oneCikanKitaplar["2"]["aciklama"]; ?>
                <?php endif ?>
            </p>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $oneCikanKitaplar ["3"]["resim"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oneCikanKitaplar ["3"]["kitapAdi"]?></h5>
            <p class="card-text">
                <?php if (strlen($oneCikanKitaplar["3"]["aciklama"]) > 50): ?>
                <?php echo substr($oneCikanKitaplar["3"]["aciklama"],0,50)."..." ?>
                <?php else: ?>
                <?php echo $oneCikanKitaplar["3"]["aciklama"]; ?>
                <?php endif ?>
            </p>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $oneCikanKitaplar ["4"]["resim"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oneCikanKitaplar ["4"]["kitapAdi"]?></h5>
            <p class="card-text">
                <?php if (strlen($oneCikanKitaplar["4"]["aciklama"]) > 50): ?>
                <?php echo substr($oneCikanKitaplar["4"]["aciklama"],0,50)."..." ?>
                <?php else: ?>
                <?php echo $oneCikanKitaplar["4"]["aciklama"]; ?>
                <?php endif ?>
            </p>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $oneCikanKitaplar ["5"]["resim"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oneCikanKitaplar ["5"]["kitapAdi"]?></h5>
            <p class="card-text">
                <?php if (strlen($oneCikanKitaplar["5"]["aciklama"]) > 50): ?>
                <?php echo substr($oneCikanKitaplar["5"]["aciklama"],0,50)."..." ?>
                <?php else: ?>
                <?php echo $oneCikanKitaplar["5"]["aciklama"]; ?>
                <?php endif ?>
            </p>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $oneCikanKitaplar ["6"]["resim"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $oneCikanKitaplar ["6"]["kitapAdi"]?></h5>
            <p class="card-text">
                <?php if (strlen($oneCikanKitaplar["6"]["aciklama"]) > 50): ?>
                <?php echo substr($oneCikanKitaplar["6"]["aciklama"],0,50)."..." ?>
                <?php else: ?>
                <?php echo $oneCikanKitaplar["6"]["aciklama"]; ?>
                <?php endif ?>
            </p>
            <a href="#" class="btn btn-primary">İncele</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Kartlar arasındaki boşluk */
            justify-content: center; /* Kartları yatayda ortalar */
        }
        .card {
            flex: 1 0 25%; /* Kartların genişliği (%25), flex-grow, flex-shrink */
            box-sizing: border-box;
            padding: 10px;
            margin: 10px auto; /* Kartların üst ve alt boşluğu */
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            max-width: 12rem; /* Maksimum genişlik */

        }
        .card-img-top {
            width: 100%;
            height: 100px; /* Resimlerin yüksekliği */
            object-fit: contain; /* Resimlerin taşmadan sığması için */
        }
        @media (max-width: 768px) {
            .card {
                flex: 1 0 45%; /* Ekran küçüldükçe genişlik ayarlanır */
            }
        }
        @media (max-width: 480px) {
            .card {
                flex: 1 0 100%; /* Daha küçük ekranlar için */
            }
        }
  </style>
