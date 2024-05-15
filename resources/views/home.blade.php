@extends('main')

@section('navbar')
<a href="add" class="btn solid info mx-6 mb-5">Add</a>
<div class="mw-screen grid grid-cols-4 gap-10 justify-center mx-6">
@foreach($note as $n)
<div class="box-border rounded-lg has-border boldest wider has-shadow w-full p-4 flex flex-col gap-2">
	<div>
		<a href="{{ $n->id }}/edit" class="btn solid success p-3 rounded-full">
			<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M8.707 19.707 18 10.414 13.586 6l-9.293 9.293a1.003 1.003 0 0 0-.263.464L3 21l5.242-1.03c.176-.044.337-.135.465-.263zM21 7.414a2 2 0 0 0 0-2.828L19.414 3a2 2 0 0 0-2.828 0L15 4.586 19.414 9 21 7.414z"></path></svg>
		</a>
		<form class="btn solid danger p-3 rounded-full" action="/update/{{$n->id}}" method="post">
			@csrf
			@method('delete')
		<button>
			<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg>
		</button>
		</form>
	</div>
	<div class="flex justify-between items-baseline">
		<h3 class="text-3xl font-semibold">{{ $n->title }}</h3>
	</div>
	<div class="text-sm">
		<p>
			{{ $n->content }}
		</p>
	</div>
</div>
@endforeach
</div>
@endsection