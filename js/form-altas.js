function seleccionarArchivo() {
    let input = document.querySelector(".inputfile");
    if (input) {
        input.click();
    }
}

let input = document.querySelector(".inputfile");
input.addEventListener("change", function () {
    let imgAlta = document.querySelector("imgPerfil");
    const archivos = input.files;
    console.dir(imgAlta);
    if (!archivos || !archivos.length){
        imgAlta.src = "";
        return;
    }
    const primerArchivo = archivos[0];
    const objectURL = URL.createObjectURL(primerArchivo);

    imgAlta.src = objectURL;
    imgAlta.style = "width:200px;height:200px;border-radius: 100%";
});