<?php
/*Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
*/
    function containsSubstring($string, $substring) {
        $result = strstr($string, $substring);
        return $result !== false;
    }
    $string = "Hello, World";
    $substring = "Xin Chao";
    if (containsSubstring($string, $substring)) {
        echo "Chuỗi có chứa một chuỗi con khác";
    } else {
        echo "Chuỗi không chứa một chuỗi con khác";
    }
    ?>