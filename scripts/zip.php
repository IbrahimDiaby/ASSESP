<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_FILES['zip_file']) || $_FILES['zip_file']['error'] !== UPLOAD_ERR_OK) {
        die("Erreur lors de l'upload du fichier.");
    }

    $fileTmpPath = $_FILES['zip_file']['tmp_name'];
    $fileName = basename($_FILES['zip_file']['name']);

    // Vérifie que c’est bien un fichier ZIP
    $fileType = mime_content_type($fileTmpPath);
    if ($fileType !== 'application/zip' && pathinfo($fileName, PATHINFO_EXTENSION) !== 'zip') {
        die("Le fichier n'est pas un fichier ZIP valide.");
    }

    // Dossier temporaire pour décompression
    $uploadDir = $_SERVER["DOCUMENT_ROOT"]. 'uploads/';
    $extractDir = $uploadDir . pathinfo($fileName, PATHINFO_FILENAME) . '/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $savedPath = $uploadDir . $fileName;
    move_uploaded_file($fileTmpPath, $savedPath);

    // Décompression avec ZipArchive
    $zip = new ZipArchive;
    if ($zip->open($savedPath) === TRUE) {
        $zip->extractTo($extractDir);
        $zip->close();
        echo "Fichier décompressé dans : <a href='$extractDir'>$extractDir</a>";
    } else {
        echo "Impossible de décompresser le fichier ZIP.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
