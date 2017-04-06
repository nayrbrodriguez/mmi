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
      <form action="/search_alumni" method="POST" role="search" >
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control span8" name="q"
                placeholder="Enter Alumni ID or Name"> <span class="input-group-btn">
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
                <th><font size="5px">Alumni ID</font></th>
                <th><font size="5px">Name</font></th>
                <th><font size="5px">Year Graduated</font></th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $data)
            <tr>
                <td><h4>{{$data->id}}</h4></td>
                <td><h4>{{$data->name}}</h4></td>
                <td><h4>{{$data->year_grad}}</h4></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
        
          
          </div>
          
      </div>
      
    </div> 
               
  </div>
</div>  
</section>
   

@endsection