<?php
session_start();
if(isset($_SESSION['user'])){
    echo '<div style="background-color: white"  class = container-fluid>
            <div class="container">
            <div class = "row">
                <div style="color: #333333" class="col-md-auto">
                    Добро пожаловать '. $_SESSION['user'] .'
                </div>
                <div   class="col-md-auto">
                   <a style="color: #fc8507"  href="signout.php">Выйти</a>
                </div>
                <div style="text-align: center" class="col-md-auto">
                    <a style="color: #fc1b07" href="filter.php">Секретная страница</a>
                </div>
            </div>
</div>
      </div>
';
}
else{
    echo '<div style="background-color: white"  class = container-fluid>
            <div class="container">
            <div class = "row">
                <div style="color: #333333" class="col-md-auto">
                    Вы не авторизованы
                </div>
                <div   class="col-md-auto">
                    <a style="color: #fc8507"  href="login.php">
                        Войти
                    </a>
                </div>
                <div class="col-md-auto">   
                    <a style="color: #fc8507" href="registration.php">
                        Зарегистрироваться
                    </a>
                </div>
            </div>
</div>
      </div>
           
           
           
          ';
}




?>