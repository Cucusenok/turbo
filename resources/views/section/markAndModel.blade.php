<section id="headup" class="container-block" style="padding-top: 150px;">
  <div class="title-h">
    <h1>Турбрины по марке и модели транспорта</h1>
  </div>

  <div class="container">
      <div class="search-input">
          <form>
              <label for="mark-model">Введите марку или модель автомобиля</label><br>
              <input type="text" id="mark-model" name="mark-model">
            </form>
      </div>

      <div class="mark-container" id="mark-container">

      @foreach($models as $letter=>$marks)
      <div class="marks" id="marks">
      <h1>{{ $letter }}</h1>
        @foreach($marks as $mark)
      <div class="mark" id="mark">{{ $mark }}</div>
        @endforeach
        </div><!--end-marks-container-->
      @endforeach

      </div> <!--end-mark-container-->

  </div>

  </section>