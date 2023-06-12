<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- link font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap">
    <!-- link bootstrap v5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- link all mian css -->
    <!-- link icone bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/minaAll.css">
    <link rel="stylesheet" href="../css/pdoductinP.css">

    <!-- link config css -->
    <link rel="stylesheet" href="../css/createPP02.css">
    <!-- link css EP01 -->
    <link rel="stylesheet" href="../css/EP01.css">
    @yield('linkCss')
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

    @yield('globalTitle')


    <section>
        <div class="perant p-2 container">
            <div class="titles mt-4 d-flex flex-column">
                <span> Activation Pédagogiques</span>
                <span> @yield('minTitle')</span>
            </div>
            <h4 class="ms-3 mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i>@yield('supTitle')</h4>
            <h5 class="mt-4"> <i class="bi bi-arrow-90deg-right me-2"></i> @yield('description') </h5>

            <div id="pp"
                class="global-input position-relative  row row-cols-2 justify-content-center align-items-center">

                @yield('ContanierForm')

                <div class="add bi bi-plus d-flex align-items-center justify-content-center col-1 "></div>
            </div>
        </div>
    </section>


    <script src="../js/app.js"></script>
    @yield('linkJS')

</body>

</html>
