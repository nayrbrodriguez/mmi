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
            <input type="text" class="form-control span4" name="q"
                placeholder="Enter Alumni ID or Name" id="test"> </input>
                <button type="submit" class="btn btn-success">
                   Search
                </button>
            
        </div>
      </form> 
          <div class="about_container" >

     

    @if(isset($details))
        <p style="font-size:.15in;"> The Search results for your query <font color="fae806">"<b> {{ $query }} </b>"</font> are : {{count($details)}}</p>
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
                <td><font size="3px">{!!$data->name or "No Details"!!}</font></td>
                <td><font size="3px">{!!$data->id or "No Details"!!}</font></td>
                <td><font size="3px">{!!$data->id or "No Details"!!}</font></td>
                <td><font size="3px">{!!$data->year_grad or "No Details"!!}</font></td>
            </tr>
            @endforeach
        </tbody>
    </table>

   
    @else
    <div class="">
       
                <font color="#fae806" size="5px">
                  {{ $message}}
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