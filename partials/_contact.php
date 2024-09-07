<style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .map {
            width: 60%;
            height: auto;
        }
        .form {
            width: 35%;
            margin-left: 20px;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12388.825146898573!2d37.199873270207824!3d39.07899870415569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40785460c4cb00df%3A0xa9710d9e56ef5dba!2zTWFuY8SxbMSxaywgNTg5MDIgTWFuY8SxbMSxay9LYW5nYWwvU2l2YXM!5e0!3m2!1str!2str!4v1722690563183!5m2!1str!2str" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="index.php" class="form" method="post">
            <div class="form-group">
                <label for="fname">Adı</label>
                <input type="text" class="form-control" id="fname" placeholder="Adınızı giriniz.">
            </div>
            <div class="form-group">
                <label for="fname">Soyadı</label>
                <input type="text" class="form-control" id="lname" placeholder="Soyadınızı giriniz.">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-posta Adresiniz</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-posta adresinizi giriniz.">
                <small id="emailHelp" class="form-text text-muted">Bu kısım boş bırakılamaz.</small>
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Form Gönderme Koşullarını kabul ediyorum</label>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>