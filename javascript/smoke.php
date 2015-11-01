<html>

    <head> 
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <script type="text/javascript"src="js/bootstrap.js"></script> 
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="smoke.min.js"></script>
        <link rel="stylesheet" href="smoke.css" type="text/css">
        <script type="text/javascript">
function test() {
    smoke.confirm("Are you sure?", function(e) {
        if (e) {

        } else {

        }
    }, {
        ok: "Yes",
        cancel: "No",
        classname: "custom-class",
        reverseButtons: true
    });
}


        </script>
    </head>

    <body>
        
        <input type="button" value="Test" onClick="test()">