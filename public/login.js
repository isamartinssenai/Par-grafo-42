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

                    }
                },

            error: function (xhr) {

                console.log("Erro ao consultar status Pix:", xhr.responseText);
            }
        });
    });
});