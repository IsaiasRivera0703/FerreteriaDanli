@extends("theme.$theme.layout")

@section('titulo')
    Departamentos
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Crear Departamento</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('departamento')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver
                    </a>
                </div>
            </div>
            <form action="{{route('guardar_departamento')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="card-body">
                    @include('empleados.departamento.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-11">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection