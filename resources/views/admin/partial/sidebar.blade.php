<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="#"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="treeview {{ Request::is('admin/gen_info', 'admin/about_president','admin/vision_mission','admin/about_logo','admin/core_values','admin/core_competencies','admin/grad_attribute','admin/academic_policy') ? "active" : "" }}">
              <a href="#"><i class="fa fa-link"></i> <span>About</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('admin/gen_info') ? "active" : "" }}"><a href="{{url('admin/gen_info')}}">General Information</a></li>
                <li class="{{ Request::is('admin/about_president') ? "active" : "" }}"><a href="{{url('admin/about_president')}}">About President</a></li>
                <li class="{{ Request::is('admin/vision_mission') ? "active" : "" }}"><a href="{{url('admin/vision_mission')}}">Vision and Mission</a></li>
                <li class="{{ Request::is('admin/about_logo') ? "active" : "" }}"><a href="{{url('admin/about_logo')}}">About the Logo</a></li>
                <li class="{{ Request::is('admin/core_values') ? "active" : "" }}"><a href="{{url('admin/core_values')}}">Core Values</a></li>
                <li class="{{ Request::is('admin/core_competencies') ? "active" : "" }}"><a href="{{url('admin/core_competencies')}}">Core Competencies</a></li>
                <li class="{{ Request::is('admin/grad_attribute') ? "active" : "" }}"><a href="{{url('admin/grad_attribute')}}">Graduate Attributes</a></li>
                <li class="{{ Request::is('admin/academic_policy') ? "active" : "" }}"><a href="{{url('admin/academic_policy')}}">Academic Policies</a></li>
              </ul>
            </li>

            <li class=""><a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
            <li class="treeview {{ Request::is('admin/requirement', 'admin/guidelines','admin/registration','admin/enrollment') ? "active" : "" }}">
              <a href="#"><i class="fa fa-institution"></i> <span>Admission</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('admin/requirement') ? "active" : "" }}"><a href="{{url('admin/requirement')}}">Requirements</a></li>
                <li class="{{ Request::is('admin/guidelines') ? "active" : "" }}"><a href="{{url('admin/guidelines')}}">Guidelines</a></li>
                <li class="{{ Request::is('admin/registration') ? "active" : "" }}"><a href="{{url('admin/registration')}}">Registration</a></li>
                <li class="{{ Request::is('admin/enrollment') ? "active" : "" }}"><a href="{{url('admin/enrollment')}}">Enrollment</a></li>
              </ul>
            </li>
            <li class="{{ Request::is('admin/course_offering') ? "active" : "" }}"><a href="{{url('admin/course_offering')}}"><i class="fa fa-list"></i> <span>Course Offering</span></a></li>
            <li class="{{ Request::is('admin/scholarship') ? "active" : "" }}"><a href="{{url('admin/scholarship')}}"><i class="fa fa-th-list"></i> <span>Scholarships</span></a></li>
            <li class="{{ Request::is('admin/administrative') ? "active" : "" }}"><a href="{{url('admin/administrative')}}"><i class="fa fa-id-badge"></i> <span>Administrative</span></a></li>
            <li class="{{ Request::is('alumni') ? "active" : "" }}"><a href="{{url('alumni')}}"><i class="fa fa-id-card"></i> <span>Alumni</span></a></li>
            <li class="{{ Request::is('admin/arabic_department') ? "active" : "" }}"><a href="{{url('admin/arabic_department')}}"><i class="fa fa-id-card"></i> <span>Arabic Department</span></a></li>
            
          
          </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

