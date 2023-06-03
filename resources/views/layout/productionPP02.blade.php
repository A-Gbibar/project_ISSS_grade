@extends('layout.app')
@section('title')
    production pédagogiques
@endsection
@section('linkCss')
    <link rel="stylesheet" href="../css/pdoductinP.css">
    <!-- link craetePP02 css -->
    <link rel="stylesheet" href="../css/createPP02.css">
@endsection
@section('container')
    <section>
        <div class="perant p-2 container">
            <div class="titles mt-4 d-flex flex-column">
                <span> Activation Pédagogiques</span>
                <span> Production Pédagogique </span>
            </div>
            <h4 class="ms-3 mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Production Pédagogique 02</h4>
            <h5 class="mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Type Polycopiés</h5>
            <div id="pp"    
                class="global-input position-relative  row row-cols-2 justify-content-center align-items-center">
                <form action="{{route('createPP02.store' , ['id'=>$id])}}" method="POST"
                    class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
                    @csrf
                    <div class="forms w-100">
                        <div
                            class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

                            <div
                                class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around ">
                                <span class=" d-flex align-items-center justify-content-center">Type Polycopiés</span>
                                <div class="chose d-flex justify-content-center">
                                    <label class="Exceptionnel">
                                        <input type="checkbox" name="type[]" value="Cours" class="fild w-100" >
                                        <span>Cours</span>
                                    </label>

                                    <label class="Rapide">
                                        <input type="checkbox" name="type[]" value="TP" class="fild w-100" >
                                        <span>TP</span>
                                    </label>

                                    <label class="Normal">
                                        <input type="checkbox" name="type[]" value="TD" class="fild w-100" >
                                        <span>TD</span>
                                    </label>
                                    <label class="Normal">
                                        <input type="checkbox" name="type[]" value="examens" class="fild w-100" >
                                        <span>Examens</span>
                                    </label>

                                    <label class="Normal">
                                        <input type="checkbox" name="type[]" value="Autre" class="fild w-100" >
                                        <span>Autre</span>
                                    </label>
                                </div>
                            </div>

                            <div class="atherInfo ">
                                <div
                                    class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap"">
                                    <label class=" DateDiffusion position-relative ">
                                        <input type="date" name="DateDiffusion[]" class="fild w-100" required>
                                        <span>Date de diffusion</span>
                                    </label>
                                    <label class="DateEdition position-relative ">
                                        <input type="number" name="annee[]" value="2023" min="2012" max="3000"
                                            step="1" class="fild w-100" required>
                                        <span>Année d'éloboration</span>
                                    </label>
                                    <label class="niveau w-100 position-relative">
                                        <input type="text" name="Niveau[]" class="fild w-100" required>
                                        <span>Niveau d'étude</span>
                                    </label>
                                </div>
                            </div>

                            <div
                                class="radios text-capitalize position-relative mt-4  d-flex align-items-center justify-content-around ">
                                <span class=" d-flex align-items-center justify-content-center">Type travail </span>
                                <div class="chose d-flex justify-content-center">
                                    <label class="Exceptionnel" onclick="Removecollective();">
                                        <input type="checkbox" name="collectif[]" value="individuel" class="fild w-100"
                                            >
                                        <span>Individuel</span>
                                    </label>

                                    <label class="collectif" onclick="Addcollective();">
                                        <input type="checkbox" name="collectif[]" value="collectif" class="collectif fild w-100">
                                        <span>Collectif</span>
                                    </label>
                                </div>
                            </div>

                            <div class="collectifs inputs d-flex justify-content-around flex-wrap">
                                <div
                                    class="inputs   me-3  mt-4 d-flex justify-content-between align-content-center flex-wrap">
                                    <label class=" w-100 DateDiffusion position-relative ">
                                        <input type="number" name="NomberCollectif[]" min="1" max="20"
                                            class="fild w-100"  >
                                        <span>Nomber intervenants</span>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="buttoms mt-4">
                        <button class="me-4" type="submit"> Suivant </button>
                        <a href="{{route('production.index' , $id )}}" >  <button type="button"> Retour</button>  </a> 

                    </div>


                </form>
                <div class="add bi bi-plus d-flex align-items-center justify-content-center col-1 "></div>
            </div>
        </div>
    </section>


    <script src="../js/createPP02.js"></script>
@endsection
