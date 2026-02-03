<?php
require_once "controllers/routeur.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- SEO -->
	<title>Pascal Reynier – Développeur Web Full Stack & DevSecOps Freelance</title>
	<meta name="description" content="Développeur web full stack freelance spécialisé React, Next.js, Node.js, PHP et Web3. Création de sites, applications, APIs, dashboards et intégrations blockchain. Basé en France, disponible en remote.">
	<meta name="author" content="Pascal Reynier">
	<meta name="robots" content="index, follow">
	<!-- Canonical -->
	<link rel="canonical" href="https://pascalreynier.fr/">
	<!-- Hreflang -->
	<link rel="alternate" hreflang="fr" href="https://pascalreynier.fr/">
	<link rel="alternate" hreflang="x-default" href="https://pascalreynier.fr/">
	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Pascal Reynier – Développeur Web Full Stack devSecOps Freelance">
	<meta property="og:description" content="Création de plateformes web modernes : React, Next.js, Node.js, PHP, APIs et devSecOps. Découvrez mes projets et contactez-moi pour vos besoins.">
	<meta property="og:url" content="https://pascalreynier.fr/">
	<meta property="og:image" content="https://pascalreynier.fr/asset/logoPr.png">
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Pascal Reynier – Développeur Web Full Stack & DevSecOps Freelance">
	<meta name="twitter:description" content="Développement web moderne : DevSecOps, React, Next.js, Node.js. Contactez-moi.">
	<meta name="twitter:image" content="https://pascalreynier.fr/asset/logoPr.png">
	<!-- Performance -->
	<link rel="preload" href="styles/css/main.css" as="style">
	<link rel="preload" href="asset/ProfilePic.jpg" as="image">
	<!-- Favicon -->
	<link rel="icon" href="asset/favicon.png" type="image/png">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
		integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Main CSS -->
	<link rel="stylesheet" href="styles/css/main.css">
	<!-- Script -->
	<script src="javascript/script.js" defer></script>
	<!-- Schema.org -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Person",
			"name": "Pascal Reynier",
			"jobTitle": "Développeur Web Full Stack & devsecops Freelance",
			"url": "https://pascalreynier.fr/",
			"image": "https://pascalreynier.fr/asset/ProfilePic.jpg",
			"sameAs": [
				"https://www.linkedin.com/in/pascal-reynier-75a11b326/",
				"https://github.com/Alyaesub",
				"https://www.malt.fr/profile/pascalreynier"
			],
			"knowsAbout": [
				"DevSecOps"
				"devops"
				"cybersecurité"
				"React",
				"Next.js",
				"Node.js",
				"Express",
				"PHP",
				"MySQL",
				"Web3",
				"Solidity"
			]
		}
	</script>
</head>

<body>
	<header class="header-website">
		<nav class="navbar" aria-label="Navigation principale">
			<a class="brand" href="/">
				<img src="asset/ProfilePic.jpg" alt="Portrait de Pascal Reynier" loading="lazy">
				<div class="brand-details">
					<span class="brand-name">Pascal Reynier</span>
				</div>
			</a>

			<div class="menu">
				<input type="checkbox" id="menu-toggle" class="menu-input" />
				<label class="menu-input-label" for="menu-toggle"><i class="fa-solid fa-bars"></i></label>
				<div class="dropdown-menu">
					<ul class="nav-links">
						<li class="nav-link">
							<a href="/accueil">Accueil <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/a-propos">À propos <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/competences">Compétences <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/experiences">Expériences <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/projets">Projets <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/contact">Contact <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/diplomes">Diplômes <i class="fa-solid fa-arrow-right"></i></a>
						</li>
						<li class="nav-link">
							<a href="/blog">Veille <i class="fa-solid fa-arrow-right"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<section class="section-display section-hero" id="accueil">
			<div class="hero-intro">
				<div class="section-heading">
					<span class="eyebrow">Expert DevSecOps & Fullstack</span>
					<h1>Sécuriser votre croissance technique et l'intégrité de vos données critiques.</h1>
				</div>
				<p class="lead">
					Du cadrage à la mise en production, j'interviens sur des projets à forts enjeux pour transformer votre dette technique en un <strong>actif sécurisé, scalable et auditable.</strong> <br>
					Je conçois des plateformes où la sécurité n'est pas une option, mais une fondation de votre business.
				</p>
				<div class="hero-actions">
					<a href="#contact" class="btn btn-primary"><i class="fa-solid fa-comments"></i>Discutons de votre projet</a>
				</div>
				<div class="hero-panel__tags">
					<span class="tag"><i class="fa-solid fa-lock"></i> Sécurité by Design</span>
					<span class="tag"><i class="fa-solid fa-chart-line"></i> Vision Business</span>
					<span class="tag"><i class="fa-solid fa-gears"></i> Automatisation</span>
				</div>
				<ul class="hero-points">
					<li>Approche DevSecOps. Votre partenaire business qui met le code au service de vos besoins et vos ROI</li>
				</ul>
				<div class="hero-badges">
					<span class="badge"><i class="fa-solid fa-terminal"></i> Bash & scripts</span>
					<span class="badge"><i class="fa-solid fa-server"></i> Node.js & APIs</span>
					<span class="badge"><i class="fa-solid fa-network-wired"></i> CI/CD & Docker</span>
					<span class="badge"><i class="fa-solid fa-shield-virus"></i> OWASP & Audits</span>
				</div>

				<div class="hero-metrics">
					<div class="hero-metric">
						<span class="metric-value">8+</span>
						<span class="metric-label">Projets livrés</span>
					</div>
					<div class="hero-metric">
						<span class="metric-value">100%</span>
						<span class="metric-label">Intégrité Garantie</span>
					</div>
					<div class="hero-metric">
						<span class="metric-value">Ops-ready</span>
						<span class="metric-label">CI/CD · Docker · monitoring</span>
					</div>
				</div>
		</section>

		<section class="section-display section-services" id="a-propos">
			<div class="section-heading">
				<span class="eyebrow">Expertise & Solutions</span>
				<h2>Un partenaire tech pour vos produits digitaux</h2>
				<p>
					Je ne me contente pas de livrer du code. J'apporte une rigueur opérationnelle pour garantir la pérennité de votre produit.
				</p>
			</div>
			<div class="feature-grid">
				<article class="feature-card">
					<h3>Ingénierie Fullstack & Performance</h3>
					<p>Conception d'interfaces modernes et rapides où l'expérience utilisateur sert vos objectifs de conversion.</p>
					<ul>
						<li>Architecture front-end scalable (React, Next.js)</li>
						<li>Design system, responsive & accessibilité native</li>
						<li>Composants réutilisables & optimisation des performances</li>
						<li>Séparation claire des responsabilités</li>
					</ul>
				</article>
				<article class="feature-card">
					<h3>Systèmes Back-end & Intégrité</h3>
					<p>Développement de serveurs robustes et d'APIs sécurisées pour protéger le cœur de votre métier : vos données.</p>
					<ul>
						<li>Node.js, architecture multi-couches sécurisée</li>
						<li>Gestion des rôles, permissions et validation des entrées</li>
						<li>CI/CD : tests, lint, scans, build & déploiement</li>
						<li>Logs, monitoring et contrôle des erreurs</li>
					</ul>
				</article>
				<article class="feature-card">
					<h3>Approche DevSecOps</h3>
					<p>
						Intégration de la sécurité et de l’automatisation
						tout au long du cycle de vie applicatif.
					</p>
					<ul>
						<li>Sécurité applicative by design</li>
						<li>Automatisation des déploiements et des contrôles</li>
						<li>Gestion des environnements (dev, staging, prod)</li>
						<li>Observabilité, logs et supervision</li>
					</ul>
				</article>
			</div>
		</section>

		<section class="section-display section-skills" id="competences">
			<div class="section-heading">
				<span class="eyebrow">Expertise Technique</span>
				<h2>Maîtrise technologique & Culture SecOps</h2>
				<p>
					Mon approche repose sur l'équilibre entre agilité de développement et rigueur opérationnelle.
					Chaque choix technologique est guidé par des impératifs de <strong>sécurité, de fiabilité et de performance.</strong>
				</p>
			</div>

			<div class="skills-grid">
				<article class="skill-card">
					<h3>Protection & Automatisation</h3>
					<ul>
						<li><i class="fa-solid fa-shield-halved"></i>OWASP Top 10 & Hardening</li>
						<li><i class="fa-solid fa-network-wired"></i>CI/CD (GitHub Actions, GitFlow)</li>
						<li><i class="fa-solid fa-terminal"></i>Scripts d'automatisation (Bash)</li>
						<li><i class="fa-solid fa-chart-line"></i>Observabilité (Logs & Monitoring)</li>
					</ul>
				</article>

				<article class="skill-card">
					<h3>Back-end & Architecture</h3>
					<ul>
						<li><i class="fa-brands fa-node-js"></i>Runtime Node.js & Express</li>
						<li><i class="fa-solid fa-database"></i>SQL (PostgreSQL, MariaDB)</li>
						<li><i class="fa-solid fa-vault"></i>Gestion des secrets & Webhooks</li>
						<li><i class="fa-solid fa-gears"></i>Design de micro-services & APIs</li>
					</ul>
				</article>

				<article class="skill-card">
					<h3>Front-end & Interface</h3>
					<ul>
						<li><i class="fa-brands fa-react"></i>React & Next.js (SSR/SSG)</li>
						<li><i class="fa-solid fa-code"></i>TypeScript (Typage fort & Sécurité)</li>
						<li><i class="fa-solid fa-gauge-high"></i>Optimisation des Core Web Vitals</li>
						<li><i class="fa-solid fa-universal-access"></i>Conformité accessibilité & SEO</li>
					</ul>
				</article>

				<article class="skill-card">
					<h3>Infrastructure & Ops</h3>
					<ul>
						<li><i class="fa-brands fa-docker"></i>Conteneurisation & Isolation</li>
						<li><i class="fa-solid fa-server"></i>Gestion VPS & Serveurs Linux</li>
						<li><i class="fa-solid fa-code-merge"></i>Stratégie de déploiement (Staging/Prod)</li>
						<li><i class="fa-solid fa-file-shield"></i>Audit de dépendances & vulnérabilités</li>
					</ul>
				</article>
			</div>

			<div class="skill-tags">
				<span class="tag">Sécurité by design</span>
				<span class="tag">Scalabilité</span>
				<span class="tag">Zéro Trust</span>
				<span class="tag">Auditabilité</span>
			</div>
		</section>

		<section class="section-display section-experiences" id="experiences">
			<div class="section-heading">
				<span class="eyebrow">Expériences</span>
				<h2>Projets, architecture et sécurisation</h2>
				<p>Une sélection de projets illustrant ma capacité à concevoir, sécuriser et faire évoluer des systèmes web complets.</p>
			</div>
			<div class="experience-carousel">
				<div class="experience-carousel__track" id="experience-track">

					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta">
								<span>2025</span>
								<span class="badge">SaaS B2C (Lancement)</span>
							</div>
							<h3>Stratégie d'Acquisition & Intégrité Data</h3>
							<p class="experience-subtitle">Infrastructure de pré-lancement pour une application SaaS</p>
							<ul class="experience-list">
								<li>Mise en place de tunnels de conversion isolés avec validation stricte anti-injection.</li>
								<li>Architecture pensée pour le respect du RGPD et la confidentialité des flux.</li>
								<li>Optimisation du SEO technique et des Core Web Vitals pour maximiser le ROI publicitaire.</li>
							</ul>
							<div class="experience-tags">
								<span class="tag">Node.js</span>
								<span class="tag">Validation Flux</span>
								<span class="tag">Data Privacy</span>
							</div>
						</article>
					</div>

					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta">
								<span>2025</span>
								<span class="badge">Transformation Digitale</span>
							</div>
							<h3>Portail de Gestion & Contrôle d'Accès</h3>
							<p class="experience-subtitle">Modernisation d'un système de gestion de club sportif</p>
							<ul class="experience-list">
								<li>Système granulaire de rôles et permissions pour sécuriser les actions sensibles (admin vs staff).</li>
								<li>Protection des endpoints critiques et sécurisation des échanges REST via TypeScript.</li>
								<li>Back-office structuré pour une traçabilité totale des modifications de données.</li>
							</ul>
							<div class="experience-tags">
								<span class="tag">TypeScript</span>
								<span class="tag">RBAC</span>
								<span class="tag">PostgreSQL</span>
							</div>
						</article>
					</div>

					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta">
								<span>2024/2025</span>
								<span class="badge">Architecture Fullstack</span>
							</div>
							<h3>Plateforme Transférable & Isolation des Privilèges</h3>
							<p class="experience-subtitle">Plateforme multi-rôles de mise en relation (Ecoride)</p>
							<ul class="experience-list">
								<li>Isolation complète de la logique métier pour les transactions et réservations.</li>
								<li>Gestion des états critiques et résilience des bases de données face aux accès concurrents.</li>
								<li>Implémentation de middleware de sécurité systématiques sur chaque point d'entrée.</li>
							</ul>
							<div class="experience-tags">
								<span class="tag">SecOps</span>
								<span class="tag">Logic-First</span>
								<span class="tag">Node/Express</span>
							</div>
						</article>
					</div>

					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta">
								<span>2025</span>
								<span class="badge">R&D / Web3</span>
							</div>
							<h3>Standardisation de Pipeline & Audit Metadata</h3>
							<p class="experience-subtitle">Framework modulaire pour déploiement d'actifs numériques</p>
							<ul class="experience-list">
								<li>Automatisation totale du déploiement via CI/CD (GitHub Actions).</li>
								<li>Algorithmes de vérification de l'intégrité des métadonnées avant injection on-chain.</li>
								<li>Architecture modulaire facilitant l'audit de code externe.</li>
							</ul>
							<div class="experience-tags">
								<span class="tag">CI/CD</span>
								<span class="tag">Automation</span>
								<span class="tag">JSON Integrity</span>
							</div>
						</article>
					</div>

					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta">
								<span>2024</span>
								<span class="badge">Side project</span>
							</div>
							<h3>TrackBuild</h3>
							<p class="experience-subtitle">Timer multi-projets & reporting</p>
							<ul class="experience-list">
								<li>Application orientée métriques et suivi d’activité</li>
								<li>Gestion fiable des données locales et des états applicatifs</li>
								<li>Architecture JavaScript pensée pour l’évolution</li>
								<li>Export de données et reporting</li>
							</ul>
							<div class="experience-tags">
								<span class="tag">DevSecOps</span>
								<span class="tag">Data</span>
								<span class="tag">JavaScript</span>
								<span class="tag">LocalStorage</span>
							</div>
						</article>
					</div>

					<div class="experience-carousel__item">
						<article class="experience-card">
							<div class="experience-meta">
								<span>2024</span>
								<span class="badge">Side project</span>
							</div>
							<h3>Messagerie privée</h3>
							<p class="experience-subtitle">Application temps réel multi-utilisateurs</p>
							<ul class="experience-list">
								<li>Architecture MVC avec routing et contrôleurs dédiés</li>
								<li>Gestion sécurisée des utilisateurs et des accès</li>
								<li>Protection des échanges et rafraîchissement asynchrone</li>
								<li>Déploiement maîtrisé sur environnement mutualisé</li>
							</ul>
							<div class="experience-tags">
								<span class="tag">Rôles & permissions</span>
								<span class="tag">MySQL</span>
								<span class="tag">JavaScript</span>
								<span class="tag">Fetch API</span>
							</div>
						</article>
					</div>
				</div>

				<!-- Carousel controls -->
				<div class="experience-carousel__controls">
					<button class="experience-carousel__button" id="experience-prev" aria-label="Projet précédent">
						<i class="fa-solid fa-chevron-left"></i>
					</button>
					<div class="experience-carousel__dots" id="experience-dots"></div>
					<button class="experience-carousel__button" id="experience-next" aria-label="Projet suivant">
						<i class="fa-solid fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</section>

		<section class="section-display section-projects" id="projets">
			<div class="section-heading">
				<span class="eyebrow">Démonstrateurs</span>
				<h2>Réalisations & Preuves de Concept</h2>
				<p>Une immersion dans mon approche technique : architecture propre, sécurité native et déploiement maîtrisé.</p>
			</div>

			<div class="projects-grid">

				<a class="project-card" href="https://alpaguide.fr/" target="_blank" rel="noopener">
					<span class="badge"><i class="fa-solid fa-check-double"></i> Production </span>
					<h4>SaaS Acquisition – Alpaguide</h4>
					<p>Architecture optimisée pour la conversion : formulaires durcis, protection contre l'injection de données et infrastructure SEO-ready.</p>
					<span class="project-link">Analyser le déploiement <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>

				<a class="project-card" href="#" target="_blank" rel="noopener">
					<span class="badge"><i class="fa-solid fa-clock-rotate-left"></i> En cours (2026)</span>
					<h4>Portail Métier & Dashboard</h4>
					<p>Système de gestion centralisé avec authentification sécurisée, gestion fine des privilèges (RBAC) et intégrité SQL garantie.</p>
					<span class="project-link">Accès restreint <i class="fa-solid fa-lock"></i></span>
				</a>

				<a class="project-card" href="http://ecoride.sites-alya.fr/" target="_blank" rel="noopener">
					<span class="badge"><i class="fa-solid fa-flask"></i> Étude de cas</span>
					<h4>Plateforme de Flux Critiques</h4>
					<p>Démonstrateur fullstack simulant une logique de réservation complexe avec isolation stricte des responsabilités métier.</p>
					<span class="project-link">Explorer la démo <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>

				<a class="project-card" href="https://nft-collection-1-liart.vercel.app/" target="_blank" rel="noopener">
					<span class="badge"><i class="fa-solid fa-microchip"></i> Lab Web3</span>
					<h4>Pipeline d'Actifs Numériques</h4>
					<p>Validation automatisée de métadonnées et intégration de flux asynchrones avec déploiement continu via GitHub Actions.</p>
					<span class="project-link">Voir le lab <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>

				<a class="project-card" href="https://trackbuild.sites-alya.fr/" target="_blank" rel="noopener">
					<span class="badge"><i class="fa-solid fa-chart-pie"></i> Lab Data</span>
					<h4>Reporting & Metrics Engine</h4>
					<p>Outil de monitoring d'activité focalisé sur l'intégrité du stockage local et la performance du rendu JavaScript.</p>
					<span class="project-link">Tester l'outil <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>

			</div>
		</section>

		<section class="section-display section-contact" id="contact">
			<div class="section-heading">
				<span class="eyebrow">Contact</span>
				<h2>Construisons votre prochain produit</h2>
				<p>Un projet, une idée ou une refonte en tête ?
					Parlons-en ! Je réponds sous 24 h avec un vrai regard produit et technique.</p>
			</div>
			<div class="contact-panel">
				<div class="contact-grid">
					<div class="contact-card">
						<h3>LinkedIn</h3>
						<p>Restons connectés et discutez de vos besoins directement via LinkedIn.</p>
						<div class="contact-links">
							<a target="_blank" href="https://www.linkedin.com/in/pascal-reynier-75a11b326/" rel="noopener">
								<img src="asset/linkedin.svg" alt="Logo LinkedIn" loading="lazy">
							</a>
						</div>
					</div>
					<div class="contact-card">
						<h3>Malt</h3>
						<p>Mission freelance encadrée, devis rapide et contrat sécurisé via Malt.</p>
						<div class="contact-links">
							<a target="_blank" href="https://www.malt.fr/profile/pascalreynier" rel="noopener">
								<img src="asset/Malt_logo_pink.svg" alt="Logo Malt" loading="lazy">
							</a>
						</div>
					</div>
					<div class="contact-card">
						<h3>GitHub</h3>
						<p>Consultez mon code, mes expérimentations et contributions open source.</p>
						<div class="contact-links">
							<a target="_blank" href="https://github.com/Alyaesub" rel="noopener">
								<img src="asset/github.svg" alt="Logo GitHub" loading="lazy">
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
									<span class="tag">Français & Anglais</span>
									<span class="tag">Timezones EU / US EST</span>
								</div>
							</div>
						</div>
						<form id="contact-form" action="/Functions/mailHelper.php" method="POST">
							<!-- Champ honeypot  -->
							<div style="display:none">
								<input type="text" name="website" tabindex="-1" autocomplete="off">
							</div>
							<div class="form-grid">
								<div class="form-field">
									<label for="fullname">Nom complet</label>
									<input type="text" id="fullname" name="fullname" required placeholder="Nom Prénom" />
								</div>
								<div class="form-field">
									<label for="email">Votre e-mail</label>
									<input type="email" id="email" name="email" required placeholder="email@entreprise.com" />
								</div>
								<div class="form-field">
									<label for="company">Société</label>
									<input type="text" id="company" name="company" placeholder="Nom de l'entreprise" />
								</div>
							</div>
							<div class="form-field">
								<label for="message">Contexte du projet</label>
								<textarea id="message" name="message" rows="4" required placeholder="Budget, délais, objectifs..."></textarea>
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
				<span class="eyebrow">Formation</span>
				<h2>Diplômes & parcours certifiants</h2>
				<p>Un parcours tourné vers la création de produits concrets et durables, avec une attention particulière à la qualité du code et à l’impact.</p>
			</div>
			<div class="diploma-grid">
				<article class="diploma-card">
					<img src="asset/digital-campus.png" alt="Logo Digital Campus" loading="lazy">
					<div class="diploma-content">
						<h3>Développeur d'applications web et mobiles</h3>
						<span class="diploma-school">Digital Campus</span>
						<span class="diploma-date">2024 – 2026 (cursus en cours)</span>
						<p>Formation orientée produit : gestion de projets full-stack, développement moderne en JavaScript & TypeScript, et spécialisation progressive sur les technologies web actuelles.</p>
					</div>
				</article>
			</div>
		</section>

		<section class="section-display section-archives" id="archives">
			<div class="section-heading">
				<span class="eyebrow">Archives</span>
				<h2>Sandbox & premiers projets</h2>
				<p>
					Un espace dédié regroupant mes anciens projets, expérimentations et prototypes.
					Parfait pour explorer mon parcours, mes progrès techniques et mes premières approches front/back.
				</p>
			</div>
			<div class="resource-grid">
				<!-- Carte Sandbox principale -->
				<a class="resource-card" href="https://sites-alya.fr/" target="_blank" rel="noopener">
					<h4>Sandbox – Projets & Démos</h4>
					<p>
						Accédez à toutes mes anciennes réalisations : mini-apps, jeux, tests techniques,
						interfaces PHP, JavaScript vanilla, et autres expérimentations.
					</p>
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

		<section class="section-display section-blog" id="blog">
			<div class="section-heading">
				<span class="eyebrow">Veille</span>
				<h2>Ressources que je consulte régulièrement</h2>
				<p>Se maintenir à jour est essentiel : voici quelques lectures incontournables pour rester au contact des tendances tech.</p>
			</div>
			<div class="resource-grid">
				<a class="resource-card" href="https://www.journalduhacker.net/" target="_blank" rel="noopener">
					<h4>🧑‍💻 Le Journal du Hacker</h4>
					<p>Version francophone de Hacker News : dev, sécurité, web, open source. Parfait pour une veille quotidienne.</p>
					<span class="resource-link">Lire maintenant <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
				</a>
				<a class="resource-card" href="https://www.blogdumoderateur.com/tech/" target="_blank" rel="noopener">
					<h4>🧠 Blog du Modérateur – Tech</h4>
					<p>Tendances, outils, productivité, retours d’expérience. Une veille transversale sur l’écosystème numérique.</p>
					<span class="resource-link">Explorer <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
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

	<a id="gototop" href="#">
		<picture>
			<source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/261d_fe0f/512.webp" type="image/webp">
			<img src="https://fonts.gstatic.com/s/e/notoemoji/latest/261d_fe0f/512.gif" alt="Remonter en haut de la page" loading="lazy" width="32" height="32">
		</picture>
	</a>

	<div class="theme-switcher" aria-live="polite">
		<button class="theme-switcher__toggle" type="button" aria-label="Ouvrir le sélecteur de thème">
			<i class="fa-solid fa-swatchbook"></i>
		</button>
		<div class="theme-switcher__panel" role="dialog" aria-label="Choisir un thème">
			<div class="theme-switcher__header">
				<span class="theme-switcher__title">Thème</span>
				<button class="theme-switcher__close" type="button" aria-label="Fermer">
					<i class="fa-solid fa-xmark"></i>
				</button>
			</div>
			<div class="theme-switcher__options">
				<button class="theme-option" role="button" data-theme="dark" type="button">
					<span class="theme-dot theme-dot--dark"></span>
					<span>Principal</span>
				</button>
				<button class="theme-option" role="button" data-theme="light" type="button">
					<span class="theme-dot theme-dot--light"></span>
					<span>Clair</span>
				</button>
			</div>
		</div>
	</div>
</body>

</html>