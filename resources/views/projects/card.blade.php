<div class="card" style="height: 200px">
  <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-light pl-4">
    <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
  </h3>
  <div class="text-gray-400 lg:break-words">{{ str_limit($project->description, 100) }}</div>
  <footer>
    <form method="POST" action="{{ $project->path() }}" class="text-right">
      @method('DELETE')
      @csrf
      <button type="submit" class="ml-2 inline-block rounded-lg text-xs font-medium leading-none py-2 px-3 focus:outline-none bg-indigo-50 text-indigo-700 no-underline">Delete</button>
    </form>
  </footer>
</div>
