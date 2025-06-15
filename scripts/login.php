<?php
include_once("response.php");
include_once("database//database.php");

if ($_POST) {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $remember = isset($_POST["remember"]) && $_POST["remember"] == "on" ? true : false;
    if (!empty($email) && !empty($password)) {
        // TODO : Logique de connexion

        $_SESSION["token"] = "";
        $_SESSION["remember"] = true;
    } else { // Données vides detectés
        // Configuration des messages d'erreurs
        $response["message"]["message"] = "Erreur : Des erreurs sont survenus au niveau du serveur.\n";
        $response["message"]["email"] = "L'email ne doit pas etre vide.\n";
        $response["message"]["password"] = "Le mot de passe ne peut etre vide.\n";
        // $response["message"]["remember"] = "Une erreur a été détecté ne peut etre vide.\n";

        // Configuration des codes d'erreurs
        $response["errors"]["email"] = empty($email) ? true : false;
        $response["errors"]["password"] = empty($password) ? true : false;
        // $response["errors"]["remember"] = empty($remember) ? true : false;
    }
}

$database = new Database();
$database->connexion();
?>