<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show</title>
</head>
<body>
	<h2>title :{{ $article->title}}</h2>
	<h2>ผู้โพส :{{ $article->user()->first()->username}}</h2>
	<h2>time create: {{ \Carbon::createFromTimestamp(strtotime($article->created_at))->diffForHumans() }}</h2>
	<h2>time update: {{ \Carbon::createFromTimestamp(strtotime($article->updated_at))->diffForHumans() }}</h2>
	<p>{{ $article->content }}</p>
	<a href="{{route('blog.index') }}">[Back]</a>
	<a href="{{route('blog.edit', $article->id) }}">[EDIT]</a>

	<br><br><br><br>
	<form action="{{route('blog.destroy', $article->id)}}" method="post">
		{{ csrf_field()}}
		{{ method_field("DELETE") }}
		<input type="submit" onclick="return confirm('Do you want to delete?')" value="DELETE">
	</form>

</body>
</html>