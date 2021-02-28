<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/landingpage/LogoSDBBaru.png') }}" type="image/gif" sizes="16x16">
    <title>PPDB Sekolah Darma Bangsa</title>

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- scroll top -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>
    <!-- header -->
    <header class="l-header scroll-header" id="header">
        <nav class="nav bd-container">
            <a href="/" class="nav__logo">Sekolah Darma Bangsa</a> 
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#enrollment" class="nav__link">Enrollment</a></li>
                    <li class="nav__item"><a href="#education" class="nav__link">Education</a></li>
                    <li class="nav__item"><a href="#facilities" class="nav__link">Facilities</a></li>
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
                    <h1 class="home__title">Welcome DBer's</h1>
                    <p class="home__description">Sekolah Darma Bangsa is a “Non-Secular” National Plus School of International insightful in the Lampung Province, conducting Early Education (Kindergarten) Primary Education (elementary school) and Secondary Education (junior high school and high school) </p>
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

    <!--  education-->
        <section class="accessory section bd-container" id="education">
            <h2 class="section-title">Education</h2>
            <div class="decoration__container bd-grid">
                <div class="decoration__data">
                    <img src="{{ asset('img/landingpage/Screenshot_7.png') }}" alt="" class="decoration__img">
                    <h3 class="decoration__title">Kindergarten</h3>
                    <span class="education__category">Usnul Umi, S.Pd</span>
                    <br> 
                    <span class="education__category">Principal</span>
                </div>
                <div class="decoration__data">
                    <img src="{{ asset('img/landingpage/Screenshot_8.png') }}" alt="" class="decoration__img">
                    <h3 class="decoration__title">Elementary School</h3>
                    <span class="education__category">Dewi Mutiarasari, S.Pd</span>
                    <br> 
                    <span class="education__category">Principal</span>
                </div>
                <div class="decoration__data">
                    <img src="{{ asset('img/landingpage/_Arif Fahrudin.jpg') }}" alt="" class="decoration__img">
                    <h3 class="decoration__title">Junior High School</h3>
                    <span class="education__category">Arif Fahrudin, M.Pd</span>
                    <br> 
                    <span class="education__category">Principal</span>
                </div>
                <div class="decoration__data">
                    <img src="{{ asset('img/landingpage/_Iwan Sutanto.jpg') }}" alt="" class="decoration__img">
                    <h3 class="decoration__title">Senior High School</h3>
                    <span class="education__category">Iwan Sutanto, M.Pd</span>
                    <br> 
                    <span class="education__category">Principal</span>
                </div>
            </div>
        </section>
    <!-- end education -->

    <!-- facilities -->
    .   <section class="accessory section bd-container" id="facilities">
            <h2 class="section-title">Facilities</h2>
                <div class="accessory__container bd-grid">
                    <div class="accessory__content">
                        <img src="{{ asset('img/landingpage/Screenshot_1.png') }}" alt="" class="accessory__img">
                        <h3 class="accessory__title">Swimming Pool</h3>
                        <span class="accessory__category">Outdoor Facilities</span>
                        <a href="#" class="button accessory__button"><i class="bx bx-heart"></i></a>
                    </div>
                
                    <div class="accessory__content">
                        <img src="{{ asset('img/landingpage/Screenshot_2.png') }}" alt="" class="accessory__img">
                        <h3 class="accessory__title">Studio Music</h3>
                        <span class="accessory__category">Indoor Facilities</span>
                        <a href="#" class="button accessory__button"><i class="bx bx-heart"></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="{{ asset('img/landingpage/Screenshot_3.png') }}" alt="" class="accessory__img">
                        <h3 class="accessory__title">Canteen</h3>
                        <span class="accessory__category">Outdoor Facilities</span>
                        <a href="#" class="button accessory__button"><i class="bx bx-heart"></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="{{ asset('img/landingpage/Screenshot_4.png') }}" alt="" class="accessory__img">
                        <h3 class="accessory__title">Sports field</h3>
                        <span class="accessory__category">Outdoor Facilities</span>
                        <a href="#" class="button accessory__button"><i class="bx bx-heart"></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="{{ asset('img/landingpage/Screenshot_5.png') }}" alt="" class="accessory__img">
                        <h3 class="accessory__title">Lab Computer</h3>
                        <span class="accessory__category">Indoor Facilities</span>
                        <a href="#" class="button accessory__button"><i class="bx bx-heart"></i></a>
                    </div>

                    <div class="accessory__content">
                        <img src="{{ asset('img/landingpage/Screenshot_6.png') }}" alt="" class="accessory__img">
                        <h3 class="accessory__title">Library</h3>
                        <span class="accessory__category">Indoor Facilities</span>
                        <a href="#" class="button accessory__button"><i class="bx bx-heart"></i></a>
                    </div>
                    </div>
        </section>
    <!-- end facilities -->

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
                    <a href="" class="footer__logo">Sekolah Darma Bangsa</a>
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
                <span><i class='bx bxl-whatsapp'></i> 0812-7666-9879</span>
            </div>
        </div>

        <p class="footer__copy">&#169; 2021 Sekolah Darma Bangsa. All Right Reserved</p>
    </footer>
    
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>