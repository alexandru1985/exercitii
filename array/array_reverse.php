<?php
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

echo '<pre>',print_r($input),'</pre>';
echo '<pre>', print_r($reversed),'</pre>';
echo '<pre>',print_r($preserved),'</pre>';
?>