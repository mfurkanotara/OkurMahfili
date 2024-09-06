<?php
    require 'C:\xampp\htdocs\okur-mahfili\libs\variables.php';
    require 'C:\xampp\htdocs\okur-mahfili\libs\functions.php';
    
    session_start();

    // Kitapları oturumdan al
    if (!isset($_SESSION['kitaplar'])) {
        $_SESSION['kitaplar'] = array();
    }
    $kitaplar = &$_SESSION['kitaplar'];

    // Kitap silme işlemi
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $kitapId = isset($_POST['id']) ? (int)$_POST['id'] : 0;
        if (isset($kitaplar[$kitapId])) {
            unset($kitaplar[$kitapId]);
            $_SESSION['kitaplar'] = array_values($kitaplar); // Diziyi yeniden sırala
            header('Location: kitap-sil.php'); // Sayfayı yenile
            exit();
        } else {
            echo "Kitap bulunamadı.";
        }
    }
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container mt-5">
    <h2>Kitapları Sil</h2>
    <?php if (empty($kitaplar)): ?>
        <p>Silinecek kitap bulunamadı.</p>
    <?php else: ?>
        <?php foreach ($kitaplar as $index => $kitap): ?>
            <div class="card mb-3" style="width: 18rem;">
                <img src="<?php echo htmlspecialchars($kitap['resim']); ?>" class="card-img-top" alt="Kitap Resmi">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($kitap['kitapAdi']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($kitap['aciklama']); ?></p>
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $index; ?>">
                        <button type="submit" name="delete" class="btn btn-danger">Sil</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
