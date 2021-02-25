@extends ('layouts.app')

@section('content')
  <div class="flex items-center mb-3">
    <a href="/projects/create">New Project</a>
  </div>

  <ul>
    @forelse ($projects as $project)
      <li>
        <a href="{{ $project->path() }}">{{ $project->title}}</a>
      </li>
    @empty
      <h1>No projects yet.</h1>
    @endforelse
  </ul>
@endsection
