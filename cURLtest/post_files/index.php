<form action="index.php" method = "post" enctype="multipart/form-data">
    <input type ="file" name = "image" /><br />
    <input type ="submit" value ="Submit" />

</form>
<?php
if (isset($_FILES['image']['tmp_name'])) {


    $ch = curl_init();
    if (class_exists('CurlFile', false)) {
       echo new CurlFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name']);
    }

    $data = array("myimage" => $cfile);

    curl_setopt($ch, CURLOPT_URL, "http://localhost/joaca/cURLtest/post_files/uploads.php");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);


    $response = curl_exec($ch);
    if ($response == true) {
        echo "File posted";
    } else {
        echo "Error:" . curl_error($ch);
    }
}