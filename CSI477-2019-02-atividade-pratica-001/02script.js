function calcula_imc()
{
    var alturinha =document.getElementById("altura") ;
    var pesin = document.getElementById("peso")

    var pesoo = parseFloat(pesin.value);
    var alturaa = parseFloat(alturinha.value)/100;

    var resultado = pesoo/(alturaa*alturaa);

    var imc = resultado.toFixed(2);
    
    pesoMin = 18.5*alturaa*alturaa;
    pesoMax = 24.9*alturaa*alturaa;

    pesoMin = pesoMin.toFixed(1);
    pesoMax = pesoMax.toFixed(1);
    

    if(imc < 18.5)
    {
        alert("Você está desnutrido com esse indice: " + imc+". Seu peso ideia está entre:" + pesoMin + " e " + pesoMax );
    }
    else if(imc >= 18.5 && imc <24.9)
    {
        alert("Você está saudável com esse indice: " + imc+ ". Seu peso ideia está entre:" + pesoMin + " e " + pesoMax );
    }
    else if(imc >= 25 && imc < 29.9)
    {
        alert("Você está com sobrepeso com esse indice: " + imc+ ". Seu peso ideia está entre:" + pesoMin + " e " + pesoMax );
    }
    else if(imc >= 30 && imc < 34.9)
    {
        alert("Você está com Obesidade I com esse indice: " + imc + ". Seu peso ideia está entre:" + pesoMin + " e " + pesoMax );
    }
    else if(imc >= 35 && imc < 39.9)
    {
        alert("Você está com Obesidade II com esse indice: " + imc + ". Seu peso ideia está entre:" + pesoMin + " e " + pesoMax );
    }
    else{
        alert("Você está com Obesidade III com esse indice: " + imc + ". Seu peso ideia está entre:" + pesoMin + " e " + pesoMax );
    }

}

$("#calcula").click(function(event){
    event.preventDefault();
    calcula_imc();
})

