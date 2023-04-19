



function digitar(event){
    $('#pesquisar').keyup(function(e) {
   
        var termo = $('#pesquisar').val().toUpperCase();
        $('.conteudo').each(function() { 
            if($(this).html().toUpperCase().indexOf(termo) === -1) {
                $(this).hide(); 
                    if(document.getElementById('pesquisar').value==""){
                        document.querySelector('.tabela').style.display ="none"
                    }else{
                        document.querySelector('.tabela').style.display ="flex"
                    }
            } else {
                $(this).show();
                if(document.getElementById('pesquisar').value==""){
                    document.querySelector('.tabela').style.display ="none"
                }else{
                    document.querySelector('.tabela').style.display ="flex"
                }
                
            }
        });
    });
    
  }


 


   


  

  
   
    
  
  