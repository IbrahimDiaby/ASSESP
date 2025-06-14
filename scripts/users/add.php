<?php
header('Content-Type: application/json');

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Vérifier image
    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Image manquante ou invalide.']);
        exit;
    }

    $imageTmp = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $imageSize = $_FILES['image']['size'];
    $imageType = mime_content_type($imageTmp);

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($imageType, $allowedTypes)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Type d\'image non autorisé.']);
        exit;
    }

    if ($imageSize > 2 * 1024 * 1024) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'L\'image dépasse 2 Mo.']);
        exit;
    }

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $filePath = $uploadDir . uniqid() . '_' . $imageName;

    if (!move_uploaded_file($imageTmp, $filePath)) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Erreur lors du téléchargement de l\'image.']);
        exit;
    }

    // Réponse JSON
    $response = [
        'success' => true,
        'message' => 'Message reçu avec succès.',
        'data' => [
            'nom' => $nom,
            'email' => $email,
            'message' => $message,
            'image_url' => $filePath
        ]
    ];

    echo json_encode($response);
    exit;
}

http_response_code(405);
echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
