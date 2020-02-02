<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Envoi d'un mail avec un nouveau mot de passe en cas de mot de passe oublié
function sendTempPwd($mailtoAddress, $randomInt)
{
    $mail = new PHPMailer;
    try
    {
        // Réglages du serveur d'envoi
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jeromedemarseille@gmail.com';
        $mail->Password   = 'gambit13';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

        // Destinataire
        $mail->setFrom('jerome.david@cegetel.net', '[Blog Alaska]');
        $mail->addAddress($mailtoAddress);

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = '[Blog Alaska] Votre nouveau mot de passe';
        $mail->Body    = 'Bonjour, <br>Voici votre nouveau mot de passe : '. $randomInt . '<br>Cordialement,<br>L\'administration du site';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Envoi
        $mail->send();

        header('Refresh:5; url=index.php');
        echo '<div class="card" style="border:solid 2px grey; border-radius:15px; width:50%; margin:4rem auto; font-size:1.5rem; padding:1rem; text-align:center">';
        echo 'Votre nouveau mot de passe a été envoyé avec succès.<br>Veuillez patienter, vous allez être redirigé vers la page de connexion...';
        echo '</div>';
        $_SESSION['info'] = "Mot de passe envoyé avec succès";
    }

    catch (Exception $e)
    {
        echo "Votre message n'a pas pu être envoyé. Type d'erreur: {$mail->ErrorInfo}.<br>Retour à la <a href='index.php?action=login'>page précédente</a>";
    }

}