@extends('layout.app')
@section('content')
  <main>

    <div class="col-sm-12 col-md-12">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ mostrar_info('fondo_carrusel_1') }}" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="{{ mostrar_info('fondo_carrusel_2') }}" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item">
            <img src="{{ mostrar_info('fondo_carrusel_3') }}" class="d-block w-100" alt="...">

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2>{{ mostrar_info('titulo_principal') }}</h2>
          <p style="text-align: left;font-size: 17px;">{{ mostrar_info('descripcion_inicio')}}</p>
          <?php echo mostrar_info('pruebita');?>
        </div>
        <div class="col-md-4"
          style="border-width: 5px;border-style: solid;border-color: rgb(122, 127, 131); border-radius: 10px;">
          <br>
          <div class="row">
            <div class="col-2" style="text-align: left;">
              <img src="{{ mostrar_info('imagen_horario')}}" alt="...">
            </div>
            <div class="col-2">
              <p style="font-size: 14px;" class="texto-h texto-animated">Horarios</p>
            </div>
          </div>
          <p style="font-size: 16px;">Sede Huancayo</p>
          <p style="margin-top: -20px;font-size: 16px;">{{ mostrar_info('dias_atencion')}}</p>
          <div class="row">
            <div class="col-6">
              <p style="font-size: 16px;" class="texto-animated">Mañana</p>
            </div>
            <div class="col-6">
              <p style="font-size: 16px;">{{ mostrar_info('horario_mañana')}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <p style="font-size: 16px;" class="texto-animated">Tardes</p>
            </div>
            <div class="col-6">
              <p style="font-size: 16px;">{{ mostrar_info('horario_tarde')}}</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br>
  </main>
@endsection
