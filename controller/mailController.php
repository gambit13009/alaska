<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ('PHPMailer/src/Exception.php');
require ('PHPMailer/src/PHPMailer.php');
require ('PHPMailer/src/SMTP.php');

//require_once('model/User.php');


// Envoi de mail à partir du formulaire
function sendContactMail($senderName, $senderAddress, $senderText)
{
    $mail = new PHPMailer(true);
    $user = new User();
    $forterocheMail = $user->getForterocheMail();

    try
    {
        //Réglage du serveur d'envoi des mails
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host       = 'smtp.neuf.fr';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jerome.david@cegetel.net';
        $mail->Password   = 'gambit13009';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 465;

        // Destinataire
        $mail->setFrom($senderAddress, $senderName);
        $mail->addAddress($forterocheMail[0], 'Jean Forteroche');

        // Content
        $mail->isHTML(true);
        $mail->Subject = '[Blog Alaska] Message d\'un visiteur';
        $mail->Body    = $senderText;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // envoi
        $mail->send();

        header('Refresh:4; url=index.php');
        echo 'Votre message a été envoyé avec succès.<br>Veuillez patienter, vous allez être redirigé vers la page d\'accueil...';
    }

    catch (Exception $e)
    {
        echo "Votre message n'a pas pu être envoyé. Type d'erreur: {$mail->ErrorInfo}.<br>Retour à la <a href='index.php'>page d'accueil</a>";
    }

}

// Envoi d'un mail avec un nouveau mot de passe en cas d'oubli du mot de passe
function sendTempPwd($mailtoAddress, $randomInt)
{
    $mail = new PHPMailer(true);

    try
    {
        // Réglages du serveur d'envoi
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host       = 'smtp.neuf.fr';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jerome.david@cegetel.net';
        $mail->Password   = 'gambit13009';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 465;

        // Destinataire
        $mail->setFrom('jerome.david@cegetel.net', '[Blog Alaska]');
        $mail->addAddress($mailtoAddress, $mailtoAddress);

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = '[Blog Alaska] Votre nouveau mot de passe';
        $mail->Body    = 'Bonjour, voici votre mot de passe provisoire : '. $randomInt . '<br>Pour des raisons de sécurité, merci de bien vouloir le changer lors de votre prochaine connexion.<br>Cordialement,<br>l\'administration du site';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // envoi
        $mail->send();

        header('Refresh:5; url=index.php?action=login');
        echo 'Votre nouveau mot de passe a été envoyé avec succès.<br>Veuillez patienter, vous allez être redirigé vers la page de connexion...';
    }

    catch (Exception $e)
    {
        echo "Votre message n'a pas pu être envoyé. Type d'erreur: {$mail->ErrorInfo}.<br>Retour à la <a href='index.php?action=login'>page précédente</a>";
    }

}