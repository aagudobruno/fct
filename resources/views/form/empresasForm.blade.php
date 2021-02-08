<div class="row">
    <label for="nameCompany" class="form-label col-3 align-self-center">Nombre de la empresa</label>
    <div class="col px-0">
        <input id="nameCompany" name="nameCompany" type="text" class="form-control" value="{{ old('nameCompany') }}">
        {!!$errors->first('nameCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="cifCompany" class="form-label col-3 align-self-center">CIF</label>
    <div class="col px-0">
        <input id="cifCompany" name="cifCompany" type="text" class="form-control" value="{{ old('cifCompany') }}">
        {!!$errors->first('cifCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="directionCompany" class="form-label col-3 align-self-center">Dirección</label>
    <div class="col px-0">
        <input id="directionCompany" name="directionCompany" type="text" class="form-control" value="{{ old('directionCompany') }}">
        {!!$errors->first('directionCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="poblationCompany" class="form-label col-3 align-self-center">Población</label>
    <div class="col px-0">
        <input id="poblationCompany" name="poblationCompany" type="text" class="form-control" value="{{ old('poblationCompany') }}">
        {!!$errors->first('poblationCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="cpCompany" class="form-label col-3 align-self-center">CP</label>
    <div class="col px-0">
        <input id="cpCompany" name="cpCompany" type="number" class="form-control" value="{{ old('cpCompany') }}">
        {!!$errors->first('cpCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="tlf1Company" class="form-label col-3 align-self-center">Telefono</label>
    <div class="col px-0">
        <input id="tlf1Company" name="tlf1Company" type="number" class="form-control" value="{{ old('tlf1Company') }}">
        {!!$errors->first('tlf1Company','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="tlf2Company" class="form-label col-3 align-self-center">Telefono 2</label>
    <div class="col px-0">
        <input id="tlf2Company" name="tlf2Company" type="number" class="form-control" value="{{ old('tlf2Company') }}">
        {!!$errors->first('tlf2Company','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="faxCompany" class="form-label col-3 align-self-center">FAX</label>
    <div class="col px-0">
        <input id="faxCompany" name="faxCompany" type="number" class="form-control" value="{{ old('faxCompany') }}">
        {!!$errors->first('faxCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <label for="emailCompany" class="form-label col-3 align-self-center">Email de l'empresa</label>
    <div class="col px-0">
        <input id="emailCompany" name="emailCompany" type="text" class="form-control" value="{{ old('emailCompany') }}">
        {!!$errors->first('emailCompany','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <p class="col-3 align-self-center">Sector</p>
    <input name ="sector" type="hidden">{{-- Pone por defecto radio a null --}}
    <div class="col-3">
        <label for="sector1" class="form-check-label justify-content-center">Primario</label>
        <input id="sector1" name="sector" type="radio" class="form-check-input" value="primary">
        {!!$errors->first('sector','<small class="text-danger row">:message</small>')!!}
    </div>
    <div class="col-3">
        <label for="sector2" class="form-check-label justify-content-center">Secundario</label>
        <input id="sector2" name="sector" type="radio" class="form-check-input" value="secondary">
    </div>
    <div class="col-3">
        <label for="sector3" class="form-check-label justify-content-center">Terciario</label>
        <input id="sector3" name="sector" type="radio" class="form-check-input" value="terciary">
    </div>
</div>
<div class="row">
    <label for="mainActivity" class="form-label col-3 align-self-center">Actividad principal</label>
    <div class="col px-0">
        <input id="mainActivity" name="mainActivity" type="text" class="form-control col" value="{{ old('mainActivity') }}">
        {!!$errors->first('mainActivity','<small class="text-danger">:message</small><br>')!!}
    </div>
</div>
<div class="row">
    <p class="col-3">Tipo de empresa</p>
    <input name ="ownership" type="hidden">{{-- Pone por defecto radio a null --}}
    <div class="col-3">
        <label for="private" class="form-check-label">Privada</label>
        <input id="private" name="ownership" type="radio" class="form-check-input" value="private">
        {!!$errors->first('ownership','<small class="text-danger row">:message</small>')!!}
    </div>
    <div class="col-3">
        <label for="public" class="form-check-label">Pública</label>
        <input id="public" name="ownership" type="radio" class="form-check-input" value="public">
    </div>
</div>
