@extends('layout.appActivite.app')
@section('title') RPA02 @endsection
@section('linkCss')
    <!-- link css -->
@endsection

    @section('minTitle') Responsabilités Pédagogique et Administratives @endsection
    @section('supTitle') Responsabilités Pédagogique et Administratives 08 @endsection
    @section('description') Organisation des journées et Workshop pédagogiques pour les étudiants @endsection

@section('ContanierForm')

<form action="{{route('RPA08.store' , $id )}}" enctype="multipart/form-data" method="POST"
class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
@csrf

<div class="forms w-100">
    <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

        <div class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around " style="width:90%">
            <span class=" d-flex align-items-center justify-content-center"> Organisation des journées </span>
            <div class="chose d-flex justify-content-center">
                <label class="Exceptionnel">
                    <input type="checkbox" name="type[]" value="Responsable" class="fild w-100" >
                    <span>Responsable</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="Membre" class="fild w-100">
                    <span>Membre du comité</span>
                </label>
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
    <script src="../js/RPA08.js"></script>
@endsection
