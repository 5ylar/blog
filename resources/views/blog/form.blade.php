<?php
$edit = !isset($edit) ? null : $edit;
$title = $edit ? $article->title : null;
$content = $edit ? $article->content : null;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>
	@if ($errors->any())
	    <div class="alert alert-danger" style="color: red;">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{ $edit ? route('blog.update',$id) : route('blog.store') }}" method="post">
		{{ csrf_field()}}
		@if($edit)
			{{ method_field("PUT") }}
		@endif
		<table width="100%">
			<tr>
				<td>
					title
					<input type="text" name="title" value="{{ $title}}">
				</td>
			</tr>
			<tr>
				<td>
					<div>content</div>
					<textarea rows="10" style="width:100%;" name="content">{{$content}}</textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="SAVE"></td>
			</tr>
		</table>
	</form>
</body>
</html>