@extends('frontend.layouts.main')
@section('firstnav')
<div class="col-md-12 py-5 d-lg-block d-none">
    <h1 class="head">Get In Touch
    <span>Have a Question? Contact Us Now!</span></h1>
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
<div class="container-fluid pb-5 cnctmain">
   <div class="container">
      <div class="row  row-eq-height">
         <div class="col-md-5 contactadd align-items-center">
            <h2>Contact Address</h2>
            <h5>Get answers to your questions from our Insurance Experts. We will also assist you all the way with your insurance application.</h5>
            <p>Speak with our Advisors anytime</p>
            <div class="col-md-12 add">
               <h5><i class="fa fa-map-marker"></i>  Address </h5>
               <p>912 Isaiah Place, Kitchener, ON, N2E0B6 </p>
            </div>
            <div class="col-md-12 add">
               <h5><i class="fa fa-phone"></i> Phone  </h5>
               <p>+1-855-500-8999,</p>
            </div>
            <div class="col-md-12 add">
               <h5><i class="fa fa-envelope"></i> Email </h5>
               <p>contact@lifeadvice.ca,</p>
            </div>
         </div>
         <div class="col-md-7 contactform" id="contact-result">
            <div id="result"></div>
            <h3>Send a Message</h3>
            <h4>Please fill the form below and submit... We will contact you.</h4>
            <form method="post" action="process_contact.php" id="contact-form">
               <div class="row">
                  <p class="col-6"><label class="">Your Name *</label><br><span><input type="text" name="fname"></span></p>
                  <p class="col-6"><label class="">Your Last Name</label><br><span><input type="text" name="lname"></span></p>
                  <p class="col-6"><label class="">Your Email *</label><br><span><input type="text" name="email"></span></p>
                  <p class="col-6"><label class="">Your Contact No *</label><br><span><input type="text" name="mobile"></span></p>
                  <p class="col-12"><label class="">Your Subject</label><br><span><input type="text" name="subject"></span></p>
                  <p class="col-12"><label class="">Your Message</label><br><span><textarea name="message"  rows="2"></textarea></span></p>
                  <p class="col-12 text-right">
                     <button type="submit" class="btn btn-lg" name="contact-submit"><i class="fa fa-send-o"></i></button>
                  </p>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
<div class="container-fluid">
   <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.706305242645!2d-80.52393728446313!3d43.40406767913069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf5f33283b73d%3A0x11d11e5af5f01ae3!2s912+Isaiah+Pl%2C+Kitchener%2C+ON+N2E+0B6%2C+Canada!5e0!3m2!1sen!2sin!4v1559567604280!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
</div>
@endsection
@section('script')
<script>
        jQuery(document).ready(function($) {
            // on focus
            $(".contactform input, .contactform textarea")
                .focus(function() {
                    $(this)
                        .parent()
                        .siblings("label")
                        .addClass("has-value");
                })
            
                // blur input fields on unfocus + if has no value
                .blur(function() {
                    var text_val = $(this).val();
                    if (text_val === "") {
                        $(this)
                            .parent()
                            .siblings("label")
                            .removeClass("has-value");
                }
            });
        });
    </script>
@endsection