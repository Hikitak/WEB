<?php
require_once 'signin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LR3_login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet">
    <style>
        .err {
            color: red;

        }
    </style>
</head>


<body style="background-color: #e7e7e7">
<?php
require "header.php";
?>
<div class="container mt-2 mb-4" style="background-color: white; border-radius: 6px">
<main class="main pt-4 pb-4" >
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <div class="h3 mb-4">
                    Авторизация (вход)
                </div>
                <div class="mb-3">
                    <a style="color: #fc8507"href="registration.php">
                        У вас еще нет аккаунта?
                    </a>
                </div>
                <form action="login.php" class="text-center" method="post">
                    <div class=" d-flex justify-content-between">
                        <div class="mb-3 pt-2">
                            Логин
                        </div>
                        <input type="text" name="Login" placeholder="Введите логин" class="form-control w-75 mb-3">
                    </div>
                    <?php if($arrayerrors['errlogin']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errlogin'] . '</div>';}
                    ?>
                    <div class=" d-flex justify-content-between">
                        <div class="mb-3 pt-2">
                            Пароль
                        </div>
                        <input type="password" name="Password" placeholder="Введите пароль" class="form-control w-75 mb-3">
                    </div>
                    <?php if($arrayerrors['errpass']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errpass'] . '</div>';}
                        if ($error){
                            echo ' <div class = "err mb-2">'. $error . '</div>';
                        }
                    ?>

                    <input style="background-color: #fc8507 !important; border-color: #fc8507 !important;" type="submit" name="login" value="Отправить" class="btn btn-primary mt-1">
                </form>
            </div>

        </div>
    </div>
</main>
</div>

<?php
require 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>
</body>

</html>