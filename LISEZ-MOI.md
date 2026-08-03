# Cabinet Maître TAWET — Site web

## Ce que contient ce dossier

- `index.php`, `le-cabinet.php`, `competences.php`, `equipe.php`, `actualites.php`, `actualite.php`, `contact.php`, `rendez-vous.php` — les pages du site.
- `includes/` — en-tête, pied de page, configuration, sceau (SVG), et `send-mail.php` (le backend des formulaires).
- `assets/` — CSS, JS.

## Installation sur un hébergement PHP

1. Copier tout le contenu de ce dossier à la racine de l'hébergement (le dossier qui contient `index.php` doit être la racine du domaine, ou du sous-dossier).
2. L'hébergement doit supporter **PHP 8** et avoir la fonction `mail()` activée (c'est le cas de la quasi-totalité des hébergements mutualisés : o2switch, Hostinger, OVH, etc.). Sans cela, l'e-mail ne partira pas, mais le site continuera de fonctionner et la redirection WhatsApp restera active.
3. Vérifier/adapter les informations de contact dans `includes/config.php` :
   - `SITE_CONTACT_EMAIL` — adresse qui reçoit les messages du site.
   - `SITE_WHATSAPP_NUMBER` — numéro WhatsApp (indicatif 237 inclus, sans le +).

## ⚠️ À vérifier avant mise en ligne

L'adresse e-mail actuellement configurée est `tchamgadaniel@gamil.com`.
**"gamil.com" ressemble à une faute de frappe pour "gmail.com".** Si c'est le cas,
corrige-la dans `includes/config.php` (ligne `SITE_CONTACT_EMAIL`), sinon aucun
e-mail de contact ne pourra jamais être livré.

## Comment fonctionne le formulaire

1. Le visiteur remplit le formulaire (Contact ou Rendez-vous).
2. `includes/send-mail.php` valide les champs, envoie un e-mail à `SITE_CONTACT_EMAIL`.
3. Le visiteur est automatiquement redirigé vers une conversation WhatsApp
   pré-remplie avec `SITE_WHATSAPP_NUMBER`, pour confirmer sa demande immédiatement.

## Contenu à personnaliser

- Les articles d'actualité (`includes/articles-data.php`) sont des exemples à remplacer par du contenu réel.
- Les textes de présentation peuvent être ajustés dans chaque page `.php`.
- Le fond de carte dans `contact.php` utilise OpenStreetMap ; les coordonnées peuvent être ajustées une fois l'adresse exacte du cabinet confirmée.
