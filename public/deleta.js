$(document).ready(function(){
let token = $.cookie('token');
       
       $("#meuid").click(function(){

        
        $.ajax({
            url: "/api/deleta_livro",
            method: "DELETE",
            data: { 
                id_livro :$("#id_livro").val(),
                token:token
               
            },
            success: function (res) {
                console.log(res);
                setTimeout(function() {
                    window.location.href = '/inicio';
                    if(res['erro'] == 'n'){
                    alert("Livro Alterado");
                }else{
                    alert("Erro ao Alterar");
                }
                }, 2500);              
            },

            
            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});