<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body>
    Todo Create

    <form action="{{ route('todo.store') }}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <button>save</button>
    </form>
</body>
</html>