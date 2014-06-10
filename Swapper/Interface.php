<?php

require_once 'Storage/Interface.php';

interface Swapper_Interface {
    
    public function swap(Storage_Interface $storage, $indexA, $indexB);
    
}
