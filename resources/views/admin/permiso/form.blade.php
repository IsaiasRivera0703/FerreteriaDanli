<div class="form-group row">
    <label for="nombre" class="col-lg-1 control-label offset-md-1 requerido">Nombre</label>

    <div class="col-sm-9">
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $permisos->nombre ?? '')}}" required/>
    </div>
</div>

<div class="form-group row">
    <label for="slug" class="col-lg-1 control-label offset-md-1 requerido" >Slug</label>

    <div class="col-sm-9">
      <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug', $permisos->slug ?? '')}}" required/>
    </div>
</div>