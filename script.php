<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message']; 

    // Adresse e-mail où envoyer le message
    $to = '+242057748270';
    $subject = 'Nouveau message du formulaire de contact';
    $message = "Nom et prénom: $name\n\nAdresse e-mail: $email\n\nNuméro de téléphone: $phone\n\nMessage:\n$message";

    // Envoi du message
    mail($to, $subject, $message);

    // Redirection après l'envoi du formulaire
    header('Location: contact.html');
    exit;
}
?>

