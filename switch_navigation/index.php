<a href="?page=homepage">Home page</a></br>
<a href="?page=news">News</a></br>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "";
}
//echo $page; //homepage
include 'case.php';
