<?php
$pageTitle = 'Équipe';
$pageDescription = "L'équipe du Cabinet Maître TAWET à Bertoua.";
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="/index.php">Accueil</a> / Équipe</div>
    <h1>Notre Équipe</h1>
    <p class="lead" style="color:rgba(243,238,230,0.75);">Une équipe restreinte, mobilisée sur chaque dossier avec la même rigueur.</p>
  </div>
</section>

<section class="reveal">
  <div class="wrap attorney-block">
    <div class="attorney-photo">
      <?php $class = 'seal-mini'; require __DIR__ . '/includes/seal.php'; ?>
    </div>
    <div>
      <div class="eyebrow">Avocate fondatrice</div>
      <h2>Me Ngo Diyani J. épouse Tawet</h2>
      <p>Avocate inscrite au Barreau du Cameroun, installée à Bertoua. Elle intervient tant en conseil qu'en contentieux, avec une pratique particulièrement développée en droit foncier et en droit des affaires, deux matières centrales pour les clients de la région de l'Est.</p>
      <p style="color:var(--ink-soft); font-size:0.95rem;">Langues de travail : français, anglais.</p>
    </div>
  </div>
</section>

<section class="reveal">
  <div class="wrap">
    <div class="section-image" style="background-image:url('/assets/img/IMG-20260428-WA0037.jpg');"></div>
  </div>
</section>

<section class="reveal">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Notre équipe en images</div>
      <h2>Portraits de l’équipe</h2>
      <p class="lead">Six images mettent en lumière nos avocates et stagiaires qui contribuent à chaque dossier.</p>
    </div>
    <div class="gallery-grid">
      <article class="gallery-item">
        <img src="/assets/img/IMG-20260428-WA0032.jpg" alt="Me associée" />
        <div class="gallery-overlay">Me associée</div>
      </article>
      <article class="gallery-item">
        <img src="/assets/img/IMG-20260428-WA0033.jpg" alt="Me collaboratrice" />
        <div class="gallery-overlay">Me collaboratrice</div>
      </article>
      <article class="gallery-item">
        <img src="/assets/img/IMG-20260428-WA0034.jpg" alt="Stagiaire" />
        <div class="gallery-overlay">Stagiaire</div>
      </article>
      <article class="gallery-item">
        <img src="/assets/img/IMG-20260428-WA0035.jpg" alt="Stagiaire" />
        <div class="gallery-overlay">Stagiaire</div>
      </article>
      <article class="gallery-item">
        <img src="/assets/img/IMG-20260428-WA0036.jpg" alt="Stagiaire" />
        <div class="gallery-overlay">Stagiaire</div>
      </article>
      <article class="gallery-item">
        <img src="/assets/img/IMG-20260428-WA0037.jpg" alt="Stagiaire" />
        <div class="gallery-overlay">Stagiaire</div>
      </article>
    </div>
  </div>
</section>

<section class="band-paper-dim reveal">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">Cabinet</div>
      <h2>Un accompagnement personnalisé</h2>
      <p class="lead">Selon la nature et la complexité du dossier, le cabinet fait appel à des collaborateurs et des correspondants pour renforcer certaines expertises spécifiques, notamment en matière fiscale et notariale.</p>
    </div>
  </div>
</section>

<section class="cta-band reveal">
  <div class="wrap">
    <h2>Discuter de votre dossier avec l'équipe</h2>
    <div class="cta-actions">
      <a href="/rendez-vous.php" class="btn btn-primary">Prendre rendez-vous</a>
      <a href="/contact.php" class="btn btn-ghost">Nous écrire</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
