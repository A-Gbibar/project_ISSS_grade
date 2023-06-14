@extends('layout.appActivite.app')
@section('title') RPA03 @endsection
@section('linkCss')

@endsection

    @section('minTitle') Responsabilités Pédagogique et Administratives @endsection
    @section('supTitle') Responsabilités Pédagogique et Administratives 03 @endsection
    @section('description') Commissions de l'établissement et/ou d'Université @endsection

@section('ContanierForm')

<form action="{{route('RPA03.store' , $id )}}" enctype="multipart/form-data" method="POST"
class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
@csrf

<div class="forms w-100">
    <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

        <div class="radios  mb-3 position-relative mt-4  d-flex align-items-center justify-content-around " style="width:90%">
            <span class=" d-flex align-items-center justify-content-center"> Commissions </span>
            <div class="chose d-flex justify-content-center">
                <label class="Exceptionnel">
                    <input type="checkbox" name="type[]" value="scientifique" class="fild w-100" >
                    <span>Scientifique</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="paritaire" class="fild w-100">
                    <span>Paritaire</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="pédagogique" class="fild w-100">
                    <span>Pédagogique</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="recherche" class="fild w-100">
                    <span>Recherche</span>
                </label>
            </div>
        </div>  

        <div class="atherInfo ">
            <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">
           
            </div>
        </div>
    </div>
</div>
<div class="buttoms mt-4">
    <button class="me-4"> continuer </button>
    <button class="" type="button"> Retour </button>

</div>


</form>
@endsection


@section('linkJS')
    <script src="../js/RPA03.js"></script>
@endsection
