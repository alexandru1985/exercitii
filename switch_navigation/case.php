<?php

switch ($page) {
   case "homepage":
       include "homepage.php";
       break;
   case "news":
       include "news.php";
       break;
   default :
       echo "This is default page";
           break;
}

