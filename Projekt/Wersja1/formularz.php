<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 30px;
            background-image: linear-gradient(135deg, #2e2e2e, #121212);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:  18%;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh;
            background-image: linear-gradient(225deg, white, #c2b8b8ff);
            width: 40%;
            border-radius: 30px;
        }
        button{
            font-size: 20px;
            margin-left: 20px;
            border-radius: 10px;
            background-color: #81e099ff;
            border: 0px;
            width: 150px;
            height: 35px;
        }
        button:hover{
            background-color: #93ffaeff;
        }
        div{
            display: flex;
            flex-direction: row;
            margin: 5px;
        }
        input{
            margin-left: 20px;
            font-size: 17px;
            border-radius: 10px;
            border: 1px solid #bebebeff ;
            height: 40px;
            width: 200px;
            background-image: linear-gradient(135deg, white, #ebebebff);
        }
        label{
            margin-top: 6px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <div>
            <h1>Formularz</h1>
        </div>
        <div id='divLogin'>
            <label for="login">Login: </label>
            <input type="text" name="login" placeholder = 'Toby67676' required>
        </div>
        <br>
        <div id='divPassword'>
            <label for="password">Hasło: </label>
            <input type="password" name="password" placeholder='hisadobfauioabhus' required>
        </div>
        <br>
        <div id='divButtons'>
            <button name="signin">Sign In</button>
            <button name="signup">Sign Up</button>
        </div>
        <div id='divParagraph'>
            <?php

            $conn = mysqli_connect("localhost", "root", "", "baza");
            if(isset($_POST["signup"])){
                $newLogin = $_POST["login"];
                $newPassword = $_POST["password"];
                $q_main = "INSERT INTO uzytkownik(login, haslo) VALUES ('$newLogin', '$newPassword')";
                $q_check = "SELECT * FROM uzytkownik WHERE login = '$newLogin'";

                $result_check = mysqli_query($conn , $q_check);

                $check = mysqli_num_rows($result_check);

                if ($check != 0){
                    echo "<p> Użytkownik już istnieje </p>";
                }
                else{
                    mysqli_query($conn , $q_main);
                    echo "<p> success </p>";
                }

            }

            if(isset($_POST["signin"])){
                $login = $_POST["login"];
                $password = $_POST["password"];

                $q_log = "SELECT * FROM uzytkownik WHERE login = '$login' and haslo = '$password';";
                $result_log = mysqli_query($conn, $q_log);

                $check = mysqli_num_rows($result_log);

                if($check == 1){
                    header("location: strona_glowna.php");
                }
                else{
                    echo "<p>Spróbuj ponownie</p>";
                }
            }

            ?>
        </div>
    </form>
</body>
</html>

