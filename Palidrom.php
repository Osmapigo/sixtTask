<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $isPalindrome = true;
        $wordSize = strlen($word);
        for ($i=0; $i < $wordSize; $i++) {
            if (strtolower($word[$i]) != strtolower($word[$wordSize - $i - 1])) {
                $isPalindrome = false;
                break;
            }
        } 
        return $isPalindrome;
    }
}

echo Palindrome::isPalindrome('Deleveled'); 