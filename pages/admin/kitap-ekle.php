<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="../index.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title">Kitap Adı</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Açıklaması</label>
                    <input type="text" name="writer" id="writer" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title">Kitap Kapağı</label><br>
                    <input type="file" name="fileToUpload">
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
</div>