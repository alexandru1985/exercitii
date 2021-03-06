<?php
include("functions.php");

if(!empty($_GET['name'])){
    
    $name = $_GET['name'];
    $price = get_price($name);
    
    if(empty($price)){
        
        deliver_response(200, "book not found", null);
        
    }
else {     deliver_response(200, "book  found", $price);}
}

else{deliver_response(400, "invalid request", null);}



function deliver_response($status,$status_message,$data){
    
    header("HTTP/1.1 $status $status_message");
    $response['status'] = $response;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    
    $json_response = json_encode($response);
    echo $json_response;
}
