<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <link rel="favicon" href="https://vh163.by1980.hb.by/img/logo.svg">
    <title>Главная</title>
</head>
<body>

    
        
<div class="menu">
  <div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-4 mb-4">
    <div class="col-md-2 mb-2 lg-1 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="https://vh163.by1980.hb.by/img/logo.svg" alt="Главная страница Глобус">
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 menu">
      <li class="dropdown">
        <a href="categories.html" class="nav-link px-2 menu-link" data-bs-toggle="dropdown">ПРОДУКЦИЯ <img src="https://vh163.by1980.hb.by/img/arrow-down.svg"></a>
        <ul class="dropdown-menu">
          @foreach($categories as $category)
          <li><a href="{{route('showCategoryModel', $category->alias)}}" class="dropdown-item"><img src="{{$category->img}}"> &nbsp;&nbsp;{{$category->title}}</a></li>
          @endforeach
        </ul>
      </li>
      
      <li class="dropdown">
    <a href="#" class="nav-link px-2 menu-link" data-bs-toggle="dropdown">УСЛУГИ <img src="https://vh163.by1980.hb.by/img/arrow-down.svg"></a>
    <ul class="dropdown-menu secondrop">
    @foreach($services as $service) 
    <li><a href="{{ route('showServiceModel', $service->alias) }} "class="dropdown-item"><img src="{{$service->img}}">&nbsp;&nbsp;{{ $service->title }}</a></li>
@endforeach
    </ul>
</li>
      <li><a href="/portfolio" class="nav-link px-2 menu-link">ПОРТФОЛИО</a></li>
      <li><a href="#" class="nav-link px-2 menu-link">ДОСТАВКА</a></li>
    </ul>

    <div class="col-md-3 text-end ml-3">

    
      <a href="#" class="btn-icon left">
        <img src="https://vh163.by1980.hb.by/img/search.svg" alt="Search" width="55" height="55">
        <form id="search" method="GET" action="{{ route('product.search') }}" class="search-form">
          <input type="text" name="zapros" placeholder="Введите запрос...">
          <button>Найти</button>
        </form>
      </a>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-form input[type="text"]');
    
    searchInput.addEventListener('mousedown', function(event) {
        event.stopPropagation(); // Останавливаем распространение события
    });

    searchInput.addEventListener('click', function(event) {
        event.stopPropagation(); // Останавливаем распространение события
    });

    document.addEventListener('click', function() {
        searchInput.focus(); // Сохраняем фокус на строке поиска при клике за пределами нее
    });
});


      </script>
      <a href="#" class="btn-icon">
        <img src="https://vh163.by1980.hb.by/img/call.svg" alt="Call" width="55" height="55">
      </a>
    </div>
    <div class="container mobile-menu">
  <header class="d-flex flex-wrap align-items-center justify-content-between py-4 mb-4">
    <div>
      <a href="/" class="link-body-emphasis text-decoration-none">
        <img src="https://vh163.by1980.hb.by/img/logo.svg" alt="Главная страница Глобус" width="60">
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <span class="burger-icon"></span>
      </span>
    </button>

    <ul class="nav collapse navbar-collapse" id="navbarToggle">
      <li class="dropdown">
        <a href="categories.html" class="nav-link px-2 menu-link" data-bs-toggle="dropdown">ПРОДУКЦИЯ <img src="https://vh163.by1980.hb.by/img/arrow-down.svg"></a>
        <ul class="dropdown-menu">
          @foreach($categories as $category)
          <li><a href="{{route('showCategoryModel', $category->alias)}}" class="dropdown-item"><img src="{{$category->img}}"> &nbsp;&nbsp;{{$category->title}}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link px-2 menu-link" data-bs-toggle="dropdown">УСЛУГИ <img src="https://vh163.by1980.hb.by/img/arrow-down.svg"></a>
        <ul class="dropdown-menu secondrop">
        @foreach($categories_serv as $category_serv)
    <li>
        <a href="" class="dropdown-item">
            <img src=""> 
        </a>
    </li>
@endforeach
        </ul>
      </li>
      <li><a href="/portfolio" class="nav-link px-2 menu-link">ПОРТФОЛИО</a></li>
      <li><a href="#" class="nav-link px-2 menu-link">ДОСТАВКА</a></li>
      
      
    </ul>
    
  </header>
</div>

<script>
let menuBtn = document.querySelector('.navbar-toggler');
let menu = document.querySelector('.nav');
let menuItem = document.querySelectorAll('.menu-link');
let burgerIcon = document.querySelector('.burger-icon');

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');

	if (burgerIcon.classList.contains('active')) {
		burgerIcon.classList.remove('active');
	} else {
		burgerIcon.classList.add('active');
	}
})

menuItem.forEach (function(menuItem) {
  menuItem.addEventListener('click',function(){
          menuBtn.classList.toggle('active');
          menu.classList.toggle('active');
          burgerIcon.classList.remove('active');
  })
})
</script>
  </header>
  </div>
</div>
         
 













<div class="container mobile-menu">
  <header class="d-flex flex-wrap align-items-center justify-content-between py-4 mb-4">
    <div>
      <a href="/" class="link-body-emphasis text-decoration-none">
        <img src="https://vh163.by1980.hb.by/img/logo.svg" alt="Главная страница Глобус" width="60">
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <span class="burger-icon"></span>
      </span>
    </button>

    <ul class="nav collapse navbar-collapse" id="navbarToggle">
      <li class="dropdown">
        <a href="categories.html" class="nav-link px-2 menu-link" data-bs-toggle="dropdown">ПРОДУКЦИЯ <img src="https://vh163.by1980.hb.by/img/arrow-down.svg"></a>
        <ul class="dropdown-menu">
          @foreach($categories as $category)
          <li><a href="{{route('showCategoryModel', $category->alias)}}" class="dropdown-item"><img src="{{$category->img}}"> &nbsp;&nbsp;{{$category->title}}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link px-2 menu-link" data-bs-toggle="dropdown">УСЛУГИ <img src="https://vh163.by1980.hb.by/img/arrow-down.svg"></a>
        <ul class="dropdown-menu secondrop">
          
          
         
        </ul>
      </li>
      <li><a href="/portfolio" class="nav-link px-2 menu-link">ПОРТФОЛИО</a></li>
      <li><a href="#" class="nav-link px-2 menu-link">ДОСТАВКА</a></li>
      <form action="{{ route('product.search') }}" method="get" class="mobile-search-form">
        <input type="text" name="zapros" placeholder="Поиск..." class="mobile-search-input">
        <button type="submit" class="mobile-search-button">Поиск</button>
      </form>
    </ul>
  </header>
</div>

<script>
let menuBtn = document.querySelector('.navbar-toggler');
let menu = document.querySelector('.nav');
let menuItem = document.querySelectorAll('.menu-link');
let burgerIcon = document.querySelector('.burger-icon');

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');

	if (burgerIcon.classList.contains('active')) {
		burgerIcon.classList.remove('active');
	} else {
		burgerIcon.classList.add('active');
	}
})

menuItem.forEach (function(menuItem) {
  menuItem.addEventListener('click',function(){
          menuBtn.classList.toggle('active');
          menu.classList.toggle('active');
          burgerIcon.classList.remove('active');
  })
})
</script>    
