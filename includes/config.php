<?php
/**
 * Configuration générale du site — Cabinet Maître TAWET
 * Modifier ici les coordonnées de contact si elles changent.
 */

// Adresse e-mail de réception des messages du site
define('SITE_CONTACT_EMAIL', 'tchamgadaniel@gamil.com');

// Numéro WhatsApp (format international, sans le +)
define('SITE_WHATSAPP_NUMBER', '237659502036');
define('SITE_WHATSAPP_DISPLAY', '+237 659 502 036');

define('SITE_NAME', 'Cabinet Maître TAWET');
define('SITE_CITY', 'Bertoua, Région de l\'Est, Cameroun');

function wa_link($message = '') {
    $base = 'https://wa.me/' . SITE_WHATSAPP_NUMBER;
    if ($message !== '') {
        $base .= '?text=' . rawurlencode($message);
    }
    return $base;
}

function current_page() {
    return basename($_SERVER['SCRIPT_NAME']);
}
