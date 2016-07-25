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
  <h1>Login Go4clients</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <button>Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Email Address"/>
      <input type="tel" placeholder="Phone Number"/>
      <button>Register</button>
    </form>
  </div>
  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
</div>
    
    {!! HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
    {!! HTML::script('http://codepen.io/andytran/pen/vLmRVp.js') !!}
    {!! HTML::script('assets/login/js/index.js') !!}
  </body>
</html>
