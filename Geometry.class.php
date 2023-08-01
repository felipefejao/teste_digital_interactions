<?php

class Geometry {
    
    public static function isPalindrome(string $str): string
    {
        $cleanStr = str_replace(" ",'', strtolower($str));

        $x = 0;
        $y = strlen($cleanStr) - 1;

        while ($x < $y) {
            if ($cleanStr[$x] != $cleanStr[$y]) {

                return "$str - Não é um palindromo!\n";
            }
            $x++;
            $y--;
        }
        return "$str - É um palindromo!\n";
    }


}