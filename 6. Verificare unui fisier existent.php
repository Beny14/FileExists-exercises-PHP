<?php
// Errors Exemple
// ...................... 1 ..................
/*
    Se dă următoarea variabilă:
    $whiteList = array("index.php", "index1.php", "index2.php");

    Trebuie creată funcţia includeFile, care va accepta denumirea
    fişierului, va verifica dacă denumirea respectivă există în şir şi dacă
    există un fişier cu această denumire. Dacă fişierul nu există în şir sau
    în file system/sistemul de fișiere, funcţia trebuie întreruptă prin
    emiterea excepţiei. În caz contrar, fişierul trebuie încărcat cu funcţia
    include sau require. Apelarea funcţiei trebuie făcută în blocul try catch.
*/

    $whiteList = array("index.php","index1.php","index2.php");

    function includeFile($file){
        global $whiteList;
        if(!in_array($file, $whiteList)){
            throw new Exception("No file in whitelist");
        }else{
        if(!file_exists($file)){
            throw new Exception("Filename is not valid");
            }else{
                include $file;
            }
        }

    }try{
        includeFile("index1.php");
    }catch(Exception $ex){
        echo $ex->getMessage();
    }

?>