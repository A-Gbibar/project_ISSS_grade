@extends('layout.appActivite.app')
@section('title') EP06   @endsection
@section('linkCss')
<!-- link css -->
@endsection

@section('minTitle') Encadrement Pédagogique @endsection
@section('supTitle') Encadrement Pédagogique 06 @endsection
@section('description') Sorie et visite Pédagogique @endsection

@section('ContanierForm')

<form action="{{route('EP06.store' , $id)}}" enctype="multipart/form-data" method="POST" class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
@csrf
<div class="forms w-100">
    <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="atherInfo ">
            <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

                <div class="w-100 styleTow pageRaport position-relative d-grid">
                    <span class="d-flex align-items-center justify-content-center">document</span>
                    <span class="d-flex h-100 align-items-center"><input type="file"
                            name="document[]" accept="application/msword, application/pdf"
                            class="pageRaport fild w-100"></span>
                </div>

                <div class="center w-100 d-flex justify-content-between align-content-center">
                    <label class=" DateDiffusion position-relative ">
                        <input type="date" name="DateVisite[]" class="fild w-100" required>
                        <span>Date de la Visite</span>
                    </label>
                    <label class=" DateDiffusion position-relative ">
                        <input type="date" name="DateSortie[]" class="fild w-100" required>
                        <span>Date de la sortie</span>
                    </label>
                </div>

                
            </div>
        </div>
    </div>
</div>
<div class="buttoms mt-4">
    <button class="me-4"> continuer </button>
    <button class=""> Retour </button>

</div>


</form>
@endsection


@section('linkJS')
@endsection