<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../loginandregisterform/register.css">
</head>
<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <form method="POST" action="{{route('login')}}">
          @csrf
          <div class="input-box">
            <label for="Name" :value="__('Name')"></label>
            <input type="text"  placeholder="Enter your name" required :value="old('name')">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email" required :value="old('email')">
          </div>
          <div class="input-box">
            <input type="password" placeholder="Create password" required :value="old('password')">
          </div>
          <div class="input-box">
            <input type="password" placeholder="Confirm password" required :value="old('password')">
          </div>
          <div class="policy">
            <input type="checkbox">
            <h3>I accept all terms & condition</h3>
          </div>
          <div class="input-box button">
            <input type="Submit" value="Register Now">
          </div>
          <div class="text">
            <h3>Already have an account? <a href="{{ route('login') }}">Login now</a></h3>
          </div>
        </form>
      </div>
</body>
</html>