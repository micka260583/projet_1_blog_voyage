<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // trim les valeurs post
        $data = array_map('trim', $_POST);
        // vérifier email is ok
        $isOkEmail = filter_var($data['email'], FILTER_VALIDATE_EMAIL);

        if ($isOkEmail === false) {
            $errors[] = "Le format d'email saisi n'est pas valide";
        }
        if (strlen($data['message']) < 2) {
            $errors[] = 'Le message doit être renseigné !';
        }
        if (count($errors) == 0) {
            header ("Location: recupformulaire.php?name=".$_POST['name']."&firstname=".$_POST['firstname']."&email=".$_POST['email']."&message=".$_POST['message']);
            exit();
        }
    } else {
        $errors[] = 'Tous les champs sont requis';
    }
} ?>