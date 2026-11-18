# Cabinet Maître TAWET — Site web statique

## Contenu

- Pages du site : `index.html`, `le-cabinet.html`, `competences.html`, `equipe.html`, `actualites.html`, `actualite.html` et `contact.html`.
- `assets/css/` contient les styles; `assets/js/main.js` gère la navigation, les actualités, les domaines et les formulaires.
- `assets/img/` contient les images du site et le sceau SVG.

## Hébergement

Le site ne nécessite ni PHP ni base de données. Déposez le contenu du dossier à la racine d'un hébergement de fichiers statiques. Les chemins commencent par `/`, le site doit donc être servi à la racine du domaine ou d'un sous-domaine.

Pour un essai local, démarrez un serveur statique depuis ce dossier, par exemple avec `python3 -m http.server 8000`, puis ouvrez `http://localhost:8000`. JavaScript doit être activé pour afficher le menu commun, les listes d'articles et les pages détaillées.

## Formulaires

Le formulaire ne peut pas envoyer d'e-mail sans backend. Après validation, il ouvre WhatsApp avec le message prérempli; la personne doit confirmer l'envoi dans WhatsApp. Le numéro et l'adresse e-mail affichée se trouvent au début de `assets/js/main.js`.

L'adresse configurée est actuellement `tchamgadaniel@gmail.com`. Vérifiez que cette adresse est bien celle à publier avant mise en ligne.

## Contenu à personnaliser

- Les articles et domaines d'intervention sont définis au début de `assets/js/main.js`.
- Les textes des pages sont dans les fichiers HTML correspondants.
- La carte OpenStreetMap et ses coordonnées se trouvent dans `contact.html`.