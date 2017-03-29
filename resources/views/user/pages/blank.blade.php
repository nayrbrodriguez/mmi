@extends('user.user_layout')

@section('title')
  MMI Blank
@endsection

@section('content')
<section id="content">
<div class="sub-content">
  <div class="container">
    
    <div class="row">
      <div class="span12">
          <h4 class="bot-0">Summer Fashion</h4>
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
          <div class="span4">
            <div class="">  
              <img src="{{ asset('../user/img/page4-img1.jpg')}}" alt="" class="img-radius">
              
            </div>
          </div>
          <div class="span4">
            <h5>Title<hr></h5>
                Description
                <br>
        <a href="#" class="btn btn_">more info</a>
          </div>
        </div>
      </div>  

      <div class="span4">
        Facebook
      </div>   

    </div>
    </div>
    </div>           
  </div>
</div>
</section>

   

<!--/.fluid-container-->
{{-- <section id="content">
<div class="sub-content">
  <div class="container">
    <div class="row">
    	<div class="span12">
            <h4>Search result:</h4>
            <div id="search-results"></div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMMI.Tatayawan.tamparan.LDS%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>  
    </div>        
  </div>
</div>  
</section> --}}
@endsection