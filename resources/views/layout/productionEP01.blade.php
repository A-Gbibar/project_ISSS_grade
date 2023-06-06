@extends('layout.app')
@section('title') EP01 @endsection
@section('linkCss')
<!-- link css -->
<link rel="stylesheet" href="../css/pdoductinP.css">
<link rel="stylesheet" href="../css/createPP02.css">
<link rel="stylesheet" href="../css/EP01.css">
@endsection
@section('container')

<section>
    <div class="perant p-2 container">
        <div class="titles mt-4 d-flex flex-column">
            <span> Activation Pédagogiques</span>
            <span> Encadrement Pédagogique</span>
        </div>
        <h4 class="ms-3 mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Encadrement Pédagogique 01</h4>
        <h5 class="mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> Encadrement de stage ou de projets de fin
            d'études : </h5>
        <div id="pp"
            class="global-input position-relative  row row-cols-2 justify-content-center align-items-center">
            <form enctype="multipart/form-data" action="{{route('EP01.store' , $id)}}" method="POST" class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
                @csrf
                <div class="forms w-100">
                    <div
                        class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

                        <div
                            class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around ">
                            <span class=" d-flex align-items-center justify-content-center">Projets de fin
                                d'études</span>
                            <div class="chose d-flex justify-content-center">
                                <label class="Exceptionnel">
                                    <input type="checkbox" name="type[]" value="Licence" class="fild w-100" >
                                    <span>Licence / Bachelor</span>
                                </label>

                                <label class="Rapide">
                                    <input type="checkbox" name="type[]" value="Master" class="fild w-100" >
                                    <span>Master</span>
                                </label>
                            </div>
                        </div>

                        <div class="atherInfo ">
                            <div
                                class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

                                <label class="DateDiffusion position-relative ">
                                    <input type="number" name="NomberEncadrants[]" min="1" value="1" class="fild w-100"
                                        required>
                                    <span>Nomber Encadrants</span>
                                </label>
                                <label class=" DateDiffusion position-relative ">
                                    <input type="date" name="DateDiffusion[]" class="fild w-100" required>
                                    <span>Date de sa réalisation</span>
                                </label>
                                <div class="w-100 styleTow pageRaport position-relative d-grid">
                                    <span class="d-flex align-items-center">Fournir la premiére page du
                                        rapport</span>
                                    <span class="d-flex h-100 align-items-center">
                                        <input type="file" name="pageRaport[]" accept="application/msword, application/pdf"
                                            class="pageRaport fild w-100"></span>
                                </div>
                                @error('EroorSize')
                                    <span class = 'text-danger' >{{$message}}</span>
                                @enderror
                            </div>
                        </div>
<!-- 
                        <object data="" class="container mt-4 showPDF">
                        </object> -->





                    </div>
                </div>

                <div class="buttoms mt-4">
                    <button class="me-4" type="submit"> continuer </button>
                    <button class=""> Retour </button>

                </div>


            </form>
            <div class="add bi bi-plus d-flex align-items-center justify-content-center col-1 "></div>
        </div>
    </div>
</section>


<script src="../js/EP01.js"></script>
<script>
    // function showPDF() {
    //     let input = document.querySelector('.pageRaport');
    //     input.addEventListener("input", (e) => {
    //         let path = e.target.value;
    //         document.querySelector('.showPDF').setAttribute('data', path.substr('8') ) ;
    //         console.log(path);      
    //     });

    // }
    // showPDF();

</script>

@endsection