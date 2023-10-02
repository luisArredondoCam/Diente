@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-4 bg-info p-2">
            <form method="POST" action="{{ route('admin.update', $info_web->id ) }}">
                @method('PUT')
                @csrf
                <label>Clave</label>
                <input type="text" class="form-control" name="clave" value="{{ $info_web->clave }}">
                <label>Valor</label>
                <input type="text" class="form-control" name="valor" value="{{ $info_web->valor }}">
                <label>Icono</label>
                <input type="text" class="form-control" name="icon" value="{{ $info_web->icon }}">
                <label>Estado</label><br>
                <label class="switch-container">
                    <input type="checkbox" id="estadoSwitch" {{ $info_web->estado == "ON" ? "checked" : '' }}>
                    <span class="slider round"></span>
                </label>

                <!-- El select se oculta visualmente pero se mantiene accesible para su funcionalidad -->
                <select name="estado" id="estadoSelect" style="display: none;">
                    <option value="ON">ON</option>
                    <option value="OFF">OFF</option>
                </select><br>

                <!-- El siguiente script se encarga de sincronizar el switch con el select -->
                <script>
                    const estadoSelect = document.getElementById('estadoSelect');
                    const estadoSwitch = document.getElementById('estadoSwitch');

                    estadoSelect.addEventListener('change', function() {
                        estadoSwitch.checked = this.value === 'ON';
                    });

                    estadoSwitch.addEventListener('change', function() {
                        estadoSelect.value = this.checked ? 'ON' : 'OFF';
                    });
                </script>

                <!-- Estilo CSS personalizado para el switch -->
                <style>
                    .switch-container {
                        position: relative;
                        display: inline-block;
                        width: 60px;
                        height: 34px;
                    }

                    .switch-container input {
                        opacity: 0;
                        width: 0;
                        height: 0;
                    }

                    .slider {
                        position: absolute;
                        cursor: pointer;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background-color: #ccc;
                        -webkit-transition: .4s;
                        transition: .4s;
                        border-radius: 34px;
                    }

                    .slider:before {
                        position: absolute;
                        content: "";
                        height: 26px;
                        width: 26px;
                        left: 4px;
                        bottom: 4px;
                        background-color: white;
                        -webkit-transition: .4s;
                        transition: .4s;
                        border-radius: 50%;
                    }

                    input:checked+.slider {
                        background-color: #2196F3;
                    }

                    input:focus+.slider {
                        box-shadow: 0 0 1px #2196F3;
                    }

                    input:checked+.slider:before {
                        -webkit-transform: translateX(26px);
                        -ms-transform: translateX(26px);
                        transform: translateX(26px);
                    }

                    .slider.round {
                        border-radius: 34px;
                    }

                    .slider.round:before {
                        border-radius: 50%;
                    }
                </style>

                <!-- <input type="text" class="form-control" name="estado" value="{{ $info_web->estado }}"> -->
                <button class="btn btn-success mt-1" type="submit"><i class="fa fa-save"></i> Guardar Cambios</button>
            </form>
        </div>
    </div>

</div>
@endsection