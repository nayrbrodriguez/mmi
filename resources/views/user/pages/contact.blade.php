@extends('user.user_layout')

@section('title')
  MMI Contact Us
@endsection

@section('content')
<section id="content">
<div class="sub-content">
  <div class="container">
  <div class="row">
    
  </div>
    <div class="row">
      <div class="span4">
          <h4>Contact info</h4>
                <strong class="clr">MA'HAD MARANAO AL-ISLAMIE<br>
                @foreach($data as $gen)
                @if($gen->type == 'Address')<span>{{ $gen->description }}</span>
                </strong><br>
                @endif

                @if($gen->type == 'Tel')
                <span>Telephone:</span>
                {{ $gen->description }}
                <br>
                @endif

                @if($gen->type == 'Fax')
                <span>FAX:</span>
                {{ $gen->description }}
                <br>
                @endif

                @if($gen->type == 'Email')
                E-mail: <a href="#">
                <u>{{ $gen->description }}</u></a><br>
                @endif
                @endforeach
		</div>  
        <div class="span6">
        	   <h4></h4>
            <div class="map">
             <iframe src="https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiTWEnaGFkIE1hcmFuYW8gQWwtSXNsYW1pZSIsImFkZHJlc3MiOiJUYXRheWF3YW4sIFRhbXBhcmFuIExhbmFvIERlbCBTdXIsIFRhbXBhcmFuLCBMYW5hbyBEZWwgU3VyLCBQaGlsaXBwaW5lcyIsImxhdGl0dWRlIjo3LjgzNjU5ODQ5Nzg3NzEsImxvbmdpdHVkZSI6MTI0LjM0OTY5OTAyMDM5LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjg0MzUxMjgxMjQxNjc4Nn0=?map=7.8365984978771,124.34969902039,15,normal&ref=facebook&link=directions&fb_locale=en_US"></iframe></div>
		</div>  
    </div>           
  </div>
</div>
</section>
@endsection