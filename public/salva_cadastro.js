$(document).ready(function(){
let token = $.cookie('token');

    $("#meuid").click(function(){

        
        $.ajax({
            url: "/api/cadastro_usuario",
            method: "POST",
            data: { 
                
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                telefone: $("#telefone").val(),
                nascimento: $("#nascimento").val(),
                genero: $("#genero").val(),
                token:token

            },success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    alert("Usuario cadastrado!");
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