<?php

require_once 'Sorter/Interface.php';

abstract class Sorter_Bubble_Abstract implements Sorter_Interface {
    
    /**
     *
     * @var Comparator_Interface
     */
    protected $_comparator;
    
    /**
     *
     * @var Swapper_Interface
     */
    protected $_swapper;
    
    /**
     *
     * @var Storage_Interface
     */
    protected $_storage;

    
    /**
     * 
     */
    public function _bubble() {
        for ($i = $this->_storage->getSize() - 1; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++) {
                if ($this->_comparator->isBigger($this->_storage->getElementByIndex($j + 1), $this->_storage->getElementByIndex($j))) {
                    $this->_swapper->swap($this->_storage, $j + 1, $j);
                }
            }
        }
    }

}
