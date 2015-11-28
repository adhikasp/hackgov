<html>
  <body>
    <h1>Manage UKM {{ $ukm->name }}</h1>
    <hr>
    <h2>Deskripsi</h2>
    <img src="{{ $ukm->profile_picture }}" alt="">
    <p>{{ $ukm->long_description }}</p>
    <a href="{{ route('ukm.edit', [$ukm->id]) }}">Edit deskripsi</a>

    <hr>
    <h2>Daftar Artikel</h2>
    @unless ($articles == null)
        <ul>
            @foreach ($articles as $article)
                <li><a href="">{{ $article->title }}</a></li>
            @endforeach
        </ul>
    @endunless
    <a href="{{ route('ukm.article.create', [$ukm->id]) }}">Buat artikel baru</a>

    <hr>
    <h2>Produk</h2>
    <a href="">Lihat produk</a>

  </body>
</html>