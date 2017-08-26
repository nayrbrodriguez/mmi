@extends('user.user_layout')

@section('title')
  MMI Administrative
@endsection

@section('content')
<section id="content">
<div class="sub-content">
  <div class="container">
    <div class="row">
      
      <div class="span12">
          <div class="about_header">
          Administrative List
          </div>
          <div style="margin-top: 50px;">
          <ul class="list-services">
          @foreach($data as $datas=>$data)
            <li>
              <img src="uploads/image/{{ $data->image }}" width="150px" height="150px" alt="">
                <div style="padding-left:30px;">
                  <p class="text-info-name"> {{$data->name}}</p>
                  <p class="text-info">Position: {{$data->position}}</p>
                  <p class="text-info">Department: {{$data->position}}</p>
                  <p class="text-info">Number: {{$data->number}}</p>
                  <p class="text-info">Email: {{$data->email}}</p>
                  
                </div>
            </li>
          @endforeach
          </ul>
        </div>
      </div>
    </div> 
              
  </div>
</div>  
</section>

@endsection