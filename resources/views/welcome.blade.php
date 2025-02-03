<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="../../../loginandregisterform/welcome.css">
    
</head>
<body>

<header>
    <h1 class="glowing-text">Welcome to Our Website</h1>
    <div class="auth-buttons">
        <a href="{{ route('login') }}" class="login-btn">Log In</a>
        <a href="{{ route('register') }}" class="register-btn">Register</a>
    </div>
</header>

<div class="container">
    <section class="hero">
        <h1>Build Your Future with Us</h1>
        <p>Your journey to success starts here. Explore our offerings and make the most of them!</p>
        <button class="btn">Get Started</button>
    </section>
</div>

</body>
</html>