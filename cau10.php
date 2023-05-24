<?php
/*10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
*/
    function removeWhitespace($string) {
        return trim($string);
    }
    $string = " Hello, World! "; 
    $trimmedString = removeWhitespace($string);
    echo "Nhập vào: '" . $string . "'";
    echo "<br>";
    echo "Kết quả: '" . $trimmedString . "'";
    ?>
