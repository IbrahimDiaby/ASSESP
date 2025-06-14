<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // Informations pour l'email de notification (vers vous)
    $to = "votre-email@votredomaine.com";
    $subject = "Nouveau message depuis le formulaire de contact";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

    // Envoi de l'email à l'administrateur
    $sent = mail($to, $subject, $body, $headers);

    // Envoi d'une réponse automatique à l'utilisateur
    if ($sent) {
        $subject_auto = "Merci pour votre message";
        $message_auto = "Bonjour $nom,\n\nMerci de nous avoir contactés. Nous avons bien reçu votre message et vous répondrons dans les plus brefs délais.\n\nCordialement,\nL'équipe de [Votre Site]";
        $headers_auto = "From: noreply@votredomaine.com\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

        mail($email, $subject_auto, $message_auto, $headers_auto);

        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
    }
}
?>
