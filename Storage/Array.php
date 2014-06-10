<?php

require_once 'Storage/Interface.php';
require_once 'Storage/Exception.php';

class Storage_Array implements Storage_Interface{
    
    
    /**
     *
     * @var array
     */
    protected $_elements = array();
    
    
    /**
     * 
     * @param int $index
     * @return int
     * @throws Storage_Exception
     */
    public function getElementByIndex($index) {
        if ($this->_checkIndexRange($index)) {
            return $this->_elements[$index];
        } else {
            throw new Storage_Exception("Out of range: $index");
        }
    }

    /**
     * 
     * @param array $elements
     */
    public function setElements($elements) {
        $this->_position = 0;
        $this->_elements = $elements;
    }
    
    /**
     * 
     * @param int $index
     * @return boolean
     */
    protected function _checkIndexRange($index) {
        if (isset($this->_elements[$index])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * @return int
     */
    public function getSize() {
        $size = count($this->_elements);
        return $size;
    }

    /**
     * 
     * @param int $index
     * @param int $element
     */
    public function setElementByIndex($index, $element) {
        $this->_elements[$index] = $element;
    }
    
    public function getElements() {
        return $this->_elements;
    }
}