<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        $grupedFilesByOwner = [];
        foreach ($files as $file => $owner) {
            $grupedFilesByOwner[$owner][] = $file;
        }
        return $grupedFilesByOwner;
    }
}
$files = array (
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
    );

var_dump(FileOwners::groupByOwners($files)); 