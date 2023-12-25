<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
  
    <p>
        <?php
         $num = [15, 4, 18, 23, 10 ];

         function sort_2way ($num, $order='acs') {

        if ($order === 'asc') {
            echo '昇順にソートします。<br>';
            sort ($num);
            foreach ($num as $array) {
            echo ($array. '<br>');
         }
        }
        if ($order === 'desc') {
            echo '降順にソートします。<br>';
            rsort ($num);
            foreach ($num as $array) {
                echo ($array. '<br>');
            }

        }
        }
        sort_2way ($num , 'asc');
        sort_2way ($num, 'desc');
        ?>
    </p>

    </body>
</htnl>    

