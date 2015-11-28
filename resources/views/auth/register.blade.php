<html>
  <body>
    <form action="{{ route('auth.processRegister') }}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nama:<br>
        <input type="text" name="name">
        Email:<br>
        <input type="text" name="email">
        <br>
        Password:<br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Masuk">
    </form>
  </body>
</html>