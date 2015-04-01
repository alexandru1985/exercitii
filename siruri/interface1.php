<?php

class Numbers implements Countable
{

    public function count() {
        return '1,2,3';
    }
}
$object= new Numbers();
echo $object->count();