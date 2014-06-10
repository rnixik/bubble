<?php

require_once 'Sorter/Bubble/Abstract.php';
require_once 'Storage/Interface.php';
require_once 'Comparator/Numeric.php';
require_once 'Swapper.php';

class Sorter_Bubble_NumericArray extends Sorter_Bubble_Abstract {
    
    public function sort(\Storage_Interface &$storage) {
        $this->_storage = $storage;
        $this->_comparator = new Comparator_Numeric();
        $this->_swapper = new Swapper();
        
        $this->_bubble();
    }
    
}
