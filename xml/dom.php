<?php

$d= new DOMDocument();
$d->load("exemplul1.xml");

echo $d->saveXML();
echo "Octeti scrisi: ".($d->save("file.xml"));