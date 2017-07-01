@extends('user.user_layout')

@section('title')
  MMI News {!! $content->title !!}
@endsection

@section('content')
<section id="content">
<div class="sub-content">
  <div class="container">
    
    <div class="row">
      <div class="span12">
          <h4 class="bot-0">{!! $content->title !!}</h4>
      </div>
    </div>
    <div class="row">
      <div class="span12">
        <br>
      </div>
    </div>
    <div class="row"> 
      <div class="thumbnails_3">
      <div class="span8">
     
    <div class="row"> 
        <div class="thumbnails_3">
            
              
            <div class="span8">
                <div class="thumbnail thumbnail_3">  
              <img src="../uploads/news/{!! $content->image !!}" alt="" class="img-radius">
                <p class="lead p2">{!! $content->date !!}</p>
                {!! $content->content !!}
                <br>
        
                </div>
            </div>    
      </div>
    </div>  
      </div>  

      <div class="span4">
        <h4 class="indent-1">Facebook</h4>
            <div class="fb-page" data-href="https://www.facebook.com/MMI.Tatayawan.tamparan.LDS/" data-tabs="timeline" data-width="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MMI.Tatayawan.tamparan.LDS/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MMI.Tatayawan.tamparan.LDS/">Ma&#039;had Maranao Al-Islamie</a></blockquote></div>

            
        <h4 class="indent-1">Twitter</h4>
             <a class="twitter-timeline" data-height="500" data-width="340" href="https://twitter.com/MMI_TATAYAWAN">Tweets by MMI_TATAYAWAN</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>   

    </div>
    </div>
    </div>           
  </div>
</div>
</section>

   
@endsection