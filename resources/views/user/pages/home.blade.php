@extends('user.user_layout')

@section('title')
MMI Homepage
@endsection



@section('style')
 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('../nivo-slider/themes/default/default.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('../nivo-slider/themes/light/light.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('../nivo-slider/themes/dark/dark.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('../nivo-slider/themes/bar/bar.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('../nivo-slider/nivo-slider.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('../nivo-slider/demo/style.css')}}" type="text/css" media="screen" />
@endsection

@section('slider')



<div class=" theme-default">
<div id="slider" class="nivoSlider"> 
 @foreach($data as $key => $gen)
  <img src="{{ url('/uploads/banners', $gen->banner)}}" data-thumb="{{ url('/uploads/banners', $gen->banner)}}" title="{!! $gen->title !!}" alt="" />
  {{-- <img src="../demo/images/up.jpg" data-thumb="demo/images/up.jpg" alt="" title="This is an example of a caption" /></a> 
  <img src="../demo/images/walle.jpg" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" /> 
  <img src="../demo/images/nemo.jpg" data-thumb="demo/images/nemo.jpg" alt="" title="#htmlcaption" />  --}}
 @endforeach
</div>
{{-- <div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div> --}}
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script type="text/javascript" src="{{ asset('../nivo-slider/jquery.nivo.slider.js')}}"></script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

@endsection

@section('')
 
    <div class="camera_wrap" >
    {{-- @foreach ($banner as $key => $image) --}}
    @foreach($data as $key => $gen)

        <div data-src="{{ url('/uploads/banners', $gen->banner)}}"></div>
    @endforeach
        
    </div>

@endsection

@section('')
 <div class="camera_wrap">
    <div data-src="{{ url('/uploads/banners', $gen->banner)}}"></div>
    <div data-src="{{ url('/uploads/banners', $gen->banner)}}"></div>
    <div data-src="{{ url('/uploads/banners', $gen->banner)}}"></div>
    <div data-src="{{ url('/uploads/banners', $gen->banner)}}"></div>
   
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
          <div class="fb-page" data-href="https://www.facebook.com/MMI.Tatayawan.tamparan.LDS/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MMI.Tatayawan.tamparan.LDS/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MMI.Tatayawan.tamparan.LDS/">Ma&#039;had Maranao Al-Islamie</a></blockquote></div>
        </div>
        <div class="span4">
             <h4 class="indent-1">Twitter</h4>
             <a class="twitter-timeline" data-height="500" data-width="330" href="https://twitter.com/MMI_TATAYAWAN">Tweets by MMI_TATAYAWAN</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
       


    </div> 

        
  </div>
</section>
@endsection
