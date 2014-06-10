<?php

require_once 'Comparator/Interface.php';

class Comparator_Numeric implements Comparator_Interface {
    
    
    /**
     * 
     * @param float $elementA
     * @param float $elementB
     * @return boolean whether $elementA is bigger than $elementB
     */
    public function isBigger($elementA, $elementB) {
        $flag = false;
        if ($elementA > $elementB) {
            $flag = true;
        }
        return $flag;
    }

}
