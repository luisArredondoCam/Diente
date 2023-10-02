@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-4 bg-info p-2">
            <form method="POST" action="{{ route('admin.store' ) }}" >
                @method('POST')	
                @csrf
                <label>Clave</label>
                <input type="text" class="form-control" name="clave" >
                <label>Valor</label>
                <input type="text" class="form-control" name="valor" >
                <label>Icono</label>
                <input type="text" class="form-control" name="icon" >
                <button class="btn btn-success mt-1" type="submit"><i class="fa fa-save"></i> Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
@endsection
