@extends('layout.app')
@section('content')
  <main>
    <h1 style="font-size: 50px; text-align: center;margin-top: 60px;color: rgb(10, 91, 145)">{{ mostrar_info('titulo_nosotros') }}</h1>
    <div class="container text-center" style="margin-top: 40px;">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ mostrar_info('imagen_nosotros')}}"  class="img-fluid" alt="..." style="border-radius: 10%;">
        </div>
        <div class="col-md-6">
          <h1 style="margin-top: 25px;color: rgb(10, 91, 145)">Mision</h1>
          <p>
            {{mostrar_info('mision_descripcion')}}
          </p>
          <h1 style="color: rgb(10, 91, 145)">Vision</h1>
          <p> 
            {{mostrar_info('vision_descripcion')}}
          </p>
        </div>
      </div>
    </div>
  </main>
@endsection
