@extends('layout.app')
@section('content')

@if(Session::has('mensaje_confirmacion'))
<div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" data-bs-delay="5000">
        <div class="toast-header">
            <strong class="me-auto">Mensaje de Confirmación</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Cerrar"></button>
        </div>
        <div class="toast-body">
            {{ Session::get('mensaje_confirmacion') }}
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myToast = new bootstrap.Toast(document.querySelector('.toast'));
        myToast.show();
    });
</script>
@endif

<main>
    <h1 style="text-align: center; margin-top: 40px;">{{mostrar_info('titulo_formulario')}}</h1>
    <h6 style="text-align: center;">{{mostrar_info('subtitulo_formulario')}}</h6>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-5">
                <img src="{{mostrar_info('imagen_formulario')}}" style="width: 100%; height: auto;">
            </div>
            <div class="col-md-7" style="text-align: left;">
                <form method="POST" action="{{ route('mensajes.store' ) }}" >
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre y Apellidos</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre_apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" required>
                    </div>

                    <div class="mb-3">
                        <label for="phoneField" class="form-label">Telefono</label>
                        <input type="tel" class="form-control" name="telefono" id="phoneField" aria-describedby="phoneHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="specialtySelect" class="form-label">Especialidad</label>
                        <select id="specialtySelect" name="especialidad" class="form-select" required>
                            <option>Seleccione una especialidad</option>
                            <option value="Endodoncia">Endodoncia</option>
                            <option value="Ortodoncia">Ortodoncia</option>
                            <option value="Operatorias">Operatorias</option>
                            <option value="Cirugias">Cirugias</option>
                            <option value="Periodoncia">Periodoncia</option>
                            <option value="Rehabilitación  Oral">Rehabilitación Oral</option>
                            <option value="Odontopediatria">Odontopediatria</option>
                            <option value="Odontopediatria">Consulta</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, seleccione una especialidad.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Turno</label>
                        <select id="disabledSelect" name="turno" class="form-select">
                            <option>Seleccione un turno</option>
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha y Hora</label>
                        <input type="datetime-local" name="fecha_hora" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">He leído, entendido y acepto los
                            términos y condiciones de sus Políticas de Privacidad.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
</main>
@endsection