<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>占い結果</title>
</head>
<body>

<?php
   $name = $_POST["name"];
   
   if( empty($name) ){?>
    <form method="POST" action = 'index.php'>
    <?php echo'名前を入力して下さい<br>';?>  
    <input type="submit" value="戻る" > 
   <?php } else{
    echo "{$name}の占い結果は…<br/>";

    $random_value = rand(1, 7);

    if ($random_value === 1 ) {
        echo "大吉";
    } else if ($random_value === 2 ) {
        echo "吉";
    } else if ($random_value === 3 ) {
        echo "中吉";
    } else if ($random_value === 4 ) {
        echo "小吉";
    } else if ($random_value === 5 ) {
        echo "末吉";
    } else if ($random_value === 6 ) {
        echo "凶";
    } else {
        echo "大凶";
    }
    echo "です!";
    }
?>
</body>
</html>