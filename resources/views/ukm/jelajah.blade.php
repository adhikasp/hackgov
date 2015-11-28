<html>
  <body>
    <h1>Jelajah UKM</h1>

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