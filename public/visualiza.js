$(document).ready(function(){

       
       $("#meuid").click(function(){

        let token = $.cookie('token');
        
        $.ajax({
            url: "http://127.0.0.1:8000/api/altera_livro",
            method: "PUT",
            data: { 
                id_livro :$("#id_livro").val(),
                autor: $("#autor").val(),
                titulo : $("#titulo").val(),
                ano_publicacao: $("#ano_publicacao").val(),
                editora: $("#editora").val(),
                isbn: $("#isbn").val(),
               paginas : $("#paginas").val(),
               preco:$("#preco").val(),
               genero: $("#genero").val(),
               token:token


            }, success: function (res){
                console.log(res);
                if(res['erro'] == 'n'){
                    alert("Livro Alterado");
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