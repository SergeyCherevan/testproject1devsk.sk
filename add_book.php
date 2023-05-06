<?php
    $title = $_POST["title"];
    $isbn = $_POST["isbn"];
    $price = $_POST["price"];
    $author = $_POST["author"];
    
    echo "Názov knihy: <b>" . $title . "</b></br>";
    echo "ISBN: <b>" . $isbn . "</b></br>";
    echo "Cena: <b>" . $price . "</b></br>";
    echo "Autor: <b>" . $author . "</b></br>";
?>