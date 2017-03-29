@extends('user.user_layout')

@section('title')
  MMI Blank
@endsection

@section('content')
<section id="content">

<div class="sub-content">
  <div class="container">
        <div class="about_header" >
          About MMI
        </div>
    <div class="row">
      <div class="span3">
          <div class="about_container" >
        @foreach ($data as $about=>$title)
            <a href=""><div class="about_title active">{{ $title->title }}</div></a>
        @endforeach
          </div>
          
      </div>
      <div class="span9">
        @foreach ($data as $about=>$content)
          <h4 class="bot-0">{{ $content->title }}</h4>
          <hr>
          {{ $content->content }}
        @endforeach
      </div>
    </div> 
               
  </div>
</div>  
</section>
   

@endsection