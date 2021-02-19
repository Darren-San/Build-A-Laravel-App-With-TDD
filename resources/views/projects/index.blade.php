<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1>Birdboad</h1>

  <ul>
    @forelse ($projects as $project)
    <li>
      <a href="{{ $project->path() }}">{{ $project->title}}</a>
    </li>
    @empty
    <h1>No projects yet.</h1>
    @endforelse
  </ul>
</body>
</html>
