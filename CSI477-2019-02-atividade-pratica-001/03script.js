function calcula(){
    var ampli = parseFloat(document.getElementById("amplitude").value);
    var temp = parseFloat(document.getElementById("tempo").value);

    var result =Math.log10(ampli) + 3*(Math.log10(8*temp)) -2.92;
    result = result.toFixed(2);
    

    if(result < 3.5){
        alert(" Magnitude :" + result + ". Geralmente não sentido, mas gravado");
    }

    if(result >= 3.5 && result < 5.5){
        alert(" Magnitude :" + result + ". As vezes sentido mas raramente causa danos");
    }

    if(result >= 5.5 && result <= 6){
        alert(" Magnitude :" + result + ". No máximo causa pequenos danos a prédios bem contruidos, mas pode danificar seriamente casas mal contruidas em regiões proximas");
    }

    if(result >= 6.1 && result <= 6.9){
        alert(" Magnitude :" + result + ". Pode ser destrutivo em áreas em torno de até 100km do epicentro");
    }

    if(result > 6.9 && result <= 7.9){
        alert(" Magnitude :" + result + ". Grande terremoto. Pode causar sérios danos numa grande faixa");
    }
    
    if(result >= 8){
        alert(" Magnitude :" + result + ". Enorme terremoto. Pode Causar graves danos em muitas áreas mesmo que estejam a centenas de quilomentros");
    }


}

$("#calcula").click(function(event){
    event.preventDefault();
    calcula();
})