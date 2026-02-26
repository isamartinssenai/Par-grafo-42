$(document).ready(function(){

       
       $("#meuid").click(function(){

        
        $.ajax({
            url: "http://127.0.0.1:8000/api/deleta_livro",
            method: "DELETE",
            data: { 
                id_livro :$("#id_livro").val(),
               


            },
            success: function (res) {
                console.log( res);
                alert("Funcionei");
                window.location.href ='/inicio'
              

              
            },
            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});