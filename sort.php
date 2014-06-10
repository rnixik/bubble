<?php

require_once 'Sorter/Bubble/NumericArray.php';
require_once 'Storage/Array.php';

$bubbleSorter = new Sorter_Bubble_NumericArray();

$storage = new Storage_Array;
$storage->setElements(array(15, 204, 1, 4, 2, 6, 8, 3, 150));

$bubbleSorter->sort($storage);
var_dump($storage->getElements());
