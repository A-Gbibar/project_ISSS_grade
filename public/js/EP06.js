const add = document.querySelector(".add");
const forms = document.querySelector(".forms");

add.addEventListener("click", function () {
    const createItem = document.createElement("div");
    createItem.className =
        "all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center";
    createItem.innerHTML = `
  <span onclick="delcolumns(this);" class="drop d-flex justify-content-center align-items-center position-absolute"><i class="bi bi-x"></i></span>
  <div class="atherInfo ">
  <div class="inputs w-100 gap-4 mt-4 d-flex justify-content-between align-content-center flex-wrap">

      <div class="w-100 styleTow pageRaport position-relative d-grid">
          <span class="d-flex align-items-center justify-content-center">document</span>
          <span class="d-flex h-100 align-items-center"><input type="file"
                  name="document[]" accept="application/msword, application/pdf"
                  class="pageRaport fild w-100"></span>
      </div>

      <div class="center w-100 d-flex justify-content-between align-content-center">
      <label class=" DateDiffusion position-relative ">
          <input type="date" name="DateVisite[]" class="fild w-100" required>
          <span>Date de la Visite</span>
      </label>
          <label class=" DateDiffusion position-relative ">
              <input type="date" name="DateSortie[]" class="fild w-100" required>
              <span>Date de la sortie</span>
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
