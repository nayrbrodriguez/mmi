<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="#"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="treeview {{ Request::is('gen_info', 'about_president','vision_mission','about_logo','core_values','core_competencies','grad_attribute','academic_policy') ? "active" : "" }}">
              <a href="#"><i class="fa fa-link"></i> <span>About</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('gen_info') ? "active" : "" }}"><a href="{{url('gen_info')}}">General Information</a></li>
                <li class="{{ Request::is('about_president') ? "active" : "" }}"><a href="{{url('about_president')}}">About President</a></li>
                <li class="{{ Request::is('vision_mission') ? "active" : "" }}"><a href="{{url('vision_mission')}}">Vision and Mission</a></li>
                <li class="{{ Request::is('about_logo') ? "active" : "" }}"><a href="{{url('about_logo')}}">About the Logo</a></li>
                <li class="{{ Request::is('core_values') ? "active" : "" }}"><a href="{{url('core_values')}}">Core Values</a></li>
                <li class="{{ Request::is('core_competencies') ? "active" : "" }}"><a href="{{url('core_competencies')}}">Core Competencies</a></li>
                <li class="{{ Request::is('grad_attribute') ? "active" : "" }}"><a href="{{url('grad_attribute')}}">Graduate Attributes</a></li>
                <li class="{{ Request::is('academic_policy') ? "active" : "" }}"><a href="{{url('academic_policy')}}">Academic Policies</a></li>
              </ul>
            </li>

            <li class=""><a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
            <li class="treeview {{ Request::is('requirement', 'guidelines','registration','enrollment') ? "active" : "" }}">
              <a href="#"><i class="fa fa-institution"></i> <span>Admission</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="{{ Request::is('requirement') ? "active" : "" }}"><a href="{{url('requirement')}}">Requirements</a></li>
                <li class="{{ Request::is('guidelines') ? "active" : "" }}"><a href="{{url('guidelines')}}">Guidelines</a></li>
                <li class="{{ Request::is('registration') ? "active" : "" }}"><a href="{{url('registration')}}">Registration</a></li>
                <li class="{{ Request::is('enrollment') ? "active" : "" }}"><a href="{{url('enrollment')}}">Enrollment</a></li>
              </ul>
            </li>
            <li class="{{ Request::is('course_offering') ? "active" : "" }}"><a href="{{url('course_offering')}}"><i class="fa fa-list"></i> <span>Course Offering</span></a></li>
            <li class="{{ Request::is('scholarship') ? "active" : "" }}"><a href="{{url('scholarship')}}"><i class="fa fa-th-list"></i> <span>Scholarships</span></a></li>
            <li class="{{ Request::is('administrative') ? "active" : "" }}"><a href="{{url('administrative')}}"><i class="fa fa-id-badge"></i> <span>Administrative</span></a></li>
            <li class="{{ Request::is('alumni') ? "active" : "" }}"><a href="{{url('alumni')}}"><i class="fa fa-id-card"></i> <span>Alumni</span></a></li>
            <li class="{{ Request::is('arabic_department') ? "active" : "" }}"><a href="{{url('arabic_department')}}"><i class="fa fa-id-card"></i> <span>Arabic Department</span></a></li>
            
          
          </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

