@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorguard')->first();
@endphp
<header>
   <div class="container-fluid mainhead">
      <div class="container py-2 headlogo">
         <div class="row">
            <a style="width: 280px" href="{{ url('') }}">
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