<?php
/*16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()*/
function endsWith($string, $ending)
{
    $stringLength = strlen($string);
    $endingLength = strlen($ending);

    if ($endingLength > $stringLength) {
        return false;
    }

    $stringEnding = substr($string, $stringLength - $endingLength);
    return $stringEnding === $ending;
}

// Sử dụng hàm kiểm tra
$string = "Hello, World!";
$ending = "World!";

if (endsWith($string, $ending)) {
    echo "Chuỗi kết thúc bằng chuỗi con.";
} else {
    echo "Chuỗi không kết thúc bằng chuỗi con.";
}
?>