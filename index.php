<?php
require_once "controllers/routeur.php"
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Pascal Reynier, développeur web full stack : création de sites, d'applications web & mobiles, back-end PHP, front-end JS, bases de données et projets Web 3.">
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
    <title>Pascal Reynier – Développeur Web Full Stack | Portfolio 2024</title>
    <link rel="canonical" href="https://sites-alya.fr">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/css/main.css">
    <script src="javascript/script.js" defer></script>
</head>

<body>
    <header class="header-website">
        <nav class="navbar">
            <div class="logo">
                <img src="asset/logoPr.png" alt="logo">
            </div>
            <div class="menu">
                <input type="checkbox" id="menu-toggle" class="menu-input" />
                <label class="btn btn-primary menu-input-label" for="menu-toggle"><i class="fa-solid fa-bars"></i></label>
                <div class="dropdown-menu">
                    <ul class="nav-links">
                        <li class="nav-link">
                            <a href="/accueil">Accueil</a>
                        </li>
                        <li class="nav-link">
                            <a href="/a-propos">A propos</a>
                        </li>
                        <li class="nav-link">
                            <a href="/competences">Compétences</a>
                        </li>
                        <li class="nav-link">
                            <a href="/diplomes">Diplomes</a>
                        </li>
                        <li class="nav-link">
                            <a href="/experiences">Experiences</a>
                        </li>
                        <li class="nav-link">
                            <a href="/projets">Projets</a>
                        </li>
                        <li class="nav-link">
                            <a href="/contact">Contacts</a>
                        </li>
                        <li class="nav-link">
                            <a href="/blog">Blogs</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="section-display left-text-content" id="accueil">
            <div class="text-content">
                <h1 class="title">Bonjour et bienvenue sur mon portfolio.</h1>
                <p class="paragraphe">
                    Passionné par le code et la création, je développe des applications web et mobiles pensées pour les utilisateurs, avec rigueur et simplicité.<br>
                    Je vous accompagne de l’idée au déploiement de votre application web.<br>
                    Développeur web passionné, j’ai à cœur de concevoir des applications à la fois fonctionnelles, intuitives et durables.<br>
                    Formé aux technologies du web telles que HTML, CSS (SCSS), JavaScript, PHP et SQL, je suis également à l’aise avec les architectures modernes et les bases de données SQL, NoSQL, MongoDB et MySQL, ainsi qu'avec Docker.<br>
                    Mon approche est centrée sur la qualité du code, la clarté de la structure et l’expérience utilisateur. Curieux et autonome, je suis toujours en veille pour apprendre de nouveaux outils ou langages, comme Python et Solidity, afin de rester à la pointe et de proposer des solutions adaptées aux besoins, tout en m’ouvrant à d’autres horizons.<br>
                    Je développe des projets complets mêlant front-end, back-end, API et hébergement, tout en m’intéressant fortement au Web3 et à la blockchain.
                </p>
                <div class="action-div">
                    <a href="#contact">
                        <button class="btn btn-primary">Contact</button>
                    </a>
                    <a href="asset/cv-dev.png" download="cv-dev.png"><!-- mettre ajour le cv -->
                        <button class="btn btn-primary">Mon CV</button>
                    </a>
                </div>
            </div>
            <div class="illustration">
                <img src="asset/presentation.png" alt="image de presentations">
            </div>
        </section>

        <section class="section-display right-text-content" id="a-propos">
            <div class="text-content">
                <h2 class="title">Ce que je fais
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/270f_fe0f/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/270f_fe0f/512.gif" alt="✏" width="32" height="32">
                    </picture>
                </h2>
                <p class="paragraphe">Développeur et programmeur qui veut explorer chaque bribe technologique.</p>
                <div class="competences-icones">
                    <i class="fa-brands fa-html5"></i>
                    <i class="fa-brands fa-css3"></i>
                    <i class="fa-brands fa-sass"></i>
                    <i class="fa-brands fa-js"></i>
                    <i class="fa-solid fa-database"></i>
                    <i class="fa-brands fa-php"></i>
                    <i class="fa-brands fa-symfony"></i>
                    <i class="fa-solid fa-code-branch"></i>
                    <i class="fa-solid fa-server"></i>
                    <i class="fa-brands fa-docker"></i>
                    <i class="fa-brands fa-python"></i>
                    <i class="fa-brands fa-ethereum"></i>

                </div>
                <div class="liste-competences">
                    <p>⚡Développement des interfaces utilisateur/front-end<br>interactives et dynamiques pour vos applications Web et mobiles.</p>
                    <p>⚡Création d'applications Web progressives et responsives.</p>
                    <p>⚡Déploiement et maintenance web.</p>
                    <p>⚡Programmation et bases Web 3.</p>
                    <p>⚡Création et gestion de base de données.</p>
                </div>
            </div>
            <div class="illustration">
                <img src="asset/a-propos.png" alt="image de img-compétences">
            </div>
        </section>

        <section class="section-display left-text-content" id="competences">
            <div class="text-content">
                <h2 class="title">Compétences
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f48e/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f48e/512.gif" alt="💎" width="32" height="32">
                    </picture>
                </h2>
                <p>Niveaux de compétences</p>
                <div class="competences-bars">
                    <div class="competence-bar">
                        <div class="competence-bar-title">Front-end/Design</div>
                        <div class="competence-bar-bar">
                            <div class="competence-bar-bar-fill-Front-end-Design"></div>
                        </div>
                    </div>
                    <div class="competence-bar">
                        <div class="competence-bar-title">Back-end</div>
                        <div class="competence-bar-bar">
                            <div class="competence-bar-bar-fill-Back-end"></div>
                        </div>
                    </div>
                    <div class="competence-bar">
                        <div class="competence-bar-title">Programmation</div>
                        <div class="competence-bar-bar">
                            <div class="competence-bar-bar-fill-Programmation"></div>
                        </div>
                    </div>
                    <div class="competence-bar">
                        <div class="competence-bar-title">Web 3</div>
                        <div class="competence-bar-bar">
                            <div class="competence-bar-bar-fill-Web3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="illustration">
                <img src="asset/a-propos.png" alt="image de presentations">
            </div>
        </section>

        <section class="section-display full-text-content" id="diplomes">
            <div class="text-content">
                <h2 class="title">Diplômes
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f393/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f393/512.gif" alt="🎓" width="32" height="32">
                    </picture>
                </h2>
            </div>
            <article class="diplomes">
                <img class="diplome-logo" src="asset/studi-2.png" alt="logo studi">
                <div class="diplome-content">
                    <h3 class="diplome-title">Développeur applications web et mobiles</h3>
                    <div class="diplome-subtitle">Studi</div>
                    <div class="diplome-date">2024-2026</div>
                    <div class="diplome-description">
                        En cours de formation. 1er semestre validé.
                    </div>
                </div>
            </article>
            <article class="diplomes">
                <img class="diplome-logo" src="asset/logo_digital-campus.webp" alt="logo studi">
                <div class="diplome-content">
                    <h3 class="diplome-title">Développeur applications web et mobiles</h3>
                    <div class="diplome-subtitle">Digital Campus</div>
                    <div class="diplome-date">2024-2026</div>
                    <div class="diplome-description">
                        En cours de formation. 1er semestre validé.
                    </div>
                </div>
            </article>
        </section>

        <section class="section-display full-text-content" id="experiences">
            <div class="text-content">
                <h2 class="title">Expériences, projets, créations
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/2728/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/2728/512.gif" alt="✨" width="32" height="32">
                    </picture>
                </h2>
            </div>
            <div class="experiences">
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Jeux de dés</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo du projet ou de l'entreprise">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Dans le cadre de ma formation</div>
                        <div class="experience-date">2024</div>
                        <div class="experience-description">
                            • Objectif : Créer un jeu dynamique interactif manipulant le DOM en JS<br>
                            • Stack : HTML / CSS / JavaScript Vanilla<br>
                            - Réalisations :<br>
                            • Logique du jeu à 2 joueurs avec gestion des scores<br>
                            • Affichage des dés via Math.random()<br>
                            • Animations des éléments et mise en page responsive<br>
                            - Compétences acquises :<br>
                            • Logique conditionnelle et événements<br>
                            • Manipulation dynamique du DOM<br>
                            • Déploiement d’un mini-jeu en ligne sur hébergement mutualisé (o2switch)<br>
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Messagerie</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo projet messagerie">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Projet d'une messagerie privée</div>
                        <div class="experience-date">2024</div>
                        <div class="experience-description">
                            • Objectif : Créer une application de messagerie multi-utilisateurs avec envoi et réception de messages<br>
                            • Stack : PHP, MySQL, JavaScript<br>
                            - Réalisations :<br>
                            • Création et gestion des tables utilisateurs/messages<br>
                            • Interface de messagerie avec requêtes asynchrones (fetch)<br>
                            • Organisation MVC simple avec contrôleur et vues séparées<br>
                            • Tests multi-utilisateurs en local<br>
                            - Compétences acquises :<br>
                            • Architecture back-end<br>
                            • Communication JS/PHP/SQL<br>
                            • Bonne pratique de séparation des responsabilités<br>
                            • Déploiement sur hébergement mutualisé (o2switch).<br>
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Blog</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo projet blog">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Projet de blog Web3</div>
                        <div class="experience-date">2025</div>
                        <div class="experience-description">
                            ⚠️ Les articles sont générés avec Faker : leur contenu est fictif<br>
                            • Objectif : Créer un blog dynamique avec interface d'administration<br>
                            • Stack : PHP, SQL, HTML, CSS / Bootstrap<br>
                            - Réalisations :<br>
                            • Système CRUD complet (articles, création, modification, suppression)<br>
                            • Interface d’administration sécurisée<br>
                            • Utilisation de classes PHP, autoloading et routing<br>
                            • Mise en page responsive<br>
                            - Compétences acquises :<br>
                            • Développement full-stack orienté projet<br>
                            • Utilisation de concepts avancés PHP<br>
                            • Expérience utilisateur et accessibilité<br>
                            • Déploiement sur hébergement mutualisé (o2switch)<br>
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Ecoride</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo projet blog">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Site Web et mobile de covoiturage</div>
                        <div class="experience-date">2025</div>
                        <div class="experience-description">
                            • Contexte : Projet personnel de fin de formation validant toutes les compétences techniques attendues<br>
                            • Objectif : Créer une application web de covoiturage éco-responsable<br>
                            • Stack : HTML, SCSS, JavaScript (Fetch), PHP, MySQL, JSON (NoSQL)<br>
                            - Éléments déjà réalisés :<br>
                            • Formulaire dynamique de recherche et d’ajout de trajets<br>
                            • Connexion à une base de données relationnelle (MySQL)<br>
                            • Requêtes asynchrones Fetch pour charger les trajets<br>
                            • Premières intégrations graphiques responsives<br>
                            • Projet actuellement en cours de développement.<br>
                            - Compétences mobilisées :<br>
                            • Structuration de base de données SQL et logique back-end en PHP<br>
                            • Manipulation de données JSON (NoSQL)<br>
                            • Déploiement sur hébergement mutualisé (o2switch)<br>
                            • Respect des bonnes pratiques de documentation<br>
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Coming soon</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo projet blog">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">....</div>
                        <div class="experience-date">...</div>
                        <div class="experience-description">

                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Coming soon</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo projet blog">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">...</div>
                        <div class="experience-date">...</div>
                        <div class="experience-description">

                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="section-display full-text-content" id="projets">
            <div class="text-content">
                <h2 class="title">Mes Projets
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f525/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f525/512.gif" alt="🔥" width="32" height="32">
                    </picture>
                </h2>
                <p>Présentations de mes dernier projets</p>
                <section class="liste-blog">
                    <a href="https://jeux-de-des.sites-alya.fr/">
                        <article class="blog">
                            <h4>Jeux de dés</h4>
                            <p>Jeux de dés dynamique fait au cours de ma formation</p>
                            <div href="https://jeux-de-des.sites-alya.fr/" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="http://messagerie.sites-alya.fr/">
                        <article class="blog">
                            <h4>Méssagerie</h4>
                            <p>Création d'une méssagerie privé full-stack</p>
                            <div href="http://messagerie.sites-alya.fr/" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Blog Web3</h4>
                            <p>Création d'un blog spécialisé dans le Web3</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Ecoride</h4>
                            <p>Réalisation full-stack d'une apllication de covoiturage</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Titre et nom du projet</h4>
                            <p>Presentation du projet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Titre et nom du projet</h4>
                            <p>Presentation du projet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                </section>
            </div>
        </section>

        <section class="section-display full-text-content" id="contact">
            <div class="text-content">
                <h2 class="title">Mes contacts et réseaux
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f6ce_fe0f/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f6ce_fe0f/512.gif" alt="🛎" width="32" height="32">
                    </picture>
                </h2>
                <p>Réseaux Professionnels</p>
                <section class="listes-contacts">
                    <div class="liste-contact">
                        <a target="_blank" href="https://github.com/Alyaesub">
                            <img src="asset/github.svg" alt="logo git hub">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/pascal-reynier-75a11b326/">
                            <img src="asset/linkedin.svg" alt="logo linkedin">
                        </a>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=61574938434923">
                            <img src="asset/facebook.svg" alt="logo facebook">
                        </a>
                        <a target="_blank" href="https://www.instagram.com/code_co_solutions/">
                            <img src="asset/instagram.svg" alt="logo instagramme">
                        </a>
                    </div>
                </section>
            </div>
        </section>

        <section class="section-display full-text-content" id="blog">
            <div class="text-content">
                <h2 class="title">Blog
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f195/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f195/512.gif" alt="🆕" width="32" height="32">
                    </picture>
                </h2>
                <p>Continuer à apprendre, Continuer à decouvrir, Rester en veille</p>
                <section class="liste-blog">
                    <a href="https://www.journalduhacker.net/">
                        <article class="blog">
                            <h4>🧑‍💻 Le Journal du Hacker</h4>
                            <p>Version francophone de Hacker News – actu dev, sécurité, web, open source.
                                Super adapté pour un profil curieux !</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.blogdumoderateur.com/tech/">
                        <article class="blog">
                            <h4>🧑‍💻 Blog du Modérateur – Rubrique Tech</h4>
                            <p>Pour une veille plus large (actu tech, outils, web, réseaux pro…)</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                </section>
            </div>
        </section>
    </main>
    <footer>
        <div class="credits">
            <span>Made with enjoy <picture>
                    <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1fae1/512.webp" type="image/webp">
                    <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1fae1/512.gif" alt="🫡" width="32" height="32">
                </picture></span>
            <span>© 2024 Reynier Pascal</span>
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