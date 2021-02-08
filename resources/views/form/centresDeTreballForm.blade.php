<div class="row">
    <label for="nameWorkCenter" class="form-label col-3 align-self-center">Nombre del centro de trabajo</label>
    <div class="col px-0">
        <input id="nameWorkCenter" name="nameWorkCenter" type="text" class="form-control" value="{{ old('nameWorkCenter') }}">
        {!!$errors->first('nameWorkCenter','<small class="text-danger">:message</small></br>')!!}

    </div>    
</div>
<div class="row">
    <label for="directionWorkCenter" class="form-label col-3 align-self-center">Dirección</label>
    <div class="col px-0">
        <input id="directionWorkCenter" name="directionWorkCenter" type="text" class="form-control" value="{{ old('directionWorkCenter') }}">
        {!!$errors->first('directionWorkCenter','<small class="text-danger">:message</small></br>')!!}

    </div>    
</div>
<div class="row">
    <label for="poblationWorkCenter" class="form-label col-3 align-self-center">Población</label>
    <div class="col px-0">
        <input id="poblationWorkCenter" name="poblationWorkCenter" type="text" class="form-control" value="{{ old('poblationWorkCenter') }}">
        {!!$errors->first('poblationWorkCenter','<small class="text-danger">:message</small></br>')!!}

    </div>    
</div>
<div class="row">
    <label for="cpWorkCenter" class="form-label col-3 align-self-center">CP</label>
    <div class="col px-0">
        <input id="cpWorkCenter" name="cpWorkCenter" type="number" class="form-control" value="{{ old('cpWorkCenter') }}">
        {!!$errors->first('cpWorkCenter','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tlf1WorkCenter" class="form-label col-3 align-self-center">Telefono</label>
    <div class="col px-0">
        <input id="tlf1WorkCenter" name="tlf1WorkCenter" type="number" class="form-control" value="{{ old('tlf1WorkCenter') }}">
        {!!$errors->first('tlf1WorkCenter','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="tlf2WorkCenter" class="form-label col-3 align-self-center">Telefono2</label>
    <div class="col px-0">
        <input id="tlf2WorkCenter" name="tlf2WorkCenter" type="number" class="form-control" value="{{ old('tlf2WorkCenter') }}">
        {!!$errors->first('tlf2WorkCenter','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <label for="faxWorkCenter" class="form-label col-3 align-self-center">FAX</label>
    <div class="col px-0">
        <input id="faxWorkCenter" name="faxWorkCenter" type="number" class="form-control" value="{{ old('faxWorkCenter') }}">
        {!!$errors->first('faxWorkCenter','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
<div class="row">
    <p class="col-3">Tipo de jornada</p>
    <input name ="typeOfWorkingDay" type="hidden">{{-- Pone por defecto radio a null --}}
    <div class="col-3">
        <label for="typeOfWorkingDay1" class="form-check-label">Continua</label>
        <input id="typeOfWorkingDay1" name="typeOfWorkingDay" type="radio" class="form-check-input" value="continuous">
        {!!$errors->first('typeOfWorkingDay','<small class="text-danger row">:message</small>')!!}
    </div>
    <div class="col-3">    
        <label for="typeOfWorkingDay2" class="form-check-label">Partida</label>
        <input id="typeOfWorkingDay2" name="typeOfWorkingDay" type="radio" class="form-check-input" value="half">
    </div>
</div>
<div class="row">
    <label for="schedule" class="form-label col-3 align-self-center">Horario</label>
    <div class="col px-0">
        <input id="schedule" name="schedule" type="text" class="form-control" value="{{ old('schedule') }}">
        {!!$errors->first('schedule','<small class="text-danger">:message</small></br>')!!}
    </div>    
</div>
