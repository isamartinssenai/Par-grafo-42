$(document).ready(function() {
    $('#enviar_codigo').click(function() {
        $.ajax({
            type:"GET",
            url:"api/enviar_codigo",
            data: {
                codigo: $('#codigo').val(),
                email: $('#email').val()
            },
            dataType:"json",
            success:function(response){

                if(response['erro'] == 'n') {
                    $.cookie('token',response['token'],{expire:7});
                    alert("Funcionandoo seu código")

                    

                    setTimeout(function(){
                        window.location.href="/home"; 
                    },2000);
                }
            }
        });
    });
});