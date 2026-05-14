$(document).ready(function() {

    $('#enviar_codigo').click(function() {

        console.log("Enviando código para o servidor...");

        $.ajax({
            type:"GET",
            url:"api/enviar_codigo",

            data: {
                codigo: $('#codigo').val(),
                email: $('#email').val()
            },

            dataType: "json",

            success: function(response){

                console.log(response);

                if(response.erro == 'n') {

                    $.cookie('token', response.token, {expire:7});

                    Swal.fire({
                        icon: 'success',
                        title: 'Código correto!',
                        text: 'Sua autenticação foi concluída com sucesso.',
                        confirmButtonColor: '#b78c5a',
                        background: '#fffdf9',
                        color: '#1f3133',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });

                    setTimeout(function(){

                        window.location.href="/home";

                    }, 2000);

                }else{

                    // CÓDIGO ERRADO
                    Swal.fire({
                        icon: 'error',
                        title: 'Código inválido',
                        text: 'O código digitado está incorreto.',
                        confirmButtonColor: '#b78c5a',
                        background: '#fffdf9',
                        color: '#1f3133',
                        showClass: {
                            popup: 'animate__animated animate__shakeX'
                        }
                    });

                }

            },

            error: function(){

                Swal.fire({
                    icon: 'error',
                    title: 'Erro no servidor',
                    text: 'Não foi possível verificar o código.',
                    confirmButtonColor: '#b78c5a',
                    background: '#fffdf9',
                    color: '#1f3133'
                });

            }

        });

    });

});