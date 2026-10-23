<?php
require_once "controllers/routeur.php";
?>
<!DOCTYPE html>

<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<!-- SEO -->
	<title>Pascal Reynier | DevSecOps, cybersécurité &amp; sécurité applicative</title>
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
						<li class="nav-link"><a href="/projets">Projets <i class="fa-solid fa-arrow-right"></i></a></li>
						<li class="nav-link"><a href="/diplomes">Parcours <i class="fa-solid fa-arrow-right"></i></a></li>
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
					<span class="eyebrow">DevSecOps · Application Security · Pentest</span>
					<h1>Développer, sécuriser et comprendre les systèmes.</h1>
				</div>
				<p class="lead">Développeur spécialisé en <strong>DevSecOps et sécurité applicative</strong>, je travaille sur la sécurité du code, l'automatisation des contrôles, les environnements Linux et les tests d'intrusion web. Mon approche combine <strong>développement, infrastructure et pratique offensive en laboratoire</strong>.</p>
				<div class="hero-actions">
					<a class="btn btn-primary" href="#projets"><i class="fa-solid fa-code"></i> Voir mes projets</a>
					<a class="btn" href="#contact"><i class="fa-solid fa-envelope"></i> Contact</a>
				</div>
				<div class="hero-panel__tags">
					<span class="tag"><i class="fa-solid fa-shield-halved"></i> Sécurité applicative</span>
					<span class="tag"><i class="fa-solid fa-terminal"></i> Pentest web</span>
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
					<div class="hero-metric"><span class="metric-value">AppSec</span><span class="metric-label">Sécurité du code et des API</span></div>
					<div class="hero-metric"><span class="metric-value">DevSecOps</span><span class="metric-label">Automatisation et déploiement</span></div>
					<div class="hero-metric"><span class="metric-value">Pentest</span><span class="metric-label">Tests web en laboratoire</span></div>
				</div>
			</div>
		</section>
		<section class="section-display section-services" id="a-propos">
			<div class="section-heading">
				<span class="eyebrow">Expertises &amp; approche</span>
				<h2>Sécurité intégrée au développement</h2>
				<p>Trois axes complémentaires : sécuriser les applications, fiabiliser leur livraison et comprendre les vulnérabilités par la pratique.</p>
			</div>
			<div class="feature-grid">
				<article class="feature-card">
					<h3>DevSecOps &amp; automatisation</h3>
					<p>Intégrer les contrôles et les bonnes pratiques de sécurité au cycle de développement et de déploiement.</p>
					<ul>
						<li><i class="fa-solid fa-code-branch"></i> Pipelines CI/CD avec GitHub Actions</li>
						<li><i class="fa-brands fa-docker"></i> Conteneurisation et isolation avec Docker</li>
						<li><i class="fa-solid fa-shield-halved"></i> Analyse de dépendances et contrôles automatisés</li>
						<li><i class="fa-solid fa-terminal"></i> Scripts d'automatisation Bash et Python</li>
					</ul>
				</article>
				<article class="feature-card">
					<h3>Sécurité applicative &amp; AppSec</h3>
					<p>Concevoir et analyser des applications web en portant une attention particulière aux entrées, aux accès et aux échanges de données.</p>
					<ul>
						<li><i class="fa-solid fa-lock"></i> Validation des entrées et contrôle des accès</li>
						<li><i class="fa-solid fa-code"></i> Revue de code et principes de sécurité by design</li>
						<li><i class="fa-solid fa-globe"></i> Sécurisation des API et des flux HTTP</li>
						<li><i class="fa-solid fa-list-check"></i> Référentiels OWASP et bonnes pratiques web</li>
					</ul>
				</article>
				<article class="feature-card">
					<h3>Pentest web &amp; recherche technique</h3>
					<p>Pratique des tests d'intrusion dans des laboratoires autorisés, avec une démarche structurée d'observation, de reproduction et de documentation.</p>
					<ul>
						<li><i class="fa-solid fa-bug"></i> Tests XSS, injections SQL et contrôles d'accès</li>
						<li><i class="fa-solid fa-magnifying-glass"></i> Cartographie de la surface d'attaque</li>
						<li><i class="fa-solid fa-network-wired"></i> Analyse réseau et protocolaire</li>
						<li><i class="fa-solid fa-file-lines"></i> Reproduction des failles et rédaction de notes techniques</li>
					</ul>
				</article>
			</div>
		</section>
		<section class="section-display section-skills" id="competences">
			<div class="section-heading">
				<span class="eyebrow">Expertise technique</span>
				<h2>Technologies, systèmes &amp; outils</h2>
				<p>Un socle de développement Fullstack, complété par les outils d'automatisation, les bases systèmes/réseaux et la sécurité offensive.</p>
			</div>
			<div class="skills-grid">
				<article class="skill-card">
					<h3>Cybersécurité &amp; pentest</h3>
					<ul>
						<li><i class="fa-solid fa-bug"></i> OWASP Top 10, XSS, SQLi, IDOR</li>
						<li><i class="fa-solid fa-magnifying-glass"></i> Burp Suite, DevTools et analyse HTTP</li>
						<li><i class="fa-solid fa-flask"></i> OWASP Juice Shop, labs et CTF autorisés</li>
						<li><i class="fa-solid fa-file-shield"></i> Analyse de vulnérabilités et documentation</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>DevSecOps &amp; livraison</h3>
					<ul>
						<li><i class="fa-brands fa-github"></i> GitHub Actions et pipelines CI/CD</li>
						<li><i class="fa-brands fa-docker"></i> Docker et gestion des environnements</li>
						<li><i class="fa-solid fa-code-merge"></i> Git, intégration et déploiements</li>
						<li><i class="fa-solid fa-terminal"></i> Automatisation Bash et Python</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Systèmes, réseaux &amp; bas niveau</h3>
					<ul>
						<li><i class="fa-brands fa-linux"></i> Linux, CLI et administration de VPS</li>
						<li><i class="fa-solid fa-network-wired"></i> TCP/IP, HTTP, TCP, UDP et ICMP</li>
						<li><i class="fa-solid fa-code"></i> C et Python : outils CLI et analyse de fichiers</li>
						<li><i class="fa-solid fa-server"></i> Nginx, HTTPS et gestion de services</li>
					</ul>
				</article>
				<article class="skill-card">
					<h3>Développement Fullstack sécurisé</h3>
					<ul>
						<li><i class="fa-brands fa-js"></i> JavaScript, TypeScript, Node.js et Express</li>
						<li><i class="fa-brands fa-react"></i> React et Next.js</li>
						<li><i class="fa-solid fa-database"></i> SQL, PostgreSQL et MariaDB</li>
						<li><i class="fa-solid fa-lock"></i> API REST, gestion des accès et validation</li>
					</ul>
				</article>
			</div>
			<div class="skill-tags">
				<span class="tag">AppSec</span><span class="tag">DevSecOps</span><span class="tag">Pentest web</span><span class="tag">Linux</span><span class="tag">Secure coding</span>
			</div>
		</section>
		<section class="section-display section-experiences" id="experiences">
			<div class="section-heading">
				<span class="eyebrow">Expériences &amp; mise en pratique</span>
				<h2>Du développement à l'analyse de sécurité</h2>
				<p>Des travaux concrets en sécurité applicative, outils systèmes/réseaux et mise en production. Les tests offensifs mentionnés sont réalisés dans des environnements autorisés.</p>
			</div>
			<div class="experience-carousel">
				<div class="experience-carousel__track" id="experience-track">
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2026</span><span class="badge">Outils de cybersécurité</span></div>
							<h3>Développement d'outils Python et C</h3>
							<p class="experience-subtitle">Analyse de paquets, traitement de journaux et inspection système</p>
							<ul class="experience-list">
								<li>Parsing manuel de fichiers PCAP et décodage des protocoles.</li>
								<li>Analyse de logs et identification d'adresses IP suspectes.</li>
								<li>Construction d'un outil CLI d'inspection système en C.</li>
							</ul>
							<div class="experience-tags"><span class="tag">Python</span><span class="tag">C</span><span class="tag">TCP/IP</span><span class="tag">Linux</span></div>
						</article>
					</div>
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2026</span><span class="badge">Laboratoires autorisés</span></div>
							<h3>Sécurité offensive &amp; tests web</h3>
							<p class="experience-subtitle">Mise en pratique méthodique des vulnérabilités applicatives</p>
							<ul class="experience-list">
								<li>Exploration de la surface d'attaque et analyse des échanges HTTP.</li>
								<li>Étude pratique de failles XSS, SQLi et IDOR sur labs dédiés.</li>
								<li>Documentation des observations et des méthodes de reproduction.</li>
							</ul>
							<div class="experience-tags"><span class="tag">OWASP</span><span class="tag">Burp Suite</span><span class="tag">Pentest web</span></div>
						</article>
					</div>
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2026</span><span class="badge">Application en production</span></div>
							<h3>AlpaGuide — plateforme web</h3>
							<p class="experience-subtitle">Landing page publique et préparation d'une application dédiée aux professionnels de montagne</p>
							<ul class="experience-list">
								<li>Déploiement d'une landing page et de formulaires de contact/bêta.</li>
								<li>Backend Node.js / Express et gestion des services sur VPS.</li>
								<li>Application métier en développement, distincte de la page déjà publiée.</li>
							</ul>
							<div class="experience-tags"><span class="tag">Node.js</span><span class="tag">Express</span><span class="tag">Linux</span><span class="tag">Production</span></div>
						</article>
					</div>
					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta"><span>2025</span><span class="badge">Projet Web3</span></div>
							<h3>Application Web3 &amp; NFT</h3>
							<p class="experience-subtitle">Développement d'une application autour des actifs numériques et de leur déploiement</p>
							<ul class="experience-list">
								<li>Conception et intégration de fonctionnalités web et Web3.</li>
								<li>Traitement et vérification de métadonnées.</li>
								<li>Automatisation du déploiement via GitHub Actions.</li>
							</ul>
							<div class="experience-tags"><span class="tag">Web3</span><span class="tag">NFT</span><span class="tag">CI/CD</span></div>
						</article>
					</div>
				</div>
				<div class="experience-carousel__controls">
					<button aria-label="Projet précédent" class="experience-carousel__button" id="experience-prev" type="button"><i class="fa-solid fa-chevron-left"></i></button>
					<div class="experience-carousel__dots" id="experience-dots"></div>
					<button aria-label="Projet suivant" class="experience-carousel__button" id="experience-next" type="button"><i class="fa-solid fa-chevron-right"></i></button>
				</div>
			</div>
		</section>
		<section class="section-display section-projects" id="projets">
			<div class="section-heading">
				<span class="eyebrow">Projets sélectionnés</span>
				<h2>Cybersécurité, outils &amp; applications</h2>
				<p>Une sélection volontairement resserrée : outils techniques développés en C/Python et projets web conservés pour leur intérêt architectural. Chaque nouvelle réalisation pourra être ajoutée dans cette grille.</p>
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
				<a class="project-card" href="https://alpaguide.fr/" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-check-double"></i> En production · App à venir</span>
					<h4>AlpaGuide</h4>
					<p>Landing page en production pour une future plateforme dédiée aux professionnels de montagne. Backend et formulaires fonctionnels ; application en développement.</p>
					<span class="project-link">Voir le site <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
				<a class="project-card" href="https://nft-collection-1-liart.vercel.app/" rel="noopener noreferrer" target="_blank">
					<span class="badge"><i class="fa-solid fa-microchip"></i> Application Web3</span>
					<h4>Projet Web3 &amp; NFT</h4>
					<p>Application liée aux actifs numériques et aux NFT, avec gestion des métadonnées et automatisation de déploiement. Une réalisation Fullstack complémentaire aux projets cyber.</p>
					<span class="project-link">Voir le projet <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
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
		<section class="section-display section-diplomas" id="diplomes">
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
						<span class="diploma-date">2026 · en cours</span>
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