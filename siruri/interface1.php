<?php

class MyThings implements Countable
{

    public function count() {
        return '1,2,3';
    }
}
$object= new MyThings();
echo $object->count();