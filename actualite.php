<?php
require __DIR__ . '/includes/articles-data.php';
$slug = $_GET['a'] ?? '';
$article = $articles[$slug] ?? reset($articles);

$pageTitle = $article['titre'];
$pageDescription = $article['resume'];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="/index.php">Accueil</a> / <a href="/actualites.php">Actualités</a> / Article</div>
    <div class="eyebrow" style="color:var(--brass-light);"><?php echo $article['date']; ?></div>
    <h1><?php echo $article['titre']; ?></h1>
  </div>
</section>

<section class="reveal">
  <div class="wrap" style="max-width:760px;">
    <?php if (!empty($article['image'])): ?>
      <div class="article-hero-image"><img src="<?php echo $article['image']; ?>" alt="<?php echo htmlspecialchars($article['titre']); ?>" /></div>
    <?php endif; ?>
    <p class="lead"><?php echo $article['resume']; ?></p>
    <p><?php echo $article['corps']; ?></p>
    <div class="divider-seal" style="margin-top:50px;">
      <?php $class = 'mini-seal'; require __DIR__ . '/includes/seal.php'; ?>
      <div class="line"></div>
    </div>
    <p style="font-family:var(--font-mono); font-size:12.5px; text-transform:uppercase; letter-spacing:0.06em; color:var(--ink-soft);">Cabinet Maître TAWET — Bertoua</p>
  </div>
</section>

<section class="band-paper-dim reveal">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow">À lire aussi</div>
      <h2>Autres articles</h2>
    </div>
    <div class="news-grid">
      <?php foreach ($articles as $s => $a): if ($s === $slug) continue; ?>
      <div class="news-card">
        <div class="date"><?php echo $a['date']; ?></div>
        <h3><?php echo $a['titre']; ?></h3>
        <p><?php echo $a['resume']; ?></p>
        <a class="more" href="/actualite.php?a=<?php echo urlencode($s); ?>">Lire l'article →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
