@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorguard')->first();
@endphp
<style type="text/css">
   @media screen and (max-width: 991px)
   {
      .navbar-dark .navbar-toggler {
       background: #425E80;
      }
      .newlogowidth{
         width: 200px !important;
      }
      .headlogo .navbar-dark{
             right: 10px;
            top: 30px;
      }
      .headlogo .navbar-collapse {
          position: absolute;
          width: 260px;
          top: 55px;
          text-align: left;
          right: 0px;
          background: rgb(255, 255, 255) none repeat scroll 0% 0%;
          padding: 15px;
          box-shadow: 0px 0px 4px #666;
          z-index: 100000;
      }
   }
.newlogowidth{
      width: 270px;
   }
</style>
<header>
   <div class="container-fluid mainhead">
      <div class="container py-2 headlogo">
         <div class="row">
            <a class="newlogowidth" href="{{ url('') }}">
               <img src="{{ url('public/images') }}/{{ $settings->header_logo }}" alt="brand">
            </a>
            <nav class="navbar navbar-expand-lg navbar-dark" id="main_navbar">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a href="{{ url('aboutus') }}">About US</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" data-toggle="dropdown"> Travel Insurance </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li>
                              <a class="dropdown-item" href="{{ url('travel-insurance') }}">Travel Insurance</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="{{ url('super-visa-insurance') }}">Super Visa Insurance</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="{{ url('visitor-insurance') }}">Visitor Insurance</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="{{ url('student-insurance') }}">Student Insurance</a>
                           </li>
                           
                        </ul>
                     </li>


                     
                     <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" data-toggle="dropdown"> Insurance </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                           <li>
                              <a class="dropdown-item" href="{{ url('whole-life-insurance') }}">Whole Life Insurance</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="{{ url('life-term-insurance') }}">Life Term Insurance</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="{{ url('critical-illness-insurance') }}">Critical Illness Insurance</a>
                           </li>
                           <li>
                              <a class="dropdown-item" href="{{ url('single-trip-insurance') }}">Single Trip Insurance</a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0)" id="navbarDropdown4" data-toggle="dropdown"> Contact </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                           <li><a class="dropdown-item" href="{{ url('faq') }}">Faq</a></li>
                           <li><a class="dropdown-item" href="{{ url('blogs') }}">Blog</a></li>
                           <li><a class="dropdown-item" href="{{ url('contactus') }}">Contact Address</a></li>
                           <li><a class="dropdown-item" href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        @if(Auth::check()) 
                                    @if(Auth::user()->user_type == 'agent')
                                        <li class="nav-item">
                                            <a href="{{ url('admin/dashboard')}}">
                                            Agent dashboard 
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ url('profile')}}">
                                                My Account
                                            </a>
                                        </li>
                                    @endif
                                @else
                                <li class="nav-item">
                                 <a href="{{ url('login') }}">Login</a>
                                </li>
                                @endif
                       
                     </li>
                  </ul>
               </div>
            </nav>
            @yield('firstnav')
         </div>
      </div>
      @yield('secondnav')
   </div>
</header>