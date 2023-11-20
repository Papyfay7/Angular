<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Adresse e-mail de destination
    $to = "papyfay7@gmail.com";
    
    // En-têtes de l'e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "success"; // Réponse en cas de succès
    } else {
        echo "error"; // Réponse en cas d'erreur
    }
} else {
    echo "Une erreur s'est produite. Veuillez réessayer.";
}
?>
