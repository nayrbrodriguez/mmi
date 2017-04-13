@extends('user.user_layout')

@section('title')
MMI Homepage
@endsection

@section('slider')
 <div class="slider">
    <div class="camera_wrap">
    {{-- @foreach ($banner as $key => $image) --}}
    @foreach($data as $key => $gen)
        <div data-src="{{ url('/uploads/banners', $gen->banner)}}"></div>
    @endforeach
        
    </div>
</div>
@endsection
@section('content')
 
<section id="content" class="main-content">
  <div class="container">
    <div class="row">
      <div class="span12">        
        
      </div>
    </div>
    <div class="row">
    	<div class="span8">
        	<div class="clearfix cols-1">
                    
                    <h4 class="indent-2">News and Events</h4>
                @foreach($news as $new=>$news)
                <div class="news_span">
                    <figure class="img-indent"><a href="{{ url('news',$news->id) }}"><img src="{{ url('/uploads/news', $news->image) }}" height="1000px" alt="" class="img-radius" ></a></figure>
                    <a href="{{ url('news',$news->id) }}"><p class="news_lead">{{ $news->title }}</p></a>
                    {{ $news->description}}
                </div>
                @endforeach
                
            </div>
            <hr>
            <div class="lists">
                <div class="span4 left-0">
                  <h4>Scholarships</h4>
                      <ul class="list ">
                        @foreach($scholar as $scholarships=>$s)
                          <li><a href="{{ url('scholarships',array($s->id)) }}">{{$s->title}}</a></li>
                        @endforeach
                      </ul>
                  </div>
                  <div class="span4">
                    <h4>Arabic Department</h4>
                      <ul class="list">
                        @foreach($arabdept as $arab=>$dept)
                          <li><a href="{{ url('arabic_department',array($dept->id)) }}">{{$dept->title}}</a></li>
                        @endforeach
                      </ul>
                  </div>
              </div>
              <hr>
        <ul class="thumbnails">
          
          <li class="news_span">
            <div class="thumbnail">
              <div class="caption">
                <h5>Course</h5>
                <h3>Offering</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>Here are the list of Courses that you can take in this institution.</p>
                  <a href="{{ url('course_offering') }}" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="news_span">
            <div class="thumbnail">
              <div class="caption">
                <h5>List of</h5>
                <h3>Alumni</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>If you're an alumni in this institution you can verify here. </p>
                  <a href="{{ url('alumni') }}" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
          <li class="news_span">
            <div class="thumbnail">
              <div class="caption">
                
                <h5>Contact</h5>
                <h3>Us</h3>
              </div>  
              <div class="thumbnail-pad">
                  <p>If you have any question please contact with us here.</p><br>
                  <a href="{{ url('contact_us') }}" class="btn btn_">more info</a>
              </div>
            </div>
          </li>
        </ul>
        </div>    
        <div class="span4">
        	
            <h4 class="indent-1">Facebook</h4>
            <div id="search-results"></div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMMI.Tatayawan.tamparan.LDS%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

			       <h4 class="indent-1">Twitter</h4>
             <a class="twitter-timeline" data-height="500" data-width="340" href="https://twitter.com/MMI_TATAYAWAN">Tweets by MMI_TATAYAWAN</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div> 

        
  </div>
</section>
@endsection
