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
        <h4 class="ms-3 mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Production Pédagogique 03</h4>
        <h5 class="mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Outils et Supports NTIC </h5>

        <div id="pp"
            class="global-input position-relative  row row-cols-2 justify-content-center align-items-center">
            <form action="{{route('createPP03.store' , ['id' => $id] )}}" method="POST"
                class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
                @csrf
                <div class="forms w-100">
                    <div
                        class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

                        <div
                            class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around ">
                            <span class=" d-flex align-items-center justify-content-center">Outile / Supports</span>
                            <div class="chose d-flex justify-content-center">
                                <label class="Diaporamas">
                                    <input type="radio" id="Diaporamas"  name="type[]" value="Diaporamas"
                                        class="fild w-100" required>
                                    <span>Diaporamas</span>
                                </label>

                                <label class="Site-Web">
                                    <input type="radio" id='siteWeb'  name="type[]" value="SiteWeb"
                                        class="fild w-100" required>
                                    <span>Site Web</span>
                                </label>

                                <label class="Video" >
                                    <input type="radio" name="type[]" value="Video" class="fild w-100" required>
                                    <span>Support Vidéo</span>
                                </label>

                            </div>
                        </div>

                        <div class="atherInfo ">
                            <div class="inputs input-Diaporamas w-100 gap-4 mt-4 d-flex justify-content-center align-content-center flex-wrap"">
                           
                              
                            </div>
                        </div>
                    </div>



                </div>

                <div class=" buttoms mt-4">
                                <button class="me-4" type="submit"> continuer </button>
                                <a href="{{route('createPP02.show' , $id )}}"  class=""><button  type="button" class=""> Retour </button></a> 
                </div>


            </form>
            <div class="add bi bi-plus d-flex align-items-center justify-content-center col-1 "></div>
        </div>
    </div>
</section>
    <script src="../js/createPP03.js"></script>
@endsection
