<?php
require "include_db.php";

$Salt = "1afa148eb41f2e7103f21410bf48346c";
$Login = '';
$Password = '';
$arrayerrors = [
    'errlogin' => '',
    'errpass' => '',
    'errattempt' => '',
];
$error = 0;
if ($_POST){
/*    $num = (isset ($_SESSION["num"])) ? $_SESSION["num"] : 0;
    $time = (isset ($_SESSION["time"])) ? $_SESSION["time"] : 0;
    if((time() - $time >= 60*60)&&($num >= 3)){
        $num = 0;
    }*/

        if(isset($_POST['Login']) && isset($_POST['Password'])){
            $Login = htmlspecialchars($_POST["Login"]);
            $Password = htmlspecialchars($_POST["Password"]);
            $PasswordHash = md5($Salt . $Password);
        }

        if($Login == '') {
            $arrayerrors['errlogin'] = 'Введите логин';
            $error++;
        }
        if($Password == ''){
            $arrayerrors['errpass'] = 'Введите пароль';
            $error++;
        }

        if ($error == 0){
            $users = $mysql->prepare("SELECT ID FROM users WHERE Login=:Login AND Password=:passwordHash");
            $users->execute([
                ':Login' => $Login,
                ':passwordHash' => $PasswordHash

            ]);
            //$_SESSION["user"] = $Login;

            $ids = $users->fetchColumn();
            if($ids < 1){
                $error = 'Неверный логин или пароль ';
            }
            else {
                $id = $ids[0];

                $_SESSION["user"] = $Login;
                $_SESSION["id"] = $id;

                header("Location: index.php");
            }
        }

}

?>