<div class="row">
    <label for="nameTut" class="form-label col-3 align-self-center">Nombre</label>
    <div class="col px-0">
        <input id="nameTut" name="nameTut" type="text" class="form-control" value="{{ old('nameTut') }}">
        {!!$errors->first('nameTut','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="nifTut" class="form-label col-3 align-self-center">NIF</label>
    <div class="col px-0">    
        <input id="nifTut" name="nifTut" type="text" class="form-control" value="{{ old('nifTut') }}">
        {!!$errors->first('nifTut','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="jobTut" class="form-label col-3 align-self-center">Trabajo</label>
    <div class="col px-0">    
        <input id="jobTut" name="jobTut" type="text" class="form-control" value="{{ old('jobTut') }}">
        {!!$errors->first('jobTut','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>