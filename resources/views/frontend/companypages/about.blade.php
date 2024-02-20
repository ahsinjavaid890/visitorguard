@extends('frontend.layouts.main')
@section('firstnav')
<div class="col-md-12 py-5 d-lg-block d-none">
    <h1 class="head">About Visitor Guard
    <span>What Makes Visitor Guard Extra Smart?</span></h1>
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
<div class="container pt-5">
   <h2 class="text-center">What We Offer</h2>
   <div class="row my-5 py-3 align-items-center">
      <div class="col-md-4 offers text-md-right text-left">
         <img src="{{ url('public/front/visitorguard/images/insure2.png') }}" alt="life-multi-insurance-choices">
         <h6 style="font-size: 22px;">Multi Insurance Choices</h6>
         <p>We deliver quality insurance policies to individuals and family's in Canada and design insurance policies to fit your needs.</p>
         <br>
         <br>
         <img src="{{ url('public/front/visitorguard/images/insure1.png') }}" alt="covered-life-insurance">
         <h6 style="font-size: 22px;">We get You Covered </h6>
         <p>We commit to provide customers with the best insurance value and service available for complete family and their needs like car, home etc.</p>
      </div>
      <div class="col-md-4 text-center">
         <img src="{{ url('public/front/visitorguard/images/insurance.png') }}" alt="Insurance">
      </div>
      <div class="col-md-4 offers text-md-left">
         <img src="{{ url('public/front/visitorguard/images/insure3.png') }}" alt="honest-guide-for-life-insurance">
         <h6 style="font-size: 22px;">An Honest Guide</h6>
         <p>Experience the quality service and attentions in detail. We deliver exceptional insurance services to individuals and family’s in Canada.</p>
         <br>
         <br>
         <img src="{{ url('public/front/visitorguard/images/insure4.png') }}" alt="perfect-life-insurance-policy-plans">
         <h6 style="font-size: 22px;">Perfect Policy Plans</h6>
         <p>Get a comprehensive rundown of insurance plans that what’s covered to... from what coverage amounts.</p>
      </div>
   </div>
   <div class="row pb-0 d-none  mb-5 align-items-top">
      <div class="col-md-4">
         <div class="about">
            <i class="fa fa-check-square-o"></i>
            <h2> Our Vision</h2>
            <p>We commit to being one of the premier independent insurance Broker in Canada. Our commitment is to provide customers with the best insurance value and service available.</p>
         </div>
      </div>
      <div class="col-md-4">
         <div class="about">
            <i class="fa fa-lightbulb-o"></i>
            <h2> Our knowledge</h2>
            <p>Our knowledge and experience in the industry to deliver quality insurance policies to individuals and family’s in Canada. Over the years of collective industry experience in insurance policies designed to fit your needs.</p>
         </div>
      </div>
      <div class="col-md-4">
         <div class="about">
            <i class="fa fa-briefcase"></i>
            <h2> Our Experience</h2>
            <p>You'll experience the quality service and attention to detail that you can only find with an independent insurance broker like us. We have been delivering exceptional insurance services to individuals and family’s in Canada.</p>
         </div>
      </div>
   </div>
</div>
<div class="container bg">
   <div class="row align-items-center">
      <div class="col-md-6 pl-0 pr-0"><img src="{{ url('public/front/visitorguard/images/about.jpg') }}" alt="life-insurance-inc-plans"></div>
      <div class="col-md-6">
         <div class="col-md-12">
            <h3 style="font-size: 30px;">Best of our Plans</h3>
            <br>
            <p>Travel insurance and medical insurance is something that we are extremely passionate about. These types of insurance products provide support to help individuals save millions of dollars every year. By spending just a few extra dollars on the cost of your trip or with our help and research we can identify the best products that can be used to protect you in an emergency or make sure that you are compliant with visa standards.</p>
         </div>
      </div>
   </div>
</div>
<div class="container bg">
   <div class="row align-items-center">
      <div class="col-md-6">
         <div class="col-md-12">
            <h3 style="font-size: 30px;">Visitor Guard Online Support</h3>
            <br>
            <p>Lifesadvice will be providing ongoing support and helpful articles that will provide our readers with all of the latest info on insurance products and requirements for travel and immigration. Through our resources and our skilled staff members, we can make insurance products more accessible and affordable than ever before.</p>
         </div>
      </div>
      <div class="col-md-6 pl-0 pr-0"><img src="{{ url('public/front/visitorguard/images/about3.jpg') }}" alt="life-advice-online-support"></div>
   </div>
</div>
<div class="container-fluid about-clients py-5">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-sm-6">
            <h3>1450</h3>
            <h4>Happy Client</h4>
         </div>
         <div class="col-md-3 col-sm-6">
            <h3>35</h3>
            <h4>Insurance Products </h4>
         </div>
         <div class="col-md-3 col-sm-6">
            <h3>10</h3>
            <h4>Years of Experience</h4>
         </div>
         <div class="col-md-3 col-sm-6">
            <h3>196</h3>
            <h4>Professional Agents</h4>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid trust">
   <div class="container">
      <div class="row py-5 align-items-center">
         <div class="col-md-8 offset-md-2">
            <h2 class="py-2">You Can Trust Us</h2>
            <p>
               Lifesadvice sets to be your number one resource in Canada for a variety of single trip insurance, multi trip insurance, students insurance, visitor insurance and super visa insurance. We want to help Canadians and travelers from around the world to recognize the best insurance products that can deliver the greatest value in their market. With a wide range of insurance products that can suit almost any budget.<br>
               <br>
               we can work with the top providers as well as handle the process of researching the insurance industry data line the best products as well as the top types of insurance that you may want to consider for your specific situation.
            </p>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="row align-items-center">
      <div class="col-md-6">
         <h3 style="font-size: 30px;">Our Plenge</h3>
         <p class="pt-4">Lifesadvice will be providing ongoing support and helpful articles that will provide our readers with all of the latest info on insurance products and requirements for travel and immigration. Through our resources and our skilled staff members, we can make insurance products more accessible and affordable than ever before.</p>
         <br>
         <p>Travel insurance and medical insurance is something that we are extremely passionate about. These types of insurance products provide support to help individuals save millions of dollars every year. By spending just a few extra dollars on the cost of your trip or with our help and research we can identify the best products that can be used to protect you in an emergency or make sure that you are compliant with visa standards.</p>
      </div>
      <div class="col-md-6 text-center text-md-right"><img src="{{ url('public/front/visitorguard/images/lifeadvice-policy.png') }}" alt="lifeadvice-insurance-policy"></div>
   </div>
</div>
<div class="container-fluid my-0 bg bg-success">
   <div class="container py-4">
      <h2 class="text-white text-center"><i class="fa fa-quote-left"></i></h2>
      <h5 class="text-white text-center col-md-6 offset-md-3" style=" font-size: 29px;">Like to learn more about our company and what we can offer through our products and services.</h5>
      <p class="text-center"><a href="#" class="btn btn-light btn-lg">GET A QUOTE</a></p>
   </div>
</div>             
@endsection
@section('script')
   
@endsection