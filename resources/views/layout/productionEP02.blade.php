@extends('layout.appActivite.app')
@section('title') EP02 @endsection
@section('linkCss')
<!-- link css -->
@endsection
@section('container')

@section('minTitle') Encadrement Pédagogique @endsection
@section('supTitle') Encadrement Pédagogique 02 @endsection
@section('description') Membre de jury d'un mémoire de project de fin d'études @endsection

@section('ContanierForm')

<form action="{{route('EP02.store' , $id)}}" enctype="multipart/form-data" method="POST"
    class=" col-11 p-3 d-flex align-items-center justify-content-center flex-column">
    @csrf
    <div class="forms w-100">
        <div class="all pb-4 position-relative  w-100 d-flex flex-column justify-content-center align-items-center">

 

            <div class="atherInfo ">
                <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

                    <div class="w-100 styleTow pageRaport position-relative d-grid">
                        <span class="d-flex align-items-center">Fournir la premiére page du
                            rapport</span>
                        <span class="d-flex h-100 align-items-center"><input type="file"
                                name="page[]" accept="application/msword, application/pdf"
                                class="pageRaport fild w-100"></span>
                    </div>
                    @error('EroorSize')
                    <span class = 'text-danger' >{{$message}}</span>
                    @enderror

                    <div class="center w-100 d-flex justify-content-center align-content-center">
                        <label class="DateDiffusion position-relative ">
                            <input type="date" name="DateRelisation[]" class="fild w-100" required>
                            <span>Date de sa réalisation</span>
                        </label>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="buttoms mt-4">
        <button class="me-4"> continuer </button>
     <a href="{{route('EP01.show' , $id)}}">  <button class="" type="button"> Retour </button> </a>  

    </div>


</form>
@endsection


@section('linkJS')
<script src="../js/EP02.js"></script>
@endsection