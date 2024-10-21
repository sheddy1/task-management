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
    {{--  header section  --}}
    <div class="header">
        <h1 class="header_main_text">Task Manager</h1>

        <ul>
            <li><a href="{{ route('main') }}">Projects</a></li>
            <li><a href="{{ route('task') }}">Tasks</a></li>
            <li><a href="{{ route('history') }}">History</a></li>
        </ul>

        <img src="{{ asset('images/user.png') }}" class="header_icon" alt="person">
    </div>

    {{--  body section  --}}
    <div class="project_header">
        <h3 class="project_header_text">Projects</h3>
    </div>

    <table class="project_table">
        <tr><td style="height: 10px;">sasasmmasm</td></tr>

        <tr><td style="height: 10px;">sasasmmasm</td></tr>

        <tr><td style="height: 10px;">sasasmmasm</td></tr>

        <tr><td style="height: 10px;">sasasmmasm</td></tr>
    </table>
</body>
</html>
