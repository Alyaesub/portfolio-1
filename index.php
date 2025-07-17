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
    <title>Portfolio Pascal Reynier – Développeur Web Full Stack</title>
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
                    Développeur fullstack, je conçois des applications web complètes, stables et utiles — du front au back, en passant par les bases de données et les API.
                    Passionné par le Web3 et la cybersécurité, je me forme en continu pour maîtriser les technologies de demain : Solidity, blockchain, sécurité des applications…
                    Mon objectif : créer des outils fiables, modernes et pensés pour les utilisateurs comme pour les développeurs.
                </p>
                <div class="action-div">
                    <a href="#contact">
                        <button class="btn btn-primary">Contact</button>
                    </a>
                    <a href="asset/cv-dev.pdf" download="cv-dev.pdf"><!-- mettre ajour le cv -->
                        <button class="btn btn-primary">Mon CV</button>
                    </a>
                </div>
            </div>
            <div class="illustration">
                <img src="asset/michael-baccin-XopauR-Nagk-unsplash.avif" alt="image de presentations">
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
                <div class="liste-competences">
                    <p>⚡ Interfaces web modernes, responsives et interactives.</p>
                    <p>⚡ Développement full-stack (front-end & back-end).</p>
                    <p>⚡ Intégration d'API et gestion de bases de données.</p>
                    <p>⚡ Déploiement, maintenance et optimisation.</p>
                    <p>⚡ Initiation au Web3, blockchain et cyber sécurité.</p>
                </div>
            </div>
            <div class="illustration">
                <img src="asset/safar-safarov-koOdUvfGr4c-unsplash.avif" alt="image de img-compétences">
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
                <div class="stack-group">
                    <h3>Technologies solides & explorations en cours</h3>
                    <ul class="stack-list">
                        <li><i class="fa-brands fa-html5"></i> HTML5</li>
                        <li><i class="fa-brands fa-css3-alt"></i> CSS3 / SCSS</li>
                        <li><i class="fa-brands fa-js"></i> JavaScript</li>
                        <li><i class="fa-brands fa-react"></i> React / Next.js</li>
                        <li><i class="fa-brands fa-node-js"></i> Node.js</li>
                        <li><i class="fa-brands fa-php"></i> PHP</li>
                        <li><i class="fa-brands fa-ethereum"></i> Solidity / Web3</li>
                        <li><i class="fa-solid fa-shield"></i> Cyber sécurité</li>
                        <li><i class="fa-solid fa-file-code"></i> API REST / JSON</li>
                        <li><i class="fa-solid fa-database"></i> MySQL / SQL</li>
                        <li><i class="fa-solid fa-leaf"></i> MongoDB / NoSQL</li>
                        <li><i class="fa-solid fa-network-wired"></i> MVC & Routage personnalisé</li>
                        <li><i class="fa-brands fa-git-alt"></i> Git / GitHub</li>
                        <li><i class="fa-brands fa-docker"></i> Docker</li>
                    </ul>
                </div>
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
                <img class="diplome-logo" src="asset/digital-campus.png" alt="logo studi">
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
                        <h3 class="experience-title">TrackBuild</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo du projet TrackBuild">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Timer de suivi multi-projets</div>
                        <div class="experience-date">2024</div>
                        <div class="experience-description">
                            • Objectif : Créer un outil de suivi de temps multi-projets<br>
                            • Stack : HTML, SCSS, JavaScript (DOM), LocalStorage<br>
                            - Fonctions principales :<br>
                            • Démarrage/arrêt des sessions avec historique dynamique<br>
                            • Sélecteur de projets + récapitulatif global hebdo<br>
                            • Graphiques de suivi du temps (canvas)<br>
                            • Export des données au format CSV<br>
                            - Compétences acquises :<br>
                            • Manipulation du DOM et du LocalStorage<br>
                            • Génération de graphiques et formats d’export<br>
                            • Architecture JS modulaire et évolutive
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
                            • Déploiement sur hébergement mutualisé.<br>
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
                            • Déploiement sur hébergement mutualisé<br>
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Ecoride</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo projet blog">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Plateforme de covoiturage écoresponsable</div>
                        <div class="experience-date">2025</div>
                        <div class="experience-description">
                            • Projet de fin de formation validant l’ensemble des compétences back et front<br>
                            • Stack : HTML, SCSS, JavaScript (Fetch), PHP, MySQL, JSON<br>
                            - Réalisations clés :<br>
                            • Recherche et ajout de covoiturages avec requêtes asynchrones<br>
                            • Dashboard utilisateur + interface admin/employé<br>
                            • Gestion des crédits, avis (NoSQL) et rôles utilisateurs<br>
                            - Compétences acquises :<br>
                            • Développement full-stack structuré (MVC, PDO, JS)<br>
                            • Interaction SQL/NoSQL<br>
                            • Déploiement complet sur hébergeur mutualisé
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="section-display full-text-content" id="projets">
            <div class="text-content">
                <section class="liste-blog">
                    <a href="https://trackbuild.sites-alya.fr/">
                        <article class="blog">
                            <h4>TrackBuild</h4>
                            <p>Gestionnaire de tache et de temps</p>
                            <div href="https://trackbuild.sites-alya.fr/" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="http://messagerie.sites-alya.fr/">
                        <article class="blog">
                            <h4>Méssagerie</h4>
                            <p>Création d'une méssagerie privé full-stack</p>
                            <div href="http://messagerie.sites-alya.fr/" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="http://blogweb3.sites-alya.fr/">
                        <article class="blog">
                            <h4>Blog Web3</h4>
                            <p>Création d'un blog spécialisé dans le Web3</p>
                            <div href="http://blogweb3.sites-alya.fr/" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Ecoride</h4>
                            <p>Réalisation full-stack d'une apllication de covoiturage (Déploiement prévue fin 2025)</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                </section>
            </div>
        </section>

        <section class="section-display full-text-content" id="archives">
            <div class="text-content">
                <h2 class="title">Archives & premiers projets 📁</h2>
                <p>Des projets plus anciens, simples mais formateurs. 👨‍💻</p>

                <section class="liste-blog">
                    <a href="https://jeux-de-des.sites-alya.fr/">
                        <article class="blog">
                            <h4>🎲 Jeu de dés</h4>
                            <p>Petit jeu 2 joueurs pour manipuler le DOM en JS pur. Projet d'exercice lors de l'apprentissage JavaScript.</p>
                            <div class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <!--  en rajouter d'autres ici -->
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
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=61574938434923">
                            <img src="asset/Malt_logo_pink.svg" alt="logo malt">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/pascal-reynier-75a11b326/">
                            <img src="asset/linkedin.svg" alt="logo linkedin">
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