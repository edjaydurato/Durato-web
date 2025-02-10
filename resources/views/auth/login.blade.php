<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../loginandregisterform/style.css">
</head>
<body>
    
    <div class="wrapper">
      <div class="title"><span>Login Form</span></div>
      <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="row">
          <i class="fas fa-user"></i>
          <label for="Name" :value="__('Name')"></label>
          <input type="text" placeholder="Email or Phone" required :value="old('email')" />
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" required :value="old('[password]')"/>
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
          <input type="submit" value="Login" />
        </div>
        <div class="signup-link">Not a member? <a href="{{ route('register') }}">Signup now</a></div>
      </form>
    </div>
  </body>
</html>