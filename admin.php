<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td  {border: 1px solid black;}
    </style>
</head>
<body>
    <?php
                // 连主库
        $link=mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
        // 连从库
        // $link=mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
        if($link)
        {
            mysql_select_db(SAE_MYSQL_DB,$link);
            //your code goes here
        }
        mysql_query("set names 'utf8'");
        mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=utf8", $link);
        mysql_query("SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'", $link);
        $sql = mysql_query("SELECT * FROM student");
        ?>
        <table>
        <tr>
            <td>学号</td>
            <td>姓名 </td>
            <td>学院</td>
            <td>邮箱</td>
            <td>电话</td>
            <td>QQ</td>
            <td>自我介绍</td>
        </tr>
        <?php
        while($row = mysql_fetch_array($sql)) {
 ?>
            <tr><td>
            <?php
            echo $row['ID'];
             ?>
            </td><td>
            <?php
            echo $row['Name'];
             ?>
            </td><td>
            <?php
            echo $row['school'];
            ?>
            </td><td>
            <?php
            echo $row['email'];
            ?>
            </td><td>
            <?php
            echo $row['Tel'];
            ?>

            </td><td>
            <?php
            echo $row['QQ'];
            ?>
            </td><td>
            <?php
            echo $row['intro'];
            ?>
            </td></tr>
            <?php
        }
     ?>
     </table>

</body>
</html>

