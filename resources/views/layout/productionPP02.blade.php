@extends('layout.app')
@section('container')
    <!-- link craetePP02 css -->
    <link rel="stylesheet" href="../css/createPP02.css">
    </head>

    <body class="">

        <nav class="">
            <div class="p-2 container perant d-flex justify-content-between align-items-center">
                <div class="logoHassan-1er">
                    <img src="../imag/loogoHassan1.png" alt="">
                </div>
                <p class="title text-center">universite hassan <span class="text-lowercase">1er</span> Institut suerieur des
                    sciences de la sante -SETTAT-</p>
                <div class="logoISSS">
                    <img src="../imag/isssLogo.svg" alt="">
                </div>
            </div>

        </nav>

        <div class="container position-relative">
            <div class="card card-all mt-3">
                <div class="title card-header d-flex justify-content-between align-items-center p-2 pe-4 ps-4 ">
                    Note de Production Pédagogique (1)
                    <i class="clickClose bi bi-x-lg" onclick="clickClose();"></i>

                </div>
                <div class="card-body ps-4">
                    <p>tu as dans Production Pédagogique la note <span class="ps-2">{{ $note }}</span></p>
                    <div class="traver d-flex flex-column ps-3">
                        <span>Titre</span>
                        <ol>
                            @foreach ($datas as $data)
                                <li>{{ $data->titre }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card cradClose mt-3 ">
                <div class="title d-flex justify-content-between align-items-center p-2 pe-4 ps-4 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <i class="bi bi-dash-lg" onclick="clickClose();"></i>
                </div>
            </div>
        </div>
    @endsection
