<html>
    <head>
      
   
    </head>
    <body>
       <script type="text/javascript">
var xmlhttp= new XMLHttpRequest(),json;
xmlhttp.onreadystatechange = function (){
    if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
    json= JSON.parse(xmlhttp.responseText);
    console.log(json);
     document.write(json);
        }
};
xmlhttp.open('GET','exemplul1.json', true);
xmlhttp.send();
        </script>
    </body>
</html>


<?php
// json manual php

// jsonlint

// Converting mysql database values into json data,  https://www.youtube.com/watch?v=LQa7KX2dWMA