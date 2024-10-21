<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/bg1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/main.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
        <h3 class="project_header_text">All Projects</h3>
    </div>

    <div class="project_box">
        @for($i = 0; $i < 6; $i++)


        <div class="project_box_section">
            <img src="{{ asset('images/folder.png') }}" class="project_box_section_folder" alt="folder">
            <label class="project_box_section_text">sskdsdskdksk</label>
            <img src="{{ asset('images/delete.png') }}" class="project_box_section_delete" alt="delete">
            <img src="{{ asset('images/edit.png') }}" class="project_box_section_edit" alt="edit">
        </div> <br>

        {{--  <div class="project_box_space"></div><br>  --}}
        @endfor
    </div>

    <div class="project_create_btn" id="project_create_btn">
        <span>
            <img src="{{ asset('images/plus.png') }}" alt="plus icon" class="project_create_btn_icon">
            <text class="project_create_btn_txt">Create</text>
        </span>
    </div>
</body>

<script src="{{ URL('js/projects.js') }}"></script>

</html>
