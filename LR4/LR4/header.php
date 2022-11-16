<?php
$ref = '';
$nm = '';
if(!isset($_SESSION['user'])){
    $ref='login.php';
    $nm='Войти';
}
else{
    $ref='signout_simple.php';
    $nm='Выйти';
}

?>
<nav class="navbar navbar-expand-lg container-fluid" style="background-color: #ff8725; height: 1%">
    <div class="container">
        <div class="col-md-3">
            <a class="nav-link" href="#" style="color: white;">Волгоград</a>
        </div>

        <div class="col-md-6">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white">Магазины</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false" style="color: white">
                            Покупателям
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Как оформить заказ</a></li>
                            <li><a class="dropdown-item" href="#">Доставка</a></li>
                            <!--li><hr class="dropdown-divider"></li-->
                            <li><a class="dropdown-item" href="#">Способы оплаты</a></li>
                            <li><a class="dropdown-item" href="#">Бонусная программа</a></li>
                            <li><a class="dropdown-item" href="#">Узнать статус заказа</a></li>
                            <li><a class="dropdown-item" href="#">Обмен, возврат, гарантия</a></li>
                            <li><a class="dropdown-item" href="#">Кредиты</a></li>
                            <li><a class="dropdown-item" href="#">Сервесные центры</a></li>
                            <li><a class="dropdown-item" href="#">Политика конфиденцифльности</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Юридическим лицам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" style="color: white">Клуб DNS</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-3" style="text-align: right; color: white">
            8-800-77-07-999 (с 03:00 до 22:00)
        </div>

    </div>
</nav>
<!--Header -->
<header class="py-3 mb-4 border-bottom sticky-top container-fluid"
        style=";background-color: white; font-size:18px; position: center ">
    <div class="container">
        <div class="row">
            <!-- ЛОГО -->
            <div class="col-2">
                <img style="width: 80%; height: 85%"
                     src="data:image/png;base64,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"
                     alt="Лого">
            </div>
            <div class="col-1 ">
                <div class="dropdown" style="position: center; left:-40px; top:-3px">
                    <button style="background: linear-gradient(0deg,#fc8507,#ffa218);border-color: #fc8507 transparent #ffa218; border-style: solid;border-width: 1px;color: #fff;border-radius: 5px; height: 45px; width: 130px;font-size:20px"
                            class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        Каталог
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">&#x1F536;Бытовая техника<br>
                                <small class="pt-0 mt-0" style="color: grey">&nbsp&nbspдля дома</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Смартфоны и гаджеты<br>
                                <small style="color: grey">&nbsp&nbsp планшеты фототехника</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;ТВ и мультимедиа<br>
                                <small style="color: grey">&nbsp&nbspаудио видеоигры</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Компьютеры<br>
                                <small style="color: grey">&nbsp&nbspкомплектующие ноутбуки</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Офис и сеть<br>
                                <small style="color: grey">&nbsp&nbspкресла проекторы</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Отдых и развлечения<br>
                                <small style="color: grey">&nbsp&nbspэлектросамокаты бассейны</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Инструменты<br>
                                <small style="color: grey">&nbsp&nbspаккумуляторные садовые</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Строительство и ремонт<br>
                                <small style="color: grey">&nbsp&nbspэлектрика сантехника</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Дом, декор и кухня<br>
                                <small style="color: grey">&nbsp&nbspосвещение посуда</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Автотовары<br>
                                <small style="color: grey">&nbsp&nbspзвук автокресла</small></a></li>
                        <li><a class="dropdown-item" href="#">&#x1F536;Аксессуары и услуги<br>
                                <small style="color: grey">&nbsp&nbspнаушник и мыши</small></a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">&#x1F536;Уценённые товары</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-5">
                <form class="d-flex" role="search">
                    <input style="font-size:18px;" class="form-control me-2" type="search" placeholder="Поиск по сайту"
                           aria-label="Search">
                </form>

            </div>


            <div class="col">
                <a class="nav-link active" aria-current="page" href="#">Сравнить</a>
            </div>
            <div class="col">
                <a class="nav-link active" aria-current="page" href="#">Избранное</a>
            </div>
            <div class="col">
                <a class="nav-link active" aria-current="page" href="#">Корзина</a>
            </div>
            <div class="col">

                <a class="nav-link active" aria-current="page" href="<?=$ref?>"><?=$nm?></a>

            </div>


        </div>

    </div>
    </div>
</header>
