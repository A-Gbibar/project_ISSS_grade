<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données personnells</title>
    <!-- link font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap">
    <!-- link bootstrap v5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- link all mian css -->
    <link rel="stylesheet" href="css/minaAll.css">
    <!-- this is main liks  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- link icone bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <div class="perant d-flex align-items-center justify-content-center flex-column">
        <div class="imag mb-4"><img src="imag/isssLogo.svg" alt=""></div>
        <div class="title d-flex align-items-center justify-content-center flex-column">
            <h2 class="mb-4 text-center"><span>O</span>btenez un avancement de <span id="grade">grade</span> </h2>
            <p class="text-center mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam dolor quae
                blanditiis impedit quod delectus cumque, eligendi cum corrupti quisquam adipisci aut exercitationem
                totam enim dolore recusandae mollitia modi dignissimos?</p>
        </div>
        <div class="buttoms">

            <button class=""  onclick="btnCommencer()"> Commencer </button>
            <button class="">connexion</button>
        </div>
    </div>


    <div class="Commencer d-flex align-items-center justify-content-center flex-column">
        <div class="global-input p-3 d-flex align-items-center flex-column">
            <span class="close d-flex align-items-center justify-content-center" onclick="btnCommencer();"><i class="bi bi-x-lg"></i></span>
            <h2 class="w-100 text-center fw-bold text-capitalize mb-3 mt-2">Donnée personnelles</h2>

            <form action="{{route('proffesseur.store')}}" method="POST" class="p-3 d-flex align-items-center justify-content-center flex-wrap">
            @csrf
            <div class="inputs  d-flex align-items-center justify-content-center flex-wrap">
                <label class="lastName ">
                    <input type="text" name="lastName" class="fild w-100" required>
                    <span>Nom d'utilisateur</span>
                </label>

                <label class="firstName">
                    <input type="text" name="firstName" class="fild w-100" required>
                    <span>Prénom d'utilisateur</span>
                </label>

                <label class="tel">
                    <input type="tel" name="tel" class="fild w-100" required>
                    <span>Tél d'utilisateur</span>
                </label>

                <label class="emial">
                    <input type="text" name="emial" class="fild w-100" required>
                    <span>E-mail d'utilisateur</span>
                </label>

                <label class="departAtt">
                    <input type="text" name="departAtt" class="fild w-100" required>
                    <span>Département d'attache</span>
                </label>

                <label class="dateRercut">
                    <input type="date" name="dateRecut" class="fild w-100" required>
                    <span>Date de recrutement</span>
                </label>

                <label class="PPR">
                    <input type="text" name="PPR" class="fild w-100" required>
                    <span>P.P.R. (DOTI)</span>
                </label>

                <label class="gradeActuel">
                    <input type="text" name="gradeActuel" class="fild w-100" required>
                    <span>Grade actuel</span>
                </label>

                <label class="dateEffet">
                    <input type="date" name="dateEffet" class="fild w-100" required>
                    <span>Date d'effet</span>
                </label>
            </div>
                <div class="radios mt-3  d-flex align-items-center justify-content-around ">
                    <span class = "pe-4 d-flex align-items-center">Type d'avancement concerné</span>
                <div class="chose">
                    <label class="Exceptionnel">
                        <input type="radio" name="type" value="Exceptionnel" class="fild w-100" required>
                        <span>Exceptionnel</span>
                    </label>

                    <label class="Rapide">
                        <input type="radio" name="type" value="Rapide" class="fild w-100" required>
                        <span>Rapide</span>
                    </label>

                    <label class="Normal">
                        <input type="radio" name="type" value="Normal" class="fild w-100" required>
                        <span>Normal</span>
                    </label>
                </div>
            </div>

            <div class="buttoms mt-4">

                <button class=""> Create </button>
                <span class="btn btnClose" onclick="btnCommencer();">Close</span>
            </div>
            </form>

        </div>
    </div>
    


    <!-- link js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>

            // let btnCommencer = document.getElementById("Commencer");
            let Commencer    = document.querySelector('.Commencer');

             function btnCommencer(){
                Commencer.classList.toggle('active');
            }

    </script>


</body>

</html>