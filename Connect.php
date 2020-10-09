<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
        &ReverseEquilibrium;
        &orslope;
        &check;
        &gla;
        &block;
        &blk34;
        &blk12;
        &blk14;
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php            
            $host="localhost";
            $user="root";
            $password="root";
            $database="sagar";
            $con=mysqli_connect($host, $user, $password, $database);
            if($con)
            {
                echo "&block;&blk34;&blk12;&blk14; Connected &check; ";
            }
            else
            {
                die("error &gla;");
            }
        ?>
    </body>
</html>
