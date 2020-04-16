<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
</head>
<body>
  <h1>Blog</h1>

  <ul>
  @foreach ($entries as $entry)
    <li><a href="{{ action("EntriesController@show", $entry->id) }}">{{$entry->title}}</a></li>
  @endforeach
  </ul>
</body>
</html>