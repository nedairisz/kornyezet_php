<?php 
    //var_dump($_GET);
    //űrlap kiértékelése
    if (isset($_POST["szemetem"])) {
        $kivSzemet= $_POST["szemetem"];
        if ($kivSzemet=="papír" || $kivSzemet == "tejes doboz"){
            echo "Kék színű kuka";               
        }elseif ($kivSzemet == "konzerv" || $kivSzemet == "nylon csomagolás"){
            echo "Sárga színű gyűjtő";
        }else {
            echo "Nem színes kuka";
        }
    }
?>