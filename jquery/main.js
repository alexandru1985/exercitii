$(document).ready(function() {
    $('#get').one('click',function() {

        $.getJSON("data.json", function(obj) {
 
            $.each(obj, function(key, value) {

                $('.container').append('<br>' + value.Name + ':' + value.Capital + '</br>');



            });
        });
    });

});
