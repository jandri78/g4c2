<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Go4clients</title>
   
    {!! HTML::style('assets/login/css/bootstrap.min.css') !!}
    {!! HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900') !!}
    {!! HTML::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

    {!! HTML::style('assets/login/css/style.css') !!}
  </head>

  <body>

<!-- Form Mixin-->
<!-- Input Mixin--> 
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>{!! HTML::image('assets/login/img/go4Clients-logo-site.png', 'alt', array( 'width' => '500px', 'height' => '80px' )) !!}
</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
    @yield('content')
  <!--<div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>-->
</div>
    
    {!! HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
    <!--{!! HTML::script('http://codepen.io/andytran/pen/vLmRVp.js') !!}-->
    {!! HTML::script('assets/login/js/index.js') !!}
  </body>
</html>

