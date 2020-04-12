<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Laravel TDD</title>
</head>
<body>
    <h1>Test App</h1>

    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
        @forelse($projects as $project)
            <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
        @empty
            <li>No projects yet.</li>
        @endforelse
    </ul>
</body>
</html>
