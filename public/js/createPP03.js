const add = document.querySelector(".add");
const forms = document.querySelector(".forms");

add.addEventListener("click", function () {
  const createItem = document.createElement("div");
  createItem.className =
    "all pt-3 w-100 pb-4 position-relative d-flex flex-column justify-content-center align-items-center";
  createItem.innerHTML = `
    <span onclick="delcolumns(this);" class="drop d-flex justify-content-center align-items-center position-absolute"><i class="bi bi-x"></i></span>
   
    <div class="radios mb-3 position-relative mt-4  d-flex align-items-center justify-content-around">
    <span class=" d-flex align-items-center justify-content-center">Outile / Supports</span>
    <div class="chose d-flex justify-content-center">
        <label class="Diaporamas">
            <input type="radio" name="type[]" value="Diaporamas" class="fild w-100" required>
            <span>Diaporamas</span>
        </label>

        <label class="Site-Web">
            <input type="radio" name="type[]" value="SiteWeb" class="fild w-100" required>
            <span>Site Web</span>
        </label>

        <label class="Video">
            <input type="radio" name="type[]" value="Video" class="fild w-100" required>
            <span>Support Vidéo</span>
        </label>

    </div>
</div>

<div class="atherInfo ">
    <div class="inputs input-Diaporamas w-100 gap-4 mt-4 d-flex justify-content-center align-content-center flex-wrap">
      
    </div>
</div>
`;

  forms.appendChild(createItem);
});

function delcolumns(ref){
    let remove = ref.parentNode.parentNode;
    remove.removeChild(ref.parentNode);
}

forms.addEventListener("click", function (event) {
  const target = event.target;
  if (target.matches("input[type='radio']")) {
    const inputsContainer = target.closest(".all").querySelector(".inputs");
    const type = target.value;
    if (type === "Diaporamas") {
      inputsContainer.innerHTML = `
        <label class="showInput DateDiffusion position-relative">
          <input type="date" name="DateDiffusion[]" class="fild w-100" required>
          <span>Date de diffusion</span>
        </label>
      `;
    } else if (type === "SiteWeb") {
      inputsContainer.innerHTML = `
        <label class="showInput lien position-relative">
          <input type="text" name="lien[]" class="fild w-100" required>
          <span>lien</span>
        </label>
      `;
    } 
  }
});
