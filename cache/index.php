<?php
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

$handle = opendir('uploads/');
$cache = 'cache_test/index.php';
if (file_exists($cache)) {
 echo 1;
    include($cache);
} else {
    $output = NULL;
    while (($file = readdir($handle)) != false) {

        $output .= $file . '<br />';
    }
    closedir($handle);
    echo $output;
    $fh = fopen($cache, 'w+') or die ('error writing file');
    fwrite($fh, $output);
    fclose($fh);
}
session_cache_expire(1);
$cache_expire = session_cache_expire();
session_start();

echo "The cache limiter is now set to $cache_limiter<br />";
echo "The cached session pages expire after $cache_expire minutes";