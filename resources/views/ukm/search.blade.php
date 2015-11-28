<html>
  <body>
    <h1>Cari UKM '{{ $keyword }}'</h1>

    @if ($ukms == null )
      <p>Maaf UKM tersebut belum ada di komunitas kami.</p>
    @else
      @foreach ($ukms as $ukm)
        <div>
          <img src="{{ $ukm->profile_picture }}" alt=""> <br>
          {{ $ukm->name }} <br>
          {{ $ukm->short_description }}
        </div>
        <hr>
      @endforeach
    @endif
  </body>
</html>