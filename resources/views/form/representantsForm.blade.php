<div class="row">
    <label for="nameRep" class="form-label col-3 align-self-center">Nombre</label>
    <div class="col px-0">
        <input id="nameRep" name="nameRep" type="text" class="form-control" value="{{ old('nameRep') }}">
        {!!$errors->first('nameRep','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="nifRep" class="form-label col-3 align-self-center">NIF</label>
    <div class="col px-0">    
        <input id="nifRep" name="nifRep" type="text" class="form-control" value="{{ old('nifRep') }}">
        {!!$errors->first('nifRep','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="jobRep" class="form-label col-3 align-self-center">Trabajo</label>
    <div class="col px-0">    
        <input id="jobRep" name="jobRep" type="text" class="form-control" value="{{ old('jobRep') }}">
        {!!$errors->first('jobRep','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>