<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>

<nav class="navbar" style="background-color: #ff5733;">
  <marquee direction="up" scrollamount="1" class="marquee">SEÇİLİ ROMAN KİTAPLARINDA YÜZDE 50 İNDİRİM OKUR MAHFİLİ'NDE!</marquee>
</nav>

<nav class="navbar bg-light border-bottom border-body" data-bs-theme="light">
    <a class="navbar-button" href="../pages/index.php">Anasayfa</a>
    <div class="navbar-button">
      Kategoriler
      <div class="dropdown-menu">
        <a href="../pages/yeni-cikanlar.php" class="category">Yeni Çıkanlar</a>
        <a href="../pages/cok-satanlar.php" class="category">Çok Satanlar</a>
        <a href="../pages/edebiyat.php" class="category">Edebiyat / Roman</a>
        <a href="../pages/hikaye.php" class="category">Hikaye</a>
        <a href="../pages/tarih.php" class="category">Tarih</a>
        <a href="../pages/bilim-kurgu.php" class="category">Bilim-Kurgu</a>
        <a href="../pages/kisisel-gelisim.php" class="category">Kişisel Gelişim</a>
      </div>
    </div>
    <a class="navbar-button" href="../pages/yazarlar.php">Yazarlar</a>
    <img class="img-logo" src="../photos/logo/OkurMahfili.png" href="anasayfa.php">
    <a class="navbar-button" href="../pages/hakkimizda.php">Hakkımızda</a>
    <a class="navbar-button" href="../pages/iletisim.php">İletişim</a>
    <div class="navbar-button">
      Üyelik
      <div class="dropdown-menu">

        <?php if(isset($_COOKIE["auth"])): ?>

            <a href="profile.php" class="category">Hoş geldin! <?php echo $_COOKIE["auth"]["name"]?></a>
            <a href="logout.php" class="category">Çıkış Yap</a>

        <?php else: ?>

            <a href="login.php" class="category">Giriş Yap</a>
            <a href="register.php" class="category">Kayıt Ol</a>

        <?php endif; ?>
      </div>
    </div>
    
</nav>

<style>
    .img-logo {
        max-width: 150px;
    }
    .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .navbar-button {
        font-family: Cinzel Decorative Regular;
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin: 0 20px; /* Butonlar arasında boşluk */
        color: black; /* İstediğiniz rengi belirleyin */
        text-decoration: none; /* Alt çizgiyi kaldırır */
        padding: 10px 15px; /* Düğme benzeri görünüm için boşluk ekleyin */
        background-color: lightgray; /* Arka plan rengi ekleyin */
        border-radius: 5px; /* Köşeleri yuvarlatın */
        }

    .navbar-button:hover {
        background-color: gray; /* Üzerine gelindiğinde arka plan rengini değiştirin */
        color: white; /* Üzerine gelindiğinde metin rengini değiştirin */
    }
    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-menu a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-menu a:hover {
        background-color: #ddd;
    }
    .navbar-button:hover .dropdown-menu {
        display: block;
    }
    .category {
        font-size: 9pt;
    }
    .marquee {
        font-family: Montserrat;
        color: white;
        text-align: center;
    }
    .blink {
        animation: blinker 1.5s linear infinite;
        color: red;
        font-family: sans-serif;
    }
    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style>

<script>
    function handleClick() {
        alert('Resim tıklandı!');
    }
</script>
