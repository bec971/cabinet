<?php
$pageTitle = 'Contact & Rendez-vous';
$pageDescription = "Contactez le Cabinet Maître TAWET à Bertoua — e-mail, téléphone, WhatsApp. Pour un contact général ou un rendez-vous.";
require __DIR__ . '/includes/header.php';
$statut = $_GET['statut'] ?? '';
?>

<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="/index.php">Accueil</a> / Contact</div>
    <h1>Contact & Rendez-vous</h1>
    <p class="lead" style="color:rgba(243,238,230,0.75);">Une question, un dossier à évoquer ou un rendez-vous à fixer ? Utilisez le formulaire de droite et retrouvez-nous sur la carte.</p>
  </div>
</section>

<section class="reveal">
  <div class="wrap contact-layout">
    <div>
      <div class="contact-map">
        <iframe class="map-frame" loading="lazy" src="https://www.openstreetmap.org/export/embed.html?bbox=13.65%2C4.55%2C13.75%2C4.62&layer=mapnik&marker=4.5786%2C13.6849" title="Localisation du cabinet à Bertoua"></iframe>
      </div>
      <div class="contact-details">
        <div class="contact-box">
          <h4>Coordonnées</h4>
          <p><?php echo SITE_CITY; ?></p>
          <p><a href="mailto:<?php echo SITE_CONTACT_EMAIL; ?>"><?php echo SITE_CONTACT_EMAIL; ?></a></p>
          <p><a href="<?php echo wa_link('Bonjour, je souhaite prendre contact avec le Cabinet Maître TAWET.'); ?>" target="_blank" rel="noopener"><?php echo SITE_WHATSAPP_DISPLAY; ?></a></p>
        </div>
        <div class="contact-box">
          <h4>Services</h4>
          <p>Droit foncier, droit des affaires, droit de la famille, droit pénal, droit du travail et droit administratif.</p>
        </div>
        <div class="contact-box">
          <h4>Horaires</h4>
          <p>Lundi à Vendredi — 08h30 à 17h30</p>
        </div>
      </div>
    </div>

    <div class="form-panel">
      <div class="eyebrow">Formulaire de contact & rendez-vous</div>
      <h2>Écrivez-nous</h2>

      <?php if ($statut === 'champs-manquants'): ?>
        <div class="alert alert-error">Merci de renseigner votre nom, un e-mail valide et votre message avant l'envoi.</div>
      <?php elseif ($statut === 'erreur'): ?>
        <div class="alert alert-error">Une erreur est survenue. Merci de réessayer ou de nous écrire directement par WhatsApp.</div>
      <?php endif; ?>

      <form action="/includes/send-mail.php" method="POST">
        <input type="hidden" name="form_type" value="contact">
        <input type="text" name="site_web" style="position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

        <div class="form-grid">
          <div>
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" required>
          </div>
          <div>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div>
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone">
          </div>
          <div>
            <label for="sujet">Sujet</label>
            <input type="text" id="sujet" name="sujet" placeholder="Ex : Litige foncier">
          </div>
          <div class="full">
            <label for="message">Votre message</label>
            <textarea id="message" name="message" required></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:24px;">Envoyer le message</button>
        <p class="form-note">Après l'envoi, vous serez redirigé vers WhatsApp pour confirmer votre demande directement auprès du cabinet.</p>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
