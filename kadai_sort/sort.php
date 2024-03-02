<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
<?php
function sort_2way($array, $order = 'ascending') {
    if ($order == 'ascending') {
        sort($array);
    } elseif ($order == 'descending') {
        rsort($array);
    }
    
    return $array;
}

$nums = [15, 4, 18, 23, 10];

// 昇順ソートを呼び出し
$sort_asc = sort_2way($nums, 'ascending');
echo "昇順にソートします。<br>";
foreach ($sort_asc as $value) {
    echo $value . "<br>";
}

// 降順ソートを呼び出し
$sort_desc = sort_2way($nums, 'descending');
echo "降順にソートします。<br>";
foreach ($sort_desc as $value) {
    echo $value . "<br>";
}
?>
    </p>
</body>

</html>