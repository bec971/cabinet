<?php
require_once __DIR__ . '/config.php';
$page = current_page();
function nav_active($file, $page) { return $page === $file ? 'class="active"' : ''; }
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' — ' . SITE_NAME : SITE_NAME; ?></title>
<meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Cabinet d\'avocats à Bertoua — Maître NGO DIYANI J. épouse TAWET, avocate au Barreau du Cameroun.'; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;1,500&family=Work+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="site-header">
  <div class="wrap">
    <a href="/index.php" class="brand">
      <?php $class = 'seal-mini'; require __DIR__ . '/seal.php'; ?>
      <span>Cabinet Maître TAWET<small>Avocate au Barreau du Cameroun — Bertoua</small></span>
    </a>
    <nav class="main-nav">
      <ul>
        <li><a href="/index.php" <?php echo nav_active('index.php', $page); ?>>Accueil</a></li>
        <li><a href="/le-cabinet.php" <?php echo nav_active('le-cabinet.php', $page); ?>>Le Cabinet</a></li>
        <li><a href="/competences.php" <?php echo nav_active('competences.php', $page); ?>>Compétences</a></li>
        <li><a href="/equipe.php" <?php echo nav_active('equipe.php', $page); ?>>Équipe</a></li>
        <li><a href="/actualites.php" <?php echo nav_active('actualites.php', $page); ?>>Actualités</a></li>
        <li><a href="/contact.php" <?php echo nav_active('contact.php', $page); ?>>Contact</a></li>
      </ul>
      <a href="/rendez-vous.php" class="btn btn-primary">Prendre rendez-vous</a>
    </nav>
  </div>
</header>
