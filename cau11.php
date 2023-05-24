<?php
/* 11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
*/
/* function removeFirstCharacter($string) {
    $result = substr($string, 1);
    return $result;
}

    $input = "Hello!";
    $removedCharacter = removeFirstCharacter($input);
    echo "Kết quả: " . $removedCharacter;
*/
function removeFirstCharacter($string) {
    $firstCharacter = $string[0]; // Lấy ký tự đầu tiên của chuỗi
    $result = ltrim($string, $firstCharacter); // Loại bỏ ký tự đầu tiên
    return $result; // Trả về chuỗi đã loại bỏ ký tự đầu tiên
}

$originalString = "Hello World";
$modifiedString = removeFirstCharacter($originalString);

echo "Câu 11: " . $modifiedString; // In ra chuỗi đã loại bỏ ký tự đầu tiên
?>