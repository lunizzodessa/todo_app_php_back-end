<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal;
        }

        #todo-items {
            border: 1px black solid;
            display: inline-block;
            text-align: left;
        }

        #todo-items tr td {
            border: 1px black solid;
            padding: 5px;
        }

        #todo-items tr td.delete a, #todo-items tr td.complete a {
            color: white;
        }

        #todo-items tr td.complete {
            background-color: green;
        }

        #todo-items tr td.delete {
            background-color: red;
        }

    </style>
</head>
<body class="antialiased">
<div style="text-align: center">
    <h1>ToDo App</h1>
</div>

<div style="text-align: center">

    <form method="POST" action="/todo/create">
        @csrf
        <label>Add Task
            <input type="text" name="name" placeholder="Type your task name...">
            <input type="submit" value="Add"/>
        </label>
    </form>
</div>

<div style="text-align: center">
    <h4>ToDo List</h4>

    <table id="todo-items" style="">
        <!-- Copilot helped a bit with the variable name -->
        <!-- But overall got a minimum amount of help in the view from Copilot -->
        @foreach ($todoItems as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td class="complete"><a href="/todo/complete/{{$value->id}}">Complete</a></td>
                <td class="delete"><a href="/todo/delete/{{$value->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
