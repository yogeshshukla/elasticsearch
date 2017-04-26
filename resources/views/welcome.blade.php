<html>
<body>
<form method="get" action="{{url('/')}}">
	<input type="text" name="query" value=""/>
	<input type="submit"/>
</form>

@foreach($posts as $post)
 <div>
  <h2>{{{ $post->title }}}</h2>
  <div>{{{ $post->content }}}</div>
  <div><small>{{{ $post->tags }}}</small></div>
 </div>
@endforeach
</body>
</html>