
window.addEventListener('scroll', function () {
    const header = document.querySelector('nav');
    header.classList.toggle("sticky", window.scrollY > 0);
});

//add pp01

let add = document.querySelector(".add");
add.onclick = function () {
    createIteam = document.createElement('div');
    createIteam.className = 'all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center';
    createIteam.innerHTML = `
    <span class="drop d-flex justify-content-center align-items-center position-absolute" onclick="delcolumns(this);"><i class="bi bi-x"></i></span>
    <div class="radios mt-3  d-flex align-items-center justify-content-around ">
    <span class=" d-flex align-items-center justify-content-center">Type exemplaire</span>
    <div class="chose d-flex justify-content-center position-relative">
        <label class="Exceptionnel">
            <input type="radio" name="type" value="Ouvrages" class="fild w-100" required>
            <span>Ouvrages</span>
        </label>

        <label class="Rapide">
            <input type="radio" name="type" value="manules" class="fild w-100" required>
            <span>manules</span>
        </label>

        <label class="Normal">
            <input type="radio" name="type" value="Normal" class="fild w-100" required>
            <span>Livres</span>
        </label>

    </div>
</div>
<div class="inputs mt-4">
    <label class="Isbn w-100 position-relative">
        <input type="text" name="Isbn" class="fild w-100" required>
        <span>ISBN / ISSN</span>
    </label>
</div>

<div class="atherInfo ">
    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap"">
        <label class="maisonEdition position-relative">
            <input type="text" name="maisonEdition" class="fild w-100" required>
            <span>maison Edition</span>
        </label>
        <label class="avoir position-relative">
            <input type="text" name="avoir" class="fild w-100" required>
            <span>Avoir</span>
        </label>
        <label class="maisonEdition position-relative">
            <input type="text" name="titre" class="fild w-100" required>
            <span>titre</span>
        </label>
        <label class="auteur position-relative">
            <input type="text" name="auteur" class="fild w-100" required>
            <span>auteur</span>
        </label>
        <label class="niveu position-relative">
            <input type="text" name="niveu" class="fild w-100" required>
            <span>niveu</span>
        </label>
        <label class="DateEdition position-relative ">
            <input type="date" name="DateEdition" class="fild w-100" required>
            <span>Date Edition</span>
        </label>
    </div>
</div>

    `;
    document.querySelector(".forms").appendChild(createIteam);

}
function delcolumns(ref){
    let remove = ref.parentNode.parentNode;
    remove.removeChild(ref.parentNode);
}
