$('input#name-submit').on('click',function(){
var name =$('input#name').val();

   if($.trim(name) !=''){
       $.post('name.php', {name: name}, function (data){
           $('#name-data').text(data);
       });
   } 
    
});
