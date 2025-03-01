@extends("theme.$theme.layout")

@section('titulo')
    Proveedor
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Productos</h3>    
                <div class="card-tools pull-right">    
                    <a href="{{route('crear_proveedor')}}" class="btn btn-info btn-sm">    
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro    
                    </a>        
                </div>                   
            </div>        
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped" id="tabla-data">
                    <thead>
                        <tr class="text-center">
                            <th class="width20">ID</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Empresa</th>
                            <th>Direccion</th>
                            <th>Numero|Encargado</th>
                            <th>Numero|Empresa</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proveedors as $proveedor)
                            <tr class="text-center">
                                <td>{{$proveedor->id}}</td>
                                <td>{{$proveedor->DNI}}</td>
                                <td>{{$proveedor->nombre_encargado}}</td>
                                <td>{{$proveedor->apellido_encargado}}</td>
                                <td>{{$proveedor->nombre_empresa}}</td>
                                <td>{{$proveedor->dirección_empresa}}</td>
                                <td>{{$proveedor->numero_encargado}}</td>
                                <td>{{$proveedor->numero_empresa}}</td>
                                <td>
                                    <a href="{{route('editar_proveedor', ['id' => $proveedor->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('eliminar_proveedor', ['id' => $proveedor->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                            <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
        </div>   
    </div>
@endsection