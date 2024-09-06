<?php
    require 'C:\xampp\htdocs\okur-mahfili\libs\variables.php';
    require 'C:\xampp\htdocs\okur-mahfili\libs\functions.php';
?>

<?php include "../partials/_header.php" ?>
<?php include "../partials/_navbar.php" ?>

<div class="row">
    <div class="col-12">
        <form action="login.php" method="post">
        <div class="mb-5">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Parola</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Giriş Yap</button>
        </form>
    </div>
    </div>

</div>

<?php include '../partials/_footer.php' ?>