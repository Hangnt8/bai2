<?php
/*Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
*/
    function isInteger($string) {
        return filter_var($string, FILTER_VALIDATE_INT) !== false;
    }
    $string = "Hello World";

    if (isInteger($string)) {
        echo "Chuỗi trên là số nguyên.";
    } else {
        echo "Chuỗi trên không phải là số nguyên.";
    }
    ?>