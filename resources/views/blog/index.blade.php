<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
</head>
<body>
	<h1>Hello Blog {{ \Auth::user()->username }}</h1>
	<div style="color: green">{{ session('status') }}</div>
	<a href="{{ route('blog.create') }}">CREATE</a>
	<table width="500">
		<tr>
			<th align="left">ID</th>
			<th align="left">Title</th>
			<th align="left">User</th>s
		</tr>
		@foreach($articles as $article)
		<tr>
			<td>{{ $article->id }}</td>
			<td><a href="{{route('blog.show', $article->id) }}"> {{ $article->title }} </a></td>
			<td>{{ $article->user()->first()->username }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>