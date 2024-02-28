@extends('layouts.app')
@section('body')

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H.peminjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://static.uc.ac.id/library/2019/03/5c91b40a288a2-5c91b40a288e019.-Hong-Florencia-S.-20316006-Foto-2-di-balik-sebuah-rak.jpg-1030x686.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h5>Perpustakaan</h5>
                <p>PerPeUs H4z</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://2.bp.blogspot.com/-yd0Efv3V1cc/VzLIcG_4PTI/AAAAAAAAACM/smjM90Fj7x4TIgqAaSGMRbg5_bZW_uNZQCLcB/s1600/56.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>PerPeUs H4z</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://i0.wp.com/smkn12malang.sch.id/wp-content/uploads/2023/01/08.-Rak-Buku-Pengembangan-Diri.jpg?fit=1280%2C590&ssl=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>PerPeUs H4z</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container-fluid text-center mt-3">
        <div class="d-flex justify-content-start row p-1 g-1">
            @foreach ($huhu as $item)
            <div class="card" style="width: 19rem;">
              <img src="https://cdn.gramedia.com/uploads/items/Cover-Depan-Malin-Kundang-Cikal-Aksara-600x771.jpg" class="" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$item->buku}}</h5>
                <h5 class="card-title">{{$item->judul}}</h5>
                <p class="card-text">{{$item->judul}}</p>
                <p class="card-text">{{$item->penulis}}</p>
                <p class="card-text">{{$item->penerbit}}</p>
                <p class="card-text">{{$item->description}}</p>
                <a href="#" class="btn btn-primary">Pinjam</a>
              </div>
        </div>
        @endforeach
      </div>
      </div>
  </body>
</html>
@endsection
