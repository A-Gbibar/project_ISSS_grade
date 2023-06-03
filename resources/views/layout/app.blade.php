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
    @yield("linkCss")
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


    @yield('container')
    
    <script src="../js/app.js"> </script>

</body>

</html>