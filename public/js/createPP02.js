let collectifs = document.querySelector(".collectifs");
function Addcollective() {
    collectifs.classList.add("active");
}
function Removecollective() {
    collectifs.classList.remove("active");
}

let add = document.querySelector(".add");
add.onclick = function () {
    document.querySelector("label .collectif").removeAttribute("onclick");
    createIteam = document.createElement("div");
    createIteam.className =
        "all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center";
    createIteam.innerHTML = `
    <span class="drop d-flex justify-content-center align-items-center position-absolute" onclick="delcolumns(this);"><i class="bi bi-x"></i></span>
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
    <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap"">
        <label class=" DateDiffusion position-relative ">
            <input type="date" name="DateDiffusion[]" class="fild w-100" required>
        <span>Date de diffusion</span>
        </label>
        <label class="DateEdition position-relative ">
            <input type="number" name="annee[]" value="2023" min="2012" max="3000" step="1"
                class="fild w-100" required>
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
        <label class="Individuel" onclick="">
            <input type="checkbox" name="collectif[]" value="individuel" class="fild w-100" >
            <span>Individuel</span>
        </label>
        <label class="Collectif" onclick="">
        <input type="checkbox" name="collectif[]" value="collectif" class="fild w-100" >
        <span>Collectif</span>
    </label>
    </div>
</div>

<div class="collectifs coll inputs d-flex justify-content-around flex-wrap">
    <div
        class="inputs me-3  mt-4 d-flex justify-content-between align-content-center flex-wrap">
        <label class=" w-100 DateDiffusion position-relative ">
            <input type="number" name="NomberCollectif[]" min="1" max="20" class="fild w-100">
            <span>Nomber intervenants</span>
    </div>
</div>

    `;
    document.querySelector(".forms").appendChild(createIteam);
};
function delcolumns(ref) {
    let remove = ref.parentNode.parentNode;
    remove.removeChild(ref.parentNode);
}
