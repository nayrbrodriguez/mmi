@extends('user.user_layout')

@section('title')
  MMI {!!$content->title or "Admissions"!!}
@endsection

@section('content')
<section id="content">

<div class="sub-content">
  <div class="container">
        <div class="about_header" >
          Admissions
        </div>
    <div class="row">
      <div class="span3">
          <div class="about_container" >

        @foreach ($data as $about=>$title)
            <a href="{{url('/admission',array($title->id))}}">
              <div class="about_title {{ url()->current()==url('/admission',array($title->id))? 'active':''}}">
                  {{ $title->title}}
              </div></a>
        @endforeach
          </div>
          
      </div>
      <div class="span9">
      
          <h4 class="bot-0">{!!$content->title or "No Content" !!}</h4>
          <hr>
          {!! $content->description or "No Content"!!}
       
      </div>
    </div> 
               
  </div>
</div>  
</section>
   

@endsection