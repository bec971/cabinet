const articles = [
  {
    slug: 'immatriculation-fonciere-2026',
    date: 'Juillet 2026',
    title: "Nouvelles règles d'immatriculation foncière",
    summary: "Ce qui change pour les propriétaires de la région de l'Est et comment sécuriser votre titre foncier.",
    image: 'assets/img/IMG-20260428-WA0041.jpg',
    body: "L'immatriculation reste l'étape décisive pour sécuriser un droit de propriété au Cameroun. Plusieurs points de vigilance méritent d'être rappelés aux propriétaires de la région de l'Est : la constitution du dossier, le rôle de la commission consultative, et les recours possibles en cas de contestation par un tiers. Le cabinet accompagne les particuliers et les entreprises à chaque étape de cette procédure, de la constitution du dossier jusqu'à la délivrance du titre définitif."
  },
  {
    slug: 'creer-societe-ohada',
    date: 'Juin 2026',
    title: 'Créer sa société en zone OHADA',
    summary: 'Les étapes essentielles pour formaliser une activité commerciale à Bertoua.',
    image: 'assets/img/IMG-20260428-WA0042.jpg',
    body: "Le droit OHADA encadre la création des sociétés commerciales dans l'ensemble de la zone, y compris au Cameroun. Choix de la forme sociale, rédaction des statuts, formalités auprès du Centre de Formalités des Entreprises : chaque étape conditionne la solidité juridique future de l'entreprise. Le cabinet conseille les commerçants et porteurs de projet de Bertoua sur l'ensemble de ce parcours."
  },
  {
    slug: 'mediation-familiale',
    date: 'Mai 2026',
    title: 'Médiation familiale : une alternative au procès',
    summary: 'Pourquoi la médiation permet souvent de préserver les liens familiaux tout en réglant le litige.',
    image: 'assets/img/IMG-20260428-WA0043.jpg',
    body: "Avant d'engager une procédure contentieuse, la médiation familiale offre un cadre pour régler un désaccord — succession, garde d'enfants, partage de biens — tout en limitant les tensions durables entre les parties. Le cabinet propose systématiquement cette option lorsqu'elle est adaptée à la situation, avant d'envisager une saisine du tribunal."
  }
];

const domains = [
  { id: 'foncier', title: 'Droit foncier & immobilier', text: "Sécurisation des titres fonciers, immatriculation, litiges de terrain entre particuliers ou avec l'administration, baux commerciaux et d'habitation, expropriation pour cause d'utilité publique. Le cabinet accorde une attention particulière à l'articulation entre droit écrit et droit coutumier, fréquente dans les dossiers fonciers de la région de l'Est." },
  { id: 'affaires', title: 'Droit des affaires', text: "Création et restructuration de sociétés, rédaction et négociation de contrats commerciaux, recouvrement de créances, contentieux devant les juridictions et dans le cadre du droit OHADA. Conseil aux commerçants et PME de Bertoua sur leurs obligations légales." },
  { id: 'famille', title: 'Droit de la famille', text: "Procédures de divorce, garde et autorité parentale, pensions alimentaires, successions et partages, actes et rectifications d'état civil. Le cabinet privilégie, lorsque c'est possible, la médiation familiale pour préserver les liens entre les parties." },
  { id: 'penal', title: 'Droit pénal', text: 'Défense pénale à tous les stades de la procédure, assistance dès la garde à vue, constitution de partie civile pour les victimes, suivi devant les juridictions répressives.' },
  { id: 'travail', title: 'Droit du travail', text: "Rédaction de contrats de travail, accompagnement en cas de licenciement ou de rupture conventionnelle, contentieux prud'homal, conseil aux employeurs sur leurs obligations sociales." },
  { id: 'administratif', title: 'Droit administratif', text: "Recours contre les décisions de l'administration, accompagnement dans les procédures de marchés publics, contentieux fiscal local et relations avec les collectivités territoriales." }
];

const siteName = 'Cabinet Maître TAWET';
const whatsappNumber = '237659502036';
const contactEmail = 'tchamgadaniel@gmail.com';
const whatsappBase = `https://wa.me/${whatsappNumber}`;

function escapeHTML(value) {
  return String(value).replace(/[&<>"']/g, (character) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
  })[character]);
}

function seal(className) {
  return `<img class="${className}" src="assets/img/seal.svg" alt="Sceau du Cabinet Maître TAWET">`;
}

function renderSharedLayout() {
  const activeFile = location.pathname.split('/').pop() || 'index.html';
  const navItems = [
    ['index.html', 'Accueil'],
    ['le-cabinet.html', 'Le Cabinet'],
    ['competences.html', 'Compétences'],
    ['equipe.html', 'Équipe'],
    ['actualites.html', 'Actualités'],
    ['contact.html', 'Contact'],
    ['rendez-vous.html', 'Prendre rendez-vous']
  ];
  const links = navItems.map(([href, label]) => {
    const active = activeFile === href;
    const classes = [active && 'active', href === 'rendez-vous.html' && 'nav-appointment btn btn-primary']
      .filter(Boolean)
      .join(' ');
    return `<li><a href="${href}"${classes ? ` class="${classes}"` : ''}${active ? ' aria-current="page"' : ''}>${label}</a></li>`;
  }).join('');
  const header = document.querySelector('[data-site-header]');
  const footer = document.querySelector('[data-site-footer]');

  if (header) {
    header.outerHTML = `<header class="site-header"><div class="wrap">
      <a href="index.html" class="brand">${seal('seal-mini')}<span>${siteName}<small>Avocate au Barreau du Cameroun — Bertoua</small></span></a>
      <nav class="main-nav" aria-label="Navigation principale">
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-menu" aria-label="Ouvrir le menu">
          <span></span><span></span><span></span>
        </button>
        <ul id="main-menu">${links}</ul>
      </nav>
    </div></header>`;
  }

  if (footer) {
    footer.outerHTML = `<footer class="site-footer"><div class="wrap">
      <div class="footer-grid">
        <div class="footer-brand">${seal('seal-mini')}<p style="margin-top:16px;">Cabinet d'avocats généraliste, au service des particuliers et des entreprises à Bertoua et dans la région de l'Est.</p></div>
        <div><h5>Navigation</h5><ul><li><a href="le-cabinet.html">Le Cabinet</a></li><li><a href="competences.html">Compétences</a></li><li><a href="equipe.html">Équipe</a></li><li><a href="actualites.html">Actualités</a></li></ul></div>
        <div><h5>Compétences</h5><ul><li><a href="competences.html#foncier">Droit foncier &amp; immobilier</a></li><li><a href="competences.html#affaires">Droit des affaires</a></li><li><a href="competences.html#famille">Droit de la famille</a></li><li><a href="competences.html#penal">Droit pénal</a></li></ul></div>
        <div><h5>Contact</h5><ul><li><a href="mailto:${contactEmail}">${contactEmail}</a></li><li><a href="${whatsappBase}?text=Bonjour%2C%20je%20souhaite%20prendre%20contact%20avec%20le%20Cabinet%20Ma%C3%AEtre%20TAWET." target="_blank" rel="noopener">+237 659 502 036 (WhatsApp)</a></li><li>Bertoua, Région de l'Est, Cameroun</li></ul></div>
      </div>
      <div class="footer-bottom"><span>&copy; ${new Date().getFullYear()} ${siteName} — Tous droits réservés</span><span>Bertoua, Cameroun</span></div>
    </div></footer>
    <a class="wa-float" href="${whatsappBase}?text=Bonjour%2C%20je%20souhaite%20prendre%20contact%20avec%20le%20Cabinet%20Ma%C3%AEtre%20TAWET." target="_blank" rel="noopener" aria-label="Contacter le cabinet sur WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.71.306 1.263.489 1.694.626.712.226 1.36.194 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12.004 2.003c-5.514 0-9.997 4.483-9.997 9.997 0 1.762.462 3.484 1.34 4.997L2 22l5.116-1.342a9.96 9.96 0 0 0 4.888 1.244h.004c5.514 0 9.997-4.483 9.997-9.997 0-2.67-1.04-5.18-2.929-7.07a9.937 9.937 0 0 0-7.072-2.832zm5.883 15.879c-.744.744-1.73 1.328-2.877 1.328h-.003a8.284 8.284 0 0 1-4.096-1.086l-.294-.175-3.043.799.812-2.968-.192-.305a8.263 8.263 0 0 1-1.267-4.428c0-4.596 3.74-8.335 8.336-8.335a8.29 8.29 0 0 1 5.895 2.442 8.277 8.277 0 0 1 2.44 5.897c0 2.229-.868 4.325-2.44 5.899z"/></svg></a>`;
  }

  const toggle = document.querySelector('.nav-toggle');
  const navList = document.querySelector('.main-nav ul');
  if (toggle && navList) {
    const setMenuOpen = (isOpen) => {
      navList.classList.toggle('open', isOpen);
      toggle.setAttribute('aria-expanded', String(isOpen));
      toggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
    };

    toggle.addEventListener('click', () => {
      setMenuOpen(toggle.getAttribute('aria-expanded') !== 'true');
    });
    navList.addEventListener('click', (event) => {
      if (event.target.closest('a')) setMenuOpen(false);
    });
    document.addEventListener('pointerdown', (event) => {
      if (!event.target.closest('.main-nav')) setMenuOpen(false);
    });
    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
        setMenuOpen(false);
        toggle.focus();
      }
    });
  }
}

function renderNews() {
  const list = document.querySelector('[data-news-list]');
  if (!list) return;
  list.innerHTML = articles.map((article) => `<article class="news-card">
    <div class="date">${escapeHTML(article.date)}</div><h3>${escapeHTML(article.title)}</h3>
    <p>${escapeHTML(article.summary)}</p>
    <a class="more" href="actualite.html?a=${encodeURIComponent(article.slug)}">Lire l'article →</a>
  </article>`).join('');
}

function renderDomains() {
  const container = document.querySelector('[data-domain-sections]');
  if (!container) return;
  container.innerHTML = domains.map((domain, index) => `<section id="${domain.id}" class="reveal${index % 2 ? ' band-paper-dim' : ''}">
    <div class="wrap"><div class="divider-seal">${seal('mini-seal')}<div class="line"></div></div>
    <div class="eyebrow">${String(index + 1).padStart(2, '0')} / 06</div><h2>${escapeHTML(domain.title)}</h2>
    <p class="lead" style="max-width:70ch;">${escapeHTML(domain.text)}</p>
    <a href="rendez-vous.html?sujet=${encodeURIComponent(domain.title)}" class="btn btn-ghost" style="margin-top:10px;">Consulter pour ce domaine</a></div>
  </section>`).join('');
}

function renderArticle() {
  const container = document.querySelector('[data-article-detail]');
  if (!container) return;

  const params = new URLSearchParams(location.search);
  const requestedSlug = params.get('a');
  const articleSlugs = new Set(articles.map((item) => item.slug));
  const article = articleSlugs.has(requestedSlug)
    ? articles.find((item) => item.slug === requestedSlug)
    : null;

  container.replaceChildren();

  if (!article) {
    document.title = `Article introuvable — ${siteName}`;
    const description = document.querySelector('meta[name="description"]');
    if (description) description.content = 'Article introuvable sur le site du Cabinet Maître TAWET.';

    const hero = document.createElement('section');
    hero.className = 'page-hero';
    const wrap = document.createElement('div');
    wrap.className = 'wrap';
    const breadcrumb = document.createElement('div');
    breadcrumb.className = 'breadcrumb';
    const actualitesLink = document.createElement('a');
    actualitesLink.href = 'actualites.html';
    actualitesLink.textContent = 'Actualités';
    breadcrumb.append(actualitesLink, document.createTextNode(' / Article'));
    const heading = document.createElement('h1');
    heading.textContent = 'Article introuvable';
    wrap.append(breadcrumb, heading);
    hero.append(wrap);

    const section = document.createElement('section');
    section.className = 'reveal';
    const sectionWrap = document.createElement('div');
    sectionWrap.className = 'wrap';
    sectionWrap.style.maxWidth = '760px';
    const homeLink = document.createElement('a');
    homeLink.href = 'index.html';
    homeLink.className = 'btn btn-primary';
    homeLink.textContent = "Retour à l'accueil";
    sectionWrap.append(homeLink);
    section.append(sectionWrap);

    container.append(hero, section);
    return;
  }

  document.title = `${article.title} — ${siteName}`;
  const description = document.querySelector('meta[name="description"]');
  if (description) description.content = article.summary;

  const hero = document.createElement('section');
  hero.className = 'page-hero';
  const heroWrap = document.createElement('div');
  heroWrap.className = 'wrap';
  const breadcrumb = document.createElement('div');
  breadcrumb.className = 'breadcrumb';
  const homeLink = document.createElement('a');
  homeLink.href = 'index.html';
  homeLink.textContent = 'Accueil';
  breadcrumb.append(homeLink, document.createTextNode(' / '));
  const actualitesLink = document.createElement('a');
  actualitesLink.href = 'actualites.html';
  actualitesLink.textContent = 'Actualités';
  breadcrumb.append(actualitesLink, document.createTextNode(' / Article'));
  const eyebrow = document.createElement('div');
  eyebrow.className = 'eyebrow';
  eyebrow.style.color = 'var(--brass-light)';
  eyebrow.textContent = article.date;
  const heading = document.createElement('h1');
  heading.textContent = article.title;
  heroWrap.append(breadcrumb, eyebrow, heading);
  hero.append(heroWrap);

  const articleSection = document.createElement('section');
  articleSection.className = 'reveal';
  const articleWrap = document.createElement('div');
  articleWrap.className = 'wrap';
  articleWrap.style.maxWidth = '760px';
  const imageWrap = document.createElement('div');
  imageWrap.className = 'article-hero-image';
  const image = document.createElement('img');
  image.src = article.image;
  image.alt = article.title;
  imageWrap.append(image);
  const summary = document.createElement('p');
  summary.className = 'lead';
  summary.textContent = article.summary;
  const body = document.createElement('p');
  body.textContent = article.body;
  const separator = document.createElement('div');
  separator.className = 'divider-seal';
  separator.style.marginTop = '50px';
  const sealImage = document.createElement('img');
  sealImage.className = 'mini-seal';
  sealImage.src = 'assets/img/seal.svg';
  sealImage.alt = 'Sceau du Cabinet Maître TAWET';
  const line = document.createElement('div');
  line.className = 'line';
  separator.append(sealImage, line);
  const attribution = document.createElement('p');
  attribution.style.fontFamily = 'var(--font-mono)';
  attribution.style.fontSize = '12.5px';
  attribution.style.textTransform = 'uppercase';
  attribution.style.color = 'var(--ink-soft)';
  attribution.textContent = `${siteName} — Bertoua`;
  articleWrap.append(imageWrap, summary, body, separator, attribution);
  articleSection.append(articleWrap);

  const relatedSection = document.createElement('section');
  relatedSection.className = 'band-paper-dim reveal';
  const relatedWrap = document.createElement('div');
  relatedWrap.className = 'wrap';
  const sectionHead = document.createElement('div');
  sectionHead.className = 'section-head';
  const relatedEyebrow = document.createElement('div');
  relatedEyebrow.className = 'eyebrow';
  relatedEyebrow.textContent = 'À lire aussi';
  const relatedHeading = document.createElement('h2');
  relatedHeading.textContent = 'Autres articles';
  sectionHead.append(relatedEyebrow, relatedHeading);
  const newsGrid = document.createElement('div');
  newsGrid.className = 'news-grid';

  articles.filter((item) => item.slug !== article.slug).forEach((item) => {
    const card = document.createElement('article');
    card.className = 'news-card';
    const date = document.createElement('div');
    date.className = 'date';
    date.textContent = item.date;
    const title = document.createElement('h3');
    title.textContent = item.title;
    const summaryText = document.createElement('p');
    summaryText.textContent = item.summary;
    const link = document.createElement('a');
    link.className = 'more';
    link.href = `actualite.html?a=${encodeURIComponent(item.slug)}`;
    link.textContent = "Lire l'article →";
    card.append(date, title, summaryText, link);
    newsGrid.append(card);
  });

  relatedWrap.append(sectionHead, newsGrid);
  relatedSection.append(relatedWrap);
  container.append(hero, articleSection, relatedSection);
}

function setupContactForm() {
  const form = document.querySelector('#contact-form');
  if (!form) return;
  const params = new URLSearchParams(location.search);
  const subject = params.get('sujet');
  const subjectField = form.querySelector('[name="sujet"]');
  const typeField = form.querySelector('[name="form_type"]');
  if (subject && subjectField) {
    subjectField.value = subject;
    if (typeField) typeField.value = 'rendez-vous';
  }

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (form.querySelector('[name="site_web"]').value) return;
    const data = new FormData(form);
    const name = String(data.get('nom') || '').trim();
    const email = String(data.get('email') || '').trim();
    const phone = String(data.get('telephone') || '').trim();
    const topic = String(data.get('sujet') || '').trim() || (subject ? 'Demande de rendez-vous' : 'Message depuis le site');
    const message = String(data.get('message') || '').trim();
    const isAppointment = data.get('form_type') === 'rendez-vous';
    const lines = [
      `Bonjour, je m'appelle ${name}.`,
      isAppointment ? `Je souhaite prendre rendez-vous (sujet : ${topic}).` : `Je souhaite contacter le cabinet (sujet : ${topic}).`,
      `E-mail : ${email}`,
      phone ? `Téléphone : ${phone}` : '',
      '',
      message
    ].filter((line) => line !== '');
    location.assign(`${whatsappBase}?text=${encodeURIComponent(lines.join('\n'))}`);
  });
}

function initReveals() {
  const reveals = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    reveals.forEach((element) => observer.observe(element));
  } else {
    reveals.forEach((element) => element.classList.add('is-visible'));
  }
}

document.addEventListener('DOMContentLoaded', () => {
  renderSharedLayout();
  renderNews();
  renderDomains();
  renderArticle();
  setupContactForm();
  initReveals();
});