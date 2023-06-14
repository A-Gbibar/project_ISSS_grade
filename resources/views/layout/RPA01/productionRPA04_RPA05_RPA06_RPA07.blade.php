@extends('layout.appActivite.app')
@section('title')
    RPA04
@endsection
@section('linkCss')
<style>
    .add{
        display: none !important;
    }
</style>
@endsection

@section('minTitle')
    Responsabilités Pédagogique et Administratives
@endsection
@section('supTitle')
    Responsabilités Pédagogique et Administratives 04
@endsection
@section('description')
    Responsable de module de formations initiales accréditées et ouvertes l'établissement :
@endsection

@section('ContanierForm')
    <form action="{{ route('RPA04-05-06-07.store', $id) }}" enctype="multipart/form-data" method="POST"
        class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
        @csrf
        <div class="forms w-100">
            <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

                <div class="atherInfo ">
                    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">
                        <div class="center w-100 d-flex justify-content-center align-content-center">
                            <label class="showInput position-relative ">
                                <input type="number" name="NomberModule" min="0" value="0" max="10" class="fild w-100"
                                    required>
                                <span> Nomber de module </span>
                            </label>
                        </div>
                    </div>
                </div>

                <h4 class="ms-3 mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i>
                    Responsabilités Pédagogique et Administratives 05
                </h4>
                <h5 class="mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i>  Membre d'une commission ad hoc </h5>
    
                <div class="atherInfo ">
                    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">
                        <div class="center w-100 d-flex justify-content-center align-content-center">
                            <label class="showInput position-relative ">
                                <input type="number" name="NomberCommission" min="0" value="0"  class="fild w-100"
                                    required>
                                <span> Nomber de Commission </span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <h4 class="ms-3 mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i>
                    Responsabilités Pédagogique et Administratives 06
                </h4>
                <h5 class="mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i>  Membre d'une commission de recrutement </h5>

                <div class="atherInfo ">
                    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">
                        <div class="center w-100 d-flex justify-content-center align-content-center">
                            <label class="showInput position-relative ">
                                <input type="number" name="NomberCommission2" min="0" value="0"  class="fild w-100"
                                    required>
                                <span> Nomber de Commission Recrutement</span>
                            </label>
                        </div>
                    </div>
                </div>

                <h4 class="ms-3 mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i>
                    Responsabilités Pédagogique et Administratives 07
                </h4>
                <h5 class="mt-4 w-100"> <i class="bi bi-arrow-90deg-right me-2"></i>  Membre d'une commission technique ou de concours </h5>

                <div class="atherInfo ">
                    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">
                        <div class="center w-100 d-flex justify-content-center align-content-center">
                            <label class="showInput position-relative ">
                                <input type="number" name="NomberCommission3" min="0" value="0"  class="fild w-100"
                                    required>
                                <span> Nomber de Commission technique / concours </span>
                            </label>
                        </div>
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
@endsection
