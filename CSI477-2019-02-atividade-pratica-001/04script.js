$("button.btn-primary").click(function(event){
    console.log(event);
    var bot = event.currentTarget;

    if(bot.dataset.option == "correto")
    {
       $(bot).removeClass("btn-primary").addClass("btn-danger");
    }else{
        $(bot).removeClass("btn-primary").addClass("btn-success")
    }

});