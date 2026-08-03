<?php
$pageTitle = 'Actualités';
$pageDescription = "Actualités juridiques et vie du Cabinet Maître TAWET.";
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/articles-data.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="/index.php">Accueil</a> / Actualités</div>
    <h1>Actualités</h1>
    <p class="lead" style="color:rgba(243,238,230,0.75);">Analyses juridiques, évolutions réglementaires et vie du cabinet.</p>
  </div>
</section>

<!-- <section class="reveal section-image" style="background-image:url('/assets/img/IMG-20260428-WA0040.jpg');"></section> -->

<section class="reveal">
  <div class="wrap">
    <div class="news-grid">
      <?php foreach ($articles as $slug => $a): ?>
      <div class="news-card">
        <div class="date"><?php echo $a['date']; ?></div>
        <h3><?php echo $a['titre']; ?></h3>
        <p><?php echo $a['resume']; ?></p>
        <a class="more" href="/actualite.php?a=<?php echo urlencode($slug); ?>">Lire l'article →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band-forest cta-band reveal">
  <div class="wrap">
    <h2 style="color:var(--paper);">Une question sur un sujet d'actualité ?</h2>
    <div class="cta-actions">
      <a href="/contact.php" class="btn btn-primary">Nous écrire</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
