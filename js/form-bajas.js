let formBaja = document.querySelector(".bajaInput");
formBaja.addEventListener("submit", function (e) {
  e.preventDefault();
  let modal = document.querySelector("#modal");
  let selected = document.querySelector(".select");
  let valueSelected = selected.selectedOptions[0].textContent;
  if (valueSelected == "Seleccione una opcion") {
    let html = `<div class="container-modal">
  <h2>Debe seleccinar una opcion</h2>
  <p class="btn-modal" onclick="cerrarModal()">Aceptar</p></div>
  </div>`;
    modal.innerHTML = html;
  } else {
    let html = `<div class="container-modal">
    <h2>¿Esta seguro que desea eliminar este registro?</h2>
    <p class="btn-modal" onclick="EnviarDelete()">Aceptar</p></div>
    </div>`;
    modal.innerHTML = html;
  }
});

let selected = document.querySelector(".select");
selected.addEventListener("change", function (e) {
  let modal = document.querySelector("#modal");
  let user = e.target.selectedOptions[0].value;
  fetch("../Server/Peticiones/User.php", {
    method: "POST",
    body: JSON.stringify({
      solicitud: user,
    }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then(function (json) {
      let html =
        ``;
        console.log(user);
        console.log(json);
      modal.innerHTML = html;
      modal.className = "modal";
    });
});

function cerrarModal() {
  console.log("cerrar");
  let modal = document.querySelector("#modal");
  modal.innerHTML = "";
  modal.className = "";
}

function EnviarDelete() {
  formBaja.submit();
}