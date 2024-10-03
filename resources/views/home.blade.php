

@extends('layouts.app')

@section('content')
      <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Слайд1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Слайд 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Слайд 3" class=""></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://vh163.by1980.hb.by/img/banner.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="80%" fill="var(--bs-secondary-color)"></rect></img>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Оформление классов по подготовке водителей</h1>
                <!-- <p class="opacity-75">Некоторое репрезентативное содержимое-заполнитель для первого слайда карусели.</p> -->
                <!-- <p><a class="btn btn-lg btn-primary" href="#">Зарегистрироваться Сегодня</a></p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Другой пример заголовка.</h1>
                <p>Некоторое репрезентативное содержимое-заполнитель для второго слайда карусели.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Узнать больше</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Еще один для хорошей меры.</h1>
                <p>Некоторые репрезентативные материалы-заполнители для третьего слайда этой карусели.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Просмотреть галерею</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
      <div class="container marketing ">
        <h2 class="text-center pb-5">Почему выбирают нас?</h2>

        <!-- Three columns of text below the carousel -->
        <div class="row mb-5">
            <div class="col-lg-3 text-center">
              <img src="img/15let.svg" alt="icon">
              <p class="pt-3">15 лет работы</p>
              
            </div>
            <div class="col-lg-3 text-center">
              <img src="img/price.svg" alt="icon">
              <p class="pt-3">принцип цена-качество</p>
              
            </div>
            <div class="col-lg-3 text-center">
                <img src="img/sale.svg" alt="icon">
              <p class="pt-3">нашли дешевле —<br> 
                сделаем скидку</p>
              
            </div>
            <div class="col-lg-3 text-center">
                <img src="img/tech.svg" alt="icon">
              <p class="pt-3">профессиональное<br> оборудование</p>
              
            </div>
          </div><!-- /.row -->
          <h2 class="text-center py-4">Наша продукция</h2>
          <div class="container mb-5 py-4">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 mb-5">
            <div class="col">
              <div class="card shadow-sm">
                <img src="https://vh163.by1980.hb.by/img/mainpage_img/photo_naholste.png" alt="image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Фото на холсте</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://vh163.by1980.hb.by/img/mainpage_img/tablichki_nadom.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Таблички на дом</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="https://vh163.by1980.hb.by/img/mainpage_img/maiki.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Майки</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                  <img src="https://vh163.by1980.hb.by/img/mainpage_img/kruzki.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Кружки</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="https://vh163.by1980.hb.by/img/mainpage_img/kepki.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Кепки</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="https://vh163.by1980.hb.by/img/mainpage_img/vizitki.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Визитки</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="https://vh163.by1980.hb.by/img/mainpage_img/zurnaly.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Журналы</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="https://vh163.by1980.hb.by/img/mainpage_img/kalendari.png" alt="image">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text align-self-center mb-0">Календари</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat 7 more times for a total of 8 cards -->
        </div>

        
<div class="container d-flex justify-content-between flex-wrap">   
    <div class="timing-asking">
            <div class="container d-flex">
            <div class="col timing px-4 py-4 mb-3">
                <h2 class="text-start mb-4">График работы</h2>
                <p>Понедельник - Пятница: с 9:00 до 18:00</p>
                <p>Суббота, Воскресенье: выходной</p>
                <P>Обед с 13:00 до 14:00</P>
            </div> 
        </div>
        <div class="container mb-4">
            <h2 class="text-start mb-4 mt-4">Оставь заявку!</h2>

            @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
              </ul>
            @endif
            <form action="/home/check" method="POST" id="contact_form" class="">
                @csrf
                <div class="d-flex gap-2">
                    <div class="name">
                        <label for="name"></label>
                        <input type="text" placeholder="Имя" name="name" id="name_input" required>
                      </div>
                      <div class="email">
                        <label for="email"></label>
                        <input type="email" placeholder="Email" name="email" id="email_input"  required>
                      </div>
                </div>
                <div class="telephone">
                  <label for="name"></label>
                  <input type="text" placeholder="Телефон" name="telephone" id="telephone_input" required>
                </div>
                <div class="message">
                  <label for="message"></label>
                  <textarea name="message" placeholder="Сообщения" id="message_input" cols="30" rows="5" required></textarea>
                </div>
                <div class="submit">
                  <input class="knopka" type="submit" value="Отправить" id="form_button" />
                </div>
            </form>
        </div>  
    </div>
    <div class="where-we">
            <h2 class="pb-3">Где мы?</h2>
            <p class="where-we-text"><b>225209, Брестская область,<br>город Берёза, улица Ленина, 61А</b></p>
            
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.by/maps/org/ria_globus/136129948497/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">РИА Глобус</a><a href="https://yandex.by/maps/102221/beryoza/category/advertising_agency/184107180/?utm_medium=mapframe&utm_source=maps" style="color:#eee;border:0;font-size:12px;position:absolute;top:14px;">Рекламное агентство в Берёзе</a><iframe src="https://yandex.by/map-widget/v1/?ll=24.985436%2C52.534132&mode=search&oid=136129948497&ol=biz&z=16.64" width="588" height="555" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
    </div>
</div>       
    </div>
        <div class="container">
        <h2 class="text-center pt-5">Наши клиенты</h2>
        <div class="wrapper d-flex align-items-center py-5">
            <div class="client-item text-center"><img src="img/saria.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/narutovichi.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/dosaf.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/belozem.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/keramica.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/ksi.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/leshoz.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/kombicormzav.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/brestenergo.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/miasokomb.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/mus.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/belagroprom.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/spmk-22.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/samila.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/sinova.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/brsm.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/profsouz.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/motororem.svg" alt="img"></div>
            <div class="client-item text-center"><img src="img/teplopribor.svg" alt="img"></div>
        </div>
      </div>
@endsection