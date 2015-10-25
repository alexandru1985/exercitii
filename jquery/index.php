<html>
    <head>
        <title>The jQuery Example</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                $("#driver").click(function(event) {
                      event.stopPropagation();
                    $.ajax({
                        url: "result.json",
                        //force to handle it as text
                        dataType: "text",
                        success: function(data) {

                            //data downloaded so we call parseJSON function 
                            //and pass downloaded data
                            var json = $.parseJSON(data);
                            //now json variable contains data in json format
                            //let's display a few items
                            for (var i = 0; i < json.length; ++i)
                            {
                                $('#results').append('<div class="name">' + json[i].name + '</>');
                                $('#results').append('<div class="name">' + json[i].id + '</>');
                      
                            }
       
                        } 

                        
                    });
            
                });
           
            });
        </script>

    </head>

    <body>

        <p>Click on the button to load result.json file </p>

        <div id="results" style="background-color:r;">
   
        </div>

        <input type="button" id="driver" value="Load Data" />

    </body>

</html>