<?php
$pageTitle = 'Compétences';
$pageDescription = "Domaines d'intervention du Cabinet Maître TAWET : droit foncier, droit des affaires, droit de la famille, droit pénal, droit du travail, droit administratif.";
require __DIR__ . '/includes/header.php';

$domaines = [
    [
        'id' => 'foncier',
        'num' => '01',
        'titre' => 'Droit foncier & immobilier',
        'texte' => "Sécurisation des titres fonciers, immatriculation, litiges de terrain entre particuliers ou avec l'administration, baux commerciaux et d'habitation, expropriation pour cause d'utilité publique. Le cabinet accorde une attention particulière à l'articulation entre droit écrit et droit coutumier, fréquente dans les dossiers fonciers de la région de l'Est."
    ],
    [
        'id' => 'affaires',
        'num' => '02',
        'titre' => 'Droit des affaires',
        'texte' => "Création et restructuration de sociétés, rédaction et négociation de contrats commerciaux, recouvrement de créances, contentieux devant les juridictions et dans le cadre du droit OHADA. Conseil aux commerçants et PME de Bertoua sur leurs obligations légales."
    ],
    [
        'id' => 'famille',
        'num' => '03',
        'titre' => 'Droit de la famille',
        'texte' => "Procédures de divorce, garde et autorité parentale, pensions alimentaires, successions et partages, actes et rectifications d'état civil. Le cabinet privilégie, lorsque c'est possible, la médiation familiale pour préserver les liens entre les parties."
    ],
    [
        'id' => 'penal',
        'num' => '04',
        'titre' => 'Droit pénal',
        'texte' => "Défense pénale à tous les stades de la procédure, assistance dès la garde à vue, constitution de partie civile pour les victimes, suivi devant les juridictions répressives."
    ],
    [
        'id' => 'travail',
        'num' => '05',
        'titre' => 'Droit du travail',
        'texte' => "Rédaction de contrats de travail, accompagnement en cas de licenciement ou de rupture conventionnelle, contentieux prud'homal, conseil aux employeurs sur leurs obligations sociales."
    ],
    [
        'id' => 'administratif',
        'num' => '06',
        'titre' => 'Droit administratif',
        'texte' => "Recours contre les décisions de l'administration, accompagnement dans les procédures de marchés publics, contentieux fiscal local et relations avec les collectivités territoriales."
    ],
];
?>

<section class="page-hero">
  <div class="wrap">
    <div class="breadcrumb"><a href="/index.php">Accueil</a> / Compétences</div>
    <h1>Domaines d'intervention</h1>
    <p class="lead" style="color:rgba(243,238,230,0.75);">Une pratique généraliste organisée en six domaines, avec une expertise renforcée en matière foncière et commerciale.</p>
  </div>
</section>

<?php foreach ($domaines as $i => $d): ?>
<section id="<?php echo $d['id']; ?>" class="reveal <?php echo $i % 2 === 1 ? 'band-paper-dim' : ''; ?>">
  <div class="wrap">
    <div class="divider-seal">
      <?php $class = 'mini-seal'; require __DIR__ . '/includes/seal.php'; ?>
      <div class="line"></div>
    </div>
    <div class="eyebrow"><?php echo $d['num']; ?> / 06</div>
    <h2><?php echo $d['titre']; ?></h2>
    <p class="lead" style="max-width:70ch;"><?php echo $d['texte']; ?></p>
    <a href="/rendez-vous.php?sujet=<?php echo urlencode($d['titre']); ?>" class="btn btn-ghost" style="margin-top:10px;">Consulter pour ce domaine</a>
  </div>
</section>
<?php endforeach; ?>

<section class="band-forest cta-band reveal">
  <div class="wrap">
    <h2 style="color:var(--paper);">Un domaine non listé ici ?</h2>
    <p class="lead" style="margin:0 auto; color:rgba(243,238,230,0.8);">Le cabinet intervient dans l'ensemble des branches du droit. Écrivez-nous pour une première évaluation de votre dossier.</p>
    <div class="cta-actions">
      <a href="/contact.php" class="btn btn-primary">Nous écrire</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
