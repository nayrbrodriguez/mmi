<header class="p0">
                    <div class="header-block-mmi" >

                        <div class="hidden-logo logo-mmi"><a href="{{ url('/')}}"><img src="{{asset("../user/img/logo.png")}}" width="165px" height="165px" alt=""></a></div>

                        <div class="visible-logo" align="center"><a href="{{ url('/')}}"><img src="{{ asset("../user/img/logo.png") }}" alt=""></a></div>

                    <div class="hidden-title" style=" background-color: #fae806; position: absolute; top: 50px;  width: inherit; overflow-x: visible;">
                    <div style="padding-left: 250px"><h1 style="letter-spacing: 2px; font-weight: bold; "><span><font color="#096928">Ma'had Maranao Al-Islamie</font></span></h1></div>
                    </div>

                        

                        <div class="visible-title" style="background-color: #fae806;"><h1 style="letter-spacing: 2px; font-weight: bold; "><font color="#096928"><center><span>Ma'had Maranao Al-Islamie</span></center></font></h1></div>
                        <!-- <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"  >
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form> -->
                        <!-- <span class="contacts">Call Us Toll Free:  <span>+1 234 567 89 90</span><br>E-mail: <a href="#">company@demolink.org</a></span> -->
                    </div>
    <div class="container">
      <div class="row">
          <div class="span12">
              <div class="header-block clearfix">
                    <div class="navbar navbar_ clearfix">
                        <div class="navbar-inner navbar-inner_">
                            <div class="container">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                </a>                                                   
                                <div class="nav-collapse nav-collapse_ collapse ">
                                    <ul class="nav sf-menu">
                                      <li class="{{ Request::is('/') ? "active" : ""}} li-first"><a href="{{ url('/')}}"><span class="">Home</span></a></li>
                                      <li class="{{ Request::is('about/*','about') ? "active" : ""}}"><a href="{{ url('/about')}}">About MMI</a>
                                        {{-- <ul>
                                          <li><a href="#">History</a></li>
                                          <li><a href="#">President</a></li>
                                          <li class="sub-menu"><a href="#">Company Profile</a>
                                            <ul>
                                              <li><a href="#">Our Capabilities</a></li>
                                              <li><a href="#">Advantages</a></li>
                                              <li><a href="#">Work Team</a></li>
                                              <li><a href="#">Partnership</a></li>
                                              <li><a href="#">Support</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Our History</a></li>
                                          <li><a href="#">Testimonials</a></li>
                                        </ul> --}}
                                      </li>
                                      <li class="{{ Request::is('/news','news/*') ? "active" : ""}}"><a href="{{ url('/news')}}">News</a></li>
                                      <li class="{{ Request::is('/admission/*') ? "active" : ""}}"><a href="{{ url('/admission')}}">Admission</a></li>
                                      <li class="{{ Request::is('/course_offering/*') ? "active" : ""}}"><a href="{{ url('/course_offering')}}">Course Offering</a></li>
                                      <li class="{{ Request::is('/scholarship/*') ? "active" : ""}}"><a href="{{ url('/scholarship')}}">Scholarship</a></li>
                                      <li class="{{ Request::is('/administrative/*') ? "active" : ""}}"><a href="{{ url('/administrative/*')}}">Administrative</a></li>
                                      <li class="{{ Request::is('/alumni/*') ? "active" : ""}}"><a href="{{ url('/alumni')}}">Alumni</a></li>
                                      <li class="{{ Request::is('/arabic_department/*') ? "active" : ""}}"><a href="{{ url('arabic_department')}}">Arabic Department</a>
                                      {{-- <ul>
                                      <li><a href="">Senior High</a></li> 
                                      <li><a href="">Junior High</a></li>
                                      <li><a href="">Elementary</a></li>  
                                      <li><a href="">Kinder</a></li>  
                                      </ul> --}}
                                      </li>
                                      <li class="{{ Request::is('/contact_us/*') ? "active" : ""}}"><a href="{{ url('/contact_us')}}">Contact Us</a></li>

                                    </ul>
                                </div>
                               <!--  <ul class="social-icons">
                                    <li><a href="#"><img src="img/icon-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon-1.png" alt=""></a></li>
                                    <!-- <li><a href="#"><img src="img/icon-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon-4.png" alt=""></a></li>
                                </ul> -->
                            </div>
                        </div>
                     </div>   
                </div>
            </div>
         </div>   
    </div>
    @yield('slider')
</header>