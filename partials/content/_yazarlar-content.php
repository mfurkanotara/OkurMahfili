<?php

    $yazarlar = array(
        "1" => array(
            "yazarAdSoyad" => "Mehmet Akif Ersoy",
            "aciklama" => "20 Aralık 1873’te İstanbul'da, Fatih ilçesi Sarıgüzel mahallesinde dünyaya geldi.",
            "resim" => "../photos/writers/mehmet-akif-ersoy.jpg",
        ),
        "2" => array(
            "yazarAdSoyad" => "Namık Kemal",
            "aciklama" => "1840’ta Tekirdağ’da doğdu. Tanzimat döneminin en önemli fikir ve edebiyat insanlarındandır.",
            "resim" => "../photos/writers/namik-kemal.jpg",
        ),
        "3" => array(
            "yazarAdSoyad" => "Hüseyin Nihal Atsız",
            "aciklama" => "12 Ocak 1905'te İstanbul Kadıköy'de doğdu. Babası bahriye (deniz) subayı Nail Bey, annesi Fatma Zehra Hanımdır.",
            "resim" => "../photos/writers/atsiz.jpg",
        ),
        "4" => array(
            "yazarAdSoyad" => "Cemal Süreya",
            "aciklama" => "1931’de Erzincan’da dünyaya geldi. Haydarpaşa Lisesi’nden sonra Ankara Üniversitesi’nde Maliye ve İktisat Bölümünü 1954 yılında bitirdi.",
            "resim" => "../photos/writers/cemal-sureya.jpg",
        ),
        "5" => array(
            "yazarAdSoyad" => "Kazım Karabekir",
            "aciklama" => "1882 yılında İstanbul'da doğdu. Mehmed Emin Paşa'nın oğludur.",
            "resim" => "../photos/writers/kazim-karabekir.jpg",
        ),
        "6" => array(
            "yazarAdSoyad" => "Sezai Karakoç",
            "aciklama" => "Türk şair, yazar, düşünür ve siyasetçi.1933’de Diyarbakır/Ergani’de doğdu.",
            "resim" => "../photos/writers/sezai-karakoc.jpg",
        ),
        "7" => array(
            "yazarAdSoyad" => "İsmet Özel",
            "aciklama" => "1944 yılında Söke'li bir polis memurunun altıncı çocuğu olarak Kayseri'de doğdu.",
            "resim" => "../photos/writers/ismet-ozel.jpg",
        ),
        "8" => array(
            "yazarAdSoyad" => "Mehmet Rauf",
            "aciklama" => "Mehmet Rauf, Türk hikâyeci ve romancı. İstanbul'da doğmuş ve küçük yaşta edebiyat ile ilgilenmeye başlamıştır.",
            "resim" => "../photos/writers/mehmet-rauf.jpg",
        ),
        "9" => array(
            "yazarAdSoyad" => "Sabahattin Ali",
            "aciklama" => "25 Şubat 1907’de Gümülcine’de doğdu, 2 Nisan 1948’de Kırklareli’nde öldü.",
            "resim" => "../photos/writers/sabahattin-ali.jpg",
        )
    )

?>


<style>
        .container {
            display: flex;
            gap: 20px; /* Kartlar arasındaki boşluk */
            flex-wrap: wrap; /* Ekran boyutuna göre satır başına taşır */
            justify-content: center; /* Kartları yatay olarak ortalar */
            margin-top: 20px;
        }
        .cardd {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px; /* Kart genişliği */
            text-align: center;
        }
        .cardd img {
            width: 100px;
            height: auto; /* Yükseklik orantılı olarak ayarlanır */
            max-height: 150px; /* Maksimum yükseklik */
            object-fit: cover; /* Resmi kapsayıcıya göre kırpar */
        }
        .cardd h1 {
            margin: 10px 0;
            font-size: 18pt;
        }
        .card-title {
            color: #888;
            font-size: 14pt;
        }
        .books {
            background-color: #54456b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        books:hover, a:hover {
            opacity: 0.7;
        }
    </style>


<div class="container">

        <div class="cardd">
            <img src="<?php echo $yazarlar["1"]["resim"] ?>" alt="Yazar 1">
            <h1><?php echo $yazarlar["1"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["1"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["2"]["resim"] ?>" alt="Yazar 2">
            <h1><?php echo $yazarlar["2"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["2"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["3"]["resim"] ?>" alt="Yazar 3">
            <h1><?php echo $yazarlar["3"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["3"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["4"]["resim"] ?>" alt="Yazar 4">
            <h1><?php echo $yazarlar["4"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["4"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["5"]["resim"] ?>" alt="Yazar 5">
            <h1><?php echo $yazarlar["5"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar/Asker</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["5"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["6"]["resim"] ?>" alt="Yazar 6">
            <h1><?php echo $yazarlar["6"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar/Şair</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["6"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["7"]["resim"] ?>" alt="Yazar 7">
            <h1><?php echo $yazarlar["7"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar/Şair</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["7"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["8"]["resim"] ?>" alt="Yazar 8">
            <h1><?php echo $yazarlar["8"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["8"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

        <div class="cardd">
            <img src="<?php echo $yazarlar["9"]["resim"] ?>" alt="Yazar 9">
            <h1><?php echo $yazarlar["9"]["yazarAdSoyad"] ?></h1>
            <p class="card-title">Yazar</p>
            <h style="margin-top: 20px;"><?php echo $yazarlar["9"]["aciklama"] ?></h>
            <p><button class="books">Eserleri</button></p>
        </div>

</div>