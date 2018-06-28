         $(document).ready(function(){

          $('.acoesUsuario').hide();




          $('#atualizar').click(function(){

          $('#atualizar_perfil').show(1000);
           $('#deletar_perfil').hide(1000);
           

          });

          $('#deletar').click(function(){

          $('#deletar_perfil').show(1000);
           $('#atualizar_perfil').hide(1000);

          });
          



          
          $('#nome_usuario').keyup(function(){

          		atualizaUsuarios();
   			});

           $('#tipo').change(function(){

          		atualizaUsuarios();
   			});

      

      	function atualizaUsuarios(){

          $.ajax({

            url: 'bd/get_usuarios.php',
            method: 'post',
            data: $('#formulario-busca').serialize() ,
            success: function(data){	
            $('#usuarios').html(data);
            }
          })
         }
        /* Fim do atualiza Usuarios */ 






         	});




