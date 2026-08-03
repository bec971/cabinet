<footer class="site-footer">
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <?php $class = 'seal-mini'; require __DIR__ . '/seal.php'; ?>
        <p style="margin-top:16px;">Cabinet d'avocats généraliste, au service des particuliers et des entreprises à Bertoua et dans la région de l'Est.</p>
      </div>
      <div>
        <h5>Navigation</h5>
        <ul>
          <li><a href="/le-cabinet.php">Le Cabinet</a></li>
          <li><a href="/competences.php">Compétences</a></li>
          <li><a href="/equipe.php">Équipe</a></li>
          <li><a href="/actualites.php">Actualités</a></li>
        </ul>
      </div>
      <div>
        <h5>Compétences</h5>
        <ul>
          <li><a href="/competences.php#foncier">Droit foncier &amp; immobilier</a></li>
          <li><a href="/competences.php#affaires">Droit des affaires</a></li>
          <li><a href="/competences.php#famille">Droit de la famille</a></li>
          <li><a href="/competences.php#penal">Droit pénal</a></li>
        </ul>
      </div>
      <div>
        <h5>Contact</h5>
        <ul>
          <li><a href="mailto:<?php echo SITE_CONTACT_EMAIL; ?>"><?php echo SITE_CONTACT_EMAIL; ?></a></li>
          <li><a href="<?php echo wa_link('Bonjour, je souhaite prendre contact avec le Cabinet Maître TAWET.'); ?>" target="_blank" rel="noopener"><?php echo SITE_WHATSAPP_DISPLAY; ?> (WhatsApp)</a></li>
          <li><?php echo SITE_CITY; ?></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> Cabinet Maître TAWET — Tous droits réservés</span>
      <span>Bertoua, Cameroun</span>
    </div>
  </div>
</footer>

<a class="wa-float" href="<?php echo wa_link('Bonjour, je souhaite prendre contact avec le Cabinet Maître TAWET.'); ?>" target="_blank" rel="noopener" aria-label="Contacter le cabinet sur WhatsApp">
  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.71.306 1.263.489 1.694.626.712.226 1.36.194 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12.004 2.003c-5.514 0-9.997 4.483-9.997 9.997 0 1.762.462 3.484 1.34 4.997L2 22l5.116-1.342a9.96 9.96 0 0 0 4.888 1.244h.004c5.514 0 9.997-4.483 9.997-9.997 0-2.67-1.04-5.18-2.929-7.07a9.937 9.937 0 0 0-7.072-2.832zm5.883 15.879c-.744.744-1.73 1.328-2.877 1.328h-.003a8.284 8.284 0 0 1-4.096-1.086l-.294-.175-3.043.799.812-2.968-.192-.305a8.263 8.263 0 0 1-1.267-4.428c0-4.596 3.74-8.335 8.336-8.335a8.29 8.29 0 0 1 5.895 2.442 8.277 8.277 0 0 1 2.44 5.897c0 2.229-.868 4.325-2.44 5.899z"/></svg>
</a>

<script src="/assets/js/main.js"></script>
</body>
</html>
