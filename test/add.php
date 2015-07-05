
/**
 * @Author: rccoder
 * @Date:   2015-07-05 18:44:36
 * @Last Modified by:   rccoder
 * @Last Modified time: 2015-07-05 20:49:34
 */
 <?php
        $con = mysql_connect("localhost", "root", "");
         if(!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("pureweber", $con);
        mysql_query("set names 'utf8'");
        mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=utf8", $con);
        mysql_query("SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'", $con);

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
                echo 'success';
            } else {
                echo '报名失败';
            }
        } else {
            die(mysql_error());
        }

     ?>
