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
    </div>

    <div class="project_box">
        @for($i = 0; $i < 4; $i++)

        <div class="project_box_section">
            <input type="checkbox" class="project_box_section_check">
            {{--  <img src="{{ asset('images/folder.png') }}" class="project_box_section_folder" alt="folder">  --}}

            <img src="{{ asset('images/delete.png') }}" class="project_box_section_delete" alt="delete">

            <img src="{{ asset('images/edit.png') }}" class="project_box_section_edit"
            id="project_box_section_edit" alt="edit">

            <text class="project_box_section_description1">created on </text>

            <text class="project_box_section_description2">Anitas proects </text>
        </div> <br>
        <div class="project_box_section_div"></div>
        @endfor

        {{--  <div class="project_box_space"></div><br>  --}}
    </div>

    <div class="project_create_btn" id="project_create_btn">
        <span>
            <img src="{{ asset('images/plus.png') }}" alt="plus icon" class="project_create_btn_icon">

            <text class="project_create_btn_txt">Create</text>
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
                    {{--  <input type="text" name="unique_id" value="{{ $data->unique_id }}" style="display: none ">  --}}
                @endforeach

            </select>
            <span class="project_create_error1">@error('project_input_select'){{ $message}} @enderror</span>

            <text class="create_project_box_input_txt">Name</text>

            <textarea name="project_name" id="" cols="" rows=""
            class="create_project_box_input" placeholder="Project Name"></textarea>

            <span class="project_create_error">@error('project_name'){{ "Enter a Project Name" }} @enderror</span>

            <button class="create_project_box_button">
                Create
            </button>
        </form>
    </div>

    {{--  edit projects box  --}}
    <div class="edit_project_box" id="edit_project_box">
        <text class="create_project_box_header">Edit Projects</text>

        <img src="{{ asset('images/close.png') }}" alt="close" class="create_project_box_close" id="create_project_box_close">

        {{--  input for create project box  --}}
        <form action="{{ route('create_project') }}" method="post">
            @csrf
            <text class="create_project_box_input_txt">Name</text>

            <textarea name="project_name" id="" cols="30" rows="10"
            class="create_project_box_input" placeholder="Project Name"></textarea>

            <span class="project_create_error">@error('project_name'){{ "Enter a Project Name" }} @enderror</span>

            <button class="create_project_box_button">
                Edit
            </button>
        </form>
    </div>
</body>

<script src="{{ URL('js/projects.js') }}"></script>

<script>

    const edit = document.getElementById("project_box_section_edit");

    edit.addEventListener("click", (event) => {
        alert("jesus is");
    });


</script>

</html>
