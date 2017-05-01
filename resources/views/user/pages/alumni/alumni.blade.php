@extends('user.user_layout')

@section('title')
  MMI Alumni
@endsection

@section('content')
<section id="content">

<div class="sub-content">
  <div class="container">
        <div class="about_header" >
          Alumni List
        </div>
    <div class="row">
      <div class="span12">
      <br>
      <form action="{{ url('/search_alumni') }}" method="POST" role="search" >
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control span8" name="q"
                placeholder="Enter Alumni ID or Name" id="test"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search">Search</span>
                </button>
            </span>
        </div>
      </form> 
          <div class="about_container" >

    

    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th><font size="5px" color="#fae806">Name</font></th>
                <th><font size="5px" color="#fae806">Alumni ID</font></th>
                <th><font size="5px" color="#fae806">Course</font></th>
                <th><font size="5px" color="#fae806">Year Graduated</font></th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $data)
            <tr>
                <td><font size="3px">{{$data->name}}</font></td>
                <td><font size="3px">{{$data->id}}</font></td>
                <td><font size="3px">{{$data->id}}</font></td>
                <td><font size="3px">{{$data->year_grad}}</font></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <div class="">
       
                <font color="#fae806" size="5px">
                  {{ $message }}
                </font>
        
    </div>
    @endif

   
          
          </div>
          
      </div>
      
    </div> 
               
  </div>
</div>  
</section>
   
 {{--  <script type="text/javascript">
    $('form').submit(function(){
      var input = $('#test').val();
      if(input == ''){
           $('#test').val('Need to have query to search');
      }    
  });
  </script> --}}

@endsection