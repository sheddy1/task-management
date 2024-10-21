<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/bg1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/main.css') }}">
    <title>Projects</title>
</head>
<body>
    <div class="header">
        <h1 class="header_main_text">Task Manager</h1>

        <ul>
            <li class="link_bold"><a href="{{ route('main') }}">Projects</a></li>
            <li class="link_thin"><a href="{{ route('task') }}">Tasks</a></li>
            <li class="link_thin"><a href="{{ route('history') }}">History</a></li>
        </ul>

        <img src="{{ asset('images/user.png') }}" class="header_icon" alt="person">
    </div>
</body>
</html>
