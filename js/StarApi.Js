function buscar(){
    let result = document.querySelector("#ConteinerCard");
    let input = document.querySelector("#nStarWars").value;
    let html = ``;
    fetch('https://swapi.dev/api/'+input)
    .then(response => response.json())
    .then((data)  => {
        console.log(data)
    result.innerHTML = `<h1>${data.name}</h1><img style="background-color:white" src="${data.sprites.other.home.front_default}"/>`;
    });
    }