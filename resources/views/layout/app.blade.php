<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ URL::to('css/app.css') }}" rel="stylesheet">
  <script type="module" src="{{ URL::to('js/MarkModelView.js') }}"></script>
  <script type="module" src="{{ URL::to('js/ModelView.js') }}"></script>
  <script type="module" src="{{ URL::to('js/markSelect.js') }}"></script>
  <script type="module" src="{{ URL::to('js/modelSelect.js') }}"></script>


  <script src="{{ URL::to('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ URL::to('js/main.js') }}"></script>
  <script type="module" src="{{ URL::to('js/emptyModelsForm.js') }}"></script>
  <script type="module" src="{{ URL::to('js/ajax-request.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ URL::to('fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ URL::to('fontawesome/css/solid.css')}}">
  <link rel="stylesheet" href="{{ URL::to('font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ URL::to('fontawesome/css/fontawesome.min.css')}}">
  <title>TURBO</title>

  <nav id="slide-menu">
    <ul>
        <li class="home"><i class="fas fa-home"></i><a href="#headup">Главная</li>
        <li class="events"><i class="fas fa-car"></i>Марка и Модель</li>
        <li class="calendar"><i class="fas fa-newspaper"></i>Запрос по артикулю</li>
        <li class="calendar"><i class="fas fa-file"></i>Документы</li>
        <li class="sep map-icon"><i class="fas fa-map-marker-alt"></i><a href="#geo">Как найти?</a></li>
    </ul>
  </nav>

    <div class="icon-menu-trigger" onclick="return menuClick(this);"></div>
</head>

  <!-- Content panel -->
  <div id="content"><body><main>	<div class="icon-menu-trigger" onclick="return menuClick(this);"></div>
  <section class="main-section head-section">
        <div class="head-container">
            <div class="logo-text">
              <p>Логотип</p>
            </div>
          </div>
    </section>


@yield('content')

  </div> <!-- idContent -->




</main></body>
</html>
