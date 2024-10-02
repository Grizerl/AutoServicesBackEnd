@extends('layouts.auto_layouts') <!-- Base layout -->

@section('title', 'Автосервіс - Car Services and Mechanic') <!-- Page title -->

@section('content') <!-- Main content -->
<aside>
    <div class="aside-container"> 
        <div class="aside-content"> 
            <div class="swiper-1"> <!-- Swiper for slides -->
                <div class="swiper-wrapper"> 
                    <!-- First slide -->
                    <div class="swiper-slide"> 
                        <div class="back-img-slide-1"> 
                            <div class="slide-1-content"> 
                                <h2 class="slide-1-title">Technicians<br>for service</h2>
                                <p class="slide-1-text">Perspicis unde omne iste natus error sit voluptatem acntium<br>
                                doloremque laudanum totam</p>
                                <a class="slide-1-btn" href="#contacts">Book An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- Second slide -->
                    <div class="swiper-slide"> 
                        <div class="back-img-slide-2"> 
                            <div class="slide-2-content"> 
                                <h2 class="slide-2-title">Best mechanical<br>for service</h2>
                                <p class="slide-2-text">Perspicis unde omne iste natus error sit voluptatem acntium<br>
                                doloremque laudanum totam</p>
                                <a class="slide-2-btn" href="{{route('vision')}}">More Information +</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-prev"></div> 
                <div class="swiper-button-next"></div> 
            </div>
        </div>
    </div>
</aside>

<section id="about"> <!-- About section -->
    <div class="section-about-card-content"> 
        <div class="card-list"> 
            <!-- Appointment Card -->
            <div class="card"> 
                <div><i class="fa-solid fa-car-rear"></i></div> 
                <h2>Appointment</h2>
                <p class="card-p">All One-time purchase of in the amount <br> more.</p>
                <div class="card-btn-active">
                    <div class="card-pseudo-btn"><a href="#contacts">Booking Now</a></div>
                </div>
            </div>
            <!-- Service Packages Card -->
            <div class="card"> 
                <div><i class="fa-solid fa-gear"></i></div> 
                <h2>Service Packages</h2>
                <p class="card-p">All One-time purchase of in the amount<br> more.</p>
                <div class="card-btn-active">
                    <div class="card-pseudo-btn"><a href="{{route('offer')}}">Offer Now</a></div>
                </div>
            </div>
            <!-- Find A Repair Card -->
            <div class="card"> 
                <div><i class="fa-solid fa-screwdriver-wrench"></i></div> 
                <h2>Find A Repair</h2>
                <p class="card-p">All One-time purchase of in the amount <br> more.</p>
                <div class="card-btn-active">
                    <div class="card-pseudo-btn"><a href="{{route('contacts')}}">Contact Us</a></div>
                </div>
            </div>
        </div>
    </div>
    
    <aside data-aos="fade-up"> <!-- Aside section with animation -->
        <div class="aside-container-section-card">
            <div style="width: 40%;">
                <span class="aside-subtitle">About the company</span>
                @foreach ($post as $posts) 
                    <h1 class="aside-title">{!! str_replace('To', 'To<br>', e($posts->title)) !!}</h1>
                    <p class="aside-text">{{ $posts['content'] }}</p>
                @endforeach
                <div>
                    <a href="{{route('history')}}" class="aside-btn animation-btn"><span>About More </span></a>
                </div>
            </div>
            <div>
                <img class="img-aside-one" src="/assets/images/circle-one.jpg" alt="a man who cuts a car">
                <img class="img-aside-two" src="/assets/images/circle-two.jpg" alt="tools">
            </div>
        </div>
    </aside>
</section>

<section id="support"> <!-- Support section -->
   <div class="section-support-container">
      <div class="section-support-content">
         <div class="section-support-content-title">
            <h2 class="section-support-title">OUR SUPPORT</h2>
            <h3 class="section-support-subtitle">Our Provided Service</h3>
         </div>
         <div data-aos="fade-up" class="card-support-list">
            <div class="card-support">
               <i class="fa-solid fa-screwdriver-wrench"></i>
               <h2>Repair & Change</h2>
               <p class="card-p cd-p">One-time purchase info the amount more international friendly doctors</p>
            </div>
            <div class="card-support">
               <i class="fa-regular fa-compass"></i>
               <h2>Laser cutting of metal</h2>
               <p class="card-p cd-p">One-time purchase info the amount more international friendly doctors</p>
            </div>
            <div class="card-support">
               <i class="fa-solid fa-car-rear"></i>
               <h2>Confirm For Services</h2>
               <p class="card-p cd-p">One-time purchase info the amount more international friendly doctors</p>
            </div>
         </div>
         <div data-aos="fade-up" class="card-support-list cd-lt-sup">
            <div class="card-support">
               <i class="fa-solid fa-hammer"></i>
               <h2>Warranty on Service</h2>
               <p class="card-p cd-p">One-time purchase info the amount more international friendly doctors</p>
            </div>
            <div class="card-support">
               <i class="fa-solid fa-gears"></i>
               <h2>Free Diagnosis</h2>
               <p class="card-p cd-p">One-time purchase info the amount more international friendly doctors</p>
            </div>
            <div class="card-support">
               <i class="fa-solid fa-life-ring"></i>
               <h2>Lifetime Warranty</h2>
               <p class="card-p cd-p">One-time purchase info the amount more international friendly doctors</p>
            </div>
         </div>
      </div>
   </div>
</section>

<section> <!-- Advantages section -->
   <div>
      <div class="section-advantages-conteiner">
         <div>
            <h1 class="section-advantages-title">OUR ADVANTAGES</h1>
         </div>
         <div class="section-advantages-card-content">
            <div data-aos="fade-right" class="section-advantages-card-list">
               <div><i class="fa-solid fa-headset fa-i" aria-hidden="true"></i></div>
               <div>
                  <h3 class="section-advantages-card-title">QUALITY SUPPORT</h3>
                  <p class="section-advantages-card-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
               </div>
            </div>
            <div data-aos="fade-left" class="section-advantages-card-list sc-cd-lt-tw">
               <div><i class="fa-solid fa-gears fa-i" aria-hidden="true"></i></div>
               <div>
                  <h3 class="section-advantages-card-title">SERVICE VARIETY</h3>
                  <p class="section-advantages-card-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
               </div>
            </div>
         </div>
         <div class="section-advantages-card-content">
            <div data-aos="fade-right" class="section-advantages-card-list sn-cd-lt">
               <div><i class="fa-solid fa-life-ring fa-i" aria-hidden="true"></i></div>
               <div>
                  <h3 class="section-advantages-card-title">LIFETIME WARRANTY</h3>
                  <p class="section-advantages-card-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
               </div>
            </div>
            <div data-aos="fade-left" class="section-advantages-card-list sn-cd-lt">
               <div><i class="fa-solid fa-car-rear fa-i" aria-hidden="true"></i></div>
               <div>
                  <h3 class="section-advantages-card-title">CAR MAKES</h3>
                  <p class="section-advantages-card-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
               </div>
            </div>
         </div>
         <a class="section-advantages-card-btn sc-cd-btn" href="{{route('history')}}">ADVANTAGES MORE</a>
      </div>
   </div>
</section>

<section data-aos="fade-up" id="client-say"> <!-- Client testimonials section -->
   <div class="section-client-container">
      <div class="section-client-content">
         <h2 class="section-client-title">Hackery</h2>
         <h3 class="section-client-subtitle">Our Client Says</h3>
         <p class="section-client-text">
            Quality auto repair services. Vehicle owners in the Derrick, MD area should be well aware of the Dynamic automotive brand of service. We strive to go above and beyond for our customers.
         </p>
      </div>
   </div>
   <div class="swiper mySwiper"> <!-- Swiper for client testimonials -->
      <div class="swiper-wrapper">
         @foreach ($client as $item)
         <div class="swiper-slide sr-r">
            <div class="swiper-slide-content">
               <div class="slider-client-content">
                  <img id="swiper-img-box" src="./assets/images/hackery-user.png" alt="User Male Icon">
                  <div>
                     <h6 class="swiper-name-box">{{ $item['name'] }}</h6>
                     <span class="swiper-role-box">{{ $item['role'] }}</span>
                  </div>
               </div>
               <p class="swiper-text-box">{{ $item['commentars'] }}</p>
               <div class="star-container">
                  <h5 class="swiper-date-box">{{ $item['formatted_date'] }}</h5>
                  <ul class="star-content">
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                  </ul>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>

<section style="margin-top: 10vh;"> <!-- Before and after image slider -->
   <div class="swiper-2">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <div>
               <img style="width: 100%;" src="./assets/images/before.jpg" alt="Car before">
            </div>
         </div>
         <div class="swiper-slide">
            <div>
               <img style="width: 100%;" src="./assets/images/after.jpg" alt="Car after">
            </div>
         </div>
      </div>
      <div>
         <button class="swiper-button-prev swiper-button-prev-2">Before</button>
      </div>
      <div>
         <button class="swiper-button-next swiper-button-next-2">After</button>
      </div>
   </div>
</section>

<section data-aos="fade-up"> <!-- Team members section -->
   <div class="section-member-container">
      <h3 class="section-member-title">Our Talent Member</h3>
      <div class="swiper mySwiper">
         <div class="swiper-wrapper">
            @foreach ($members as $member)
            <div class="swiper-slide sr-r">
               <img class="member-img" src="{{$member['img']}}" alt="">
               <h3>{{$member['name']}}</h3>
               <span class="section-member-role">{{$member['role']}}</span>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>

<section id="contacts"> <!-- Contact form section -->
   <div class="section-contact-container">
      <div class="section-contact-content">
         <div class="">
            <img style="width: 80%;" src="./assets/images/Contact.png" alt="Car Mercedes-Benz">
         </div>
         <div data-aos="fade-up-left" class="section-contact-container-form">
            <h1 class="section-contact-container-title">Contact us</h1>
            <h2 class="section-contact-container-subtitle">Get In Touch</h2>
            <form action="{{route('repair.store')}}" method="post" novalidate>
               @csrf

               <input name="name" type="text" placeholder="Your name*">
               @if($errors->has('name'))
               <div style="color: red; font-size: large;" class="alert alert-danger">{{$errors->first('name')}}</div>
               @endif

               <input name="phone" type="tel" placeholder="Your phone number*">
               @if($errors->has('phone'))
               <div style="color: red; font-size: large;" class="alert alert-danger">{{$errors->first('phone')}}</div>
               @endif

               <input name="car" type="text" placeholder="Your auto*">
               @if($errors->has('car'))
               <div style="color: red; font-size: large;" class="alert alert-danger">{{$errors->first('car')}}</div>
               @endif

               <input name="comment" class="section-contact-form-comment" type="text" placeholder="Your problem*">
               @if($errors->has('comment'))
               <div style="color: red; font-size: large;" class="alert alert-danger">{{$errors->first('comment')}}</div>
               @endif

               <button type="submit" class="section-contact-form-btn" value="Send Request">Send Request</button>
            </form>
         </div>
      </div>
   </div>
</section>

<section> <!-- Contact info section -->
   <div>
      <div class="aside-container-main-info">
         <div class="aside-content-info">
            <i class="fa-solid fa-map-location-dot fa-icon-info"></i>
            <div>
               <h3 class="aside-container-title">ADDRESS:</h3>
               <p class="aside-container-info">Mulatol Pakar Matha, Dhaka Bus<br> Stand Road, 5400</p>
            </div>
         </div>
         <div class="aside-content-info">
            <i class="fa-solid fa-phone-volume fa-icon-info"></i>
            <div>
               <h3 class="aside-container-title">PHONES:</h3>
               <p class="aside-container-info">
                  <a style="color:#fff" href="tel:0950660959">+380 95 066 09 59</a>
                  <a style="color:#fff; margin-left:10px;" href="tel:0950650385">+380 95 065 03 85</a>
                  <br>
                  <a style="color:#fff" href="tel:0950564505">+380 95 056 46 05</a>
               </p>
            </div>
         </div>
         <div class="aside-content-info">
            <i class="fa-solid fa-calendar-check fa-icon-info"></i>
            <div>
               <h3 class="aside-container-title">WORKING TIME:</h3>
               <p class="aside-container-info">Monday–Saturday: 08:00–18:00;<br> Friday - Closed</p>
            </div>
         </div>
      </div>
   </div>
   @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif
</section>
@endsection
