$(document).ready(function(){
let token = $.cookie('token');
       
       $("#meuid").click(function(){

        
        $.ajax({
            url: "http://127.0.0.1:8000/api/deleta_cadastro",
            method: "DELETE",
            data: { 
                id_cadastro:$("#id_cadastro").val(),
                token:token
               
            },
            success: function (res) {
                console.log(res);
                setTimeout(function() {
                    window.location.href = '/cadastro';
                    if(res['erro'] == 'n'){
                    alert("Perfil deletado");
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