<?php

require_once 'Swapper/Interface.php';
require_once 'Storage/Interface.php';

class Swapper implements Swapper_Interface {
        
    /**
     * @param Storage_Interface $storage
     * @param int $indexA
     * @param int $indexB
     */
    public function swap(Storage_Interface $storage, $indexA, $indexB) {
        $elementA = $storage->getElementByIndex($indexA);
        $elementB = $storage->getElementByIndex($indexB);
        $storage->setElementByIndex($indexA, $elementB);
        $storage->setElementByIndex($indexB, $elementA);
    }

}