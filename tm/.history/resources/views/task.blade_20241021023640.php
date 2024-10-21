@php
use Illuminate\Support\Facades\Session;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/bg1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/task.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquershfy.min.js"></script>
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
        <h3 class="project_header_text">All Tasks</h3>
            <select name="" class="project_header_select" id="project_header_select">
                <option value="sdsds">Select Project</option>
                @foreach($project as $key => $data)
                    <option value="{{ $data->unique_id }}">{{ $data->name }}</option>
                @endforeach
            </select>

    </div>

    <div class="project_box">
        @foreach ( $task as $key => $data)

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
        @endforeach

        {{--  <div class="project_box_space"></div><br>  --}}
    </div>

    <div class="project_create_btn" id="project_create_btn">
        <span>
            <img src="{{ asset('images/plus.png') }}" alt="plus icon" class="project_create_btn_icon">

            <text class="project_create_btn_txt">Create Tasks</text>
        </span>
    </div>

    {{--  create projects box  --}}
    <div class="create_project_box" id="create_project_box">
        <text class="create_project_box_header">Tasks</text>

        <img src="{{ asset('images/close.png') }}" alt="close" class="create_project_box_close" id="create_project_box_close">

        {{--  input for create project box  --}}
        <form action="{{ route('create_task') }}" method="post">
            @csrf
            <text class="create_project_box_input_txt1">Project</text>

            <select name="project_input_select" id="" class="create_project_box_select">
                <option value=""><Select:disabled>Select a Project</Select:disabled></option>
                @foreach ($project as $key => $data )
                    <option value="{{ $data->unique_id }}">{{ $data->name }}</option>
                @endforeach

            </select>

            <span class="project_create_error1">@error('project_input_select'){{ $message}} @enderror</span>

            <text class="create_project_box_input_txt">Name</text>

            <textarea name="task_name" id="" cols="" rows=""
            class="create_project_box_input" placeholder="Task Name"></textarea>

            <span class="project_create_error">@error('project_name'){{ "Enter a Project Name" }} @enderror</span>

            <button class="create_project_box_button">
                Create
            </button>
        </form>
    </div>


    {{-- edit box  --}}
    <div class="edit_project_box" id="edit_project_box" style="display: {{ $edit_display }}">
        <text class="create_project_box_header">Edit Projects</text>

        <form action="{{ route('task') }}" method="get">
            <button>
                <img src="{{ asset('images/close.png') }}" alt="close" class="create_project_box_close" id="edit_project_box_close">
            </button>

        </form>

        {{--  input for create project box  --}}
        <form action="{{ route('create_project') }}" method="post">
            @csrf
            <text class="create_project_box_input_txt1">Project</text>

            <select name="project_input_select" id="" class="create_project_box_select">
                <option value=""><Select:disabled>{{ $project_name }}</Select:disabled></option>
                @foreach ($project as $key => $data )
                    <option value="{{ $data->unique_id }}">{{ $data->name }}</option>
                @endforeach

            </select>

            <span class="project_create_error1">@error('project_input_select'){{ $message}} @enderror</span>

            <text class="create_project_box_input_txt">Name</text>

            <textarea name="project_name" id="" cols="30" rows="10"
            class="create_project_box_input" placeholder="{{ $task_name }}"></textarea>

            <span class="project_create_error">@error('project_name'){{ "Enter a Project Name" }} @enderror</span>

            <button class="create_project_box_button">
                Edit
            </button>
        </form>
    </div>
</body>

{{--  <script src="{{ URL('js/projects.js') }}"></script>  --}}

<script>

    const create = document.getElementById("project_create_btn");

    create.addEventListener("click", (event) => {
        document.getElementById("create_project_box").style.display = "block";
    });

    const close_create = document.getElementById("create_project_box_close");

    close_create.addEventListener("click", (event) => {
        document.getElementById("create_project_box").style.display = "none";
    });

    const project_select = document.getElementById("project_header_select");

    project_select.addEventListener("change", (event) => {
        var search_input = selectedElement.value;;
        alert(search_input);

    });

</script>

</html>
