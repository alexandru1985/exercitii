<?php

class Download
{

    const URL_MAX_LENGH = 2000;

    // clean url
    protected function cleanURL($url)
    {
        if (isset($url)) {
            if (!empty($url)) {
                if (strlen($url) < self::URL_MAX_LENGH) {
                    return strip_tags($url);
                }
            }
        }
    }

    // is url

    protected function isURL($url)
    {
        $url = $this->cleanURL($url);
        if (isset($url)) {
            if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
                return $url;
            }
        }
    }

    // return extension

    protected function returnExtension($url)
    {
        if ($this->isURL($url)) {
            $end = basename($url);
            if (isset($end)) {
                return $end;
            }
        }
    }

    public function downloadFile($url)
    {
        if ($this->isURL($url)) {
            $extension = $this->returnExtension($url);
        }
        if ($extension) {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


            $return = curl_exec($ch);
            curl_close($ch);
            $destination = "save/$extension";
            $file = fopen($destination, "w+");
            fputs($file, $return);
            if (fclose($file)) {
                echo "File downloaded";
            }
        }
    }

}

$obj = new Download();
if (isset($_POST['url'])) {
    $url = $_POST['url'];
}
?>

<form action = "http://localhost/joaca/cURLtest/download/index.php" method = "post">
    <input type ="text" name ="url" maxlenght = "2000" />
    <input type ="submit" value ="Download" />
</form>
<?php
if (isset($url)) {
    $obj->downloadFile($url);
}?>