<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/bg1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/history.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquershfy.min.js"></script>
    <title>History</title>
</head>
<body>
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
        <h3 class="project_header_text">Completed Tasks</h3>
            <select name="" class="project_header_select" id="project_header_select">
                <option value="sdsds">Select Project</option>
                @foreach($project as $key => $data)
                    <option value="{{ $data->unique_id }}">{{ $data->name }}</option>
                @endforeach
            </select>

    </div>

    @for($i = 0; $i < 4; $i++)

    @endfor

        <div class="project_box_section">
            <form action="{{ route('check_task') }}" method="post">
                @csrf
                <button class="project_box_section_check">
                    <img src="{{ asset('images/checked.png') }}" alt="checked" class="project_box_section_check1">
                </button>
                <input type="text" name="edit_id" style="display: none" value="{{ $data->unique_id  }}">
            </form>

            {{--  <input type="checkbox" class="project_box_section_check">  --}}
            {{--  <img src="{{ asset('images/folder.png') }}" class="project_box_section_folder" alt="folder">  --}}

            <label class="project_box_section_text">{{ $data->name }}</label>

            <form action="{{ route('delete_task') }}" method="post">
                <button class="project_box_section_delete">
                    @csrf
                    <img src="{{ asset('images/delete.png') }}" class="project_box_section_edit1"
                     alt="edit">
                </button>
                <input type="text" name="edit_id" style="display: none" value="{{ $data->unique_id  }}">
            </form>

            <form action="{{ route('task_edit') }}" method="post">
                <button class="project_box_section_edit" id="project_box_section_edit">
                    @csrf
                    <img src="{{ asset('images/edit.png') }}" class="project_box_section_edit1"
                     alt="edit">
                </button>
                <input type="text" name="edit_id" style="display: none" value="{{ $data->unique_id  }}">
            </form>

            <text class="project_box_section_description1">created on {{ $data->created_at }}</text>

            <text class="project_box_section_description2">{{ $data->project_name }} </text>
        </div> <br>
        <div class="project_box_section_div"></div>
        @endfor
</body>
</html>
