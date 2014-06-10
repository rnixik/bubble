<?php

interface Storage_Interface {

    /**
     * 
     * @param mixed $elements
     */
    public function setElements($elements);

    /**
     * 
     * @param int $index
     */
    public function getElementByIndex($index);
    
    /**
     * 
     * @param int $index
     * @param mixed $element
     */
    public function setElementByIndex($index, $element);

    /**
     * 
     * @return int
     */
    public function getSize();
    
    /**
     * 
     */
    public function getElements();
    
}
