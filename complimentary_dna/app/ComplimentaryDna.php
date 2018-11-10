<?php

namespace App;

/**
 * In DNA strings, symbols "A" and "T" are complements of 
 * each other, as "C" and "G". You have function with one 
 * side of the DNA (string, except for Haskell); you need 
 * to get the other complementary side. DNA strand is never 
 * empty or there is no DNA at all (again, except for Haskell).
 */
class ComplimentaryDna
{
    /**
     * @param string $dna
     */
    public function execute($dna)
    {
        $dnaArr = str_split($dna);
        $str = "";
        foreach((array) $dnaArr as $c) {    
            switch($c) {
            case 'A':
                $newC = 'T';
            break;
            case 'T':
                $newC = 'A';
            break;
            case 'G':
                $newC = 'C';
            break;
            case 'C':
                $newC = 'G';
            break;
            default:
                $newC = $c;
            break;
            }
            $str .= $newC;
        }
        
        return $str;
    }
}