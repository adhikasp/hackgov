<html>
  <body>
    <h1>Manage UKM {{ $ukm->name }}</h1>
    <hr>
    <h2>Buat artikel</h2>

    <form action="{{ route('ukm.article.store', [$ukm->id]) }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      Judul:<br>
      <input type="text" name="title"> <br>
      Artikel:<br>
      <textarea rows="4" cols="50" name="body">
      </textarea>
      <br>
      <input type="submit" value="Post">
    </form>

  </body>
</html>