@extends('layout.app')
@section('content')
<style>
.fondo_cirujanos{
background-image: url("{{mostrar_info('fondo_cirujanos')}}");
background-size: cover;
background-repeat: no-repeat;
background-position: center ;
}
</style>
<main>
        <div class="fondo_cirujanos">
            <br>
            <h1 style="font-size: 50px; padding: 0 10%; color:white;">{{mostrar_info('Titulo_Gabriela')}}</h1>
            <h1 style="font-size: 35px; padding: 0 10%; color:white;"> {{mostrar_info('Subtitulo_Gabriela')}}</h1>
        </div>
        <div class="container text-center" style="margin-top: 25px;">
            <div class="row">
                <div class="col-md-5" style="background-color: rgb(255, 255, 255);" >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <br>
                                <p style="text-align: justify; margin-top: 20px; font-size: medium;">
                                    {{mostrar_info('Descripcion_Gabriela')}}
                                <br>
                                <br>
 
                                </p>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">          
                                <h4 style="margin-top: 1px;">FORMACIÓN ACADEMICA</h4>
                                <p style="text-align: justify;">
                                    
                                    <ul style="text-align: left;">
                                       <li>{{mostrar_info('Especializacion1_Gabriela')}}</li> 
                                       <li>{{mostrar_info('Especializacion2_Gabriela')}}</li> 
                                       <li>{{mostrar_info('Formacion_Academica_3_Gabriela')}}</li> 
                                       <li>{{mostrar_info('Formacion_Academica_4_Gabriela')}}</li> 
                                       <li>{{mostrar_info('Formacion_Academica_5_Gabriela')}}</li> 
                                    </ul>
                                </p>
                            </div>

                            <div class="col-md-12" style="margin-top: 10px;">          
                                <h4 style="margin-top: 5px;">IDIOMAS</h4>
                                
                                <p>
                                    <ul style="text-align: left;">
                                       <li>{{mostrar_info('Idioma1_Gabriela')}}</li>          
                                       <li>{{mostrar_info('Idioma2_Gabriela')}}</li>         

                                    </ul>
                                </p>
                            </div>

                            <div class="col-md-12" style="margin-top: 10px;">          
                                <h4 style="margin-top: 1px;">TELEFONO</h4>
                                <p style="text-align: justify;">
                                    <div class="col-md-12">
                                   
                                        <i class="fa-solid fa-phone" style="color: #060606;"> {{mostrar_info('Telefono_Gabriela')}}
                                        </i>
                                    </div>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <br>
                    <img src="{{mostrar_info('Imagen_Gabriela')}}" class="img-fluid" style="margin-bottom: 50px;">
                </div>
            </div>
        </div>
    </main>
@endsection