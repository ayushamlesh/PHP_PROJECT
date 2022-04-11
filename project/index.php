<?php
session_start();
?>



<?php
if (isset($_POST['signup'])) {
    header("Location:signup.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body background="DSC_0101.JPG">
    <div style="padding:50px;padding-left:350px; border-bottom:1px solid white;margin:50px">

        <div align="center" style="border-radius: 2px;border:1px solid grey; width:fit-content;padding:5px">

            <h4><?php
                //signin with help of database
                global $connect;
                $server = "localhost"; //host
                $username = "root"; //username
                $password = ""; //password
                //crenditials to log in to data base
                //establishing the connection
                $connect = mysqli_connect($server, $username, $password, "php_lpu") or die("connection failed");

                //send data to the sql
                if (!empty($_POST['save'])) {
                    $username = $_POST['uname'];
                    $password = $_POST['pswd'];
                    $query = "SELECT * FROM login where username='$username' and password='$password'";
                    $result = mysqli_query($connect, $query);
                    $count = mysqli_num_rows($result);
                    if ($count > 0) {
                        echo "login";
                        header("Location:home.php");
                    } else {
                        echo "not successful";
                    }
                }

                //LOG OUT SESSION END

                if (isset($_POST['signout'])) {
                    session_unset();

                    // destroy the session
                    session_destroy();
                    mysqli_close($connect);
                    echo "YOU ARE OUT OF THE WORLD";
                    clearstatcache();
                }
                ?>
                </h2>
            </h4>
            <h1 style="text-decoration: underline;color:white;">welcome to Kuch Lafz Zaruri Hai</h1>

            <form action="" method="POST">
                <b> USERNAME:</b><input type="text" name="uname" autocomplete="off">
                <br>
                <br>
                <b>PASSWORD:</b><input type="password" name="pswd" autocomplete="off">
                <br>
                <br>
                <input type="submit" name="save" title="LOGIN" value="LOGIN">

                <input type="submit" name="signup" title="SIGNUP" value="SIGN UP">
            </form>
        </div>
    </div>



    <div align="center" style="color:white">
        <h2>
            <?php
            if (isset($_REQUEST['save'])) {
                $_SESSION["u"] = $_REQUEST["uname"];
            }
            ?>
        </h2>
    </div>
</body>

</html>