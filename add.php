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

        $ID = $_POST["ID"];
        $name = $_POST["Name"];
        $school = $_POST["school"];
        $email = $_POST["email"];
        $Tel = $_POST["Tel"];
        $qq = $_POST["qq"];
        $intro = $_POST['intro'];

        $sql = "INSERT INTO student (ID, name, school, email, qq, intro, Tel) VALUES ('$ID', '$name', '$school', '$email', '$qq', '$intro', '$Tel')";
        if(mysql_query($sql)) {
            if(mysql_affected_rows()) {
                echo "报名成功！滑动查看你加入后的福利";
            } else {
                echo '报名失败，再试试？不行就 Mail To <rccoder.net@foxmail.com>';
            }
        } else {
            die(mysql_error());
        }

     ?>
