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
            <h1 style="font-size: 50px; padding: 0 17%;">{{mostrar_info('titulo_ortodoncia')}}</h1>
            <p style="font-size: 35px; padding: 0 17%;">{{mostrar_info('eslogan_especialidades')}}</p>
        </div>
        <div class="container text-center" style="margin-top: 25px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p style="text-align: justify;font-size: 18px;margin-top: 40px;">
                                        {{mostrar_info('descripcion_ortodoncia')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;color: #ffffff;">
                                <span class="material-symbols-outlined" style="background-color:  rgb(21, 124, 172);font-size: 50px;">
                                    dentistry
                                </span>
                                <span class="material-symbols-outlined" style="background-color:  rgb(21, 124, 172);font-size: 50px;">
                                    favorite
                                </span>
                                <span class="material-symbols-outlined" style="background-color: rgb(21, 124, 172);font-size: 50px;">
                                    add
                                </span>
                            </div>
                            <div class="col-md-12">
                                <h3 style="color: rgb(15, 124, 167);">Tipos de Ortodoncia</h3>
                                <h3 style="margin-top: 10px;font-size: 20px;">Ortodoncia Fija</h3>
                                <p style="text-align: justify; margin-top: 12px;font-size: 18px;">
                                {{mostrar_info('descripcion_Ortodoncia_Fija')}}
                                </p>
                            </div>
                            <div class="col-md-12">
                                <h3 style="margin-top: 5px;font-size: 20px;">Ortodoncia Invisible con
                                    Alineadores removibles</h3>
                                <p style="text-align: justify; margin-top: 12px;font-size: 18px;">
                                {{mostrar_info('descripcion_Ortodoncia_Invisible_con_Alineadores_removibles')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/ortodoncia-2.jpg" class="img-fluid" alt="..." style="width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </main>
@endsection