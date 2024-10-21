<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/welcome.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="register">
        {{--  text headers  --}}
        <text class="register_header">Task Manager</text>

        <h4 class="register_text2">Let’s Help You Manage Your Tasks!</h4>

        {{--  form for input  --}}
        <form action="" class="register_form">
            <div class="register_name">
                <h4 class="register_name_text">Name</h4>

                <input type="text" class="register_name_input" placeholder="Enter your name">
            </div>

            <div class="register_email">
                <h4 class="register_name_text">Email</h4>

                <input type="text" class="register_name_input" placeholder="Enter your email address">
            </div>

            <div class="register_password">
                <h4 class="register_name_text">Password</h4>

                <input type="text" class="register_name_input" placeholder="Enter your password">
            </div>

            <button>Sign Up</button>
        </form>
    </div>
</body>
</html>
