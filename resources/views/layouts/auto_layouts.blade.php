<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--end-->
    <!--Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.1.9/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--end-->
    <!--Link css-->
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="icon" href="./assets/images/circle.png">
    <!--end-->
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--end-->
    <!--Link js-->
    <script src="https://kit.fontawesome.com/46a432ef36.js" crossorigin="anonymous"></script>
    <!--end-->
    <title>@yield('title')</title>
</head>
<body>
    <div class="App">
    <div class="preload" data-preload>
            <div class="preloader-content">
            <p class="text">Loading</p>
            <img class="circle" src="./assets/images/circle.png" alt="Car brake">
            </div>
    </div>
        <div class="advertising-line">
            <div class="row">
                    <ul class="top-left">
                        <li>
                        <i style="color:#fff;" class="fa-solid fa-house"></i>
                            <a href="https://google.com.ua/maps/place/%D0%9A%D0%B8%D1%97%D0%B2,+02000/@50.4018377,30.2208891,11z/data=!3m1!4b1!4m12!1m5!3m4!2zNTDCsDQ1JzMzLjciTiAyNcKwMTYnMzguNyJF!8m2!3d50.759347!4d25.277409!3m5!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4503596!4d30.5245025!16zL20vMDJzbjM0?entry=ttu&g_ep=EgoyMDI0MDgyMC4xIKXMDSoASAFQAw%3D%3D">Car Service Floor UK</a>
                        </li>
                        <li>
                        <i style="color:#fff;" class="fa-solid fa-phone"></i>
                            <a tabindex="6" href="tel:0950660959">+380 95 066 09 59</a>
                        </li>
                        <li>
                        <i style="color:#fff;" class="fa-solid fa-envelope"></i>
                            <a tabindex="7" href="mailto:autorepaire@gmail.com">autorepaire@gmail.com</a>
                        </li>
                    </ul>
                    <ul class="top-right">
                        <li>
                            <a tabindex="8" title="Facebook-f" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a tabindex="9" title="X-twitter" href="#"><i class="fab fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a tabindex="10" title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a tabindex="11" title="Google-plus-g" href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a tabindex="12" title="Dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="container">
            <div class="navbar-content">
                <div class="main-logo"><h2 class="logo-slogan">Автосервіс</h2></div>
                    <div class="nav-bar-collapse">
                        <ul class="nav-content">
                            <li class="nav-item">
                                <a class="nav-link" tabindex="1" href="#">Головна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" tabindex="2" href="#about">Новини</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" tabindex="3" href="#support">Допомога</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" tabindex="4" href="#client-say">Відгуки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" tabindex="5" href="#contacts us">Контакти</a>
                            </li>
                            <li class="nav-item">
                                <span class="nav-link lk-content" href="">Cлужба продаж
                                    <div style="padding-top:5px;"><a href="tel:0950660959" class="nav-link-number">+380 95 066 09 59</a></div>
                                </span>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
<!-- ----------- -->
 @yield('content')
<footer>
<div class="footer-container">
   <div class="copy">
      <h3 class="copy-title">Skills</h3>
      <div class="copy-list">
         <span class="copy-link">Features</span>
         <span class="copy-link">Catalog</span>
      </div>
      <div>
         <h3 class="copy-title">Community</h3>
         <div class="copy-list">
            <span class="copy-link">Ableton Live Projects</span>
            <span class="copy-link">FL Studio Projects</span>
            <span class="copy-link">Garageband Projects</span>
            <span class="copy-link">Tiesto's Secrets</span>
         </div>
      </div>
   </div>
   <div class="copy">
      <h3 class="copy-title">Partners</h3>
      <div class="copy-list">
         <span class="copy-link">BM Parts</span>
         <span class="copy-link">ProfiGas</span>
         <span class="copy-link">Logic Pro X Projects</span>
         <span class="copy-link">Garageband Projects</span>
         <span class="copy-link">Prints</span>
         <span class="copy-link">Garageband Projects</span>
      </div>
   </div>
   <div class="copy">
      <h3 class="copy-title">Our Service</h3>
      <div class="copy-list">
         <span class="copy-link">Belts and Hoses</span>
         <span class="copy-link">Engine Diagnostics</span>
         <span class="copy-link">Super, Oil and Filters</span>
         <span class="copy-link">Air Conditioning</span>
         <span class="copy-link">Brake Repair</span>
      </div>
   </div>
   <div class="copy">
      <h3 class="copy-title">Contact us</h3>
      <div class="copy-list">
         <a href="tel:0950660959"><span class="copy-link">Tel: +380 95 066 09 59</span></a>
         <a href="tel:0950650385"><span class="copy-link">Telegram: +380 95 065 03 85</span></a>
         <a href="mailto:autorepaire@gmail.com"><span class="copy-link">autorepaire@gmail.com</span></a>
         <a href="https://google.com.ua/maps/place/%D0%9A%D0%B8%D1%97%D0%B2,+02000/@50.4018377,30.2208891,11z/data=!3m1!4b1!4m12!1m5!3m4!2zNTDCsDQ1JzMzLjciTiAyNcKwMTYnMzguNyJF!8m2!3d50.759347!4d25.277409!3m5!1s0x40d4cf4ee15a4505:0x764931d2170146fe!8m2!3d50.4503596!4d30.5245025!16zL20vMDJzbjM0?entry=ttu&g_ep=EgoyMDI0MDgyMC4xIKXMDSoASAFQAw%3D%3D"><span class="copy-link">50°45'33.7"N 25°16'38.7"E</span></a>
         <span class="copy-link">Producing Future Beats</span>
      </div>
   </div>
</div>
<aside style=" display: flex; align-items: center; justify-content: space-around; ">
   <div class="aside-copyright">
      <div>
         <p class="aside-copyright-text">
            Copyright © hackery all rights reserve
         </p>
      </div>
      <div>
         <ul class="aside-copyright-list">
            <li>
               <a href="#">Term & condition</a>
            </li>
            <li>
               <a href="#">Privacy Policy</a>
            </li>
            <li>
               <a href="#">Contact Us</a>
            </li>
         </ul>
      </div>
   </div>
</aside>
</footer>
</div>
<script>AOS.init();</script>
<script src="./assets/js/index.js"></script>
</body>
</html>
