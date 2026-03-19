$(document).ready(function(){

       
       $("#meuid").click(function(){

        let token = $.cookie('token');
        alert(token);
        
        $.ajax({
            url: "http://127.0.0.1:8000/api/altera_autor",
            method: "PUT",
            data: { 
                id_autor:$("#id_autor").val(),
                nome: $("#nome").val(),
                cpf: $("#cpf").val(),
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