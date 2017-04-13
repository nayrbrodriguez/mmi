<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{--  <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name"> --}}
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset("../user/css/bootstrap.css")}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset("../user/css/responsive.css")}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset("../user/css/camera.css")}}" type="text/css" media="screen"> 
    <link rel="stylesheet" href="{{ asset("../user/css/style.css")}}" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="{{ asset("../user/js/jquery.js")}}"></script>
    <script type="text/javascript" src="{{ asset("../user/js/jquery.easing.1.3.js")}}"></script>
	<script type="text/javascript" src="{{ asset("../user/js/camera.js")}}"></script>
    <script src="{{ asset("../user/js/jquery.ui.totop.js")}}" type="text/javascript"></script>
	<script>
      $(document).ready(function(){   
              jQuery('.camera_wrap').camera();
        });    
	</script>		
	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
  
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script type="text/javascript" src="{{ asset("../user/js/jquery.mobile.customized.min.js")}}"></script>
  <!--<![endif]-->
  	<!--[if lt IE 9]>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>

<body>
<!-- fb link start-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- fb link end-->

<!--==============================header=================================-->

    @include('user.partial.header')               
<!--==============================header=================================-->



@yield('content')

<footer>
   <div class="container">
   @include('user.partial.footer')
   </div>
</footer>
<script type="text/javascript" src="{{ asset("../user/js/bootstrap.js")}}"></script>
</body>
</html>