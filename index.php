<?php
require_once "controllers/routeur.php";
?>
<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!-- SEO -->
	<title>Pascal Reynier | DevSecOps</title>
	<meta content="Portfolio de Pascal Reynier : DevSecOps, sécurité applicative, pentest web, Linux, Docker, CI/CD et développement d’outils de cybersécurité en Python et C." name="description" />
	<meta content="Pascal Reynier" name="author" />
	<meta content="index, follow" name="robots" />
	<!-- Canonical -->
	<link href="https://pascalreynier.fr/" rel="canonical" />
	<!-- Hreflang -->
	<link href="https://pascalreynier.fr/" hreflang="fr" rel="alternate" />
	<link href="https://pascalreynier.fr/" hreflang="x-default" rel="alternate" />
	<!-- Open Graph -->
	<meta content="website" property="og:type" />
	<meta content="Pascal Reynier | DevSecOps &amp; Cybersécurité" property="og:title" />
	<meta content="DevSecOps, AppSec et pentest web : projets techniques, outils de sécurité, automatisation et applications en production." property="og:description" />
	<meta content="https://pascalreynier.fr/" property="og:url" />
	<meta content="https://pascalreynier.fr/asset/logoPr.png" property="og:image" />
	<!-- Twitter Card -->
	<meta content="summary_large_image" name="twitter:card" />
	<meta content="Pascal Reynier | DevSecOps &amp; Cybersécurité" name="twitter:title" />
	<meta content="Portfolio DevSecOps, sécurité applicative et pentest : outils Python/C, Linux, Docker, CI/CD et réalisations web." name="twitter:description" />
	<meta content="https://pascalreynier.fr/asset/logoPr.png" name="twitter:image" />
	<!-- Performance -->
	<link as="style" href="styles/css/main.css" rel="preload" />
	<link as="image" href="asset/ProfilePic.jpg" rel="preload" />
	<!-- Favicon -->
	<link href="asset/favicon.png" rel="icon" type="image/png" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect" />
	<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
	<!-- Font Awesome -->
	<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" referrerpolicy="no-referrer" rel="stylesheet">
	<!-- Main CSS -->
	<link href="styles/css/main.css" rel="stylesheet" />
	<!-- Script -->
	<script defer="" src="javascript/script.js"></script>
	<!-- Schema.org -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Person",
			"name": "Pascal Reynier",
			"jobTitle": "DevSecOps | Application Security | Pentest web",
			"url": "https://pascalreynier.fr/",
			"image": "https://pascalreynier.fr/asset/ProfilePic.jpg",
			"sameAs": [
				"https://www.linkedin.com/in/pascal-reynier-75a11b326/",
				"https://github.com/Alyaesub",
				"https://www.malt.fr/profile/pascalreynier"
			],
			"knowsAbout": [
				"DevSecOps",
				"Application Security",
				"Web Penetration Testing",
				"OWASP Top 10",
				"Linux",
				"Docker",
				"GitHub Actions",
				"CI/CD",
				"Network Protocol Analysis",
				"Python",
				"C",
				"Bash",
				"TypeScript",
				"Node.js",
				"React",
				"Next.js"
			]
		}
	</script>
	</link>
</head>

<body>
	<header class="header-website">
		<nav aria-label="Navigation principale" class="navbar">
			<a class="brand" href="/">
				<img alt="Portrait de Pascal Reynier" loading="lazy" src="asset/ProfilePic.jpg" />
				<div class="brand-details">
					<span class="brand-name">Pascal Reynier</span>
				</div>
			</a>
			<div class="menu">
				<input class="menu-input" id="menu-toggle" type="checkbox" />
				<label class="menu-input-label" for="menu-toggle"><i class="fa-solid fa-bars"></i></label>
				<div class="dropdown-menu">
					<ul class="nav-links">
						<li class="nav-link"><a href="/accueil">Accueil <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/a-propos">Approche <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/competences">Compétences <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/experiences">Expériences <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/travaux">Travaux <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/offres">Offres <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/parcours">Parcours <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/contact">Contact <i class="fa-solid fa-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<section class="section-display section-hero" id="accueil">
			<div class="hero-intro">
				<div class="section-heading">
					<span class="eyebrow">DevSecOps · Sécurité applicative · Pentest web</span>
					<h1>Je développe, sécurise et teste vos applications web.</h1>
				</div>
				<p class="lead">Développeur passé au <strong>DevSecOps et à la sécurité applicative</strong>. Je lis votre code, je corrige les failles et je teste vos applications comme le ferait un attaquant, pour réduire vos risques concrètement.</p>
				<div class="hero-actions">
					<a class="btn btn-primary" href="https://tally.so/r/0V8jx0"><i class="fa-solid fa-shield-halved"></i>Testez votre site en 2 min</a>
					<a class="btn " href="#offres"><i class="fa-solid fa-shield-halved"></i> Voir mes offres</a>
				</div>
				<div class="hero-panel__tags">
					<span class="tag"><i class="fa-solid fa-bug"></i> Pentest web</span>
					<span class="tag"><i class="fa-solid fa-shield-halved"></i> Sécurité applicative</span>
					<span class="tag"><i class="fa-solid fa-gears"></i> Automatisation</span>
				</div>
				<ul class="hero-points">
					<li>Du code à la mise en production : concevoir des applications fiables, comprendre leur surface d'attaque et réduire les risques.</li>
				</ul>
				<div class="hero-badges">
					<span class="badge"><i class="fa-brands fa-linux"></i> Linux &amp; réseaux</span>
					<span class="badge"><i class="fa-brands fa-docker"></i> Docker &amp; CI/CD</span>
					<span class="badge"><i class="fa-solid fa-code"></i> Python · C · Bash</span>
					<span class="badge"><i class="fa-solid fa-bug"></i> OWASP &amp; Burp Suite</span>
				</div>
				<div class="hero-metrics">
					<div class="hero-metric"><span class="metric-value">Pentest</span><span class="metric-label">Tests web &amp; sécurité offensive</span></div>
					<div class="hero-metric"><span class="metric-value">AppSec</span><span class="metric-label">Sécurité du code et des API</span></div>
					<div class="hero-metric"><span class="metric-value">DevSecOps</span><span class="metric-label">Automatisation et déploiement</span></div>
				</div>
			</div>
		</section>
		<section class="section-display section-services" id="a-propos">
			<div class="section-heading">
				<span class="eyebrow">Expertises &amp; approche</span>
				<h2>Sécurité intégrée au développement</h2>
				<p>Trois axes complémentaires : tester les applications, sécuriser le code et fiabiliser la livraison.</p>
			</div>
			<div class="feature-grid">
				<article class="feature-card">
					<h3>Pentest web &amp; sécurité offensive</h3>
					<p>Chercher les failles avant les attaquants, dans un cadre autorisé et documenté.</p>
					<ul>
						<li><i class="fa-solid fa-bug"></i> XSS, injections SQL, IDOR, contrôles d'accès</li>
						<li><i class="fa-solid fa-magnifying-glass"></i> Cartographie de la surface d'attaque</li>
						<li><i class="fa-solid fa-file-lines"></i> Reproduction des failles et rapport clair</li>
					</ul>
				</article>
				<article class="feature-card">
					<h3>Sécurité applicative (AppSec)</h3>
					<p>Concevoir et relire des applications web en pensant aux entrées, aux accès et aux données.</p>
					<ul>
						<li><i class="fa-solid fa-code"></i> Revue de code et sécurité by design</li>
						<li><i class="fa-solid fa-lock"></i> Validation des entrées et contrôle des accès</li>
						<li><i class="fa-solid fa-list-check"></i> Référentiel OWASP Top 10</li>
					</ul>
				</article>
				<article class="feature-card">
					<h3>DevSecOps &amp; automatisation</h3>
					<p>Intégrer les contrôles de sécurité au cycle de développement et de déploiement.</p>
					<ul>
						<li><i class="fa-solid fa-code-branch"></i> Pipelines CI/CD avec GitHub Actions</li>
						<li><i class="fa-brands fa-docker"></i> Conteneurisation et isolation Docker</li>
						<li><i class="fa-solid fa-shield-halved"></i> Analyse de dépendances (Semgrep, Trivy)</li>
					</ul>
				</article>
			</div>
		</section>
		<section class="section-display section-skills" id="competences">
			<div class="section-heading">
				<span class="eyebrow">Expertise technique</span>
				<h2>Technologies, systèmes &amp; outils</h2>
				<p>Un socle de développement fullstack, complété par l'automatisation, les bases systèmes/réseaux et la sécurité offensive.</p>
			</div>
			<div class="skills-grid">
				<article class="skill-card">
					<h3>Cybersécurité &amp; pentest</h3>
					<ul>
						<li><i class="fa-solid fa-bug"></i> OWASP Top 10, XSS, SQLi, IDOR</li>
						<li><i class="fa-solid fa-magnifying-glass"></i> Burp Suite, DevTools et analyse HTTP</li>
						<li><i class="fa-solid fa-file-shield"></i> Analyse de vulnérabilités et documentation</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>DevSecOps &amp; livraison</h3>
					<ul>
						<li><i class="fa-brands fa-github"></i> GitHub Actions et pipelines CI/CD</li>
						<li><i class="fa-brands fa-docker"></i> Docker et gestion des environnements</li>
						<li><i class="fa-solid fa-terminal"></i> Automatisation Bash et Python</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Systèmes, réseaux &amp; bas niveau</h3>
					<ul>
						<li><i class="fa-brands fa-linux"></i> Linux, CLI et administration</li>
						<li><i class="fa-solid fa-network-wired"></i> TCP/IP, HTTP, UDP et ICMP</li>
						<li><i class="fa-solid fa-server"></i> Nginx, HTTPS et gestion de services</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Développement fullstack</h3>
					<ul>
						<li><i class="fa-brands fa-js"></i> JavaScript, TypeScript, Node.js</li>
						<li><i class="fa-brands fa-react"></i> React et Next.js</li>
						<li><i class="fa-solid fa-database"></i> SQL, PostgreSQL et MariaDB</li>
					</ul>
				</article>
			</div>
			<div class="skill-tags">
				<span class="tag">Pentest web</span><span class="tag">AppSec</span><span class="tag">DevSecOps</span><span class="tag">Linux</span><span class="tag">Secure coding</span>
			</div>
		</section>
		<section class="section-display section-experiences" id="experiences">
			<div class="section-heading">
				<span class="eyebrow">Expériences</span>
				<h2>Des réalisations concrètes</h2>
				<p>Des applications et des outils en conditions réelles, du développement à la mise en production.</p>
			</div>
			<div class="experience-carousel">
				<div class="experience-carousel__track" id="experience-track">
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2025</span><span class="badge">Entreprise · Production</span></div>
							<h3>CRM Lynoria</h3>
							<p class="experience-subtitle">Outil métier de gestion, utilisé en entreprise</p>
							<ul class="experience-list">
								<li>Développement d'un CRM métier utilisé au quotidien.</li>
								<li>Gestion des données clients et des processus internes.</li>
								<li>Développement Fullstack.</li>
								<li>Sécurisation du code.</li>
							</ul>
							<div class="experience-tags"><span class="tag">DevSecOps</span><span class="tag">Express</span><span class="tag">TypeScript</span><span class="tag">Fullstack</span></div>
						</article>
					</div>
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2025</span><span class="badge">Site web</span></div>
							<h3>Site FC Provence</h3>
							<p class="experience-subtitle">Site web réalisé pour FC Provence</p>
							<ul class="experience-list">
								<li>Conception et mise en ligne du site.</li>
								<li>centralisation des informations, événements et opérations administratives.</li>
								<li>API REST et gestion des données.</li>
								<li>Déploiement avec Docker, Nginx et HTTPS.</li>
							</ul>
							<div class="experience-tags"><span class="tag">DevSecOps</span><span class="tag">API REST</span><span class="tag">Fullstack</span></div>
						</article>
					</div>
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2026</span><span class="badge">Application en production</span></div>
							<h3>AlpaGuide</h3>
							<p class="experience-subtitle">Plateforme web pour les professionnels de montagne</p>
							<ul class="experience-list">
								<li>Landing page publique en production, formulaires contact / bêta.</li>
								<li>Backend Node.js / Express déployé sur VPS Linux.</li>
								<li>Application métier en cours de développement.</li>
							</ul>
							<div class="experience-tags"><span class="tag">DevSecOps</span><span class="tag">Next.js</span><span class="tag">TypeScript</span><span class="tag">Production</span></div>
						</article>
					</div>
				</div>
				<div class="experience-carousel__controls">
					<button aria-label="Expérience précédente" class="experience-carousel__button" id="experience-prev" type="button"><i class="fa-solid fa-chevron-left"></i></button>
					<div class="experience-carousel__dots" id="experience-dots"></div>
					<button aria-label="Expérience suivante" class="experience-carousel__button" id="experience-next" type="button"><i class="fa-solid fa-chevron-right"></i></button>
				</div>
			</div>
		</section>
		<section class="section-display section-projects" id="travaux">
			<div class="section-heading">
				<span class="eyebrow">Travaux</span>
				<h2>Outils &amp; projets cyber</h2>
				<p>Ce que je construis en autonomie : des outils de cybersécurité en Python et C, et des projets web. Chaque nouvelle réalisation s'ajoute ici.</p>
			</div>
			<div class="projects-grid">
				<!-- OUTILS CYBER : remplacer les liens GitHub génériques par les URLs précises des dépôts quand souhaité. -->
				<a class="project-card" href="https://github.com/Alyaesub" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-network-wired"></i> Analyse réseau · Python</span>
					<h4>PCAP Analyzer</h4>
					<p>Parseur de fichiers PCAP sans bibliothèque réseau dédiée : lecture des en-têtes Ethernet, IPv4, TCP, UDP et ICMP, et affichage structuré des paquets.</p>
					<span class="project-link">Consulter GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
				<a class="project-card" href="https://github.com/Alyaesub" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-file-lines"></i> Analyse de logs · Python</span>
					<h4>LogGuard</h4>
					<p>Outil CLI d'analyse de journaux : extraction d'IP, comptage des échecs, détection de seuils suspects et synthèse des événements.</p>
					<span class="project-link">Consulter GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
				<a class="project-card" href="https://github.com/Alyaesub" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-terminal"></i> Inspection système · C</span>
					<h4>SecInspect</h4>
					<p>Outil CLI d'inspection Linux/macOS en développement : informations système, gestion des options et architecture modulaire pour de futurs contrôles de sécurité.</p>
					<span class="project-link">Consulter GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
				<a class="project-card" href="https://github.com/Alyaesub" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-key"></i> Cryptographie</span>
					<h4>Rainbow Table</h4>
					<p>Projet consacré au fonctionnement des tables précalculées et des recherches d'empreintes ; étude des limites de mots de passe et de hachages faibles dans un cadre pédagogique.</p>
					<span class="project-link">Consulter GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
				<a class="project-card" href="https://nft-collection-1-liart.vercel.app/" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-microchip"></i> Application Web3</span>
					<h4>Projet Web3 &amp; NFT</h4>
					<p>Application liée aux actifs numériques et aux NFT, avec gestion des métadonnées et automatisation de déploiement. Une réalisation Fullstack complémentaire aux projets cyber.</p>
					<span class="project-link">Voir le projet <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
			</div>
		</section>
		<section class="section-display section-offers" id="offres">
			<div class="section-heading">
				<span class="eyebrow">Offres &amp; prestations</span>
				<h2>Sécuriser votre application web</h2>
				<p>Un double regard développeur + sécurité : je lis le code, je ne me contente pas de lancer un scanner. Du premier diagnostic au suivi dans la durée.</p>
			</div>
			<div class="feature-grid">
				<article class="feature-card">
					<div class="experience-meta"><span class="badge">Offre de lancement</span><span class="badge">90 €</span></div>
					<h3>Quick Check</h3>
					<p>Premier diagnostic de sécurité, vu de l'extérieur, sans accès au code. Rapport clair d'une page avec vos 3 priorités, livré sous 48 h.</p>
					<ul>
						<li><i class="fa-solid fa-lock"></i> HTTPS, certificat et cookies</li>
						<li><i class="fa-solid fa-shield-halved"></i> En-têtes de sécurité</li>
						<li><i class="fa-solid fa-triangle-exclamation"></i> Fuites d'information et librairies obsolètes</li>
					</ul>
				</article>
				<article class="feature-card">
					<div class="experience-meta"><span class="badge">Flash</span><span class="badge">~1 jour</span></div>
					<h3>Audit Flash</h3>
					<p>Un premier regard outillé avant d'aller plus loin, idéal au lancement d'un projet ou d'un MVP.</p>
					<ul>
						<li><i class="fa-solid fa-bolt"></i> Scan outillé (Semgrep, Trivy) et OWASP Top 10 en surface</li>
						<li><i class="fa-solid fa-list-ol"></i> Rapport synthétique, failles classées par criticité</li>
						<li><i class="fa-solid fa-video"></i> Restitution de 20-30 min en visio</li>
					</ul>
				</article>
				<article class="feature-card">
					<div class="experience-meta"><span class="badge">Cœur de l'offre</span><span class="badge">~1 semaine</span></div>
					<h3>Audit Essentiel</h3>
					<p>Pour une application en production, avec de vrais utilisateurs et des données à protéger.</p>
					<ul>
						<li><i class="fa-solid fa-code"></i> Revue manuelle du code et des zones à risque</li>
						<li><i class="fa-solid fa-database"></i> Tests injections SQL, contrôle d'accès et authentification</li>
						<li><i class="fa-solid fa-file-lines"></i> Rapport détaillé : faille, reproduction, correctif</li>
						<li><i class="fa-solid fa-list-check"></i> Restitution en visio pour prioriser ensemble</li>
					</ul>
				</article>
				<article class="feature-card">
					<div class="experience-meta"><span class="badge">Complet</span><span class="badge">~2 semaines</span></div>
					<h3>Audit Complet</h3>
					<p>Pour des données sensibles (paiement, données personnelles) ou un audit avant un gros client.</p>
					<ul>
						<li><i class="fa-solid fa-layer-group"></i> Tout l'Audit Essentiel inclus</li>
						<li><i class="fa-solid fa-bug"></i> Tests d'intrusion ciblés sur les points sensibles</li>
						<li><i class="fa-solid fa-screwdriver-wrench"></i> Accompagnement aux correctifs</li>
						<li><i class="fa-solid fa-rotate-right"></i> Contre-vérification après vos corrections (sous 30 j)</li>
					</ul>
				</article>
			</div>
			<div class="skill-tags">
				<a class="btn btn-primary" href="https://tally.so/r/0V8jx0" target="_blank"><i class="fbtn btn-primary"></i>Votre site testé en 2 min</a>
			</div>
			<div class="section-heading">
				<span class="eyebrow">Suivi &amp; accompagnement</span>
				<h2>Garder la sécurité sous contrôle, dans la durée</h2>
				<p>Une fois l'application auditée, rester serein sans recruter un profil sécurité à temps plein.</p>
			</div>
			<div class="skills-grid">
				<article class="skill-card">
					<h3>Référent sécurité (mini-RSSI)</h3>
					<ul>
						<li><i class="fa-solid fa-user-shield"></i> Votre interlocuteur sécurité à temps partagé</li>
						<li><i class="fa-solid fa-code-merge"></i> Revue des changements sensibles avant la prod</li>
						<li><i class="fa-solid fa-bell"></i> Veille continue et point mensuel</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Veille &amp; correctifs</h3>
					<ul>
						<li><i class="fa-solid fa-bell"></i> Alerte sur les vulnérabilités (CVE) qui vous concernent</li>
						<li><i class="fa-solid fa-wrench"></i> Application des correctifs simples</li>
						<li><i class="fa-solid fa-ban"></i> Sans bruit, sans engagement</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Re-scan trimestriel</h3>
					<ul>
						<li><i class="fa-solid fa-rotate"></i> L'audit rejoué tous les 3 mois</li>
						<li><i class="fa-solid fa-code-compare"></i> Capte les régressions et nouvelles failles</li>
						<li><i class="fa-solid fa-file-lines"></i> Rapport différentiel</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Revue de config</h3>
					<ul>
						<li><i class="fa-solid fa-server"></i> Durcissement Nginx, Docker et serveur</li>
						<li><i class="fa-solid fa-lock"></i> TLS, en-têtes, secrets, ports exposés</li>
						<li><i class="fa-solid fa-clipboard-check"></i> Extraits de config prêts à coller</li>
					</ul>
				</article>
			</div>
			<div class="hero-actions">
				<a class="btn btn-primary" href="#contact"><i class="fa-solid fa-envelope"></i> Demander un devis</a>
			</div>
		</section>
		<section class="section-display section-contact" id="contact">
			<div class="section-heading">
				<span class="eyebrow">Contact &amp; collaboration</span>
				<h2>Parlons sécurité, infrastructure ou développement</h2>
				<p>Une mission DevSecOps, un besoin en sécurité applicative ou un projet technique ? Vous pouvez me contacter directement ou consulter mes réalisations sur GitHub.</p>
			</div>
			<div class="contact-panel">
				<div class="contact-grid">
					<div class="contact-card">
						<h3>LinkedIn</h3>
						<p>Échanger sur la cybersécurité, les projets techniques et les opportunités professionnelles.</p>
						<div class="contact-links">
							<a href="https://www.linkedin.com/in/pascal-reynier-75a11b326/" rel="noopener" target="\_blank">
								<img alt="Logo LinkedIn" loading="lazy" src="asset/linkedin.svg" />
							</a>
						</div>
					</div>
					<div class="contact-card">
						<h3>Malt</h3>
						<p>Pour les missions freelance en développement et sécurité applicative.</p>
						<div class="contact-links">
							<a href="https://www.malt.fr/profile/pascalreynier" rel="noopener" target="\_blank">
								<img alt="Logo Malt" loading="lazy" src="asset/Malt_logo_pink.svg" />
							</a>
						</div>
					</div>
					<div class="contact-card">
						<h3>GitHub</h3>
						<p>Dépôts techniques, outils Python/C et travaux de développement.</p>
						<div class="contact-links">
							<a href="https://github.com/Alyaesub" rel="noopener" target="\_blank">
								<img alt="Logo GitHub" loading="lazy" src="asset/github.svg" />
							</a>
						</div>
					</div>
				</div>
				<div class="contact-form-wrapper">
					<article class="contact-card contact-card--form">
						<div class="contact-form-header">
							<div class="availability">
								<h3>Disponibilité</h3>
								<div class="tag-list">
									<span class="tag">Remote / Hybrid</span>
									<span class="tag">Français &amp; Anglais</span>
									<span class="tag">Timezones EU / US EST</span>
								</div>
							</div>
						</div>
						<form action="/Functions/mailHelper.php" id="contact-form" method="POST">
							<!-- Champ honeypot  -->
							<div style="display:none">
								<input autocomplete="off" name="website" tabindex="-1" type="text" />
							</div>
							<div class="form-grid">
								<div class="form-field">
									<label for="fullname">Nom complet</label>
									<input id="fullname" name="fullname" placeholder="Nom Prénom" required="" type="text">
									</input>
								</div>
								<div class="form-field">
									<label for="email">Votre e-mail</label>
									<input id="email" name="email" placeholder="email@entreprise.com" required="" type="email" />
								</div>
								<div class="form-field">
									<label for="company">Société</label>
									<input id="company" name="company" placeholder="Nom de l'entreprise" type="text" />
								</div>
							</div>
							<div class="form-field">
								<label for="message">Contexte du projet</label>
								<textarea id="message" name="message" placeholder="Budget, délais, objectifs..." required="" rows="4"></textarea>
							</div>
							<button class="btn btn-primary" type="submit">
								<i class="fa-solid fa-paper-plane"></i>

								Envoyer

							</button>
						</form>
					</article>
				</div>
			</div>
		</section>
		<section class="section-display section-diplomas" id="parcours">
			<div class="section-heading">
				<span class="eyebrow">Formation &amp; progression</span>
				<h2>Formation technique</h2>
				<p>Un socle de développement d’applications et un approfondissement continu en DevSecOps, cybersécurité et pentest.</p>
			</div>
			<div class="diploma-grid">
				<article class="diploma-card">
					<img alt="Logo Digital Campus" loading="lazy" src="asset/digital-campus.png" />
					<div class="diploma-content">
						<h3>Développeur d'applications web et mobiles</h3>
						<span class="diploma-school">Digital Campus</span>
						<span class="diploma-date">2024 – 2026 · Diplôme obtenu</span>
						<p>Formation orientée développement fullstack, architecture web, qualité logicielle et mise en production. Parcours renforcé par des projets concrets, une forte culture d'autonomie et une montée en compétence progressive sur les sujets DevSecOps.</p>
					</div>
				</article>
				<article class="diploma-card">
					<img alt="Logo Digital Campus" loading="lazy" src="asset/shield-logo.jpg" />
					<div class="diploma-content">
						<h3>Certification Cyber Sécurité</h3>
						<span class="diploma-school">ZeroDay.cyber Academy</span>
						<span class="diploma-date">2026 · 2027</span>
						<p>Formation orientée sécurité applicative et intégration DevSecOps dans les cycles de développement.
							Travail sur les vulnérabilités web (OWASP Top 10), les environnements Linux, les scripts d’automatisation (Bash/Python) et la sécurisation des applications.</p>
					</div>
				</article>
			</div>
		</section>
		<section class="section-display section-archives" id="archives">
			<div class="section-heading">
				<span class="eyebrow">Archives techniques</span>
				<h2>Sandbox</h2>
				<p>Mes anciens exercices, prototypes et premières réalisations sont regroupés dans un espace distinct pour garder ce portfolio centré sur mes travaux récents.</p>
			</div>
			<div class="resource-grid">
				<!-- Carte Sandbox principale -->
				<a class="resource-card" href="https://sites-alya.fr/" rel="noopener" target="\_blank">
					<h4>Sandbox – Projets &amp; Démos</h4>
					<p>Projets de formation et expérimentations antérieures, accessibles séparément du portfolio professionnel.</p>
					<div class="experience-tags">
						<span class="tag">Apprentissage</span>
						<span class="tag">Autodidacte</span>
						<span class="tag">Formation</span>
					</div>
					<span class="resource-link">

						Explorer le Sandbox <i class="fa-solid fa-arrow-up-right-from-square"></i>
					</span>
				</a>
			</div>
		</section>

	</main>
	<footer>
		<div class="credits">
			<span>© 2026 Pascal Reynier · Tous droits réservés</span>
		</div>
	</footer>
	<div id="loader">
		<div class="loader"></div>
	</div>
	<a href="#" id="gototop">
		<picture>
			<source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/261d_fe0f/512.webp" type="image/webp" />
			<img alt="Remonter en haut de la page" height="32" loading="lazy" src="https://fonts.gstatic.com/s/e/notoemoji/latest/261d_fe0f/512.gif" width="32" />
		</picture>
	</a>
	<div aria-live="polite" class="theme-switcher">
		<button aria-label="Ouvrir le sélecteur de thème" class="theme-switcher__toggle" type="button">
			<i class="fa-solid fa-swatchbook"></i>
		</button>
		<div aria-label="Choisir un thème" class="theme-switcher__panel" role="dialog">
			<div class="theme-switcher__header">
				<span class="theme-switcher__title">Thème</span>
				<button aria-label="Fermer" class="theme-switcher__close" type="button">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="theme-switcher__options">
				<button class="theme-option" data-theme="dark" role="button" type="button">
					<span class="theme-dot theme-dot--dark"></span>
					<span>Principal</span>
				</button>
				<button class="theme-option" data-theme="light" role="button" type="button">
					<span class="theme-dot theme-dot--light"></span>
					<span>Clair</span>
				</button>
			</div>
		</div>
	</div>
</body>

</html>