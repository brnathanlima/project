<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Project</title>
</head>
<body>
    <h1>Create a new project</h1>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" id="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" id="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
</body>
</html>
