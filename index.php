<?php
require_once "controllers/routeur.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Pascal Reynier, Développeur web full stack à l’écoute de vos besoins. Du design au déploiement, je conçois des plateformes modernes, rapides et durables (PHP, JS, Web3).">
    <meta name="author" content="Pascal Reynier">
    <meta name="robots" content="index, follow">
    <!-- Open Graph (Facebook, LinkedIn...) -->
    <meta property="og:title" content="Pascal Reynier – Développeur Web Full Stack">
    <meta property="og:description" content="Découvrez mon portfolio de développeur web. Projets, compétences, contact. Full-stack PHP, JS, Web3.">
    <meta property="og:image" content="https://sites-alya.fr/asset/logoPr.png">
    <meta property="og:url" content="https://sites-alya.fr">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pascal Reynier – Développeur Web Full Stack">
    <meta name="twitter:description" content="Développement web et mobile, projets PHP, JS, Web3.">
    <meta name="twitter:image" content="https://ton-site.fr/asset/preview.png">
    <title>Portfolio Pascal Reynier – Développeur Web Full Stack & Web3</title>
    <link rel="canonical" href="https://sites-alya.fr">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/css/main.css">
    <script src="javascript/script.js" defer></script>
</head>

<body>
    <header class="header-website">
        <nav class="navbar">
            <a class="brand" href="/">
                <img src="asset/ProfilePic.jpg" alt="Portrait de Pascal Reynier">
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
                    <span class="eyebrow">Freelance full stack & web3</span>
                    <h1>Je conçois des plateformes web modernes, performantes et durables pensées pour grandir avec vos projets.</h1>
                </div>
                <p class="lead">
                    Du cadrage à la mise en production, je livre des expériences web fiables, rapides et scalables, avec une approche simple, directe et orientée résultat.
                    Ma stack JavaScript / TypeScript (React, Next.js) et back-end (Node.js, Express, PHP) couvre l’ensemble du cycle de vie,
                    y compris les intégrations Web3.
                </p>
                <div class="hero-actions">
                    <a href="#contact" class="btn btn-primary"><i class="fa-solid fa-comments"></i>Discutons de votre projet</a>
                    <a href="asset/cv-dev.pdf" download="cv-dev.pdf" class="btn btn-secondary"><i class="fa-solid fa-file-arrow-down"></i>Télécharger mon CV</a>
                </div>
                <div class="hero-badges">
                    <span class="badge"><i class="fa-solid fa-gauge-high"></i> React & Next.js</span>
                    <span class="badge"><i class="fa-solid fa-server"></i> Node.js & PHP</span>
                    <span class="badge"><i class="fa-brands fa-ethereum"></i> Web3 & blockchain</span>
                </div>
                <ul class="hero-points">
                    <li>Delivery orienté produit : discovery, conception, développement, tests et déploiement.</li>
                    <li>Front-end premium : design system, accessibilité, performance et SEO prêts pour la production.</li>
                    <li>Back-end sécurisé : APIs REST/Graph, bases SQL & NoSQL, authentification, monitoring et CI/CD.</li>
                </ul>
                <div class="hero-metrics">
                    <div class="hero-metric">
                        <span class="metric-value">6+</span>
                        <span class="metric-label">Projets livrés</span>
                    </div>
                    <div class="hero-metric">
                        <span class="metric-value">100%</span>
                        <span class="metric-label">Implication produit</span>
                    </div>
                    <div class="hero-metric">
                        <span class="metric-value">Web3 Ready</span>
                        <span class="metric-label">Intégrations blockchain</span>
                    </div>
                </div>
            </div>
            <div class="hero-panel">
                <span class="hero-panel__title"><i class="fa-solid fa-diagram-project"></i>Approche produit & tech</span>
                <div class="media-frame">
                    <img class="zoom-scroll" src="asset/imgPremiereDiv.avif" alt="Interface web moderne illustrant le travail de Pascal Reynier">
                </div>
                <p class="hero-panel__caption">
                    J’accompagne startups et PME pour transformer leurs idées en plateformes robustes.
                    Workshops de cadrage, prototypage rapide, développement itératif et accompagnement au déploiement :
                    chaque projet est traité comme un produit à forte valeur ajoutée.
                </p>
                <div class="hero-panel__tags">
                    <span class="tag">Code clair et robuste</span>
                    <span class="tag">Scalabilité</span>
                    <span class="tag">Design system</span>
                    <span class="tag">CI/CD</span>
                </div>
            </div>
        </section>

        <section class="section-display section-services" id="a-propos">
            <div class="section-heading">
                <span class="eyebrow">Ce que je fais</span>
                <h2>Un partenaire tech polyvalent pour vos produits digitaux</h2>
                <p>
                    Je construis des expériences utilisateur soignées tout en garantissant une architecture stable, maintenable et prête pour la croissance.
                    Du MVP à la refonte complète, j’installe les bons outils et les bonnes méthodes pour livrer vite, sans sacrifier la qualité.
                </p>
            </div>
            <div class="feature-grid">
                <article class="feature-card">
                    <h3>Produits web sur-mesure</h3>
                    <p>Applications modernes, performantes et évolutives, pensées pour vos utilisateurs.</p>
                    <ul>
                        <li>Architecture front-end scalable (React, Next.js)</li>
                        <li>Design system, responsive et accessibilité native</li>
                        <li>Intégrations API tierces, analytics, SEO technique</li>
                    </ul>
                </article>
                <article class="feature-card">
                    <h3>Back-end robuste</h3>
                    <p>API, services et automatisations fiables pour soutenir vos ambitions produit.</p>
                    <ul>
                        <li>Node.js (Express), PHP, MVC personnalisés</li>
                        <li>Authentification, rôles, gestion des permissions</li>
                        <li>MySQL, MongoDB, Webhooks, tests & monitoring</li>
                    </ul>
                </article>
                <article class="feature-card">
                    <h3>Expérience Web3</h3>
                    <p>Intégration de briques blockchain et smart contracts dans des interfaces accessibles.</p>
                    <ul>
                        <li>Onboarding utilisateurs Web2 → Web3</li>
                        <li>Connexion wallets, gestion des transactions</li>
                        <li>Best practices sécurité & UX Web3</li>
                    </ul>
                </article>
                <article class="feature-card">
                    <h3>Accompagnement produit</h3>
                    <p>Conseil stratégique pour prendre les bonnes décisions techniques et business.</p>
                    <ul>
                        <li>Roadmaps, cadrage fonctionnel & ateliers d’idéation</li>
                        <li>Revue de code, audit de performance, dette technique</li>
                        <li>Documentation, passation, montée en compétences</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class="section-display section-skills" id="competences">
            <div class="section-heading">
                <span class="eyebrow">Compétences</span>
                <h2>Stack technique maîtrisée & veille constante</h2>
                <p>
                    J’équilibre innovation et pragmatisme : livrer vite, bien, et rester à jour sur ce qui fera la différence demain.
                </p>
            </div>
            <div class="skills-grid">
                <article class="skill-card">
                    <h3>Langages & frameworks</h3>
                    <ul>
                        <li><i class="fa-brands fa-js"></i>JavaScript ES6+, TypeScript</li>
                        <li><i class="fa-brands fa-react"></i>React, Next.js</li>
                        <li><i class="fa-brands fa-node-js"></i>Node.js, Express.js</li>
                        <li><i class="fa-brands fa-php"></i>PHP, MVC maison, Twig</li>
                        <li><i class="fa-brands fa-ethereum"></i>Solidity, intégrations Web3</li>
                    </ul>
                </article>
                <article class="skill-card">
                    <h3>Architecture & données</h3>
                    <ul>
                        <li><i class="fa-solid fa-database"></i>MySQL, MariaDB, PostgreSQL</li>
                        <li><i class="fa-solid fa-leaf"></i>MongoDB, stockage NoSQL</li>
                        <li><i class="fa-solid fa-file-code"></i>API REST / JSON, Webhooks</li>
                        <li><i class="fa-brands fa-docker"></i>Docker, environnements isolés</li>
                    </ul>
                </article>
                <article class="skill-card">
                    <h3>Qualité & delivery</h3>
                    <ul>
                        <li><i class="fa-solid fa-shield"></i>OWASP, roles & permissions</li>
                        <li><i class="fa-solid fa-network-wired"></i>CI/CD, GitHub Actions, GitFlow</li>
                        <li><i class="fa-solid fa-code-compare"></i>Tests fonctionnels, monitoring</li>
                    </ul>
                </article>
            </div>
            <div class="skill-tags">
                <span class="tag">Clean code</span>
                <span class="tag">Performance</span>
                <span class="tag">Accessibilité</span>
                <span class="tag">Documentation</span>
            </div>
        </section>

        <section class="section-display section-experiences" id="experiences">
            <div class="section-heading">
                <span class="eyebrow">Expériences</span>
                <h2>Projets, delivery et responsabilités</h2>
                <p>Une sélection de projets significatifs qui illustrent ma capacité à piloter un produit de bout en bout, front, back et organisation.</p>
            </div>
            <div class="experience-grid">
                <article class="experience-card">
                    <div class="experience-meta">
                        <span>2025</span>
                        <span class="badge">Projet freelance</span>
                    </div>
                    <h3>Site vitrine & gestion</h3>
                    <p class="experience-subtitle">Transformation digitale d’un club de football</p>
                    <ul class="experience-list">
                        <li>Système CRUD complet (équipes, matchs, événements, médias)</li>
                        <li>Interface d’administration sécurisée avec rôles et workflow éditorial</li>
                        <li>Stack TypeScript full-stack : React, Node.js, Express, MySQL</li>
                    </ul>
                    <div class="experience-tags">
                        <span class="tag">React</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">Express</span>
                        <span class="tag">SQL</span>
                    </div>
                </article>
                <article class="experience-card">
                    <div class="experience-meta">
                        <span>2025</span>
                        <span class="badge">Projet diplômant</span>
                    </div>
                    <h3>Ecoride</h3>
                    <p class="experience-subtitle">Plateforme de covoiturage écoresponsable</p>
                    <ul class="experience-list">
                        <li>Recherche, réservation et ajout de trajets avec requêtes asynchrones</li>
                        <li>Dashboards dédiés (utilisateur, employé, administrateur)</li>
                        <li>Gestion des crédits, avis NoSQL, rôles et sécurité back-office</li>
                    </ul>
                    <div class="experience-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">SCSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">JSON</span>
                    </div>
                </article>
                <article class="experience-card">
                    <div class="experience-meta">
                        <span>2025</span>
                        <span class="badge">Side project</span>
                    </div>
                    <h3>Starter Pack NFT</h3>
                    <p class="experience-subtitle">Création d’une galerie NFT minimaliste et template réutilisable</p>
                    <ul class="experience-list">
                        <li>Conception d’une architecture modulaire (assets, metadata, data, render, utils)</li>
                        <li>Chargement et validation dynamique des métadonnées JSON (name, image, attributes)</li>
                        <li>Rendu automatisé d’une grille responsive jusqu’à 100 NFTs, avec placeholders et pagination</li>
                    </ul>
                    <div class="experience-tags">
                        <span class="tag">TypeScript</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Vite.js</span>
                        <span class="tag">IPFS</span>
                    </div>
                </article>
                <article class="experience-card">
                    <div class="experience-meta">
                        <span>2024</span>
                        <span class="badge">Side project</span>
                    </div>
                    <h3>TrackBuild</h3>
                    <p class="experience-subtitle">Timer multi-projets & reporting</p>
                    <ul class="experience-list">
                        <li>Gestion des sessions avec historique dynamique et export CSV</li>
                        <li>Visualisation des temps hebdomadaires et métriques clés</li>
                        <li>Interface modulaire, architecture JavaScript évolutive</li>
                    </ul>
                    <div class="experience-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">SCSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">LocalStorage</span>
                    </div>
                </article>
                <article class="experience-card">
                    <div class="experience-meta">
                        <span>2024</span>
                        <span class="badge">Side project</span>
                    </div>
                    <h3>Messagerie privée</h3>
                    <p class="experience-subtitle">Application temps réel multi-utilisateurs</p>
                    <ul class="experience-list">
                        <li>Architecture MVC PHP avec routing, contrôleurs et vues dédiées</li>
                        <li>Requêtes asynchrones (Fetch) et rafraîchissement des conversations</li>
                        <li>Gestion des utilisateurs, sécurisation et déploiement mutualisé</li>
                    </ul>
                    <div class="experience-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Fetch API</span>
                    </div>
                </article>

            </div>
        </section>

        <section class="section-display section-projects" id="projets">
            <div class="section-heading">
                <span class="eyebrow">Projets</span>
                <h2>Quelques réalisations accessibles en ligne</h2>
                <p>Des démos publiques pour découvrir mon approche front/back et les choix d’architecture mis en place sur chaque produit.</p>
            </div>
            <div class="projects-grid">
                <a class="project-card" href="https://www.google.com/?hl=fr" target="_blank" rel="noopener">
                    <span class="badge"><i class="fa-solid fa-stopwatch"></i>En cours</span>
                    <h4>Site vitrine & portail club</h4>
                    <p>Création from scratch pour un club sportif : espace public dynamique, back-office éditorial, modules événements & galerie.</p>
                    <span class="project-link">Voir le projet (déploiement pour fin 2025) <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="project-card" href="http://ecoride.sites-alya.fr/" target="_blank" rel="noopener">
                    <span class="badge"><i class="fa-solid fa-stopwatch"></i>Site covoiturage</span>
                    <h4>Ecoride</h4>
                    <p>Plateforme de covoiturage écoresponsable : réservation temps réel, dashboards multi-rôles et suivi des crédits/avis.</p>
                    <span class="project-link">Voir le projet <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="project-card" href="#" target="_blank" rel="noopener">
                    <span class="badge"><i class="fa-solid fa-image"></i> Galerie NFT</span>
                    <h4>Starter Pack NFT</h4>
                    <p>Galerie minimaliste et réutilisable pour collections NFT : affichage dynamique jusqu’à 100 tokens, chargement des metadata JSON et rendu IPFS optimisé.</p>
                    <span class="project-link">Voir le projet <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="project-card" href="https://trackbuild.sites-alya.fr/" target="_blank" rel="noopener">
                    <span class="badge"><i class="fa-solid fa-stopwatch"></i>SaaS interne</span>
                    <h4>TrackBuild</h4>
                    <p>Gestionnaire de tâches et suivi du temps multi-projets. Interface modulable et reporting synthétique.</p>
                    <span class="project-link">Voir le projet <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
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
                                <img src="asset/linkedin.svg" alt="Logo LinkedIn">
                            </a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <h3>Malt</h3>
                        <p>Mission freelance encadrée, devis rapide et contrat sécurisé via Malt.</p>
                        <div class="contact-links">
                            <a target="_blank" href="https://www.malt.fr/profile/pascalreynier" rel="noopener">
                                <img src="asset/Malt_logo_pink.svg" alt="Logo Malt">
                            </a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <h3>GitHub</h3>
                        <p>Consultez mon code, mes expérimentations et contributions open source.</p>
                        <div class="contact-links">
                            <a target="_blank" href="https://github.com/Alyaesub" rel="noopener">
                                <img src="asset/github.svg" alt="Logo GitHub">
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
                        <form id="contact-form" action="/Function/mailHelper.php" method="POST">
                            <div class="form-grid">
                                <div class="form-field">
                                    <label for="fullname">Nom complet</label>
                                    <input type="text" id="fullname" name="fullname" required placeholder="Nom Prénom" />
                                </div>
                                <div class="form-field">
                                    <label for="email">Email pro</label>
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
                    <img src="asset/studi-2.png" alt="Logo Studi">
                    <div class="diploma-content">
                        <h3>Développeur applications web et mobiles</h3>
                        <span class="diploma-school">Studi</span>
                        <span class="diploma-date">2024 – 2026 (cursus en cours)</span>
                        <p>Approfondissement full-stack, architecture logicielle et pratiques DevOps. Semestre 2 validé.</p>
                    </div>
                </article>
                <article class="diploma-card">
                    <img src="asset/digital-campus.png" alt="Logo Digital Campus">
                    <div class="diploma-content">
                        <h3>Développeur applications web et mobiles</h3>
                        <span class="diploma-school">Digital Campus</span>
                        <span class="diploma-date">2024 – 2026 (cursus en cours)</span>
                        <p>Projet orienté produit, UX/UI, gestion client et montée en compétence sur les stacks JavaScript & Web3.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="section-display section-archives" id="archives">
            <div class="section-heading">
                <span class="eyebrow">Archives</span>
                <h2>Premiers projets & expérimentations</h2>
                <p>Des réalisations plus anciennes, parfaites pour comprendre ma progression et ma curiosité technique.</p>
            </div>
            <div class="resource-grid">
                <a class="resource-card" href="http://blogweb3.sites-alya.fr/" target="_blank" rel="noopener">
                    <h4>Blog Web3</h4>
                    <p>CMS complet avec interface d’administration, CRUD articles, authentification et gestion des rôles </p>
                    <div class="experience-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">SQL</span>
                        <span class="tag">Bootstrap</span>
                        <span class="tag">UX</span>
                    </div>
                    <span class="resource-link">Voir la démo <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                </a>
                <a class="resource-card" href="https://jeux-de-des.sites-alya.fr/" target="_blank" rel="noopener">
                    <h4>🎲 Jeu de dés</h4>
                    <p>Exploration JavaScript vanilla : gestion des états, interactions DOM et animations.</p>
                    <div class="experience-tags">
                        <span class="tag">HTML/CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Bootstrap</span>
                    </div>
                    <span class="resource-link">Voir la démo <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
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
            <span>© 2024 Pascal Reynier · Tous droits réservés</span>
        </div>
    </footer>

    <div id="loader">
        <div class="loader"></div>
    </div>

    <a id="gototop" href="#">
        <picture>
            <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/261d_fe0f/512.webp" type="image/webp">
            <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/261d_fe0f/512.gif" alt="☝" width="32" height="32">
        </picture>
    </a>
</body>

</html>