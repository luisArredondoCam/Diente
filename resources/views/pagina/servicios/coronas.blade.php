@extends('layout.app')
@section('content')
<style>
.fondo{
background-image: url("{{mostrar_info('fondo_especialidades')}}");
background-size: cover;
background-repeat: no-repeat;
background-position: center ;
}
</style>
<main>
        <div class="fondo">
            <br>
            <h1 style="font-size: 50px; padding: 0 17%;">{{mostrar_info('titulo_Coronas')}}</h1>
            <p style="font-size: 35px; padding: 0 17%;">{{mostrar_info('eslogan_Servicios')}}</p>
        </div>
        <div class="container text-center" style="margin-top: 25px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p style="text-align: justify; margin-top: 60px;font-size: 20px;">
                                {{mostrar_info('descripcion_Coronas')}}
                                </p>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px;font-size: 20px;">
                                <h3 style="margin-top: 30px;">¿Cuanto puede durar una corona?</h3>
                                <p style="text-align: justify; margin-top: 12px;">
                                {{mostrar_info('descripcion_pregunta_Coronas')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{mostrar_info('imagen_Coronas')}}" class="img-fluid" alt="..." style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </main>
@endsection