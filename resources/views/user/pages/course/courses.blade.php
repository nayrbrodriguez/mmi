@extends('user.user_layout')

@section('title')
  MMI Course Offering
@endsection

@section('content')
<section id="content">

<div class="sub-content">
  <div class="container">
        <div class="about_header" >
          Course Offered
        </div>
    <div class="row">
      <div class="span12">
          <div class="about_container" >
         
          @foreach($data as $courses=>$course)
            <h4 >{{ $course->course }}</h4>
          @endforeach
          
          </div>
          
      </div>
      
    </div> 
               
  </div>
</div>  
</section>
   

@endsection