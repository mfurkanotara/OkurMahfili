<?php
    require 'C:\xampp\htdocs\okur-mahfili\libs\variables.php';
    require 'C:\xampp\htdocs\okur-mahfili\libs\functions.php';

    session_start();

    // Kitapları oturumdan al veya yeni bir dizi oluştur
    if (!isset($_SESSION['kitaplar'])) {
        $_SESSION['kitaplar'] = array();
    }
    $kitaplar = &$_SESSION['kitaplar'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = isset($_POST["title"]) ? $_POST["title"] : '';
        $subtitle = isset($_POST["subtitle"]) ? $_POST["subtitle"] : '';
        $image = isset($_POST["image"]) ? $_POST["image"] : '';

        kitapEkle($kitaplar, $title, $subtitle, $image);
    }
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
    <?php foreach ($kitaplar as $kitap): ?>
        <div class="card" style="width: 10rem;">
            <img src="<?php echo htmlspecialchars($kitap["resim"]); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($kitap["kitapAdi"]); ?></h5>
                <p class="card-text">
                    <?php
                        if (strlen($kitap["kitapAciklamasi"]) > 50):
                            echo htmlspecialchars(substr($kitap["kitapAciklamasi"], 0, 50)) . "...";
                        else:
                            echo htmlspecialchars($kitap["kitapAciklamasi"]);
                        endif;
                    ?>
                </p>
                <a href="#" class="btn btn-primary">İncele</a>
            </div>
        </div>
    <?php endforeach; ?>
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
