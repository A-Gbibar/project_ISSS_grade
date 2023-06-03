@extends('layout.app')
@section('title')
    production pédagogiques
@endsection
@section('linkCss')
    <link rel="stylesheet" href="../css/pdoductinP.css">
    <!-- link craetePP02 css -->
    <link rel="stylesheet" href="../css/NextStep.css">
@endsection
@section('container')
<div class="container containerCard position-relative">
    <div class="card card-all position-relative">
        <div class="title card-header d-flex justify-content-start align-items-center p-2 pe-4 ps-4 ">
            Tu es fini l'étape Production Pédagogique
        </div>
        <div class="card-body ps-4">
            <p class="mb-2"><i class="bi bi-arrow-90deg-right me-3"></i>Étapes restantes</p>
            <div class="traver d-flex flex-column ps-3">
                <ol>
                    <li><span>Production Pédagogique 
                        @if($name ==='PP')  <i class="bi bi-check-circle-fill ms-2"></i></span> 
                        @else               <i class="bi bi-x-circle-fill ms-2"></i>
                        @endif
                    </li>
                    <li><span>Encadrement pédagpgique <i class="bi bi-x-circle-fill ms-2"></i></span></li>
                    <li><span>Responsabilité pédagpgique et Administrative <i
                                class="bi bi-x-circle-fill ms-2"></i></span></li>
                    <li><span>Production Sécientifique<i class="bi bi-x-circle-fill ms-2"></i></span></li>
                    <li><span>Encadrement Scientifique<i class="bi bi-x-circle-fill ms-2"></i></span></li>
                    <li><span>Responsabilité Scientifique<i class="bi bi-x-circle-fill ms-2"></i></span></li>
                </ol>
            </div>
            <div class=" buttoms mt-4 w-100 text-center" >
                <button class="me-4 w-75"> continuer </button>
            </div>
        </div>
    </div>
</div>

    <script src="../js/createPP02.js"></script>
@endsection
