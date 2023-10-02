@extends('layout.app')
@section('content')

<main>
    <style>
        .custom-card {
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(3, 3, 3, 0.1);
            /* Fondo blanco para las tarjetas */
        }

        .custom-card .card-body {
            /* Fondo gris claro para el cuerpo de la tarjeta */
            color: #333;
            /* Texto en color gris oscuro */
        }

        /* Cambiar el color del texto del encabezado de la tarjeta */
        .custom-card .card-title {
            color: #114b88;
            /* Texto en azul */
        }

        /* Cambiar el color del texto del párrafo de la tarjeta */
        .custom-card .card-text {
            color: #161515;
            /* Texto en gris medio */
        }
    </style>


    <div class="container" style="margin-top: 3%;">
        <div class="row">
            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="{{mostrar_info('Imagen_Galeria1')}}" class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                        <p class="card-text">{{mostrar_info('Informacion1')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="{{mostrar_info('Imagen_Galeria2')}}" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <p class="card-text">{{mostrar_info('Informacion2')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="{{mostrar_info('Imagen_Galeria3')}}" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <p class="card-text">{{mostrar_info('Informacion3')}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="padding-top: 5%;">
            <div class="row">
                <div class="col-md-4">
                    <div class="card custom-card">
                        <img src="{{mostrar_info('Imagen_Galeria4')}}" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <p class="card-text">{{mostrar_info('Informacion4')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card custom-card">
                        <img src="{{mostrar_info('Imagen_Galeria5')}}" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <p class="card-text">{{mostrar_info('Informacion5')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card custom-card">
                        <img src="{{mostrar_info('Imagen_Galeria6')}}" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <p class="card-text">{{mostrar_info('Informacion6')}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding-top: 5%;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card custom-card">
                            <img src="{{mostrar_info('Imagen_Galeria7')}}" class="card-img-top" alt="Imagen 1">
                            <div class="card-body">
                                <p class="card-text">{{mostrar_info('Informacion7')}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card custom-card">
                            <img src="{{mostrar_info('Imagen_Galeria8')}}" class="card-img-top" alt="Imagen 2">
                            <div class="card-body">
                                <p class="card-text">{{mostrar_info('Informacion8')}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card custom-card">
                            <img src="{{mostrar_info('Imagen_Galeria9')}}" class="card-img-top" alt="Imagen 3">
                            <div class="card-body">
                                <p class="card-text">{{mostrar_info('Informacion9')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="padding-top: 5%;">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <img src="{{mostrar_info('Imagen_Galeria10')}}" class="card-img-top" alt="Imagen 1">
                                <div class="card-body">
                                    <p class="card-text">{{mostrar_info('Informacion10')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card custom-card">
                                <img src="{{mostrar_info('Imagen_Galeria11')}}" class="card-img-top" alt="Imagen 2">
                                <div class="card-body">
                                    <p class="card-text">{{mostrar_info('Informacion11')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card custom-card">
                                <img src="{{mostrar_info('Imagen_Galeria12')}}" class="card-img-top" alt="Imagen 3">
                                <div class="card-body">
                                    <p class="card-text">{{mostrar_info('Informacion12')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
</main>
@endsection