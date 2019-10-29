$("#calcula").click(function(event){

var linhas = document.getElementsByTagName("tbody")[0].children;
console.log(linhas);

var carrinhos = [];
[...linhas].forEach(tr => {
    td = tr.children;
    carro = {
        largada: td[0].innerHTML,
        nome: td[1].children[0].value,
        tempo: td[2].children[0].value
    }

    carrinhos.push(carro);
});

carrinhos.sort(
function (a,b) {
    if (a.tempo < b.tempo)
       return -1;
    if (a.tempo > b.tempo)
      return 1;
    return 0;
  }
);

createTable(carrinhos);

console.log(carrinhos);
});

function createTable(carrinhos){
  var resultado = document.createElement("table");
  $(resultado).addClass("table table-striped");
  var cabeca = document.createElement("thead");
  var tr = document.createElement("tr");
  tr.innerHTML = `
    <th>Largada</th>
    <th>Nome</th>
    <th>Tempo</th>
    <th>Resultado</th>
  `;
  resultado.appendChild(cabeca.appendChild(tr));
console.log(resultado);
}

