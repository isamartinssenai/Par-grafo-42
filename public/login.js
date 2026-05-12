$(document).ready(function(){

   
    $("#meuid").click(function(){

       
        $.ajax({
            url: "/api/login_novo",
            method: "GET",
            data: { 
                
                email: $("#email").val(),
                senha: $("#senha").val(),

            },success: function(response){
                console.log(response);
                if(response['erro'] =='n'){
                    alert("Logado com sucesso!");
                    $.cookie('token',response['token'],{expire:7});

                    

                    setTimeout(function(){
                        window.location.href="/home"; 
                    },2000);
                    
                }else{

                    if (response['msg'] == 'autentica_ativa')
                        alert("Autenticação de dois fatores ativa, por favor digite o código enviado para seu email")
                    setTimeout(function (){
                        window.location.href = "digita_codigo";
                    },2000);
                }
            
                },

            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});