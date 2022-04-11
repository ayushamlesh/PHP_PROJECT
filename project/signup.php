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
            <h1 style="text-decoration: underline;color:white;">welcome to Kuch Lafz Zaruri Hai</h1>
            <h1 style="text-decoration: underline;color:white;">SIGN UP</h1>

            <form method="POST">
                <b> USERNAME:</b><input type="text" name="uname" autocomplete="off">
                <br>
                <br>
                <b>PASSWORD:</b><input type="password" name="pswd" autocomplete="off">
                <br>
                <br>
                <input type="submit" name="signUP" title="SIGNUP" value="signup">
                <input type="submit" name="save" title="LOGIN" value="LOGIN">
            </form>

            <h2 style="color: white;">
                <?php
                $server = "localhost"; //host
                $username = "root"; //username
                $password = ""; //password
                //crenditials to log in to data base
                //establishing the connection
                $connect = mysqli_connect($server, $username, $password, "php_lpu") or die("connection failed");

                //send data to the sql
                if (!empty($_POST['signUP'])) {
                    if (!empty($_POST['uname'] and $_POST['pswd'])) {
                        $username = $_POST['uname'];
                        $password = $_POST['pswd'];
                        $query = "INSERT INTO login(id,username,password) VALUES (NULL,'$username','$password')";
                        $result = mysqli_query($connect, $query);
                        if ($result > 0) {
                            header("Location: index.php");
                        } else {
                            echo "sorry try again";
                        }
                    } else {
                        echo "FILL ALL FIELDS";
                    }
                }

                //back to login page
                if (isset($_REQUEST['save'])) {
                    header("Location:index.php");
                }
                ?>
            </h2>
        </div>
    </div>



    </div>
</body>

</html>