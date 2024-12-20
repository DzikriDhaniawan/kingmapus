<!DOCTYPE html>
<html>
<head>
  <title>KosMaPus - {{ $detailKost->nama }}</title>
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body>
    <div class="header">
        <div class="logo">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
          <a href="/user" style="text-decoration: none;">KosMaPus</a>
        </div>
        <div class="nav">
          <a href="1.html#search-bar">Cari Kos</a>
          <a href="1.html#footer">Hubungi Kami</a>
          <a href="1.html#footer">FAQ</a>
          <a href="tentang.html">Tentang KosMaPus</a>
        </div>
        <div class="auth">
          <a href="login">
            <i class="fas fa-user"></i>
          </a>
        </div>
      </div>
      <div class="container">
        <div class="main-image">
          <div class="placeholder">
            <img src="{{ asset('img/' . $detailKost->gambarKos1) }}" alt="Main Image" />
          </div>
          <div class="thumbnail-images">
            <div class="placeholder">
                <img src="{{ asset('img/' . $detailKost->gambarKos2) }}" alt="Thumbnail 1" />
            </div>
            <div class="placeholder">
                <img src="{{ asset('img/' . $detailKost->gambarKos3) }}" alt="Thumbnail 2" />
            </div>
            <div class="placeholder">
                <img src="{{ asset('img/' . $detailKost->gambarKos4) }}" alt="Thumbnail 3" />
            </div>
            <div class="placeholder">
                <img src="{{ asset('img/' . $detailKost->gambarKos5) }}" alt="Thumbnail Gallery" style="width: 100%; height: 100%; object-fit: cover;" />
                <a href="/gallery" class="view-gallery">Lihat semua</a>
            </div>
          </div>
        </div>
    </div>

    <div class="details">
      <div>
        <div class="title">{{ $detailKost->namaKos }}</div>
        <div class="location">
          <i class="fas fa-map-marker-alt"></i>
          {{ $detailKost->lokasiKos }}
        </div>
      </div>
      <div>
        <div class="price" style="margin-left: 20px;">{{ $detailKost->hargaKos }} <span>/bulan</span></div>
        <div class="actions">
          <a href="https://wa.me/6285969084584" target="_blank">
            <i class="fas fa-comment-dots chat-icon"></i>
          </a>
          <a href="/pembayaran" style="text-decoration: none;">
          <div class="button">Pesan Sekarang</div></a>
        </div>
      </div>
    </div>
    <div class="tags">
      <div class="tag">{{ $detailKost->tagKos }}</div>
      <div class="verified">Terverifikasi</div>
    </div>
    <div class="section">
      <div class="title">Fasilitas</div>
      <div class="facilities">
        <div class="facility">{{ $detailKost->fasilitas1 }}</div>
        <div class="facility">{{ $detailKost->fasilitas2 }}</div>
        <div class="facility">{{ $detailKost->fasilitas3 }}</div>
        <div class="facility">{{ $detailKost->fasilitas4 }}</div>
        <div class="facility">{{ $detailKost->fasilitas5 }}</div>
      </div>
    </div>
    <div class="section">
      <div class="title">Aturan Menginap</div>
      <div class="rules">
        <div class="rule">{{ $detailKost->aturan2 }}</div>
        <div class="rule">{{ $detailKost->aturan3 }}</div>
        <div class="rule">{{ $detailKost->aturan4 }}</div>
        <div class="rule">{{ $detailKost->aturan5 }}</div>
      </div>
    </div>
    <div class="section">
        <div class="title">Alamat Lengkap</div>
        <div class="address">
            <a href="{{ $detailKost->gmapsKos }}" target="_blank" class="map-link">
                <iframe src="https://maps.google.com/maps?q=-8.681626,115.162476&hl=es;z=14&output=embed" 
                  width="600" 
                  height="300" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy">
                </iframe>
            </a>
        </div>
    </div>    
</body>
</html>
