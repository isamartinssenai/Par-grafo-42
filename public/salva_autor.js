$(document).ready(function(){

    $("#meuid").click(function(){

        let token = $.cookie('token');

        $.ajax({
            url: "/api/cadastra_autor",
            method: "POST",
            data: { 
                
                nome: $("#nome").val(),
                cpf: $("#cpf").val(),
                telefone: $("#telefone").val(),
                nascimento: $("#nascimento").val(),
                genero: $("#genero").val(),
                token:token

            },success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    alert("Autor cadastrado!");
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