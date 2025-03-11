<!DOCTYPE html>
<html>
<head>
    <title>Simple Task App</title>
    @vite(['resources/css/app.less', 'resources/js/app.js'])
</head>
<body>
    <h1>Task List</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="New Task">
        <button type="submit">Add Task</button>
    </form>
</body>
</html>
