<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

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

// Empêche l'envoi de plusieurs messages en peu de temps
session_start();
if (!isset($_SESSION['last_send'])) {
  $_SESSION['last_send'] = 0;
}
$delay = time() - $_SESSION['last_send'];
if ($delay < 10) { // 10 secondes entre deux messages
  $respond(429, [
    'status' => 'error',
    'message' => "Veuillez patienter avant de renvoyer un message."
  ]);
}
$_SESSION['last_send'] = time();

//le honeypote
$honeypot = trim($_POST['website'] ?? '');
if ($honeypot !== '') {
  $respond(200, [
    'status' => 'success',
    'message' => 'Message envoyé.' // fait croire que tout est ok
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
  $env = parse_ini_file(__DIR__ . '/../.env');
  if (!$env) {
    $respond(500, [
      'status' => 'error',
      'message' => 'Impossible de charger le fichier .env'
    ]);
  }
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'mail.pascalreynier.fr';
  $mail->SMTPAuth = true;
  $mail->Username = $env['SMTP_USER'];
  $mail->Password = $env['SMTP_PASS'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  // Expéditeur
  $mail->setFrom('contact@pascalreynier.fr', 'Portfolio - Formulaire');

  // Destinataires (mail pro ici)
  $mail->addAddress('reynierpascal@yahoo.com');
  $mail->addAddress('contact@pascalreynier.fr'); // copie dans boîte O2Switch

  // Contenu du message
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
