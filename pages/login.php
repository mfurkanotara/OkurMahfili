<?php
    require 'C:\xampp\htdocs\okur-mahfili\libs\variables.php';
    require 'C:\xampp\htdocs\okur-mahfili\libs\functions.php';

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == db_user["username"] && $password == db_user["password"]) {
            setcookie("auth[username]", db_user["username"], time() + (60 * 60 * 24));
            setcookie("auth[name]", db_user["name"], time() + (60 * 60 * 24));

            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger mb-0 text-center'>Yanlış kullanıcı adı veya parola!</div>";
        }
    }

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