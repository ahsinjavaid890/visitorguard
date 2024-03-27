@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorguard')->first();
@endphp
<script id="cookieinfo" src="{{ url('cookieinfoscript.com/js/cookieinfo.min.js') }}"></script>
<footer>
   <div class="container-fluid footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <img style="background-color: white;border-radius: 10px;" src="{{ url('public/images') }}/{{ $settings->header_logo }}" alt="Visitor Guard"><br>
               <br>
               <p>Life Insurance Insurance has been a trusted name in insurance for more than 10 years. Today, we proudly serve insurance provincewide.</p>
            </div>
            <div class="col-lg-3 col-md-6">
               <h4>Get Insurance</h4>
               <ul>
                  <li><a href="{{ url('travel-insurance') }}">Travel Insurance</a></li>
                  <li><a href="{{ url('super-visa-insurance') }}">Super Visa Canada</a></li>
                  <li><a href="{{ url('visitor-insurance') }}">Visitor Insurance</a></li>
                  <li><a href="{{ url('student-insurance') }}">Student Insurance</a></li>
               </ul>
            </div>
            <div class="col-lg-3 col-md-6">
               <h4>Useful Links</h4>
               <ul>
                  <li><a href="{{ url('') }}/">Home</a></li>
                  <li><a href="{{ url('aboutus') }}">About Visitor Guard</a></li>
                  <li><a href="{{ url('faq') }}">FAQ</a></li>
                  <li><a href="{{ url('blogs') }}">Blogs</a></li>
                  <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                  <li><a href="{{ url('contactus') }}">Contact Us</a></li>
               </ul>
            </div>
            <div class="col-lg-3 col-md-6">
               <h4>Contact Us</h4>
               <p><i class="fa fa-phone"></i> {{ $settings->site_phonenumber }}</p>
               <p><i class="fa fa-envelope"></i> {{ $settings->site_email }}</p>
               <p><i class="fa fa-map-marker"></i> {{ $settings->site_address }}</p>
            </div>
            <div class="col-md-12 copy">
               <div class="row">
                  <div class="col-md-6 text-md-left text-center">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
                  <div class="col-md-6 text-md-right text-center">
                     Copyright © All Rights Reserved. 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>