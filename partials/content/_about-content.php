<div class="container mb-3">
    <p class="title">Hakkımızda</p>
    <div class="content">
        <img src="../photos/logo/OkurMahfili.png" alt="Logo">
        <div class="about">
            <p>Okur Mahfili, 2023 yılında İstanbul'da kurulmuştur.</p>
        </div>
    </div>
</div>

<style>
    .title {
        margin-top: 20px;
        font-size: 25pt;
        font-family: Montserrat;
        position: relative;
        cursor: pointer;
        display: inline-block; /* Metnin genişliğine göre ayarlanmasını sağlar */
        padding-bottom: 5px; /* Alt çizginin metnin altında görünmesini sağlar */
        transition: color 0.3s ease;
    }
    .title::after {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: black;
        transform: scaleX(0);
        transform-origin: bottom right; /* Animasyon sağdan sola doğru olur */
        transition: transform 0.3s ease;
    }
    .title:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left; /* Hover durumunda animasyon soldan sağa olur */
    }
    .content {
        display: flex;
        align-items: flex-start;
    }
    .content img {
        margin-right: 20px;
        border: 5px solid #555;
        border-radius: 4px;
    }
    .about {
        font-family: Montserrat;
        font-size: 15pt;
    }
</style>
