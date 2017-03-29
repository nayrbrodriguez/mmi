@extends('user.user_layout')

@section('title')
MMI Homepage
@endsection

@section('slider')
 <div class="slider">
    <div class="camera_wrap">
    {{-- @foreach ($banner as $key => $image) --}}
    @foreach($data as $key => $gen)
        <div data-src="/uploads/banners/{!!$gen->banner!!}"></div>
    @endforeach
        
    </div>
</div>
@endsection
@section('content')
 
<section id="content" class="main-content">
  <div class="container">
    <div class="row">
      <div class="span12">        
        <ul class="thumbnails">
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="{{ asset("../user/img/img-1.png")}}" alt="">
                <h5>Latest</h5>
                <h3>News</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Praesent vestibulum molestie lacus. Aenean noy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="{{ asset("../user/img/img-2.png")}}" alt="">
                <h5>Course</h5>
                <h3>Offering</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Praesent vestibulum molestie lacus. Aenean my hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. </p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="{{ asset("../user/img/img-3.png")}}" alt="">
                <h5>Arabic</h5>
                <h3>Department</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suipit varius mi. Cum sociis natoque penatibus et.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail">
              <div class="caption">
              	<img src="{{ asset("../user/img/img-4.png")}}" alt="">
                <h5>Contact</h5>
                <h3>Us</h3>
              </div>
              <div class="thumbnail-pad">  
                  <p>Nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
                  <a href="#" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
    	<div class="span8">
        	<div class="clearfix cols-1">
                <div class="span4 left-0">
                    <h4 class="indent-2">About</h4>
                    <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
                    <figure class="img-indent"><img src="{{ asset("../user/img/page1-img1.jpg")}}" alt="" class="img-radius"></figure>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. 
                </div>
                <div class="span4">
                    <h4 class="indent-2">Scholarship</h4>
                    <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
                    <figure class="img-indent"><img src="{{ asset("../user/img/page1-img2.jpg")}}" alt="" class="img-radius"></figure>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. 
                </div>
            </div>
            <h4 class="indent-1">Admission</h4>
            <p class="lead">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturien.</p>
            <div class="lists">
            	<div class="span4 left-0">
                    <ul class="list">
                        <li><a href="#">Praesent vestibulum molestie lacus aenean</a></li>
                        <li><a href="#">nonummy hendrerit mauris</a></li>
                        <li><a href="#">Phasellus porta fusce suscipit varius mi</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                </div>
                <div class="span4">
                    <ul class="list">
                        <li><a href="#">Praesent vestibulum molestie lacus aenean</a></li>
                        <li><a href="#">nonummy hendrerit mauris</a></li>
                        <li><a href="#">Phasellus porta fusce suscipit varius mi</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="link">More Info</a>
        </div>    
        <div class="span4">
        	<h4 class="indent-2">Latest News</h4>
            <ul class="list-news">
            	<li>
                	<a href="#" class="btn btn_">Apr 21, 2012</a>
                    <p class="text-info">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
                    Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. <a href="#" class="underline">>></a>
                </li>
                <li>
                	<a href="#" class="btn btn_">Apr 21, 2012</a>
                    <p class="text-info">Aenean nonummy hendrerit mauris</p>
                    Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.  <a href="#" class="underline">>></a>
                </li>
                <li>
                	<a href="#" class="btn btn_">Apr 21, 2012</a>
                    <p class="text-info">Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturien.</p>
                    Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.  <a href="#" class="underline">>></a>
                </li>
            </ul>
            <h4 class="indent-1">Facebook</h4>
            <div id="search-results"></div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMMI.Tatayawan.tamparan.LDS%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			
        </div>
    </div>        
  </div>
</section>
@endsection
