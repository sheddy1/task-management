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
            <li><a href="{{ route('main') }}"><h4 class="link_bold">Projects</h4></a></li>
            <li><a href="{{ route('task') }}"><h4 class="link_thin">Tasks</h4></a></li>
            <li><a href="{{ route('history') }}"><h4 class="link_thin">History</h4></a></li>
        </ul>

        <img src="{{ asset('images/user.png') }}" class="header_icon" alt="person">
    </div>
</body>
</html>
