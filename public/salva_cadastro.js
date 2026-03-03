$(document).ready(function(){


    $("#meuid").click(function(){

        
        $.ajax({
            url: "http://127.0.0.1:8000/api/cadastro_usuario",
            method: "POST",
            data: { 
                
                nome: $("#nome").val(),
                email: $("#email").val(),
                senha: $("#senha").val(),
                telefone: $("#telefone").val(),
                genero: $("#genero").val(),

            },
            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});