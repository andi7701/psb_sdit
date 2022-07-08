<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB SDIT INSAN QUR'ANI SUMBAWA</title>

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    
    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>
    <!-- scroll top -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>
    <!-- header -->
    <header class="l-header scroll-header" id="header">
        <nav class="nav bd-container">
            <a href="/" class="nav__logo">Sdit Insan Qur'ani Sumbawa</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#enrollment" class="nav__link">Enrollment</a></li>
                    <li class="nav__item"><a href="#education" class="nav__link">Education</a></li>
                    <li class="nav__item"><a href="#facilities" class="nav__link">Fasilitas</a></li>
                    <li class="nav__item"><a href="{{ route('login') }}" class="nav__link">Login</a></li>

                    <li><i class="bx bx-toggle-left change-theme" id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>

    <!-- main -->
    <main class="l-main">

        <!-- home -->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__img">
                    <img src="{{ asset('img/landingpage/School_Isometric.png') }}" alt="">
                </div>
                <div class="home__data">
                    <h1 class="home__title">Selamat Datang Di Portal</h1>
                    <p class="home__description">SDIT Insan Qur'ani Sumbawa adalah sebuah sekolah yang berada di Jln.Lintas Kebayan RT 05 RW 11, Tepatnya di Seketeng, Kecamatan Sumbawa, Kabupaten Sumbawa Besar </p>
                    <!-- <a href="" class="button">Get Started</a> -->
                </div>
            </div>
        </section>
        <!-- end home -->

        <!-- Enrollment-->
        <section class="share section bd-container" id="enrollment">
            <div class="share__container bd-grid">
                <div class="share__data">
                    <h2 class="section-title-center">Register Now!</h2>
                    <p class="share__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, quia? Possimus minus unde tenetur, similique temporibus maxime quae dignissimos tempora quas itaque asperiores atque! Est voluptates quo fugiat earum harum? </p>
                    <a href="{{ route('register') }}" class="button">Sign Up</a>
                </div>
                <div class="share__img">
                    <img src="{{ asset('img/landingpage/Teacher_Isometric.png') }}" alt="">
                </div>
            </div>
        </section>
    </main>
    <!-- end enrollment -->

    <!-- saran -->
    <section class="send section">
        <div class="send__container bd-container bd-grid">
            <div class="send__content">
                <h2 class="section-title-center send__title">Other Information</h2>
                <p class="send__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo enim tenetur totam adipisci sapiente omnis in atque. Sunt dolore exercitationem quibusdam. Ut quidem voluptates sapiente corrupti maxime dicta, rem adipisci!</p>
                <form action="#">
                    <div class="send__direction">
                        <input type="email" placeholder="Email" class="send__input">
                        <a href="" class="button">Send</a>
                    </div>
                </form>
            </div>

            <div class="send__img">
                <img src="{{ asset('img/landingpage/Sending emails_Outline.png') }}" alt="">
            </div>
        </div>
    </section>
    <!-- endsaran -->

    <!-- footer -->
    <footer class="footer section">
        <div class="footer__container bd-container bd-grid">
            <div class="footer__content">
                <h3 class="footer__title">
                    <a href="" class="footer__logo">SDIT Insan Qur'ani Sumbawa</a>
                </h3>
                <p class="footer__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni distinctio officiis </p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Student</h3>
                <ul>
                    <li><a href="" class="footer__link">Extracurricular</a></li>
                    <li><a href="" class="footer__link">Achievements</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our School</h3>
                <ul>
                    <li><a href="" class="footer__link">About Us</a></li>
                    <li><a href="" class="footer__link">Our Mission</a></li>
                    <li><a href="" class="footer__link">Annual Activity</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social Media</h3>
                <a href="#" class="footer__social"><i class="bx bxl-facebook-circle"></i> </a>
                <a href="#" class="footer__social"><i class='bx bxl-youtube'></i></a>
                <a href="#" class="footer__social"><i class="bx bxl-instagram-alt"></i> </a>
                <br>
                <h3 class="footer__title">Contact</h3>
                <span><i class='bx bxl-whatsapp'></i> 081x-xxxx-xxxx</span>
            </div>
        </div>

        <p class="footer__copy">&#169; 2022 SDIT INSAN QUR'ANI SUMBAWA. All Right Reserved</p>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
