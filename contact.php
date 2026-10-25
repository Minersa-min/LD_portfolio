<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Récupération simple des données
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $objet = $_POST['subject'];
        $message = $_POST['message'];

        // Vérification rapides champs ne sont pas vides
        if (empty($nom) || empty($email) || empty($objet) || empty($message)) {
            echo "Erreur : Veuillez remplir tous les champs.";
            exit;
        }

        // Adresse e-mail
        $destinataire = "dufresnelina@yahoo.com";

        // Préparation du message
        $contenu_email = "Nom : " . $nom . "\n";
        $contenu_email .= "Email : " . $email . "\n\n";
        $contenu_email .= "Message :\n" . $message;

        // En-têtes simples
        $entetes = "From: " . $email;

        // 6. Envoi de l'e-mail
        if (mail($destinataire, $objet, $contenu_email, $entetes)) {
            echo "Votre message a bien été envoyé.";
        } else {
            echo "Une erreur est survenue lors de l'envoi.";
        }

    } else {
        echo "Accès refusé.";
    }
?>