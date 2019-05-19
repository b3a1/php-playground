<?php

namespace App;

class WhichAreIn
{
    public function inArray($a1, $a2) {
        $r = [];
        foreach($a1 as $f1) {
            foreach($a2 as $f2) {
                 if(FALSE !== (bool)preg_match(sprintf("/%s/",$f1), $f2)) {
                     $r[] = $f1;
                     break;
                 }
            }
        }
        sort($r);
        
        return $r;
    }
}
