<html>
  <body>
    <h1>Manage UKM {{ $ukm->name }}</h1>
    <hr>
    <h2>Edit Detail UKM</h2>
    <form action="{{ route('ukm.update', [$ukm->id]) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama:<br>
        <input type="text" name="name" value="{{ $ukm->name }}">
        <br>
        Deskripsi:<br>
        <input type="text" name="long_description" value="{{ $ukm->long_description }}"> <br>
        Profile photo:<br>
        <input type="text" name="profile_picture" value="{{ $ukm->profile_picture }}">
        <br>
        <input type="submit" value="Update">
    </form>
    </form>

  </body>
</html>