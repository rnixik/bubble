<?php

require_once 'Storage/Interface.php';

interface Sorter_Interface {
    
    public function sort(Storage_Interface &$storage);
    
}
