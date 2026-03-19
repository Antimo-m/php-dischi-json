<?php
require_once("./server.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">Most listen 🎧</h1>
        <div class="row g-4">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-md-4">
                    <div class="card bg-secondary text-light h-100 shadow">
                        <img src="<?php echo $disco['cover']; ?>" class="card-img-top" alt="cover">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $disco['titolo']; ?></h5>
                            <p class="card-text"><?php echo $disco['artista']; ?></p>
                            <p class="card-text"> <small><?php echo $disco['anno']; ?></small> </p> 
                            <span class="badge bg-dark"> <?php echo $disco['genere']; ?> </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
               
                <h2 class="text-center mb-4">Aggiungi un Disco 🎵</h2>

                <!-- Form -->
                <form action="./server.php" method="POST" class="p-4 bg-secondary rounded shadow">

                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="titolo" name="titolo" required maxlength="100">
                    </div>

                    <div class="mb-3">
                        <label for="artista" class="form-label">Artista</label>
                        <input type="text" class="form-control" id="artista" name="artista" required maxlength="100">
                    </div>

                    <div class="mb-3">
                        <label for="anno" class="form-label">Anno</label>
                        <input type="number" class="form-control" id="anno" name="anno" >
                    </div>

                    <div class="mb-3">
                        <label for="genere" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="genere" name="genere" required maxlength="50">
                    </div>

                    <div class="mb-3">
                        <label for="cover_url" class="form-label">Link immagine cover</label>
                        <input type="url" class="form-control" id="cover_url" name="cover_url" placeholder="https://..." required maxlength="255">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Aggiungi Disco</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>