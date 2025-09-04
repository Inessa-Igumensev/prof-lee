<?php
    function readMyFile(string $file_path):string {
        $result = "";
        if (!file_exists(filename:$file_path))
        {
           return"target file path do not exists: ".$file_path;
        }
         $result = file_get_contents($file_path);
        if ($result === false) 
        {
        return "The file is not readable.";
        }
    
        return $result;
     }
    function showHeader(): void{
        echo readMyFile("./include/navbar.php");
    }
    function showHero(): void {
        echo readMyFile("./include/hero.php");
    }
?>