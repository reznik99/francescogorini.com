<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francesco Gorini</title>
    <meta name="description" content="Hi!, I am Francesco Gorini, and this is my portfolio website">
    <meta name="author" content="Francesco Gorini">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p class="form_message"></p>
    <div class='nav'>
        <div class="scrollborderbottom"></div>
        <div class="nav_background"></div>
        <h1 class="nav_header">Francesco Gorini</h1>
        <div class="menu_button">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
    <div class="side_menu">
        <ul class="side_menu_list">
            <li class="side_menu_list_item"><a class="side_menu_list_item_link" href="#home">Home</a></li>
            <li class="side_menu_list_item"><a class="side_menu_list_item_link" href="#about">About</a></li>
            <li class="side_menu_list_item"><a class="side_menu_list_item_link" href="#header_projects_divider">Projects</a></li>
            <li class="side_menu_list_item"><a class="side_menu_list_item_link" href="#contact">Contact</a></li>
        </ul>
    </div>
    <div class="home">
        <div class="intro">
            <h1 class="intro_h1">Hi, I am
                <div class="highlighted_text">Francesco Gorini</div>,<br>
                A Software Developer
            </h1>
            <a class="home_about_me_btn" href="#header_projects_divider">Projects <i class="fas fa-arrow-right rotate"></i></a>
        </div>
    </div>
    <div class="header_projects_divider">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="75" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0 100, 50 0, 100, 100" style="fill:#1b242f;"></polygon>
        </svg>
    </div>
    <div class="content_container projects">
        <div class="projects_container">
            <h1 class="projects_title">Projects</h1>
            <ul class="projects_list">
                <li>
                    <div class="projects_list_link_container">
                        <a class="projects_list_link" href="https://github.com/reznik99/C-OpenGL-3D-Engine" target="_blank" rel="noopener">
                            <div>
                                <p>C++, OpenGL, GLSL.</p>
                            </div>
                        </a>
                    </div>
                    <article>
                        <h1>GEngine</h1>
                        <p>3D engine built using C++ and the OpenGL Standard.
                            Some features i plan to implement: Bump/Normal mapping, PCF(Percentage Closer
                            Filtering/Smooth shadows), CSM(Cascading Shadow Maps), LOD(Level Of Detail), Object
                            Collision</p><br>
                        <ul> <b>Features Implemented</b><br>
                            <li>Multiplayer (30 tick server)</li>
                            <li>Shadows</li>
                            <li>Water (Reflection & Refraction)</li>
                            <li>Phong Shading</li>
                            <li>Terrain Collision</li>
                        </ul>
                        <div class="links">
                            <a href="https://github.com/reznik99/C-OpenGL-3D-Engine" target="_blank" rel="noopener"><i class="fas fa-desktop"></i></a>
                            <a href="https://github.com/reznik99/C-OpenGL-3D-Engine"><i class="fas fa-code"></i></a>
                        </div>
                        <p><br>Tags: <i class="devicon-cplusplus-plain colored fa-2x"></i>,

                            <picture class="profile_pic">
                                <source type="image/webp" srcset="resources/opengl.webp">
                                <img src="resources/opengl.png" alt="Opengl logo" loading="lazy">
                            </picture>
                            , GLSL. <br>
                            (Same engine w/o multiplayer also in <i class="devicon-java-plain-wordmark colored fa-2x"></i> and LWJGL)
                        </p>
                    </article>
                </li>
                <li>
                    <div class="projects_list_link_container">
                        <a class="projects_list_link" href="http://167.172.213.48/" target="_blank" rel="noopener">
                            <div>
                                <p>Front-end: <i class="fab fa-html5"></i>, <i class="fab fa-css3"></i> and <i class="fab fa-js"></i> with JQuery framework<br>Back-end: PHP and MYSQL</p>
                            </div>
                        </a>
                    </div>
                    <article>
                        <h1>Gorini Drive</h1>
                        <p>Made this webapp for personal use to store/backup data, Works on account by account basis.
                            Each user has their own storage, also has `shared/public` storage which are files that can
                            be
                            seen/downloaded by other users.
                            Max file upload is 20MB because i lack HDD space. Was hosted on RaspberryPi until ISP
                            blocked public IP. Now hosted on DigitalOcean VPS</p>
                        <div class="links">
                            <a href="http://167.172.213.48/login.php" target="_blank" rel="noopener"><i class="fas fa-desktop"></i></a>
                            <a href="https://github.com/reznik99/GDrive" target="_blank" rel="noopener"><i class="fas fa-code"></i></a>
                        </div>
                        <p><br>
                            Front-end: <i class="devicon-html5-plain colored fa-2x"></i></i>, <i class="devicon-css3-plain colored fa-2x"></i>, <i class="devicon-nodejs-plain colored fa-2x"></i> and <i class="devicon-jquery-plain-wordmark colored fa-2x"></i>.<br>
                            Back-end: <i class="devicon-php-plain colored fa-2x"></i>, <i class="devicon-mysql-plain colored fa-2x"></i>, <i class="devicon-apache-line-wordmark fa-2x"></i>, RaspberryPi
                        </p>
                    </article>
                </li>
                <li>
                    <div class="projects_list_link_container">
                        <a class="projects_list_link" href="https://louisehaywardbooks.com" target="_blank" rel="noopener">
                            <div>
                                <p>Front-end: HTML, CSS and JS with JQuery framework<br>Back-end: PHP and MYSQL</p>
                            </div>
                        </a>
                    </div>
                    <article>
                        <h1>LouiseHaywardBooks</h1>
                        <p>'Made this website to sell a book, allow users to signup to news letter for updates
                            and pricings on book.'</p>
                        <div class="links">
                            <a href="https://louisehaywardbooks.com" target="_blank" rel="noopener"><i class="fas fa-desktop"></i></a>
                            <a class="unclickable"><i class="fas fa-code"></i></a>
                        </div>
                        <p><br>
                            Front-end: <i class="devicon-html5-plain colored fa-2x"></i></i>, <i class="devicon-css3-plain colored fa-2x"></i>, <i class="devicon-nodejs-plain colored fa-2x"></i> and <i class="devicon-jquery-plain-wordmark colored fa-2x"></i>.<br>
                            Back-end: <i class="devicon-php-plain colored fa-2x"></i>, <i class="devicon-mysql-plain colored fa-2x"></i>, <i class="devicon-apache-line-wordmark fa-2x"></i>
                        </p>
                    </article>
                </li>
                <li>
                    <div class="projects_list_link_container">
                        <a class="projects_list_link" href="mainframe/index.php" target="_blank" rel="noopener">
                            <div>
                                <p>Front-end: HTML, CSS and JS with JQuery framework<br>Back-end: PHP and MySQL</p>
                            </div>
                        </a>
                    </div>
                    <article>
                        <h1>Mainframe</h1>
                        <p>Made this webapp retro style public chat, no authentication, just free for all chat.
                            Also hosted on RaspberryPi</p>
                        <div class="links">
                            <a href="mainframe/index.php" target="_blank" rel="noopener"><i class="fas fa-desktop"></i></a>
                            <a href="https://github.com/reznik99/mainframe" target="_blank" rel="noopener"><i class="fas fa-code"></i></a>
                        </div>
                        <p><br>
                            Front-end: <i class="devicon-html5-plain colored fa-2x"></i></i>, <i class="devicon-css3-plain colored fa-2x"></i>, <i class="devicon-nodejs-plain colored fa-2x"></i>.<br>
                            Back-end: <i class="devicon-php-plain colored fa-2x"></i>, <i class="devicon-mysql-plain colored fa-2x"></i>
                        </p>
                    </article>
                </li>
            </ul>
        </div>
    </div>
    <div class="content_container about">
        <div class="about_wrap">
            <div class="about_container">
                <div class="about_profile_container">
                    <picture class="profile_pic">
                        <source type="image/webp" srcset="resources/profile.webp">
                        <img src="resources/profile.jpg" alt="Profile picture" class="profile_pic" loading="lazy" />
                    </picture>
                </div>
                <div class="about_me">
                    <h1>About me</h1>
                    <p>I graduated from <a href="https://www.wgtn.ac.nz/" target="_blank" rel="noopener">Victoria
                            University of Wellington</a>
                        with a <b>Bachelor in Computer Science</b>. I am fluent in both English and Italian. <br><br>
                        My hobbies are:</p>
                    <ul class="about_me_list">
                        <li>Programming, Networking and Electronics</li>
                        <li>Physics and Engineering</li>
                        <li>Fitness / Calisthenics</li>
                        <li>Driving / Travelling</li>
                        <li>Videogames</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="angled_prefooter">
        <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
            <polygon points="0 100, 0 0, 50 100, 100 0, 100 100" fill="#1b242f"></polygon>
        </svg>
    </div>
    <footer class="contact">
        <h1>Contact</h1>
        <p class="under_h1_desc">If you have any enquiries, please feel free to contact me below.</p>
        <form class="send_message" method="post">
            <input type="text" name="name" placeholder="Name" required />
            <input type="email" name="email" placeholder="Email" required />
            <textarea type="text" name="message" placeholder="Message" required></textarea>
            <div class="g-recaptcha" data-sitekey="your-client-key"></div>
            <input class="submit_button" type="submit" value="SUBMIT" />
        </form>
        <p class="credits">(&copy) 2018 Francesco Gorini | Design</p>
        <p class="phone"></p>
        <ul class="social_list">
            <li><a target="_blank" rel="noopener" href="mailto:goras.francesco@gmail.com"><i class="fas fa-envelope fa-2x"></i></a></li>
            <li><a target="_blank" rel="noopener" href="https://linkedin.com/in/francesco-gorini-b334861a6/"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
            <li><a target="_blank" rel="noopener" href="https://github.com/reznik99"><i class="fab fa-github fa-2x"></i></a></li>
        </ul>
    </footer>

    <!-- IMPORTS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">

    <!-- Load CSS async (not crucial to inital page render) -->
    <link rel="preload" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Load JS async (not crucial to inital page render) -->
    <script src="https://www.google.com/recaptcha/api.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
    <script src="script.js" defer></script>

    <!-- Fall back for CSS async loading -->
    <noscript>
        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    </noscript>
</body>

</html>