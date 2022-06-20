//alert('JS está funcionando aqui no meu custom!');

jQuery(document).ready(function($){
    
    //alert('Carregou jQuery');
    
    $('.btn').click(function(){
        
        var id = $(this).attr('id');
        
        //alert('Cliquei no ' + id);
        
        $(this).parents('tr').fadeOut();
        
    });
    
})