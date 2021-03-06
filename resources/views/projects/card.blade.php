<div class="card" style="height: 200px">
  <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-accent-light pl-4">
    <a href="{{ $project->path() }}" class="text-default no-underline">{{ $project->title }}</a>
  </h3>
  <div class="lg:break-words">{{ str_limit($project->description, 100) }}</div>
  @can ('manage', $project)
    <footer>
      <form method="POST" action="{{ $project->path() }}" class="text-right">
        @method('DELETE')
        @csrf
        <button type="submit" class="button-light">Delete</button>
      </form>
    </footer>
  @endcan
</div>
