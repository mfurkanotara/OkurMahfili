<?php
    require 'C:\xampp\htdocs\okur-mahfili\libs\variables.php';
    require 'C:\xampp\htdocs\okur-mahfili\libs\functions.php';
    
    session_start();

    // Kitapları oturumdan al
    if (!isset($_SESSION['kitaplar'])) {
        $_SESSION['kitaplar'] = array();
    }
    $kitaplar = &$_SESSION['kitaplar'];

    // Kitap ID'sini al
    $kitapId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Kitap silme işlemi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete'])) {
            // Kitapları güncelle
            if (isset($kitaplar[$kitapId])) {
                unset($kitaplar[$kitapId]);
                // Kitapları yeniden dizilere sırala
                $kitaplar = array_values($kitaplar);
                echo "Kitap başarıyla silindi.";
            } else {
                echo "Kitap bulunamadı.";
            }
        }
    } else {
        if (!isset($kitaplar[$kitapId])) {
            echo "Silinecek kitap bulunamadı.";
            exit;
        }
    }
?>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   

<div class="container mt-5">
    
        <h2>Kitap Silme Onayı</h2>
        <?php if (isset($kitaplar[$kitapId])): ?>
            <?php $kitap = $kitaplar[$kitapId]; ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo htmlspecialchars($kitap['resim']); ?>" class="card-img-top" alt="Kitap Resmi">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($kitap['kitapAdi']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($kitap['kitapAciklamasi']); ?></p>
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="<?php echo $kitapId; ?>">
                        <button type="submit" name="delete" class="btn btn-danger">Sil</button>
                        <a href="index.php" class="btn btn-secondary">Geri</a>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>