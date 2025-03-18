<?php 
// ICI LES INCLUDES DE FICHIERS PHP 
include 'includes/fileHandler.php';
include 'includes/fileList.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serveur de Fichiers</title>
    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Serveur de Fichiers</h2>

    <!-- FORMULAIRE UPLOAD -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Uploader</button>
    </form>
<!-- LISTE DES FICHIERS  -->
<h2>Fichiers disponibles :</h2>
<ul>
    
</ul>

</body>
</html>