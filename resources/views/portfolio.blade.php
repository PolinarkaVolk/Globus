@extends('layouts.app')

@section('content')
      <div class="container marketing">
        <h2 class="h2-bold">Портфолио</h2>
      <div class="container mb-5 py-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">
        <div class="col">
        <a href="img/photoholst.jpg" data-lightbox="portfolio" data-title="Описание фотографии">
        <div class="card shadow-sm">
            <img src="img/photoholst.jpg" alt="image">
        </div>
        </a>
        </div>
          <div class="col">
              <div class="card shadow-sm">
                  <img src="img/tables.jpg" alt="image">
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                  <img src="img/shirt.jpg" alt="image">
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/cup.jpg" alt="image">
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                 <img src="img/cape.jpg" alt="image">
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                  <img src="img/visitcard.jpg" alt="image">
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/stands.jpg" alt="image">
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                  <img src="img/vimpel.jpg" alt="image">
              </div>
            </div>
          </div>
          <div class="container-fluid d-flex moreinst align-items-center col-5 px-4 py-4 ">
            <div class="col">
                <h2 class="text-start">Больше в нашем инстаграм</h2>
            </div> 
            <button class="knopka-2"><a href=https://www.instagram.com/ria_globus>Перейти</a></button>
        </div>
</div></div>
        <script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'positionFromTop': 50,
        'showImageNumberLabel': true,
        'alwaysShowNavOnTouchDevices': true,
        'disableScrolling': true,
        'albumLabel': "Изображение %1 из %2",
        'maxWidth': 800,
        'maxHeight': 600
    });
</script>
@endsection