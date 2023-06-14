const add = document.querySelector(".add");
const forms = document.querySelector(".forms");

add.addEventListener("click", function () {
    const createItem = document.createElement("div");
    createItem.className =
        "all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center";
    createItem.innerHTML = `
        <span onclick="delcolumns(this);" class="drop d-flex justify-content-center align-items-center position-absolute"><i class="bi bi-x"></i></span>
        <div class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around " style="width:90%">
        <span class=" d-flex align-items-center justify-content-center"> Organisation des journées </span>
        <div class="chose d-flex justify-content-center">
            <label class="Exceptionnel">
                <input type="checkbox" name="type[]" value="Responsable" class="fild w-100" >
                <span>Responsable</span>
            </label>
            <label class="Rapide">
                <input type="checkbox" name="type[]" value="Membre" class="fild w-100">
                <span>Membre du comité</span>
            </label>
        </div>
        </div>  
`;

    forms.appendChild(createItem);
});

function delcolumns(ref) {
    let remove = ref.parentNode.parentNode;
    remove.removeChild(ref.parentNode);
}
