
  
const add = document.querySelector(".add");
const forms = document.querySelector(".forms");

add.addEventListener("click", function () {
  const createItem = document.createElement("div");
  createItem.className =
    "all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center";
  createItem.innerHTML = `
  <span onclick="delcolumns(this);" class="drop d-flex justify-content-center align-items-center position-absolute"><i class="bi bi-x"></i></span>
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
          <span class="d-flex h-100 align-items-center"><input type="file"
                  name="pageRaport[]" accept="application/msword, application/pdf"
                  class="pageRaport fild w-100"></span>
      </div>
  </div>
</div>
`;

  forms.appendChild(createItem);
});

function delcolumns(ref){
    let remove = ref.parentNode.parentNode;
    remove.removeChild(ref.parentNode);
}