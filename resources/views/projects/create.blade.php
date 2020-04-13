<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
<form action="/projects" method="post" class="container" style="padding-top: 40px;">
    @csrf

    <h1 class="heading is-1">Create a Project</h1>

    <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
            <input type="text" name="title" class="input" placeholder="Title"/>
        </div>
    </div>

    <div class="field">
        <label for="description" class="label"></label>

        <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </div>
</form>
</body>
</html>
