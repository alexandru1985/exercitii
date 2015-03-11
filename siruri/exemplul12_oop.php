<?php

class Saptamana{
    const NRZILE =7;
    function f() {echo self::NRZILE;}
      
}
$s = new Saptamana();
$s->f();
echo Saptamana::NRZILE;