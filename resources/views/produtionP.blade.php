@extends('layout.app')
@section('title') PP01 @endsection
@section('linkCss')
<!-- link css -->
<link rel="stylesheet" href="../css/pdoductinP.css">
@endsection
@section('container')


    <header class="container d-flex justify-content-center align-items-center flex-column">
        <div class="welcome position-relative w-100 p-3 d-flex justify-content-around align-items-center flex-wrap">
            <div class="imgaeWelcome"> <img src="../imag/undraw.svg" alt=""> </div>
            <div class="title text-center position-relative">
                <h2>Bienvenue dans la mise à niveau</h2>
                <h2>{{$FullName}}</h2>
                <div class="par mt-4 mb-4 d-flex justify-content-between ">
                    <p>{{$email}}</p>
                    <p>{{$tel}}</p>
                    <p>{{$grad}}</p>
                
                </div>
                <div class="buttoms w-100">
                    <a href="#pp" class="text-decoration-none"> <button class="w-100"> continuer </button></a>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="perant p-2 container">
            <div class="titles mt-4 d-flex flex-column">
                <span> Activation Pédagogiques</span>
                <span> Production Pédagogique </span>
            </div>
            <h4 class="ms-3 mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Production Pédagogique 01</h4>
            <div id="pp" class="global-input position-relative  row row-cols-2 justify-content-center align-items-center">
                <form action="{{route('CreatePP001.store'  , $idP )}}" method="POST" class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
                    @csrf
                    <div class="forms">
                    <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

                        <div class="radios position-relative mt-4  d-flex align-items-center justify-content-around ">
                            <span class=" d-flex align-items-center justify-content-center">Type exemplaire</span>
                            <div class="chose d-flex justify-content-center">
                                <label class="Exceptionnel">
                                    <input type="radio" name="type[]" value="Ouvrages" class="fild w-100" required>
                                    <span>Ouvrages</span>
                                </label>

                                <label class="Rapide">
                                    <input type="radio" name="type[]" value="manuels" class="fild w-100" required>
                                    <span>manules</span>
                                </label>

                                <label class="Normal">
                                    <input type="radio" name="type[]" value="Normal" class="fild w-100" required>
                                    <span>Livres</span>
                                </label>
                                </div>
                        </div>
                        <div class="inputs mt-4">
                            <label class="Isbn w-100 position-relative">
                                <input type="text" name="isbn[]" class="fild w-100" required>
                                <span>ISBN / ISSN</span>
                            </label>
                        </div>

                        <div class="atherInfo ">
                            <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap"">
                                <label class="maisonEdition position-relative">
                                    <input type="text" name="maisonEdition[]" class="fild w-100" required>
                                    <span>maison Edition</span>
                                </label>
                                <label class="avoir position-relative">
                                    <input type="text" name="avoir[]" class="fild w-100" required>
                                    <span>Avoir</span>
                                </label>
                                <label class="maisonEdition position-relative">
                                    <input type="text" name="titre[]" class="fild w-100" required>
                                    <span>titre</span>
                                </label>
                                <label class="auteur position-relative">
                                    <input type="text" name="auteur[]" class="fild w-100" required>
                                    <span>auteur</span>
                                </label>
                                <label class="niveu position-relative">
                                    <input type="text" name="niveu[]" class="fild w-100" required>
                                    <span>niveu</span>
                                </label>
                                <label class="DateEdition position-relative ">
                                    <input type="date" name="dateEdition[]" class="fild w-100" required>
                                    <span>Date Edition</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="buttoms mt-4">
                    <button class="me-4" type="submit" >continuer  </button>
                    <a href="{{route('wolcome.index')}}" class=""><button class="" type="button">  Retour</button></a> 

                </div>
                    
                </form>
            <div class="add bi bi-plus d-flex align-items-center justify-content-center col-1 "></div>
            </div>
        </div>
    </section>

    <script src="../js/produtionP.js"> </script>


@endsection