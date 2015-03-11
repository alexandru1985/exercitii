<?php

/*$xml= simplexml_load_file("exemplul1.xml") or die ("Eroare la incarcarea fisierului");
 echo $xml->persoana[0]->nume;*/
$xml= simplexml_load_file("exemplul1.xml") or die ("Eroare la incarcarea fisierului");
$elemente= $xml->persoana[0]->children();
foreach ($elemente as $p) {
    echo "Nume element:{$p->getName()}\n";
    
}
// xml parsing php    https://www.youtube.com/watch?v=CCDG_sUQwp0

// html5 tag-uri noi canvas,article,section, aside, nav https://www.youtube.com/watch?v=dDn9uw7N9Xg