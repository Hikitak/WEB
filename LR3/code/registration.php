<?php
require_once 'signup.php';
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
require_once "header.php";
?>
<div class="container mt-2 mb-2" style="background-color: white; border-radius: 5px">
    <main class="main pt-4 pb-4">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <div class="h3 mb-4">
                        Регистрация нового пользователя
                    </div>
                    <div class="mb-3">
                        <a style="color: #fc8507" href="login.php">
                            У вас уже есть аккаунт?
                        </a>
                    </div>
                    <form action="registration.php" class="text-center" method="post">
                        <div class=" d-flex justify-content-between">
                            <div class=" pt-2">
                                ФИО
                            </div>
                            <input type="text" name="FIO" value="<?= $FIO ?>" placeholder="Введите ФИО"
                                class="form-control w-75 mb-3">
                        </div>
                        <?php if($arrayerrors['errfio']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errfio'] . '</div>';}
                        ?>

                        <div class="mt-1 d-flex justify-content-between">
                            <div class="mb-3 pt-1">
                                Логин (почта)
                            </div>
                            <input type="email" name="Login" value="<?= $Login ?>"
                                placeholder="Введите логин" class="form-control w-75 mb-3">
                        </div>

                        <?php if($arrayerrors['errlogin']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errlogin'] . '</div>';}
                        ?>

                        <div class=" d-flex justify-content-between">
                            <div class="mb-3 pt-2">
                                Пароль
                            </div>
                            <input type="password" name="Password1" style="width: 65%;" placeholder="Введите пароль"
                                class="form-control mb-3">
                        </div>

                        <div class=" d-flex justify-content-between">
                            <div class="mb-3 pt-2">
                                Повторите пароль
                            </div>
                            <input type="password" name="Password2" style="width: 65%;" placeholder="Введите пароль"
                                class="form-control mb-3">
                        </div>

                        <?php if($arrayerrors['errpassword']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errpassword'] . '</div>';}
                        ?>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-2">
                                Дата рождения
                            </div>
                            <input type="date" value="<?= $DateBirth ?>" name="DateBirth"
                                style="width: 65%;" class="form-control mb-3">
                        </div>
                        <?php if($arrayerrors['errbirth']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errbirth'] . '</div>';}
                        ?>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-2">
                                Пол
                            </div>
                            <select style="height: 75%" name="Gender" required class="form-control w-75">
                            
                                <?php
                            foreach ($optionItem1 as $id => $item) {
                                $attr = ($Gender == $id) ? 'selected' : '';
                                echo '<option value="' . $id . '"' . $attr . '>' . $item . '</option>';
                            }
                            ?>
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-3">
                                Адрес
                            </div>
                            <textarea name="Address" placeholder="Введите адрес"
                                class="form-control w-75"><?= $Address ?></textarea>
                        </div>
                        <?php if($arrayerrors['erraddress']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['erraddress'] . '</div>';}
                        ?>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-3">
                                Интересы
                            </div>
                            <textarea name="Interests" placeholder="Введите интересы"
                                      class="form-control w-75"><?= $Interests ?></textarea>
                        </div>
                        <?php if($arrayerrors['errinterests']){
                            echo ' <div class = "err mb-2">'.$arrayerrors['errinterests'] . '</div>';}
                        ?>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-3">
                                VK
                            </div>
                            <textarea name="VK" placeholder="Введите ссылку на вк"
                                      class="form-control w-75"><?= $VK ?></textarea>
                        </div>
                        <?php if($arrayerrors['errvk']){
                            echo ' <div class = "err mb-2">'.$arrayerrors['errvk'] . '</div>';}
                        ?>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-3 me-3">
                                Группа крови
                            </div>
                            <select  name="GroupBlood" required class="form-control ">
                                <?php
                                foreach ($optionItem2 as $id => $item) {
                                    $attr = ($GroupBlood == $id) ? 'selected' : '';
                                    echo '<option value="' . $id . '"' . $attr . '>' . $item . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="mb-3 pt-3 me-3">
                                Резус-фактор
                            </div>
                            <select  name="RHfactor" required class="form-control ">
                                <?php
                                foreach ($optionItem3 as $id => $item) {
                                    $attr = ($RHfactor == $id) ? 'selected' : '';
                                    echo '<option value="' . $id . '"' . $attr . '>' . $item . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <input style="background-color: #fc8507 !important; border-color: #fc8507 !important;" type="submit" value="Отправить" name="register" class="btn btn-primary">
                    </form>
                </div>

            </div>
        </div>
    </main>
</div>
    <?php
require_once "footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</body>

</html>