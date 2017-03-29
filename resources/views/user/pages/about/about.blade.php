@extends('user.user_layout')

@section('title')
  MMI Arabic Department
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
            <a href="{{ url('/about',array( $title->id )) }}"><div class="about_title ">{{ $title->title}}</div></a>
        @endforeach
          </div>
          
      </div>
      <div class="span9">
       
      </div>
    </div> 
               
  </div>
</div>  
</section>
   

@endsection