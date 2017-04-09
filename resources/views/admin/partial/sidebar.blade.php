<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->

            {{-- HOME --}}
            <li class="{{ Request::is('admin/banner', 'admin/add_banner','admin/create_banner','admin/edit_banner/*','admin/update_banner','admin/view_banner/*') ? "active" : ""}}">
                <a href="{{ url('admin/banner')}}"><i class="fa fa-home"></i> <span>Banner</span></a>
            </li>

            {{-- About --}}
            <li class="{{ Request::is('admin/about', 'admin/add_about','admin/update_about','admin/view_about/*','admin/edit_about/*') ? "active" : "" }}">
                <a href="{{url('admin/about')}}"><i class="fa fa-link"></i> <span>About</span> </a>
            </li>

            {{-- News --}}
            <li class="{{ Request::is('admin/about_news', 'admin/add_news','admin/update_news','admin/view_news/*','admin/edit_news/*') ? "active" : "" }}">
                <a href="{{url('admin/about_news')}}"><i class="fa fa-newspaper-o"></i> <span>News</span></a>
            </li>

            {{-- Admission --}}
            <li class="{{ Request::is('admin/admission', 'admin/add_admission','admin/update_admission','admin/view_admission/*','admin/edit_admission/*') ? "active" : "" }}">
              <a href="{{ url('/admin/admission') }}"><i class="fa fa-institution"></i> <span>Admission</span></a>
              
            </li>

            {{-- Course Offering --}}
            <li class="{{ Request::is('admin/course_offering', 'admin/add_course_offering','admin/update_course_offering','admin/view_course_offering') ? "active" : "" }}">
                <a href="{{url('admin/course_offering')}}"><i class="fa fa-list"></i> <span>Course Offering</span></a>
            </li>
            
            {{-- Scholarship --}}
            <li class="{{ Request::is('admin/scholarship', 'admin/add_scholarship','admin/update_scholarship','admin/view_scholarship/*','admin/edit_scholarship/*') ? "active" : "" }}">
                <a href="{{url('admin/scholarship')}}"><i class="fa fa-th-list"></i> <span>Scholarships</span></a>
            </li>
            
            {{-- Administrative --}}
            <li class="{{ Request::is('admin/administrative', 'admin/add_administrative','admin/update_administrative','admin/view_administrative/*','edit_administrative/*') ? "active" : "" }}">
                <a href="{{url('admin/administrative')}}"><i class="fa fa-id-badge"></i> <span>Administrative</span></a>
            </li>
            
            {{-- Alumni --}}
            <li class="{{ Request::is('admin/alumni', 'admin/add_alumni','admin/update_alumni','admin/view_alumni','admin/edit_alumni/*') ? "active" : "" }}">
                <a href="{{url('admin/alumni')}}"><i class="fa fa-id-card"></i> <span>Alumni</span></a>
            </li>
            
            {{-- Arabic Department --}}
            <li class="{{ Request::is('admin/arabic_department', 'admin/add_arabic_department','admin/update_arabic_department','admin/view_arabic_department/*','admin/edit_arabic_department/*') ? "active" : "" }}">
                <a href="{{url('admin/arabic_department')}}"><i class="fa fa-id-card"></i> <span>Arabic Department</span></a>
            </li>
           
          {{--  <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="layout/top-nav.html"><i class="fa fa-circle-o"></i> Logo</a></li>
                <li><a href="layout/boxed.html"><i class="fa fa-circle-o"></i> Users</a></li>
                <li><a href="layout/fixed.html"><i class="fa fa-circle-o"></i> Informations</a></li>
              </ul>
            </li> --}}
            
            
          
          </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

