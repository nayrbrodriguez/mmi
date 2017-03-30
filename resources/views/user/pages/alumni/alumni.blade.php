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
          <div class="about_container" >
         <table class="table table-bordered table-hover">
           <thead>
             <th><font size="5px">Name</font></th>
             <th><font size="5px">Course</font></th>
             <th><font size="5px">Year Graduated</font></th>
             
           </thead>
           <tbody>
            @foreach($data as $alumni=>$alumna)
             <tr>
               <td><h4 >{{ $alumna->name }}</h4></td>
               <td><h4 >{{ $alumna->course }}</h4></td>
               <td><h4 >{{ $alumna->year_grad }}</h4></td>
             </tr>
            @endforeach
           </tbody>
         </table>
         
            
          
          
          </div>
          
      </div>
      
    </div> 
               
  </div>
</div>  
</section>
   

@endsection