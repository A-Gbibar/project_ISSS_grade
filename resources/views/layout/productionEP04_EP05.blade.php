@extends('layout.appActivite.app')
@section('title') EP04 EP05 @endsection
@section('linkCss')
    <!-- link css -->
    <style>
    .add{
        display: none !important;
    }
   </style>
@endsection
@section('container')

    @section('minTitle') Encadrement Pédagogique @endsection
    @section('supTitle') Encadrement Pédagogique 04 @endsection
    @section('description') Formation continue des enseignants @endsection

@section('ContanierForm')

    <form action="{{route('EP04_EP05.store' , $id)}}" enctype="multipart/form-data" method="POST"
        class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
   @csrf
        <div class="forms w-100">
            <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">


                <div class="atherInfo ">
                    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

                        <div class="center w-100 d-flex justify-content-center align-content-center">
                            <label class="DateDiffusion position-relative ">
                                <input type="number" name="NomberFormation" min="0" value="0"
                                    class="fild w-100" required>
                                <span>Nomber Formation</span>
                            </label>
                        </div>


                    </div>
                </div>

                <h4 class="mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i> Encadrement Pédagogique 05</h4>
                <h5 class="mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i> Suive et visite pédagogique </h5>

                <div class="atherInfo ">
                    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

                        <div class="center w-100 d-flex justify-content-center align-content-center">
                            <label class="NomberSortie position-relative ">
                                <input type="number" name="NomberSortie" min="0" value="0"
                                    class="fild w-100" required>
                                <span>Nomber Sortie et visite</span>
                            </label>
                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div class="buttoms mt-4 w-100">
            <button class="me-4"> continuer </button>
            <button class=""> Retour </button>

        </div>


    </form>
@endsection


@section('linkJS')
@endsection
