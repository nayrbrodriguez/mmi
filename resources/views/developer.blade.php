@extends('user.user_layout')

@section('title')
  MMI Alumni
@endsection

@section('content')
<section id="content">
    <div class="sub-content">
  <div class="container">
    
    <div class="row">
      <div class="span12">
          <h4 class="bot-0">MMI Website Developer</h4>
      </div>
    </div>
    <div class="row"> 
        <div class="thumbnails_3">
            <div class="span4">
                <div class="thumbnail thumbnail_3">  
              <figure><img src="{{asset('user/img/bryan.png')}}" alt="" class="img-radius"></figure>
                <p class="lead p2"></p>
                
        
                </div>
            </div>   
            <div class="span4">
                <div class="thumbnail thumbnail_3">  
              
                <font color="#fae806" size="6px">Bryan Eslabra Rodriguez</font>
                <br>
                <font color="white" size="4px">--Background Here--</font>
                <br>
        {{-- <a href="#" class="btn btn_">more info</a> --}}
                </div>
            </div>   
               
      </div>
    </div>           
  </div>
</div>
</section>
   
@endsection