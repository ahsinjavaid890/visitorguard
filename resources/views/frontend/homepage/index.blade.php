@extends('frontend.layouts.main')
@section('tittle')
<title>Life Insurance Ontario – Get Tips, Online Quotes for Life Insurance</title>
@endsection
@section('firstnav')
<div class="col-md-12 py-5 d-lg-block d-none">
   <h1>Life insurance made easy</h1>
   <h2>
      <a href="" class="typewrite" data-period="2000" data-type='[  "Pay Off Any Debts", " Add Financial Security ", "Plan a Sweet Home", "Make your Kids Future Bright" ]'>
      <span class="wrap"></span>
      </a>
   </h2>
   <a href="{{ url('get-instent-quote') }}" class="btn btn-success">Get Instant Quote</a>
</div>
@endsection
@section('secondnav')
<div class="row">
   <div id="demo" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ url('public/front/visitorguard/images/slide1.jpg') }}" alt="Los Angeles">
         </div>
         <div class="carousel-item">
            <img src="{{ url('public/front/visitorguard/images/slide2.jpg') }}" alt="Chicago">
         </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span></a>
      <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span></a>
   </div>
</div>
@endsection
@section('content')
<div class="container-fluid bg bg-grey">
   <div class="container">
      <div class="row">
         <div class="col-md-12 heroSlider-fixed">
            <div class="overlay">
            </div>
            <!-- Slider -->
            <div class="slider clients">
               <div><img src="{{ url('public/front/visitorguard/images/logo1.png') }}" alt="logo1" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo2.png') }}" alt="logo2" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo3.png') }}" alt="logo3" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo4.png') }}" alt="logo4" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo5.png') }}" alt="logo5" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo6.png') }}" alt="logo6" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo7.png') }}" alt="logo7" /></div>
               <div><img src="{{ url('public/front/visitorguard/images/logo8.png') }}" alt="logo8" /></div>
            </div>
            <!-- control arrows -->
            <div class="prev"><span class="fa fa-chevron-left" aria-hidden="true"></span></div>
            <div class="next"><span class="fa fa-chevron-right" aria-hidden="true"></span></div>
         </div>
      </div>
   </div>
</div>
<div class="container py-5">
   <h2 class="text-center" style="font-size: 42px;font-weight: bold;">Simple. Online. Transparent. </h2>
   <h4 style="text-align: center;">Buying insurance has never been this simple (and enjoyable)!</h4>
   <div class="row services">
      <div class="col-lg-3 col-sm-6">
         <div class="bg bg-white shadow-lg">
            <img src="{{ url('public/front/visitorguard/images/icon-life.png') }}" class="Life Insurance" alt="Life-insurance-icon-life"> 
            <h4>Life Insurance</h4>
            <p>Whether you want help covering final expenses or building a legacy, protect your family or business with term or permanent insurance.</p>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
         <div class="bg bg-white shadow-lg">
            <img src="{{ url('public/front/visitorguard/images/icon-illness.png') }}" class="Life Insurance" alt="Life-insurance-icon-illness"> 
            <h4>Critical Illness Insurance</h4>
            <p>Critical illness insurance help to pay the costs associated with life-altering illnesses. If you become sick with an illness.</p>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
         <div class="bg bg-white shadow-lg">
            <img src="{{ url('public/front/visitorguard/images/icon-disability.png') }}" class="Life Insurance" alt="Life-insurance-icon-disability"> 
            <h4>Disability Insurance</h4>
            <p>We protect you in more ways than you’d think. We’ll include many coverages that do more than protect your physical structure.</p>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
         <div class="bg bg-white shadow-lg">
            <img src="{{ url('public/front/visitorguard/images/icon-health.png') }}" class="Life Insurance" alt="Life-insurance-icon-health"> 
            <h4>Health Insurance</h4>
            <p>Health Coverage Insurance is the easy, affordable way to protect you and your family from the growing list of health care.</p>
         </div>
      </div>
   </div>
</div>
<div class="container py-5 experts">
   <div class="row align-items-center">
      <div class="col-md-7 pt-4">
         <h2 style="font-size: 42px;font-weight: bold;">What Our Experts Are Saying?</h2>
         <h5>Independent insurance Broker in Ontario, Canada</h5>
         <p>We want to help Canadians and travelers from around the world to recognize the best insurance products that can deliver the greatest value in their market. With a wide range of insurance products that can suit almost any budget.</p>
         <div class="testi mt-5">
            Through the handy tips available on licensed vice as well as the newest insurance research that we are performing, you can be covered for almost any type of eventuality while you are traveling or while you are accepting visitors from around the world.<br>
            <h4>Life Advice</h4>
         </div>
      </div>
      <div class="col-md-5">
         <img src="{{ url('public/front/visitorguard/images/expert.jpg') }}" alt="Life-insurance-icon-expert">
      </div>
   </div>
</div>
<div class="container-fluid quickhelp py-5">
   <div class="container">
      <h2 style ="font-size: 42px;font-weight: bold;" class="text-center">Everything You Wanted Insurance To Be</h2>
      <h6 style="font-size: 22px;text-align: center;">Complex, slow, manual insurance process</h6>
      <div class="row">
         <div class="col-md-4">
            <div class="help">
               <img src="{{ url('public/front/visitorguard/images/calculate.png') }}" alt="Life-insurance-icon-calculate"> 
               <h4>Calculate Insurane Rates Online</h4>
               <p>Enter Your Persoanl Details to get Insurance prices online</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="help">
               <img src="{{ url('public/front/visitorguard/images/quick.png') }}" alt="Life-insurance-icon-quick"> 
               <h4>Quick and Fast Services</h4>
               <p>Accessible and affordable insurance products than ever before</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="help">
               <img src="{{ url('public/front/visitorguard/images/covrage.png') }}" alt="Best-life-insurance-products-for-canadian-and-traveler"> 
               <h4>Comprehensive and Caring</h4>
               <p>Exceptional insurance services to individuals and family’s in Canada.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container py-3 advice">
   <h2 style="font-size: 42px;font-weight: bold;" class="text-center pb-3">How Policy Advisor Works?</h2>
   <div class="row align-items-center">
      <div class="col-md-8"><img src="{{ url('public/front/visitorguard/images/insurance.gif') }}" alt="How-life-insurance-advisor-works"></div>
      <div class="col-md-4">
         <div class="advic">
            <h3><span>1</span> We find the perfect policy </h3>
            We ask a few questions, crunch some numbers and compare the top insurers. We offer the lowest rates available specifically for you.
         </div>
         <div class="advic">
            <h3><span>2</span> 24/7 Friendly Support</h3>
            Ongoing support and helpful articles to provide our readers all the latest info on insurance products/ requirements for travel and immigration. 
         </div>
         <div class="advic">
            <h3><span>3</span> Affordable Prices</h3>
            Our Best Insurance products provide support to help individuals save millions of dollars every year, By spending just a few extra dollars on the cost.
         </div>
      </div>
   </div>
</div>
<div class="container-fluid contact mt-4 pt-5">
   <p>&nbsp;</p>
   <div class="col-md-6 offset-md-3 pt-3 pb-5 contact-txt text-center">
      <h2>We've got that covered too. </h2>
      <h4>Talk to one of our dedicated insurance advisors on phone or online.</h4>
      <a href="javascript:void(0)" class="btn btn-lg btn-dark">Speak With Advisor</a>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
//made by vipul mirajkar thevipulm.appspot.com

var TxtType = function(el, toRotate, period) {

        this.toRotate = toRotate;

        this.el = el;

        this.loopNum = 0;

        this.period = parseInt(period, 10) || 2000;

        this.txt = '';

        this.tick();

        this.isDeleting = false;

    };



    TxtType.prototype.tick = function() {

        var i = this.loopNum % this.toRotate.length;

        var fullTxt = this.toRotate[i];



        if (this.isDeleting) {

        this.txt = fullTxt.substring(0, this.txt.length - 1);

        } else {

        this.txt = fullTxt.substring(0, this.txt.length + 1);

        }



        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';



        var that = this;

        var delta = 200 - Math.random() * 100;



        if (this.isDeleting) { delta /= 2; }



        if (!this.isDeleting && this.txt === fullTxt) {

        delta = this.period;

        this.isDeleting = true;

        } else if (this.isDeleting && this.txt === '') {

        this.isDeleting = false;

        this.loopNum++;

        delta = 500;

        }



        setTimeout(function() {

        that.tick();

        }, delta);

    };



    window.onload = function() {

        var elements = document.getElementsByClassName('typewrite');

        for (var i=0; i<elements.length; i++) {

            var toRotate = elements[i].getAttribute('data-type');

            var period = elements[i].getAttribute('data-period');

            if (toRotate) {

              new TxtType(elements[i], JSON.parse(toRotate), period);

            }

        }

        // INJECT CSS

        var css = document.createElement("style");

        css.type = "text/css";

        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";

        document.body.appendChild(css);

    };



</script>

<script>

$('.clients').slick({

 dots: false,

   prevArrow: $('.prev'),

   nextArrow: $('.next'),

  infinite: true,

  speed: 300,

  slidesToShow: 6,

  slidesToScroll: 6,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 5,

        slidesToScroll: 5,

        infinite: true,

        dots: false

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 3,

        slidesToScroll: 3

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": " Corporation ",
  "name": "Lifeadvice Inc",
  "alternateName": "Insurance Company",
  "url": "https://lifeadvice.ca/",
  "logo": "https://lifeadvice.ca/images/brand.png",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Life Advice Insurance Inc,912 Isaiah Place,",
    "addressLocality": "Kitchener",
    "addressRegion": "ON",
    "postalCode": "N2E0B6",
    "addressCountry": "CA"
  } 
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-855-500-8999",
    "contactType": "customer service",
    "contactOption": " TollFree ",
    "areaServed": "CA",
    "availableLanguage": "en"
  }
}
</script>
@endsection