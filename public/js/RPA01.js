const add = document.querySelector(".add");
const forms = document.querySelector(".forms");

add.addEventListener("click", function () {
    const createItem = document.createElement("div");
    createItem.className =
        "all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center";
    createItem.innerHTML = `
  <span onclick="delcolumns(this);" class="drop d-flex justify-content-center align-items-center position-absolute"><i class="bi bi-x"></i></span>
  <div class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around " style="width:90%">
            <span class=" d-flex align-items-center justify-content-center"> Nature da la responsabilité </span>
            <div class="chose d-flex justify-content-center">
                <label class="Exceptionnel">
                    <input type="checkbox" name="type[]" value="Directeur" class="fild w-100" >
                    <span>Directeur</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="Chef de département" class="fild w-100" >
                    <span>Chef de département</span>
                </label>
                <label class="Rapide">
                    <input type="checkbox" name="type[]" value="Coordonnateur de filiére" class="fild w-100" >
                    <span>Coordonnateur de filiére</span>
                </label>
            </div>
        </div>  

        <div class="atherInfo ">
            <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

       
                </div>
                </div>
`;

    forms.appendChild(createItem);
});

function delcolumns(ref) {
    let remove = ref.parentNode.parentNode;
    remove.removeChild(ref.parentNode);
}


forms.addEventListener("click", function (event) {
    const target = event.target;
    console.log(target.matches("input[type='checkbox']") );
    if (target.matches("input[type='checkbox']")) {
        const inputsContainer = target.closest(".all").querySelector(".inputs");
        const type = target.value;
        console.log(type);
        if (type === "Directeur" || type === "Chef de département") {
            inputsContainer.innerHTML = `
            <div class="center w-100 d-flex justify-content-center align-content-center">
                                <label class="showInput position-relative ">
                                    <input type="number" name="NomberMandat[]" min="0" value="0"
                                        class="fild w-100" required>
                        <span>Nomber Mandat</span>
                </label>
            </div>
             `;
        } else if (type === "Coordonnateur de filiére") {
            inputsContainer.innerHTML = `
            <div class="center w-100 d-flex justify-content-center align-content-center">
                                <label class="showInput position-relative ">
                                    <input type="number" name="anneeResponsabilite[]" min="0" value="0"
                                        class="fild w-100" required>
                                    <span>Année Responsabilité </span>
                </label>
            </div>
`;
        }
    }
});