<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="decoration.css">
    <title>Kuch Lafz Zaruri Hai</title>
</head>

<body background="DSC_0101.JPG">
    <br><img src="logo.png" width="216" height="115" align="left">
    <h1>Kuch Lafz Zaruri Hai</h1>
    <hr style="border:groove" color=size="100%">


    <DIV align=center style="padding: 20px;padding-left:30px">
        <H2 style="color: white;text-decoration:underline;">
            <?php
            echo "<pre>"; {
                echo "Welcome  " . $_SESSION["u"] . " in the world of LAFZ";
                echo "</pre>";
            }
            ?>
            <form action="index.php" method="POST">
                <input type="submit" name="signout" value="signout">
            </form>
        </H2>


        <br>
        <div style="height:auto;width: auto;height:auto;padding:2px;">
            <div style="height:auto;width: 90%;border:4px solid white;overflow:hidden;margin:3px;">
                <img src="yu.jpg" width="40%" height="306" align="left">

                <img src="PUCHTI.png" width="40%" height="306" align="right">
            </div>
            <div style="height:auto;width: 90%;border:4px solid white;overflow:hidden;margin:3px;padding:2px;">
                <img src="baris ki bunde.jpg" width="40%" height="306" align="left">
                <br>
                <img src="chandini.jpg" width="335" height="306" align="right">
            </div>

            <div style="height:auto;width: 90%;border:4px solid white;overflow:hidden;margin:3px;padding:2px;">
                <img src="Dheko ye kon aai.jpg" width="481" height="306">
                <img src="IMG_20190317_020532.jpg" width="481" height="306" align="right">
            </div>
            <div style="height:auto;width: 90%;border:4px solid white;overflow:hidden;margin:3px;padding:2px;">
                <img src="IMG_20190317_021452.jpg" width="481" height="306">
                <img src="sayap.png" width="481" height="306" align="right">
            </div>
        </div>

        <div style="height:auto;width: 90%;border:4px solid white;overflow:hidden;margin:3px;padding:2px; align-content:center;" align=centre;>

            <div align="center">
                <h3>WE ARE GLAD TO READ YOUR LAFZ</h3>
                <form action="" method="POST">
                    <b>NAME:</b><input type="text" name="uname" size="50" autocomplete="off">
                    <br>
                    <br>
                    <b>email:</b><input type="text" name="email" size="50" autocomplete="off">
                    <br>
                    <br>
                    <b>LAFZ:</b><input type="text" name="lafz" size="50" autocomplete="off">
                    <br>
                    <br>
                    <input type="submit" name="save" value="SEND YOUR LAFZ :)">
                </form>

                <h2 style="color: white;">
                    <?php

                    //jab save button press hua then 
                    if (isset($_REQUEST['save'])) {

                        // Function to validate email using regular expression
                        function email_validation($str)
                        {
                            return (!preg_match(
                                "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",
                                $str
                            ))
                                ? FALSE : TRUE;
                        }

                        if (!email_validation($_REQUEST["email"])) {
                            echo "\nInvalid email address";
                        } else {
                            echo "good to go   ";
                            echo "<br>";
                            //send_email
                            $to_email = "ayushamlesh@gmail.com";
                            $subject = "NEW LAFZ";
                            $body = "FROM {$_REQUEST["uname"]}      {$_REQUEST["email"]}    {$_REQUEST["lafz"]}";
                            $headers = "From: angadsadan@gmail.com";
                            //sending mail 
                            if (mail($to_email, $subject, $body, $headers)) {
                                echo ("email sent");
                            } else {
                                echo "failed";
                            }
                        }
                    }

                    ?>
                </h2>
            </div>
        </div>
    </DIV>
</body>

</html>