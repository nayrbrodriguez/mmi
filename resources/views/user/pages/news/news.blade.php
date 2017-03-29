@extends('user.user_layout')

@section('title')
  MMI News
@endsection

@section('content')
<section id="content">
<div class="sub-content">
  <div class="container">
    <div class="about_header" >
          News and Events
        </div>
    
    <div class="row">
      <div class="span12">
        <br>
      </div>
    </div>
    <div class="row"> 
      <div class="thumbnails_3">
      <div class="span8">
      @foreach($data as $newsevent=>$news)
        <div class="row">
          <div class="span4">
            <div class="">  
              <img src="uploads/news/{{ $news->image }}" alt="" class="img-radius">
              
            </div>
          </div>
          <div class="span4">
            <h5>{{ $news->title }}<hr></h5>
                {{ $news->date }}
                <br>
                {{ $news->description }}
                <br>
        <a href="{{ url('news', array($news->id)) }}" class="btn btn_">more info</a>
          </div>
        </div>
        <br>
        <br>
      @endforeach
      </div>  

      <div class="span4">
        <h4 class="indent-1">Facebook</h4>
            <div id="search-results"></div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMMI.Tatayawan.tamparan.LDS%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
      </div>   

    </div>
    </div>
    </div>           
  </div>
</div>
</section>

   
@endsection