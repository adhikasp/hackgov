<html>
  <body>
    Hallo {{ $user->name }}!
    <br>
    <a href="{{ route('ukm.create') }}">Buka UKM baru</a>
    <hr>

    @foreach ($ukms as $ukm)
      <div>
        <img src="{{ $ukm->profile_picture }}" alt=""> <br>
        {{ $ukm->name }} <br>
        {{ $ukm->short_description }}
      </div>
      <hr>
    @endforeach
  </body>
</html>