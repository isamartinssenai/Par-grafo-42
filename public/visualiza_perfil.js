$(document).ready(function(){

       
       $("#meuid").click(function(){

        let token = $.cookie('token');
        alert(token);
        
        $.ajax({
            url: "/api/altera_cadastro",
            method: "PUT",
            data: { 
                id_cadastro:$("#id_cadastro").val(),
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                telefone: $("#telefone").val(),
                nascimento: $("#nascimento").val(),
                genero: $("#genero").val(),
                token:token


            }, success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    alert("Perfil Alterado");
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