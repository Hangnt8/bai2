<?php
/* 16.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().*/
    function addStringToBeginning($string, $prefix) {
        return $prefix . $string;
    }

    function addStringToEnd($string, $suffix) {
        return $string . $suffix;
    }

    // Test the functions
    $string = "you";
    $prefix = "Hello";
    $suffix = " good luck!";
    $modifiedString = addStringToBeginning($string, $prefix);
    echo "Câu 15: ". $modifiedString;
    echo "<br>";
    $modifiedString = addStringToEnd($string, $suffix);
    echo "Câu 15: ". $modifiedString;
    ?>