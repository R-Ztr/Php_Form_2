<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Contact - Merci</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];

        $errors = array();

        if (empty($nom)) {
            $errors[] = "Le champ Nom est requis.";
        }

        if (empty($prenom)) {
            $errors[] = "Le champ Prénom est requis.";
        }

        if (empty($email)) {
            $errors[] = "Le champ E-mail est requis.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Le format de l'e-mail n'est pas valide.";
        }

        if (empty($telephone)) {
            $errors[] = "Le champ Téléphone est requis.";
        }

        if (empty($sujet)) {
            $errors[] = "Le champ Sujet est requis.";
        }

        if (empty($message)) {
            $errors[] = "Le champ Message est requis.";
        }

        if (count($errors) > 0) {
            echo "Erreurs :<br>";
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            echo "Merci $prenom $nom de nous avoir contacté à propos de \"$sujet\".";
            echo "<p>Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande :</p>";
            echo "<p>$message</p>";
        }
    } else {
        echo "Erreur : Le formulaire n'a pas été soumis correctement.";
    }
    ?>
</body>
</html>
