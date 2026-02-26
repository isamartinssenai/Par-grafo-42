$(document).ready(function(){

       
       $("#meuid").click(function(){

        
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
               genero: $("#genero").val()


            },
            success: function (res) {
                console.log( res);
                alert("Funcionei");
                window.location.href
              

              
            },
            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});