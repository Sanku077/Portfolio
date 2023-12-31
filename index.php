<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon1.png">
    <link href="css/styles.min.css" rel="stylesheet">
    <link href="css/responsive.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- ===== CSS BOOTSTRAP ===== -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/main.css">

    <title>SM Code</title>
</head>

<body>
    <div id="progressbar"></div>
    <!--THis is Navbar-->
    <header class="header">
        <a href="index.php" class="header__logo">Sa<span>nk</span>et</a>

        <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">

                <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                <div class="nav__perfil">
                    <div>
                        <a href="index.php" class="nav__name">Sa<span>nk</span>et</a>
                        <span class="nav__profesion">Web developer</span>

                    </div>
                </div>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skilll-scroll" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__social">
                    <a href="https://www.linkedin.com/in/sanket-mangle-5892851b4" class="nav__social-icon">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    <a href="https://github.com/Sanku077" class="nav__social-icon">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!--this is Navbar-->

    <!--Home Section start-->

    <header id="Home">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="info" data-aos="slide-right" data-aos-delay="20">
                            <h1>Hii,this is<br><span>Sanket.</span></h1>
                            <h1>I'm <span class="type"></span></h1>
                            <h6>I am Web Developer from Maharashtra, India. I'm Intermidate in web site
                                designing and building, also I am good at wordpress. I love to talk with you about our
                                unique.
                            </h6>
                            <a href="mailto:ssmangle1234@gmail.com?subject = Feedback&body = we want to hire you!!"><button>Hire
                                    me</button></a>
                            <a href="resume/Sanket CV-1.pdf" download=""><button type="button" class="Download">
                                    Download
                                    CV</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!--Home Section End-->



    <!------About Section is Start at Here---->
    <section id="about">
        <div class="container">
            <div class="About">
                <h1 class="About-Main-title" data-aos="slide-left">Sanket Mangle <span>resume</span></h1>
                <center data-aos="fade-up">
                    <div class="Circular"></div>
                </center>
                <!-- Cards Starts-->
                <div class="cssCards">
                    <!--First Cards-->
                    <div class="card" data-aos="fade-right">
                        <div class="content">
                            <div class="contentBx">
                                <center>
                                    <h2>Web Development</h2>
                                    <h3><span>Intermediate</span></h3>
                                </center>
                            </div>
                        </div>
                        <center>
                            <p class="sci">
                                I am in Web Developement from last 12 Month. I have Developed Many Websites have much
                                Expirence.I have developed Website such as <span>rudraInvestment</span> and <span>Raaina
                                    bakery</span> and <span>Mykart</span> by using Wordpress.
                            </p>
                            <a href="mailto:ssmangle1234@gmail.com?subject = Feedback&body = we want to hire you!!"><button class=" btn_Cards">Hire me</button></a>
                        </center>
                    </div>
                    <!--First End-->
                    <!--Second Cards-->
                    <div class="card" data-aos="fade-up">
                        <div class="content">
                            <div class="contentBx">
                                <center>
                                    <h2>Designer</h2>
                                    <h3><span>Advanced</span></h3>
                                </center>
                            </div>
                        </div>
                        <center>
                            <p class="sci">
                                I am in Web Designing from last 2 Years.I have developed So many Web and App Design
                                using
                                <span>Adobe XD</span>. As last 2 years i am using it I have much Experience of it And i
                                can
                                give best design to You.
                            </p>
                            <a href="mailto:ssmangle1234@gmail.com?subject = Feedback&body = we want to hire you!!"><button class=" btn_Cards">Hire me</button></a>
                        </center>
                    </div>
                    <!--Second End-->
                    <!--Third-->
                    <div class="card" data-aos="fade-left">
                        <div class="content">
                            <div class="contentBx">
                                <center>
                                    <h2>App Development</h2>
                                    <h3><span>Beginner</span></h3>
                                </center>
                            </div>
                        </div>
                        <center>
                            <p class="sci">
                                I am in App Developement from last 8 Month. I am developing my Portfolio Website.I am
                                good
                                in java. So I use <span>Android Studio</span> and <span>Java</span> for App
                                Developement.I
                                have Started <span>Koltin</span> For App development.
                            </p>
                            <a href="mailto:ssmangle1234@gmail.com?subject = Feedback&body = we want to hire you!!"><button class=" btn_Cards">Hire me</button></a>
                        </center>
                    </div>
                </div>
                <!--Third End-->
                <!-- Cards Ends-->
            </div>
        </div>
    </section>
    <!------About Section is End at Here---->





    <!------Skill Section is Start at Here---->
    <section class="skill" id="skilll-scroll">
        <div class="inner">
            <center>
                <div class="Skill-Main-Title" data-aos="slide-right">
                    <h1>Programming <span>Skills</span></h1>
                </div>
            </center>
            <div class="grid-container" id="con-skill">
                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/html.png" class="skill-icon">
                        </div>
                        <h3>HTML</h3>
                    </div>
                    <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.
                    </p>
                </div>

                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/css.png" class="skill-icon">
                        </div>
                        <h3>CSS</h3>
                    </div>
                    <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
                    </p>
                </div>

                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/javaScript.png" class="skill-icon">
                        </div>
                        <h3>JAVASCRIPT</h3>
                    </div>
                    <p>JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.
                    </p>
                </div>

                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/php.png" class="skill-icon">
                        </div>
                        <h3>PHP</h3>
                    </div>
                    <p>PHP is a general-purpose scripting language especially suited to web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.The PHP reference implementation is now produced by The PHP Group.PHP originally stood for Personal Home Page.
                    </p>
                </div>

                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/java.png" class="skill-icon">
                        </div>
                        <h3>JAVA</h3>
                    </div>
                    <p>Java is a class-based, object-oriented programming language. It is a general-purpose programming language intended to let application developers write once, run anywhere, meaning that compiled Java code can run on all platforms.
                    </p>
                </div>

                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/python.png" class="skill-icon">
                        </div>
                        <h3>PYTHON</h3>
                    </div>
                    <p>Python is an interpreted high-level general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation. Its language constructs as well as its object-oriented approach.
                    </p>
                </div>
                <!--
                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/ajax.png" class="skill-icon">
                        </div>
                        <h3>AJAX</h3>
                    </div>
                    <p>Ajax is a set of web development techniques using many web technologies on the client-side to create asynchronous web applications. With Ajax, web applications can send and retrieve data from a server asynchronously without interfering.
                    </p>
                </div>
                    -->
                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/mysql.png" class="skill-icon">
                        </div>
                        <h3>MYSQL</h3>
                    </div>
                    <p>MySQL is an open-source relational database management system. Its name is a combination of "My", the name of co-founder Michael Widenius's daughter, and "SQL", the abbreviation for Structured Query Language.
                    </p>
                </div>
                <!--
                <div class="skill-box" data-aos="fade-up">
                    <div class="skill-title">
                        <div class="img">
                            <img src="img/android-studio.png" class="skill-icon">
                        </div>
                        <h3>ANDROID STUDIO</h3>
                    </div>
                    <p>Android Studio is the official integrated development environment (IDE) for Google's Android operating system, built on JetBrains' IntelliJ IDEA software and designed specifically for Android development.It is available for download on Windows, macOS and Linux.
                    </p>
                </div>
            -->
            </div>
        </div>
    </section>
    <!------Skill Section is End at Here---->
    <!--Work Gallary section Start-->
    <section class="work-gallary" id="work">
        <section id="portfolio">
            <div class="portfolio-background">
                <h1 class="Work-Main-TItle" data-aos="slide-left">My <span>Works</span></h1>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 portfolioWrapper">
                            <div class="section-title" id="work" data-aos="slide-right">
                                <div class="portfolio-filter">
                                    <ul>
                                        <li class="show-button filter active" data-filter="all">Show All</li>
                                        <li class="show-button filter" data-filter=".category-1">Blogs</li>
                                        <li class="show-button filter" data-filter=".category-2">Customers</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div id="mix-container">
                                    <div class="col-xs-12 col-lg-3 col-sm-12 mix" data-aos="fade-up">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-1">
                                                <img src="img/img1.png" alt="">
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Raaina Bakery</h3>
                                                        <span>Shop</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div id="popup-1" class="mfp-hide popup-box">
                                                <img src="img/img1.png" alt="">
                                                <div>
                                                    <h3>Raaina Bakery</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                        Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-3 col-sm-12 mix category-2" data-aos="fade-up">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-2">
                                                <img src="img/img2.png" alt="">
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Rudra Investment</h3>
                                                        <span>Consultancy</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div id="popup-2" class="mfp-hide popup-box">
                                                <img src="img/img2.png" alt="">
                                                <div>
                                                    <h3>Rudra Investment</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                        Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-3 col-sm-12 mix " data-aos="fade-up">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-3">
                                                <img src="img/img3.png" alt="">
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>EKart</h3>
                                                        <span>E-commerce</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div id="popup-3" class="mfp-hide popup-box">
                                                <img src="img/img3.png" alt="">
                                                <div>
                                                    <h3>EKart</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                        Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-3 col-sm-12 mix category-1" data-aos="fade-up">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-4">
                                                <img src="img/img4.png" alt="">
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Sanket Code</h3>
                                                        <span>Portfolio</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div id="popup-4" class="mfp-hide popup-box">
                                                <img src="img/img4.png" alt="">
                                                <div>
                                                    <h3>Sanket Code</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                        Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-3 col-sm-12 mix category-2" data-aos="fade-up">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-5">
                                                <img src="img/img1.png" alt="">
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Raaina Bakery</h3>
                                                        <span>Shop</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div id="popup-5" class="mfp-hide popup-box">
                                                <img src="img/img1.png" alt="">
                                                <div>
                                                    <h3>Raaina Bakery</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                        Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-3 col-sm-12 mix category-1" data-aos="fade-up">
                                        <div class="imageWrapper">
                                            <a class="lightbox" href="#popup-6">
                                                <img src="img/img2.png" alt="">
                                                <div class="imageHover">
                                                    <div>
                                                        <h3>Rudra Investment</h3>
                                                        <span>Consultancy</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div id="popup-6" class="mfp-hide popup-box">
                                                <img src="img/img2.png" alt="">
                                                <div>
                                                    <h3>Rudra Investment</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                        penatibus et magnis dis parturient montes, nascetur ridiculus
                                                        mus.
                                                        Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--Work Gallary section End-->
    <!--Contact section start here-->
    <section class="Contact" id="contact">
        <span class="contact1-form-title" data-aos="slide-right">
            Get in <span>touch</span>
        </span>
        <div class="contact1">
            <div class="container-contact1">
                <div class="address-mail" data-aos="fade-up">
                    <h3><i class="fas fa-map-marker-alt"></i> Address</h3>
                    <p>IUDP colony,Near Mahakali Mandir Washim-444505</p>
                    <h3><i class="fas fa-mobile"></i> Lets Talk</h3>
                    <p><a href="tel:9370567328">+91 9370567328</a><br><a href="tel:7620818197">+91 7517929028</a></p>
                    <h3><i class="fas fa-envelope"></i> General support</h3>
                    <p><a href="mailto:ssmangle1234@gmail.com">ssmangle1234@gmail.com</a> </p>
                </div>
                <form method="POST" action="includes/contactUs.inc.php" class="contact1-form validate-form" autocomplete="off" data-aos="fade-up">
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="name" placeholder="Name" required="">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="email" placeholder="Email" required="">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <input class="input1" type="text" name="subject" placeholder="Subject" required="">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input">
                        <textarea class="input1" name="message" placeholder="Message" required=""></textarea>
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn" type="submit" name="submit">Send</button>

                    </div>
                    <center class="error">
                        <?php
                        if (isset($_GET['error'])) {

                            if ($_GET['error'] == 'none') {
                                echo "<p>Your response submitted successfully</p>";
                            }
                        }
                        ?>
                    </center>
                </form>
            </div>
        </div>
        <!--Contact section end here-->
        <!--Footer section start here-->
        <footer>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-3 col-xs-3">
                        <div class="box">
                            <h3>About us</h3>
                            <p>I am Sanket Mangle Student of computer science and engineering in Marathwada institute of
                                technology Aurangabad.</p>
                            <button class="Footer-btn">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <div class="box">
                            <h3>Contact Links</h3>
                            <ul>
                                <li>
                                    <a href="#Home">Home</a>
                                </li>
                                <li>
                                    <a href="#about">About us</a>
                                </li>
                                <li>
                                    <a href="#skilll-scroll">Skills</a>
                                </li>
                                <li>
                                    <a href="#work">Works</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/sanket.mangle.7">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/sanket_mangle/">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:ssmangle1234@gmail.com">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/_.sanket_.007?igshid=14jh83vj3u2or">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <div class="box instagram-api">
                            <h3>Work Place</h3>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746.5777808760117!2d77.13854821474713!3d20.10992918650319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd0e3b108ec1ffd%3A0xa09c60cac88040f5!2sGajanan%20Maharaj%20Temple%2CIudp%20Washim!5e0!3m2!1sen!2sin!4v1609657032833!5m2!1sen!2sin" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="copyright">
            <div>
                Copyright © 2021 .All rights reserved by <a href="#">Sanket Code</a>.
            </div>
        </footer>
    </section>




    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <!--CSS FOR TYPE JS-->
    <script src="js/typed.js"></script>
    <script>
        var typed = new Typed('.type', {
            strings: ['Developer.', 'Designer.', 'Student.'],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    <!--===== CDN FOR DATA AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--CDN JQUERY CLOUD FLARE-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--CDN FOR JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--===== MAIN JS =====-->
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/theme-plugins.min.js"></script>
    <script src="js/scripts.min.js"></script>

</html>
</body>

</html>