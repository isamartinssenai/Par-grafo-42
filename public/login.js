$(document).ready(function(){

   
    $("#meuid").click(function(){

       
        $.ajax({
            url: "http://127.0.0.1:8000/api/login_novo",
            method: "GET",
            data: { 
                
                email: $("#email").val(),
                senha: $("#senha").val(),

            },success: function(response){
                console.log(response);
                if(response['erro'] =='n'){
                    alert("loguei");
                    $.cookie('token',response['token'],{expire:7});

                    

                    setTimeout(function(){
                        //window.location.href="/home"; 
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