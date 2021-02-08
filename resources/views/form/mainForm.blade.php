@extends ('form.layouts.fctForm')

@section('header')
    @include('form.headerForm')
@endsection

@section('main')
    <form method="POST" class="w-50 border border-primary rounded">
        @csrf
        <div class="row p-4">
            <h5>Empresa:</h5>
            @include('form.empresasForm')
        </div>
        <div class="row p-4">
            <h5>Coordinador:</h5>
            @include('form.coordinadorsForm')
        </div>
        <div class="row p-4">
            <h5>Tutor:</h5>
            @include('form.tutorsForm')
        </div>
        <div class="row p-4">
            <h5>Representante Empresa:</h5>
            @include('form.representantsForm')
        </div>    
        <div class="row p-4"> 
            <h5>Centro de trabajo:</h5>
            @include('form.centresDeTreballForm')
        </div>  

        <button class=" row d-flex justify-content-center">Submit</button>
    </form>
@endsection

@section('footer')
    @include('form.footerForm')
@endsection