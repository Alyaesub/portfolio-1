<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/css/main.css">
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
                            <a href="#accueil">Accueil</a>
                        </li>
                        <li class="nav-link">
                            <a href="#a-propos">A propos</a>
                        </li>
                        <li class="nav-link">
                            <a href="#Competences">Compétences</a>
                        </li>
                        <li class="nav-link">
                            <a href="#diplome">Diplomes</a>
                        </li>
                        <li class="nav-link">
                            <a href="#experiences">Experiences</a>
                        </li>
                        <li class="nav-link">
                            <a href="#projets">Projets</a>
                        </li>
                        <li class="nav-link">
                            <a href="#contact">Contacts</a>
                        </li>
                        <li class="nav-link">
                            <a href="#blog">Blogs</a>
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
                <p class="paragraphe">Passionné par le code et la création, je développe des applications web et mobile pensées pour les utilisateurs, avec rigueur et simplicité.<br> Je vous accompagne de l’idée au déploiement de votre application web. <br> Développeur web passionné, j’ai à cœur de concevoir des applications à la fois fonctionnelles, intuitives et durables.<br>
                    Formé aux technologies du web comme HTML, CSS (SCSS), JavaScript, PHP et SQL, je suis également à l’aise avec les architectures modernes et les bases de données SQL, NoSQL, MongoDB et MySQL et Docker.<br>
                    Mon approche est centrée sur la qualité du code, la clarté de la structure, et l’expérience utilisateur. Curieux et autonome, je suis toujours en veille pour apprendre de nouveaux outils ou langages, comme Python et Solidity, afin de rester à la pointe et proposer des solutions adaptées aux besoins et de m'ouvrir sur d'autres horizons.<br>
                    Je développe des projets complets mêlant front-end, back-end, API, et hébergement, tout en documentant rigoureusement chaque étape pour garantir leur maintenabilité. </p>
                <div class="action-div">
                    <a href="#contact">
                        <button class="btn btn-primary">Contact</button>
                    </a>
                    <a href="asset/cv-pascal-2023.png" download="cv-pascal-2023.png"><!-- mettre ajour le cv -->
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

        <section class="section-display left-text-content" id="Competences">
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

        <section class="section-display full-text-content" id="diplome">
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
                <h2 class="title">Expériences
                    <picture class="emoji-gif">
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/2728/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/2728/512.gif" alt="✨" width="32" height="32">
                    </picture>
                </h2>
            </div>
            <div class="experiences">
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Nom de l'entreprise ou du projet</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo du projet ou de l'entreprise">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Poste occuper ou qualificatife de l'emploie</div>
                        <div class="experience-date">XXXX-XXXX</div>
                        <div class="experience-description">
                            description du Poste Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur,a. Ipsum unde sequi maxime dolores. sit amet consectetur adipisicing elit.
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Nom de l'entreprise ou du projet</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo du projet ou de l'entreprise">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Poste occuper ou qualificatife de l'emploie</div>
                        <div class="experience-date">XXXX-XXXX</div>
                        <div class="experience-description">
                            description du Poste Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur,a. Ipsum unde sequi maxime dolores. sit amet consectetur adipisicing elit.
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <div class="experience-header">
                        <h3 class="experience-title">Nom de l'entreprise ou du projet</h3>
                        <img class="experience-logo" src="asset/freelance.jpg" alt="logo du projet ou de l'entreprise">
                    </div>
                    <div class="experience-content">
                        <div class="experience-subtitle">Poste occuper ou qualificatife de l'emploie</div>
                        <div class="experience-date">XXXX-XXXX</div>
                        <div class="experience-description">
                            description du Poste Lorem ipsum dolor, Lorem ipsum dolor sit amet consectetur,a. Ipsum unde sequi maxime dolores. sit amet consectetur adipisicing elit.
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
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                            <div href="google.com" class="link-blog"><i class="fa-solid fa-arrow-right"></i></div>
                        </article>
                    </a>
                    <a href="https://www.google.com/">
                        <article class="blog">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
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