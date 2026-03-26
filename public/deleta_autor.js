$(document).ready(function(){
let token = $.cookie('token');
       
       $("#meuid").click(function(){

        
        $.ajax({
            url: "/api/deleta_autor",
            method: "DELETE",
            data: { 
                id_autor:$("#id_autor").val(),
                token:token
               
            },
            success: function (res) {
                console.log(res);
                setTimeout(function() {
                    window.location.href = '/home';
                    if(res['erro'] == 'n'){
                    alert("Autor deletado");
                }else{
                    alert("Erro ao deletar");
                }
                }, 2500);              
            },

            
            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});