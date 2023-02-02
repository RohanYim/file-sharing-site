<?php
$first_num = $_GET['first_num'];
$second_num = $_GET['second_num'];
$operator = $_GET['operator'];
$result = null;
switch ($operator) {
    case '+':
        $result = $first_num + $second_num;
        break;
    case '-':
        $result = $first_num - $second_num;
        break;
    case '*':
        $result = $first_num * $second_num;
        break;
    case '/':
        $result = $first_num / $second_num;
        break;
}
echo $first_num . $operator . $second_num . '=' . $result;
?>
