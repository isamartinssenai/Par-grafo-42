$(document).ready(function(){

    $("#meuid").click(function(){

        let token = $.cookie('token');

        $.ajax({
            url: "/api/cadastra_ebook",
            method: "POST",
            data: { 
                
                titulo: $("#titulo").val(),
                autor: $("#autor").val(),
                genero: $("#genero").val(),
                sinopse: $("#sinopse").val(),
                texto: $("#texto").val(),
                token:token

            },success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    alert("E-book cadastrado!");
                }else{
                    alert("Erro ao Alterar");
                }
            },
            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});