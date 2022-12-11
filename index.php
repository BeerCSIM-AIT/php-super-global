<?php
    //  index.php?name=Phakpoom&tel=999999  ==> Query String
    // var_dump($_GET);
    // echo isset($_GET['name'])? "true" : "false";

    if(isset($_GET['name']))
        $name=$_GET['name'];
    else $name="";

    //ternary operator (conditional expression)
    $tel = isset($_GET['tel']) ? $_GET['tel'] : "";
    $age = isset($_GET['age']) ? $_GET['age'] :-1;

    if($age>18)
        echo "ยินดีต้อนรับ<br>";
    else echo "ไม่สามารถเข้าใช้งานได้เนื่องจากอายุต่ำกว่าเกณฑ์<br>";


    echo "Name: $name<br>Tel: $tel";


?>