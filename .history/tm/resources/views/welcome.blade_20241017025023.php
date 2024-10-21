<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/bg1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/welcome.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="register">
        {{--  text headers  --}}
        <text class="register_header">Task Manager</text>

        <h4 class="register_text2">Let’s Help You Manage Your Tasks!</h4>

        {{--  form for input  --}}
        <form method="post" class="register_form" action="{{ route('register') }}">
            @csrf
            <div class="register_name">
                <h4 class="register_name_text">Name</h4>

                <input type="text" name="name" class="register_name_input" placeholder="Enter your name">

                <span class="error">@error('name'){{ $message }} @enderror</span>
            </div>

            <div class="register_email">
                <h4 class="register_name_text">Email</h4>

                <input type="text" name="email" class="register_name_input" placeholder="Enter your email address">

                <span class="error">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="register_password">
                <h4 class="register_name_text">Password</h4>

                <input type="password" name="password" class="register_name_input" placeholder="Enter your password">

                <span class="error">@error('password'){{ $message }} @enderror</span>
            </div>

            <button class="register_button">Sign Up</button>
            <h4 class="register_sigin">I don’t have an Account? <a href="" class="register_link">sign Up</a></h4>
        </form>
    </div>
</body>
</html>
