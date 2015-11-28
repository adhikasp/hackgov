<html>
  <body>
    <h1>Puwan - Peluang Usaha Wanita</h1>
    <h2>Login</h2>
    <form action="{{ route('auth.processLogin') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Email:<br>
        <input type="text" name="email">
        <br>
        Password:<br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Masuk">
    </form>
    <h2>Daftar UKM</h2>
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