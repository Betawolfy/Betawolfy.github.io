<?php
// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Définir les paramètres du mail
$to = "contact.betawolfy@gmail.com"; // Votre adresse email
$subject = "Nouveau message de contact"; // Le sujet du mail
$headers = "From: $email\r\n"; // L'adresse de l'expéditeur
$body = "Vous avez reçu un nouveau message de contact de la part de $name.\r\n"; // Le corps du mail
$body .= "Voici son message :\r\n";
$body .= $message;

// Envoyer le mail
if (mail($to, $subject, $body, $headers)) {
  echo "Votre message a été envoyé avec succès.";
} else {
  echo "Une erreur est survenue lors de l'envoi du message.";
}
?>