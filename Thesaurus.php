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
        if (!empty($this->thesaurus[$word])) {
            $synonyms = $this->thesaurus[$word];
        } else {
            $synonyms = [];
        }
        $synonymsResponse = [
            'word' => $word,
            'synonyms' => $synonyms
        ];
        return json_encode($synonymsResponse);
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