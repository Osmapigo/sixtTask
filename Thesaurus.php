<?php

class Thesaurus
{
    private $thesaurus;

    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }
    public function getSynonyms($word)
    {
        var_dump($this->thesaurus[$word]);
    }
}

$thesaurus = new Thesaurus(
    array(
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ));

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast"); 