@extends('layouts.auto_layouts')

@section('title', 'Автосервіс - Car Services and Mechanic')

@section('link')
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/plan.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/pricing_plan/plan.js') }}"></script>
@endsection

@section('content')

<div class="wrapper">
   <div class="banner-area">
      <div class="container-area">
         <h2 class="sc-ttl-cont">Pricing plan</h2>
         <div>
            <ul class="container-nav-item">
               <li>
                  <a  class="cont-list" href="{{ route('home_auto') }}">Home</a>
               </li>
               <li  class="cont-list"><i class="fas fa-angle-right"></i></li>
               <li>
                  <a  class="cont-list">price</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
<section class="section-header">
    <div>
        <div class="section-element-title-conteiner">
            <h2 class="title-element">Price</h2>
            <!--  -->
            <!--  -->
            <h3 class="subtitle-element">System Plan</h3>
        </div>
        <div class="section-element-navbar-conteiner">
            <ul class="section-element-nav">
                <li class="element-nav-item">
                    <a id="btn-silver-plan" class="element-nav-link" href=""><strong>Silver Package</strong></a>
                </li>
                <li class="element-nav-item">
                    <a id="btn-platinum-plan" class="element-nav-link active" href=""><strong>Platinum Package</strong></a>
                </li>
                <li class="element-nav-item">
                    <a id="btn-gold-plan" class="element-nav-link" href=""><strong>Gold Package</strong></a>
                </li>
            </ul>
        </div>
        <div>
        <div id="card-silver" class="section-card-list-pricing">
            <div class="section-card-list-pricing-plan-content">
                <div  class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-snowflake"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Basic Plan </h4>
                    <!--  -->
                    <!--  -->
                    <h6>58$</h6>
                    <!--  -->
                    <h5><span>$</span>12.99<span>/m</span></h5>
                    <!--  -->
                    <div class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Conventional Oil Change <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Visual Brake Inspection <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Transmission Fluid Service <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Fuel System Cleaning <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Battery Check <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Tire Rotation <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card" type="submit">Buy now</button>
                </div>
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-regular fa-money-bill-1"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Advance Plan </h4>
                    <!--  -->
                    <!--  -->
                    <h6>80$</h6>
                    <!--  -->
                    <h5><span>$</span>29.99<span>/m</span></h5>
                    <!--  -->
                    <div  class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Conventional Oil Change <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Visual Brake Inspection <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Transmission Fluid Service <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Fuel System Cleaning <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Battery Check <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Tire Rotation <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card" type="submit">Buy now</button>
                </div>
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-star"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Premium Plan</h4>
                    <!--  -->
                    <!--  -->
                    <h6>120$</h6>
                    <!--  -->
                    <h5><span>$</span>63.99<span>/m</span></h5>
                    <!--  -->
                    <div  class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Conventional Oil Change <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Visual Brake Inspection <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Transmission Fluid Service <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Fuel System Cleaning <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Battery Check <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Tire Rotation <i class="fa-solid fa-check"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card"  type="submit">Buy now</button>
                </div>
            </div>
        </div>
            <!--  -->
        <div id="card-platinum" class="section-card-list-pricing show">
           <div class="section-card-list-pricing-plan-content">
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-fire"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Basic Plan </h4>
                    <!--  -->
                    <!--  -->
                    <h6>125$</h6>
                    <!--  -->
                    <h5><span>$</span>80.99<span>/m</span></h5>
                    <!--  -->
                    <div class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Belts and Hoses <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Suspension and Shock Absorbers <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Transmission Fluid Service <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Fuel System Cleaning <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Exhaust System <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Interior Components <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card" type="submit">Buy now</button>
                </div>
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-bolt"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Advance Plan </h4>
                    <!--  -->
                    <!--  -->
                    <h6>250$</h6>
                    <!--  -->
                    <h5><span>$</span>200.99<span>/m</span></h5>
                    <!--  -->
                    <div  class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Belts and Hoses <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Suspension and Shock Absorbers <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Transmission Fluid Service <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Fuel System Cleaning <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Exhaust System <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Interior Components <i class="fa-solid fa-check"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card" type="submit">Buy now</button>
                </div>
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-star"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Premium Plan</h4>
                    <!--  -->
                    <!--  -->
                    <h6>300$</h6>
                    <!--  -->
                    <h5><span>$</span>299.99<span>/m</span></h5>
                    <!--  -->
                    <div  class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Belts and Hoses <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Suspension and Shock Absorbers <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Transmission Fluid Service <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Fuel System Cleaning <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Exhaust System <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Interior Components <i class="fa-solid fa-check"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card"  type="submit">Buy now</button>
                </div>
           </div>
        </div>
            <!--  -->
        <div id="card-gold" class="section-card-list-pricing">
            <div class="section-card-list-pricing-plan-content">
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Basic Plan </h4>
                    <!--  -->
                    <!--  -->
                    <h6>400$</h6>
                    <!--  -->
                    <h5><span>$</span>359.99<span>/m</span></h5>
                    <!--  -->
                    <div class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Conventional Oil Change <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Horn and Warning Lights <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Suspension Components <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Exhaust Smoke <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Power Steering <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Radiator and Cooling System <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card" type="submit">Buy now</button>
                </div>
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-joint"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Advance Plan </h4>
                    <!--  -->
                    <!--  -->
                    <h6>500$</h6>
                    <!--  -->
                    <h5><span>$</span>498.99<span>/m</span></h5>
                    <!--  -->
                    <div  class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Conventional Oil Change <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Horn and Warning Lights <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Suspension Components <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Exhaust Smoke  <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Power Steering <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                            <li>
                                <a href="">Radiator and Cooling System <i class="fa-regular fa-circle-xmark"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card" type="submit">Buy now</button>
                </div>
                <div class="card-items-pricing">
                    <div class="with-pricing-icon"><i class="fa-solid fa-star"></i></div>
                    <!--  -->
                    <!--  -->
                    <h4>Premium Plan</h4>
                    <!--  -->
                    <!--  -->
                    <h6>800$</h6>
                    <!--  -->
                    <h5><span>$</span>700.99<span>/m</span></h5>
                    <!--  -->
                    <div  class="conditions-part">
                        <ul>
                            <li>
                                <a href="">Conventional Oil Change <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Horn and Warning Lights <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Suspension Components <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Exhaust Smoke <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Power Steering <i class="fa-solid fa-check"></i></a>
                            </li>
                            <li>
                                <a href="">Radiator and Cooling System <i class="fa-solid fa-check"></i></a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn-pricing-card"  type="submit">Buy now</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<aside>
<div>
    <div class="aside-container-main-info">
        <div class="aside-content-info">
            <i class="fa-solid fa-map-location-dot fa-icon-info" aria-hidden="true"></i>
            <div>
            <h3 class="aside-container-title">ADDRESS:</h3>
                <p class="aside-container-info">Mulatol Pakar Matha, Dhaka Bus<br> Stand Road, 5400</p>
            </div>
        </div>
        <div class="aside-content-info">
        <i class="fa-solid fa-phone-volume  fa-icon-info" aria-hidden="true"></i>
        <div>
            <h3 class="aside-container-title">PHONES:</h3>
                <p class="aside-container-info"><a style="color:#fff" href="tel:0950660959">+380 95 066 09 59</a><a style="color:#fff; margin-left:10px;" href="tel:0950650385">+380 95 065 03 85</a> <br><a style="color:#fff" href="tel:0950564505">+380 95 056 46 05</a></p>
            </div>
        </div>
        <div class="aside-content-info">
        <i class="fa-solid fa-calendar-check  fa-icon-info" aria-hidden="true"></i>
        <div>
            <h3 class="aside-container-title">WORKING TIME:</h3>
                <p class="aside-container-info">Monday–Saturday: 08:00–18:00;<br> Friday - Closed</p>
            </div>
        </div>
    </div>
</div>
</aside>
@endsection