<h1>{{ $modo }} empleado</h1>

<div class="form-group">

    <label for="Nombre">Nombre</label>
    <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre">
   

</div>

<div class="form-group">
    <label for="ApellidoPaterno"> Apellido Paterno</label>
    <input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}" id="ApellidoPaterno">
   
</div>

<div class="form-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}" id="ApellidoMaterno">
   
</div>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo">
</div>


    <label for="Foto">Foto</label>
    @if(isset($empleado->Foto))
    <img style="width: 100px; height:100px" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="">
    @endif
    <input class="form-control" type="file" name="Foto" value="" id="Foto">
    <br>

    <div >
    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>
    </div>
