@extends('layout.appActivite.app')
@section('title') EP03 @endsection
@section('linkCss')
<!-- link css -->
@endsection
@section('container')

@section('minTitle') Encadrement Pédagogique @endsection
@section('supTitle') Encadrement Pédagogique 03 @endsection
@section('description') Formation des ressources humaines @endsection

@section('ContanierForm')

<form action="{{route('EP03.store' , $id)}}" enctype="multipart/form-data" method="POST" class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
    @csrf
<div class="forms w-100">
    <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

        <div  class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around ">
            <span class=" d-flex align-items-center justify-content-center"> Formation Des </span>
            <div class="chose d-flex justify-content-center">
                <label class="Exceptionnel">
                    <input type="checkbox" name="type[]" value="Formateur" class="fild w-100" >
                    <span>Formateur</span>
                </label>

                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="Techniciens" class="fild w-100" >
                    <span>Techniciens</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="adminisitratif" class="fild w-100" >
                    <span>Personnel adminisitratif et technique</span>
                </label>
            </div>
        </div>

        <div class="atherInfo ">
            <div
                class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

                <div class="w-100 styleTow pageRaport position-relative d-grid">
                    <span class="d-flex align-items-center">Fournir une attestation</span>
                    <span class="d-flex h-100 align-items-center"><input type="file"
                            name="pageAttestation[]" accept="application/msword, application/pdf"
                            class="pageRaport fild w-100"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="buttoms mt-4">
    <button class="me-4"> continuer </button>
    <a href="{{route('EP02.show' , $id)}}">  <button  type='button'> Retour </button> </a>
</div>

</form>
@endsection


@section('linkJS')
<script src="../js/EP03.js"></script>
@endsection