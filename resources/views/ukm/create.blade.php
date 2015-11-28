<html>
  <body>
    <form action="{{ route('ukm.store') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama UKM:<br>
        <input type="text" name="name"><br>
        Kategori:<br>
        <input type="text" name="category"><br>
        Deskripsi singkat:<br>
        <input type="text" name="short_description"><br>
        Deskripsi mendetail: <br>
        <input type="text" name="long_description"><br>
        <br>
        <input type="submit" value="Buat">
    </form>
  </body>
</html>