<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php'; // ou adapte selon ton arborescence

$respond = static function (int $statusCode, array $payload): void {
  http_response_code($statusCode);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($payload, JSON_UNESCAPED_UNICODE);
  exit;
};

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $respond(405, [
    'status' => 'error',
    'message' => 'Méthode non autorisée',
  ]);
}

// Récupération des champs
$fullname = trim($_POST['fullname'] ?? '');
$email    = trim($_POST['email'] ?? '');
$company  = trim($_POST['company'] ?? '');
$message  = trim($_POST['message'] ?? '');

if ($fullname === '' || $email === '' || $message === '') {
  $respond(422, [
    'status' => 'error',
    'message' => 'Merci de remplir les champs obligatoires.',
  ]);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $respond(422, [
    'status' => 'error',
    'message' => 'Adresse email invalide.',
  ]);
}

try {
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'mail.sites-alya.fr';
  $mail->SMTPAuth = true;
  $mail->Username = 'contact@sites-alya.fr';
  $mail->Password = 'XJV*tgp1nea_zaj!xdt';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  // 📤 Expéditeur
  $mail->setFrom('contact@sites-alya.fr', 'Portfolio - Formulaire');

  // 📥 Destinataires (mets ton mail pro ici)
  $mail->addAddress('reynierpascal@yahoo.com');
  $mail->addAddress('contact@sites-alya.fr'); // copie dans ta boîte O2Switch

  // 📨 Contenu du message
  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Subject = "💼 Nouveau message depuis ton portfolio";
  $safeFullname = htmlspecialchars($fullname, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  $safeEmail = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  $safeCompany = htmlspecialchars($company, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));
  $mail->Body = "
            <p><strong>Nom complet :</strong> {$safeFullname}</p>
            <p><strong>Email :</strong> {$safeEmail}</p>
            <p><strong>Société :</strong> {$safeCompany}</p>
            <p><strong>Message :</strong><br>{$safeMessage}</p>
        ";

  $mail->send();
  $respond(200, [
    'status' => 'success',
    'message' => 'Message envoyé avec succès 🎉',
  ]);
} catch (Exception $e) {
  $respond(500, [
    'status' => 'error',
    'message' => "Erreur lors de l'envoi : {$mail->ErrorInfo}",
  ]);
}
