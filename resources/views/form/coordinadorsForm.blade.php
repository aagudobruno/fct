<div class="row">
    <label for="nameCoord" class="form-label col-3 align-self-center">Nombre</label>
    <div class="col px-0">
        <input id="nameCoord" name="nameCoord" type="text" class="form-control" value="{{ old('nameCoord') }}">
        {!!$errors->first('nameCoord','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>    
<div class="row">
    <label for="nifCoord" class="form-label col-3 align-self-center">NIF</label>
    <div class="col px-0">
        <input id="nifCoord" name="nifCoord" type="text" class="form-control" value="{{ old('nifCoord') }}">
        {!!$errors->first('nifCoord','<small class="text-danger">:message</small><br>')!!}
    </div>    
</div>    