<?php
/**
 * Traitement des formulaires du site (Contact + Rendez-vous).
 * 1. Valide et nettoie les champs reçus en POST.
 * 2. Envoie un e-mail à SITE_CONTACT_EMAIL via mail().
 * 3. Redirige l'utilisateur vers WhatsApp avec un message pré-rempli,
 *    afin qu'il puisse confirmer instantanément sa demande.
 *
 * En cas d'erreur (champs manquants, envoi impossible), redirige vers
 * la page d'origine avec un paramètre ?statut=erreur.
 */

require_once __DIR__ . '/config.php';

session_start();

function clean_input($value) {
    $value = trim($value ?? '');
    $value = stripslashes($value);
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function fail_redirect($origin, $reason = 'erreur') {
    header('Location: /' . $origin . '?statut=' . $reason . '#formulaire');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.php');
    exit;
}

// Honeypot anti-spam (champ invisible côté visiteur légitime)
if (!empty($_POST['site_web'] ?? '')) {
    header('Location: /index.php');
    exit;
}

$formType = clean_input($_POST['form_type'] ?? 'contact');
$origin   = $formType === 'rendez-vous' ? 'rendez-vous.php' : 'contact.php';

$nom     = clean_input($_POST['nom'] ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$telephone = clean_input($_POST['telephone'] ?? '');
$sujet   = clean_input($_POST['sujet'] ?? ($formType === 'rendez-vous' ? 'Demande de rendez-vous' : 'Message depuis le site'));
$message = clean_input($_POST['message'] ?? '');
$dateSouhaitee = clean_input($_POST['date_souhaitee'] ?? '');

if ($nom === '' || !$email || $message === '') {
    fail_redirect($origin, 'champs-manquants');
}

$lignes = [];
$lignes[] = "Nouveau message — " . SITE_NAME;
$lignes[] = "Type : " . ($formType === 'rendez-vous' ? 'Demande de rendez-vous' : 'Formulaire de contact');
$lignes[] = "Nom : " . $nom;
$lignes[] = "E-mail : " . $email;
if ($telephone !== '') $lignes[] = "Téléphone : " . $telephone;
if ($formType === 'rendez-vous' && $dateSouhaitee !== '') $lignes[] = "Date souhaitée : " . $dateSouhaitee;
$lignes[] = "Sujet : " . $sujet;
$lignes[] = "";
$lignes[] = "Message :";
$lignes[] = $message;

$corps = implode("\r\n", $lignes);

$sujetMail = "[" . SITE_NAME . "] " . $sujet;
$headers   = [];
$headers[] = "From: " . SITE_NAME . " <no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'cabinet-tawet.local') . ">";
$headers[] = "Reply-To: " . $email;
$headers[] = "Content-Type: text/plain; charset=UTF-8";

$envoye = @mail(SITE_CONTACT_EMAIL, $sujetMail, $corps, implode("\r\n", $headers));

// On garde une trace du dernier message en session pour l'afficher si besoin
$_SESSION['dernier_message'] = [
    'nom' => $nom,
    'sujet' => $sujet,
    'envoye' => $envoye,
];

// Message pré-rempli pour la reprise de conversation sur WhatsApp
$messageWhatsApp = "Bonjour, je m'appelle {$nom}. " .
    ($formType === 'rendez-vous'
        ? "Je viens de faire une demande de rendez-vous sur le site (sujet : {$sujet})."
        : "Je viens d'envoyer un message via le site (sujet : {$sujet}).");

if (!$envoye) {
    // Même si le mail échoue (serveur sans SMTP configuré), on ne bloque pas
    // l'utilisateur : la redirection WhatsApp reste le canal de secours.
    error_log('Cabinet TAWET — échec envoi mail() pour ' . $email);
}

header('Location: ' . wa_link($messageWhatsApp));
exit;
