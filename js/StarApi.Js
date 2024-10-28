function buscar(){
    let result = document.querySelector("#ConteinerCard");
    let input = document.querySelector("#nStarWars").value;
    let html = ``;
    fetch(`https://akabab.github.io/starwars-api/api/all.json`)
    .then(response => response.json())
    .then((data)  => {
        html += `<img src="${data[input].image}" >`;
        console.log(data);
    result.innerHTML = html;
    });
}