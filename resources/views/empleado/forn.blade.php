    <h1>{{ $modo }} Empleado</h1>
    @if (count($errors)>0)
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
    @endif
    
    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input class="form-control" type="text" name="nombres" value="{{ isset($empleado->nombres)?$empleado->nombres: old('nombres') }}" id="nombres">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input class="form-control" type="text" name="apellidos" value="{{ isset($empleado->apellidos)?$empleado->apellidos:  old('apellidos') }}" id="apellidos">
    </div>
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input class="form-control" type="text" name="cedula" value="{{ isset($empleado->cedula)?$empleado->cedula: old('cedula') }}" id="cedula">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        @if(isset($empleado->foto))
        <img class="img-thumbnail img-fluid mt-1 mb-1" src="{{ asset('storage').'/'.$empleado->foto }}" alt="iamgen de perfil" width="100">
        @endif
        <input class="form-control" type="file" name="foto" id="foto">
    </div>
        <input class="btn btn-success mt-2" type="submit" value="{{ $modo }} Datos">
        <a class="btn btn-primary mt-2" href="{{ url('empleado') }}">Regresar</a>
        <br>

