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

        <input type="checkbox" id="check">

        <label for="check">
            <img src="{{ asset('images/user.png') }}" class="header_icon" alt="person" >
        </label>

        <div class="extension">

        </div>

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

    <div class="project_box">
        @foreach ( $history as $key => $data)

            <div class="project_box_section">
                <text>{{ $data->name }}</text><br>
                <text>Creted on {{ $data->created_at }} ({{ $data->project_name }})</text>
            </div>

            <div class="project_box_section_div"></div>
        @endforeach
    </div>
</body>

<script>
    const project_select = document.getElementById("project_header_select");

    project_select.addEventListener("change", (event) => {
        var value = project_select.value;
        {{--  alert(value);  --}}
        document.cookie = "select_project = "  +value;
        window.location.href = "{{ route('history_identify')}}";
    });
</script>

</html>
