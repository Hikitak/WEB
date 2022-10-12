<?php
require_once 'logic.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LR2</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet">
</head>
<body style="background-color: #e7e7e7">

<!--Navbar -->
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
                <a class="nav-link active" aria-current="page" href="#">Войти</a>
            </div>


        </div>

    </div>
    </div>
</header>

<div class="b-example-divider"></div>
<!--Первый блок-->
<div class="container">


    <form class="container mt-2" style="font-size: 19px; background-color: white; border-radius: 15px; border: #333333">
        <div class="pt-3 pb-1" style="text-align: center">
            <h3 style="color: #fc3807">Фильтрация результата поиска</h3>

        </div>
        <div class="pt-3 pb-2 mx" style="text-align: center">
            <label >Фильтрация по названию:</label>
            <br>
            <input class="mx-1 mt-2" style="width: 800px; border-color: #fc8507; border-radius: 5px" type="text" name="pizza_name" placeholder=" Введите название" value="<?=$pizza_name?>">
        </div>

        <div class="pt-1 pb-3 mx-1" style="text-align: center">
            <label >Фильтрация по цене:</label>
            <br>
            <input class="mx-1 mt-2" style="width: 800px; border-color: #fc8507; border-radius: 5px" type="text" name="pizza_price_bottom" placeholder=" Цена от" value="<?=$pizza_price_bottom?>">
            <br>
            <input class="mx-1 mt-2 mt-1" style="width: 800px; border-color: #fc8507; border-radius: 5px" type="text" name="pizza_price_top" placeholder=" Цена до" value="<?=$pizza_price_top?>">
        </div>

        <div class="pt-1 pb-3 mx-1" style="text-align: center">
            <label >Фильтрация по категории:</label><br>
            <select style="color: grey; width: 800px; height: 35px; border-color: #fc8507; border-radius: 5px" name="menu_category">
                <option class="p-1" style="color: lightgrey" >Выберите категорию</option>
                <?php while($row = $queryCategories->fetch(PDO::FETCH_ASSOC)) {?>
                    <?php if ($row['name'] == $_GET["menu_category"]){?>
                        <option selected><?=$_GET["menu_category"]?></option>
                    <?php }else {?>
                        <option><?php echo $row['name']?></option>
                    <?php }?>
                <?php } ?>
            </select>
        </div>

        <div class="pt-1 pb-3 mx-1" style="text-align: center">
            <label >Фильтрация по рецептуре:</label>
            <br>
            <textarea class="mx-1 mt-2" style="width: 800px; height: 90px; border-color: #fc8507; border-radius: 5px" type="text" name="pizza_recipe" placeholder=" Введите описание..." value=""><?=$pizza_recipe?></textarea>
        </div>

        <div class="pt-1 pb-4 mx-1" style="text-align: center">
            <input style="width: 180px; height: 45px ;background: linear-gradient(0deg,#fc8507,#ffa218);border-color: #fc8507 transparent #ffa218; border-style: solid;border-width: 1px;color: #fff;border-radius: 5px" type="submit" onclick="" value="Применить фильтр" name="get">
            <input style="width: 180px; height: 45px ;background: linear-gradient(0deg,#fc3807,#ff9318);border-color: #fc1b07 transparent #ff9318; border-style: solid;border-width: 1px;color: #fff;border-radius: 5px" type="submit" onclick="" value="Очистить фильтр" name="clear">
        </div>
    </form>
    <div class="container mt-1 pt-1 mb-2" style="font-size: 19px; background-color: white; border-radius: 15px; border: #333333">
        <table class=" pt-0 table my-5" id="search_table">
            <thead>
            <tr style="text-align: center">
                <th scope="col">Изображение</th>
                <th scope="col">Название</th>
                <th scope="col">Категория</th>
                <th scope="col">Рецептура</th>
                <th scope="col">Цена</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $item):?>
                <tr>
                    <th dcope="row">
                        <img src="img/<?=$item['img_path']?>" style="max-width: 200px">
                    </th>
                    <td><?=$item['name']?></td>
                    <td><?=$item['category']?></td>
                    <td><?=$item['recipe']?></td>
                    <td><?=$item['cost']?> ₽</td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>


<div class="b-example-divider"></div>
<div class="container-fluid" style="background-color: #3f3f3f; font-size: 13px; color: white">
    <div class="container" style="background-color: #3f3f3f">
        <footer class="py-5">
            <div class="row">
                <div class="col-3 ">
                    <svg width="67" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M39.956.019h3.996v14.847c0 .863-.5 1.634-1.226 1.952-.227.091-.5.182-.772.182a1.862 1.862 0 01-1.407-.636L27.152 6.24V17h-3.995V2.107c0-.863.499-1.634 1.226-1.952.771-.318 1.634-.136 2.179.454l13.394 10.125V.02zm24.928 7.945c-.454-.499-1-.862-1.59-1.135a4.858 4.858 0 00-1.952-.408H50.627c-.59 0-1.045-.5-1.045-1.09 0-.59.454-1.09 1.044-1.09H63.34c1.09 0 1.998-.953 1.998-2.088 0-1.181-.908-2.09-1.998-2.09H50.626c-.68 0-1.362.137-1.952.41-.59.272-1.135.635-1.589 1.135a5.944 5.944 0 00-1.09 1.68 5.295 5.295 0 00-.408 2.043c0 .726.136 1.407.408 2.043.273.636.636 1.18 1.09 1.68.454.5.999.863 1.59 1.135a4.859 4.859 0 001.952.409h10.715c.59 0 1.044.5 1.044 1.09 0 .59-.454 1.09-1.044 1.09H47.584c-1.09 0-1.997.953-1.997 2.088 0 1.18.908 2.089 1.997 2.089h13.758a4.7 4.7 0 001.953-.41c.59-.272 1.135-.635 1.589-1.134a5.94 5.94 0 001.09-1.68 5.293 5.293 0 00.408-2.043c0-.681-.136-1.408-.409-2.044-.272-.635-.635-1.226-1.09-1.68zM20.84 8.51c0 4.677-3.633 8.491-8.082 8.491H0V.019h12.713c4.496 0 8.128 3.814 8.128 8.49zm-3.86.364c0-1.136-.272-2.77-1.044-3.587-.772-.818-1.998-1.544-3.133-1.544H3.86v9.353h8.945c1.135 0 2.18-.454 2.951-1.226a4.26 4.26 0 001.226-2.996z" fill="#F28A1E"></path></svg>
                    <br><br><br><br>
                    <b style="color: white">Компания</b>
                    <hr style="color: white">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">О Компании</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Новости</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Партнерам</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Вакансии</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Политика конфиденциальности</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Персональные данные</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Правила продаж</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Правила пользования сайта</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Сервисные центры</a></li>

                    </ul>
                </div>

                <div class="col-3">
                    <a href="https://club.dns-shop.ru/" class="site-logo__link link-club"><svg width="111" height="17" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M39.956.019h3.996v14.847c0 .863-.5 1.635-1.226 1.952-.227.091-.5.182-.772.182a1.862 1.862 0 01-1.407-.636L27.152 6.24V17h-3.995V2.107c0-.863.499-1.634 1.225-1.952.772-.318 1.635-.136 2.18.454l13.394 10.125V.02zm24.928 7.945a4.866 4.866 0 00-1.59-1.135 4.858 4.858 0 00-1.952-.408H50.627c-.59 0-1.045-.5-1.045-1.09 0-.59.454-1.09 1.045-1.09H63.34c1.09 0 1.998-.953 1.998-2.088 0-1.181-.908-2.09-1.998-2.09H50.627c-.682 0-1.363.137-1.953.41a4.866 4.866 0 00-1.589 1.135 5.943 5.943 0 00-1.09 1.68 5.295 5.295 0 00-.408 2.043c0 .726.136 1.407.408 2.043.273.636.636 1.18 1.09 1.68.454.5.999.863 1.59 1.135a4.858 4.858 0 001.952.409h10.715c.59 0 1.044.5 1.044 1.09 0 .59-.454 1.09-1.044 1.09H47.584c-1.09 0-1.997.953-1.997 2.088 0 1.18.908 2.089 1.997 2.089h13.758c.681 0 1.362-.137 1.953-.409a4.866 4.866 0 001.589-1.135c.454-.5.817-1.044 1.09-1.68a5.295 5.295 0 00.408-2.043c0-.681-.136-1.408-.409-2.044-.272-.635-.635-1.226-1.09-1.68zM20.84 8.51c0 4.677-3.633 8.491-8.082 8.491H0V.019h12.713c4.495 0 8.128 3.814 8.128 8.49zm-3.86.364c0-1.136-.272-2.77-1.044-3.587-.772-.818-1.998-1.544-3.133-1.544H3.86v9.353h8.945c1.135 0 2.18-.454 2.952-1.226a4.261 4.261 0 001.225-2.996z" fill="#F28A1E"></path><rect fill="#000" x="71" width="40" height="17" rx="3"></rect><path d="M75.54 12.208V5.272c0-.252.084-.456.252-.624a.842.842 0 01.648-.264c.264 0 .48.084.648.24.168.156.252.372.252.648v2.592l2.952-3.144c.084-.096.18-.168.276-.228a.842.842 0 01.42-.108c.24 0 .444.084.612.24.18.168.276.372.276.624s-.192.564-.588.96L79.02 8.44l2.772 2.892c.336.348.504.66.504.912a.758.758 0 01-.288.624 1.02 1.02 0 01-.648.204c-.252 0-.564-.192-.912-.564l-3.108-3.36v3.06c0 .24-.084.444-.252.612a.877.877 0 01-.648.252.919.919 0 01-.648-.24c-.168-.156-.252-.36-.252-.624zm15.7-6.816v6.744c0 .3-.084.528-.252.696a.919.919 0 01-.648.24.919.919 0 01-.648-.24c-.168-.168-.252-.396-.252-.696V6.04h-2.376v2.688c0 1.716-.444 2.952-1.344 3.732-.48.408-.96.612-1.428.612-.276 0-.48-.084-.624-.264a.826.826 0 01-.192-.564c0-.348.228-.636.672-.84.3-.132.552-.384.756-.744.24-.42.36-.948.36-1.572V5.392c0-.288.084-.516.264-.696.156-.156.372-.24.636-.24h4.176c.264 0 .48.084.636.24.18.18.264.408.264.696zm7.864.264l-3.156 6.888c-.168.348-.42.528-.768.528-.252 0-.468-.084-.66-.24a.767.767 0 01-.3-.624c0-.12.036-.252.096-.408l.696-1.524-2.232-4.608a.98.98 0 01-.096-.42c0-.24.096-.444.3-.624.192-.156.408-.24.66-.24.348 0 .6.18.768.528l1.584 3.228 1.476-3.228c.156-.348.42-.528.792-.528.24 0 .456.084.648.24a.79.79 0 01.288.624c0 .12-.036.252-.096.408zm3.448 3.768v1.992h1.416c.336 0 .6-.096.804-.276.216-.18.324-.444.324-.768 0-.636-.42-.948-1.272-.948h-1.272zm3.648 2.904c-.492.444-1.164.672-2.016.672h-2.472a1.01 1.01 0 01-.684-.24.886.886 0 01-.276-.672V5.356c0-.276.084-.504.264-.672.18-.156.408-.228.684-.228h3.576c.276 0 .492.084.648.252a.866.866 0 01.204.576.789.789 0 01-.216.564c-.156.18-.372.264-.636.264h-2.724V7.84h1.416c.924 0 1.632.204 2.148.6.564.444.852 1.092.852 1.956 0 .828-.252 1.476-.768 1.932z" fill="#FFF"></path></g></svg></a>
                    <br><br><br><br>
                    <b>Покупателям</b>
                    <hr style="color: white">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"style="color: white">Как оформить заказ</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Способы оплаты</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Кредиты</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Доставка</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Статус заказа</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Обмен, возврат, гарантия</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Проверка статуса ремонта</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <svg width="157" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.364 5.474a4.237 4.237 0 011.249 3.015c0 1.14-.444 2.21-1.25 3.016a4.237 4.237 0 01-3.015 1.249H4.225V4.225h9.123c1.14 0 2.21.443 3.016 1.249zm-3.016 11.505a8.49 8.49 0 100-16.979H0v16.979H13.348zM64.305 6.802a5.27 5.27 0 011.682 1.133 5.274 5.274 0 011.55 3.742 5.271 5.271 0 01-1.55 3.742 5.272 5.272 0 01-3.742 1.55H47.82a2.103 2.103 0 110-4.205h14.424a1.088 1.088 0 000-2.174v.007H51.013a5.276 5.276 0 01-3.743-1.55 5.273 5.273 0 01-1.551-3.744 5.277 5.277 0 011.55-3.743A5.272 5.272 0 0151.012.01h13.314a2.103 2.103 0 010 4.205H51.013a1.09 1.09 0 000 2.177h11.232v-.007c.713 0 1.407.14 2.06.417zM44.658 0h-4.206v10.762L26.43.626a2.103 2.103 0 00-3.59 1.486V16.98h4.206V6.217l14.023 10.136a2.1 2.1 0 002.292.456 2.103 2.103 0 001.298-1.943V0zM153.68 2.04H74.8a.68.68 0 00-.68.68v11.56c0 .376.304.68.68.68h78.88a.68.68 0 00.68-.68V2.72a.68.68 0 00-.68-.68zM74.8 0a2.72 2.72 0 00-2.72 2.72v11.56A2.72 2.72 0 0074.8 17h78.88a2.72 2.72 0 002.72-2.72V2.72A2.72 2.72 0 00153.68 0H74.8zm11.078 9.194c.063.462.276.82.639 1.074.326.227.73.34 1.21.34.381 0 .812-.132 1.292-.394.49-.263.798-.395.925-.395a.75.75 0 01.558.259.828.828 0 01.245.584c0 .408-.35.79-1.048 1.143a4.748 4.748 0 01-2.148.517c-1.088 0-1.977-.358-2.666-1.075-.671-.698-1.007-1.596-1.007-2.693 0-1.024.327-1.904.98-2.638.68-.77 1.523-1.156 2.53-1.156 1.006 0 1.858.39 2.556 1.17.644.716.966 1.514.966 2.393 0 .58-.286.87-.857.87h-4.175zm3.073-1.306c-.054-.444-.213-.802-.476-1.074-.28-.281-.643-.422-1.088-.422-.426 0-.78.145-1.06.435a1.706 1.706 0 00-.49 1.061h3.114zm-9.88-1.251h-1.374c-.572 0-.857-.286-.857-.857a.83.83 0 01.245-.612.83.83 0 01.612-.245h4.705c.626 0 .939.286.939.857s-.313.857-.939.857H81.03v4.515c0 .326-.09.59-.272.789-.182.2-.417.299-.708.299-.29 0-.525-.1-.707-.3-.181-.199-.272-.462-.272-.788V6.637zM92.053 6.5l1.659 1.863-1.986 2.258a.968.968 0 00-.272.666c0 .281.09.512.272.694.172.172.404.258.694.258.299 0 .57-.145.816-.435l1.618-1.986 1.618 1.986c.245.29.517.435.817.435.29 0 .52-.086.693-.258a.94.94 0 00.272-.694.967.967 0 00-.272-.666l-1.986-2.258 1.66-1.863c.2-.236.299-.472.299-.707 0-.254-.104-.476-.313-.667a1.005 1.005 0 00-.694-.285c-.272 0-.512.127-.72.38l-1.374 1.714-1.374-1.714c-.208-.253-.448-.38-.72-.38-.254 0-.485.095-.694.285-.208.19-.313.413-.313.667 0 .235.1.471.3.707zm13.613 4.651c0 .326-.091.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V9.248h-2.53v1.904c0 .326-.091.59-.272.789a.91.91 0 01-.707.299c-.29 0-.526-.1-.707-.3-.182-.199-.272-.462-.272-.788V5.93c0-.327.09-.59.272-.79.181-.199.417-.298.707-.298s.526.1.707.299c.181.2.272.462.272.789v1.604h2.53V5.93c0-.327.09-.59.272-.79a.91.91 0 01.707-.298c.29 0 .526.1.707.299.181.2.272.462.272.789v5.222zm7.272-5.236c-.68-.77-1.524-1.156-2.53-1.156-1.006 0-1.85.385-2.53 1.156-.652.734-.979 1.614-.979 2.638 0 1.043.322 1.927.966 2.652.662.744 1.509 1.116 2.543 1.116 1.034 0 1.881-.372 2.543-1.116.644-.725.966-1.609.966-2.652 0-1.024-.327-1.904-.979-2.638zm-3.713 1.292c.29-.435.684-.653 1.183-.653s.893.218 1.183.653c.245.372.367.82.367 1.346 0 .517-.127.961-.38 1.333-.281.426-.671.64-1.17.64-.499 0-.889-.214-1.17-.64-.253-.372-.38-.816-.38-1.333 0-.525.122-.974.367-1.346zm6.596-1.197c0-.326.091-.59.272-.789a.91.91 0 01.707-.299h3.618c.29 0 .526.1.707.3.181.199.272.462.272.788v5.141c0 .326-.091.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V6.637h-1.66v2.026c0 1.152-.235 2.045-.707 2.68-.444.598-1.042.897-1.795.897a.78.78 0 01-.626-.272.84.84 0 01-.231-.598c0-.408.2-.676.599-.803a.918.918 0 00.544-.449c.172-.29.258-.698.258-1.224V6.011zm12.847-.095c-.68-.77-1.523-1.156-2.529-1.156-1.007 0-1.85.385-2.53 1.156-.653.734-.979 1.614-.979 2.638 0 1.043.322 1.927.966 2.652.661.744 1.509 1.116 2.543 1.116 1.033 0 1.881-.372 2.543-1.116.644-.725.966-1.609.966-2.652 0-1.024-.327-1.904-.98-2.638zm-3.712 1.292c.29-.435.684-.653 1.183-.653.498 0 .893.218 1.183.653.245.372.367.82.367 1.346 0 .517-.127.961-.381 1.333-.281.426-.671.64-1.169.64-.499 0-.889-.214-1.17-.64-.254-.372-.381-.816-.381-1.333 0-.525.123-.974.368-1.346zm5.857-1.428a.833.833 0 01.856-.857h3.292c.625 0 .938.286.938.857s-.313.857-.938.857h-2.19v4.515c0 .326-.091.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V5.78zm12.228 6.16c.182-.199.272-.462.272-.788V5.93c0-.327-.09-.59-.272-.79a.91.91 0 00-.707-.298c-.345 0-.671.2-.979.598l-2.503 3.318h-.027V5.93c0-.327-.09-.59-.272-.79a.91.91 0 00-.707-.298.91.91 0 00-.707.299c-.182.2-.272.462-.272.789v5.222c0 .326.09.59.272.789.181.2.417.299.707.299.308 0 .576-.15.802-.449l2.68-3.522h.027v2.883c0 .326.09.59.272.789.181.2.417.299.707.299s.526-.1.707-.3zm8.237-.788c0 .326-.09.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V8.269h-.027l-2.68 3.522c-.226.3-.494.449-.802.449a.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V5.93c0-.327.09-.59.272-.79a.91.91 0 01.707-.298c.29 0 .526.1.707.299.182.2.272.462.272.789v2.828h.027l2.503-3.318c.308-.399.634-.598.979-.598.29 0 .526.1.707.299.182.2.272.462.272.789v5.222z" fill="#FC8507"></path></svg>
                    <br><br><br><br>
                    <br>
                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Юридическим лицам</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Проверка счета</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Корпоративные отделы</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Подарочные карты</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Бонусная программа</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Помощь</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Обратная связь</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <svg width="157" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.364 5.474a4.237 4.237 0 011.249 3.015c0 1.14-.444 2.21-1.25 3.016a4.237 4.237 0 01-3.015 1.249H4.225V4.225h9.123c1.14 0 2.21.443 3.016 1.249zm-3.016 11.505a8.49 8.49 0 100-16.979H0v16.979H13.348zM64.305 6.802a5.27 5.27 0 011.682 1.133 5.274 5.274 0 011.55 3.742 5.271 5.271 0 01-1.55 3.742 5.272 5.272 0 01-3.742 1.55H47.82a2.103 2.103 0 110-4.205h14.424a1.088 1.088 0 000-2.174v.007H51.013a5.276 5.276 0 01-3.743-1.55 5.273 5.273 0 01-1.551-3.744 5.277 5.277 0 011.55-3.743A5.272 5.272 0 0151.012.01h13.314a2.103 2.103 0 010 4.205H51.013a1.09 1.09 0 000 2.177h11.232v-.007c.713 0 1.407.14 2.06.417zM44.658 0h-4.206v10.762L26.43.626a2.103 2.103 0 00-3.59 1.486V16.98h4.206V6.217l14.023 10.136a2.1 2.1 0 002.292.456 2.103 2.103 0 001.298-1.943V0zM153.68 2.04H74.8a.68.68 0 00-.68.68v11.56c0 .376.304.68.68.68h78.88a.68.68 0 00.68-.68V2.72a.68.68 0 00-.68-.68zM74.8 0a2.72 2.72 0 00-2.72 2.72v11.56A2.72 2.72 0 0074.8 17h78.88a2.72 2.72 0 002.72-2.72V2.72A2.72 2.72 0 00153.68 0H74.8zm11.078 9.194c.063.462.276.82.639 1.074.326.227.73.34 1.21.34.381 0 .812-.132 1.292-.394.49-.263.798-.395.925-.395a.75.75 0 01.558.259.828.828 0 01.245.584c0 .408-.35.79-1.048 1.143a4.748 4.748 0 01-2.148.517c-1.088 0-1.977-.358-2.666-1.075-.671-.698-1.007-1.596-1.007-2.693 0-1.024.327-1.904.98-2.638.68-.77 1.523-1.156 2.53-1.156 1.006 0 1.858.39 2.556 1.17.644.716.966 1.514.966 2.393 0 .58-.286.87-.857.87h-4.175zm3.073-1.306c-.054-.444-.213-.802-.476-1.074-.28-.281-.643-.422-1.088-.422-.426 0-.78.145-1.06.435a1.706 1.706 0 00-.49 1.061h3.114zm-9.88-1.251h-1.374c-.572 0-.857-.286-.857-.857a.83.83 0 01.245-.612.83.83 0 01.612-.245h4.705c.626 0 .939.286.939.857s-.313.857-.939.857H81.03v4.515c0 .326-.09.59-.272.789-.182.2-.417.299-.708.299-.29 0-.525-.1-.707-.3-.181-.199-.272-.462-.272-.788V6.637zM92.053 6.5l1.659 1.863-1.986 2.258a.968.968 0 00-.272.666c0 .281.09.512.272.694.172.172.404.258.694.258.299 0 .57-.145.816-.435l1.618-1.986 1.618 1.986c.245.29.517.435.817.435.29 0 .52-.086.693-.258a.94.94 0 00.272-.694.967.967 0 00-.272-.666l-1.986-2.258 1.66-1.863c.2-.236.299-.472.299-.707 0-.254-.104-.476-.313-.667a1.005 1.005 0 00-.694-.285c-.272 0-.512.127-.72.38l-1.374 1.714-1.374-1.714c-.208-.253-.448-.38-.72-.38-.254 0-.485.095-.694.285-.208.19-.313.413-.313.667 0 .235.1.471.3.707zm13.613 4.651c0 .326-.091.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V9.248h-2.53v1.904c0 .326-.091.59-.272.789a.91.91 0 01-.707.299c-.29 0-.526-.1-.707-.3-.182-.199-.272-.462-.272-.788V5.93c0-.327.09-.59.272-.79.181-.199.417-.298.707-.298s.526.1.707.299c.181.2.272.462.272.789v1.604h2.53V5.93c0-.327.09-.59.272-.79a.91.91 0 01.707-.298c.29 0 .526.1.707.299.181.2.272.462.272.789v5.222zm7.272-5.236c-.68-.77-1.524-1.156-2.53-1.156-1.006 0-1.85.385-2.53 1.156-.652.734-.979 1.614-.979 2.638 0 1.043.322 1.927.966 2.652.662.744 1.509 1.116 2.543 1.116 1.034 0 1.881-.372 2.543-1.116.644-.725.966-1.609.966-2.652 0-1.024-.327-1.904-.979-2.638zm-3.713 1.292c.29-.435.684-.653 1.183-.653s.893.218 1.183.653c.245.372.367.82.367 1.346 0 .517-.127.961-.38 1.333-.281.426-.671.64-1.17.64-.499 0-.889-.214-1.17-.64-.253-.372-.38-.816-.38-1.333 0-.525.122-.974.367-1.346zm6.596-1.197c0-.326.091-.59.272-.789a.91.91 0 01.707-.299h3.618c.29 0 .526.1.707.3.181.199.272.462.272.788v5.141c0 .326-.091.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V6.637h-1.66v2.026c0 1.152-.235 2.045-.707 2.68-.444.598-1.042.897-1.795.897a.78.78 0 01-.626-.272.84.84 0 01-.231-.598c0-.408.2-.676.599-.803a.918.918 0 00.544-.449c.172-.29.258-.698.258-1.224V6.011zm12.847-.095c-.68-.77-1.523-1.156-2.529-1.156-1.007 0-1.85.385-2.53 1.156-.653.734-.979 1.614-.979 2.638 0 1.043.322 1.927.966 2.652.661.744 1.509 1.116 2.543 1.116 1.033 0 1.881-.372 2.543-1.116.644-.725.966-1.609.966-2.652 0-1.024-.327-1.904-.98-2.638zm-3.712 1.292c.29-.435.684-.653 1.183-.653.498 0 .893.218 1.183.653.245.372.367.82.367 1.346 0 .517-.127.961-.381 1.333-.281.426-.671.64-1.169.64-.499 0-.889-.214-1.17-.64-.254-.372-.381-.816-.381-1.333 0-.525.123-.974.368-1.346zm5.857-1.428a.833.833 0 01.856-.857h3.292c.625 0 .938.286.938.857s-.313.857-.938.857h-2.19v4.515c0 .326-.091.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V5.78zm12.228 6.16c.182-.199.272-.462.272-.788V5.93c0-.327-.09-.59-.272-.79a.91.91 0 00-.707-.298c-.345 0-.671.2-.979.598l-2.503 3.318h-.027V5.93c0-.327-.09-.59-.272-.79a.91.91 0 00-.707-.298.91.91 0 00-.707.299c-.182.2-.272.462-.272.789v5.222c0 .326.09.59.272.789.181.2.417.299.707.299.308 0 .576-.15.802-.449l2.68-3.522h.027v2.883c0 .326.09.59.272.789.181.2.417.299.707.299s.526-.1.707-.3zm8.237-.788c0 .326-.09.59-.272.789a.91.91 0 01-.707.299.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V8.269h-.027l-2.68 3.522c-.226.3-.494.449-.802.449a.91.91 0 01-.707-.3c-.182-.199-.272-.462-.272-.788V5.93c0-.327.09-.59.272-.79a.91.91 0 01.707-.298c.29 0 .526.1.707.299.182.2.272.462.272.789v2.828h.027l2.503-3.318c.308-.399.634-.598.979-.598.29 0 .526.1.707.299.182.2.272.462.272.789v5.222z" fill="#FC8507"></path></svg>
                    <br><br><br><br><b>Оставайтесь на связи</b>

                    <hr>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">
                                8-800-77-07-999 (c 03:00 до 22:00)</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 " style="color: white; font-size: 12px ">Адреса магазинов в г. Волгоград</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "></a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white">Следите за новинками и акциями:</a></li>
                        <li class="nav-item mb-2"><div class="form-group">
                                <label for="exampleFormControlInput1">Введите Email и подпишитесь!</label>
                                <input style="width: 220px" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "style="color: white; font-size: 9px ">Подписываясь на рассылку, Вы соглашаетесь
                                c условиями политики конфиденциальности и политики конфиденциальности</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "></a></li>

                    </ul>
                    <svg width="38" height="38" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="38" height="38" rx="8" fill="#404040"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M27.884 23.288a1.209 1.209 0 00-.061-.117c-.312-.561-.908-1.251-1.788-2.069l-.019-.018-.01-.01-.009-.009h-.009c-.4-.38-.652-.637-.758-.768-.194-.25-.237-.502-.131-.758.074-.193.355-.602.842-1.226a68.5 68.5 0 00.608-.796c1.08-1.435 1.548-2.352 1.405-2.752l-.056-.093c-.038-.056-.134-.108-.29-.155-.156-.046-.356-.054-.6-.023l-2.695.019a.35.35 0 00-.188.004l-.121.029-.047.023-.037.028a.415.415 0 00-.103.098.64.64 0 00-.094.164 15.278 15.278 0 01-1.002 2.106c-.23.387-.442.723-.636 1.007a4.847 4.847 0 01-.487.627c-.131.134-.25.241-.356.323-.106.08-.187.115-.243.103a6.86 6.86 0 01-.16-.038.623.623 0 01-.21-.23 1.026 1.026 0 01-.107-.364 4.052 4.052 0 01-.028-.829c.006-.193.009-.324.009-.393 0-.237.005-.495.014-.772l.023-.66c.007-.162.01-.334.01-.515s-.011-.323-.033-.426a1.458 1.458 0 00-.098-.3.505.505 0 00-.192-.224 1.085 1.085 0 00-.314-.127c-.33-.075-.752-.115-1.264-.121-1.16-.013-1.906.062-2.237.225-.13.068-.25.162-.355.28-.113.138-.128.212-.047.225.374.056.64.19.795.402l.057.113c.043.08.087.224.13.43.044.206.072.434.085.683.031.456.031.846 0 1.17-.031.325-.06.578-.089.759a1.52 1.52 0 01-.239.646.16.16 0 01-.046.047.701.701 0 01-.253.046c-.088 0-.194-.043-.319-.13a2.248 2.248 0 01-.388-.361 4.812 4.812 0 01-.454-.641c-.168-.275-.343-.6-.524-.974l-.15-.271c-.094-.175-.222-.43-.384-.763a14.742 14.742 0 01-.43-.97.617.617 0 00-.225-.299l-.047-.028a.64.64 0 00-.15-.08 1.002 1.002 0 00-.215-.06l-2.565.018c-.262 0-.44.06-.533.178l-.038.056a.302.302 0 00-.028.15c0 .069.019.153.056.253.375.88.782 1.729 1.222 2.546.44.818.822 1.476 1.146 1.975.325.5.656.97.993 1.414.337.443.56.727.669.852.11.124.195.218.257.28l.235.225c.15.15.37.33.66.538.29.21.611.415.964.618.352.203.762.368 1.23.496.469.128.924.18 1.367.155h1.077c.218-.019.383-.088.496-.206l.037-.047a.617.617 0 00.07-.173.95.95 0 00.033-.258c-.006-.268.014-.51.06-.725.047-.215.1-.377.16-.487a1.196 1.196 0 01.36-.411.61.61 0 01.075-.033c.15-.05.326-.002.53.145.202.147.393.328.57.543.178.215.392.457.642.725.25.269.468.468.655.6l.187.112c.125.075.287.143.487.206.2.062.374.078.524.047l2.396-.038c.237 0 .422-.039.553-.117.13-.078.209-.164.234-.257a.725.725 0 00.005-.319 1.173 1.173 0 00-.066-.248z" fill="#fff"></path></svg>
                    <svg width="38" height="38" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="38" height="38" rx="8" fill="#404040"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M24.351 12.062c2.673 0 4.072.368 4.83 1.269.762.905.819 2.291.819 4.303v3.635c0 2.306-.364 3.637-1.216 4.452-.83.796-2.115 1.12-4.433 1.12H14.65C9.874 26.841 9 24.965 9 21.269v-3.635c0-1.908 0-3.286.736-4.221.755-.96 2.179-1.351 4.913-1.351h9.702zm-6.275 10.194l4.406-2.303a.678.678 0 00-.002-1.201l-4.405-2.288a.677.677 0 00-.99.601v4.59a.678.678 0 00.991.601z" fill="#fff"></path></svg>
                    <svg width="143" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M136.964 0H5.268C2.358 0 0 2.239 0 5v30c0 2.761 2.358 5 5.268 5h131.696c2.91 0 5.268-2.239 5.268-5V5c0-2.761-2.358-5-5.268-5z" fill="#404040"></path><path d="M71.79 21.75a4.66 4.66 0 00-2.491.723 4.315 4.315 0 00-1.649 1.916 4.06 4.06 0 00-.25 2.462 4.2 4.2 0 001.235 2.178 4.57 4.57 0 002.3 1.161 4.711 4.711 0 002.593-.248 4.445 4.445 0 002.01-1.574A4.107 4.107 0 0076.29 26a4.003 4.003 0 00-.325-1.64 4.181 4.181 0 00-.975-1.39 4.444 4.444 0 00-1.469-.919 4.624 4.624 0 00-1.73-.301zm0 6.83a2.836 2.836 0 01-1.558-.345 2.636 2.636 0 01-1.084-1.117 2.463 2.463 0 01-.234-1.502c.082-.512.325-.988.696-1.367.372-.38.855-.643 1.387-.758a2.856 2.856 0 011.595.113c.508.189.944.518 1.252.946.308.427.474.932.475 1.45.017.328-.036.656-.154.964a2.444 2.444 0 01-.537.832c-.236.24-.52.434-.835.568a2.708 2.708 0 01-1.003.216zm-9.819-6.83a4.66 4.66 0 00-2.492.723 4.314 4.314 0 00-1.648 1.916 4.059 4.059 0 00-.25 2.462 4.2 4.2 0 001.234 2.178c.63.595 1.43.999 2.301 1.161a4.711 4.711 0 002.593-.248 4.444 4.444 0 002.01-1.574A4.107 4.107 0 0066.47 26a4.003 4.003 0 00-.325-1.64 4.181 4.181 0 00-.974-1.39 4.443 4.443 0 00-1.469-.919 4.625 4.625 0 00-1.73-.301zm0 6.83a2.836 2.836 0 01-1.558-.345 2.636 2.636 0 01-1.084-1.117 2.463 2.463 0 01-.235-1.502c.083-.512.326-.988.697-1.367.372-.38.855-.643 1.386-.758a2.856 2.856 0 011.596.113c.508.189.944.518 1.252.946.308.427.473.932.475 1.45.016.328-.036.656-.154.964a2.444 2.444 0 01-.537.832c-.236.24-.52.434-.836.568a2.708 2.708 0 01-1.002.216zm-11.674-5.52v1.8h4.552a3.682 3.682 0 01-1.054 2.27 4.682 4.682 0 01-1.612 1.014 4.88 4.88 0 01-1.907.306 5.198 5.198 0 01-3.576-1.406 4.68 4.68 0 01-1.48-3.394 4.68 4.68 0 011.48-3.394 5.198 5.198 0 013.576-1.406 5.034 5.034 0 013.456 1.29l1.338-1.27a6.678 6.678 0 00-2.193-1.367 6.953 6.953 0 00-2.58-.453 7.3 7.3 0 00-2.747.427A7.024 7.024 0 0045.2 18.89a6.614 6.614 0 00-1.58 2.175 6.322 6.322 0 00-.556 2.589c0 .89.189 1.77.556 2.589a6.613 6.613 0 001.58 2.175 7.024 7.024 0 002.351 1.414c.877.316 1.81.462 2.747.427.902.034 1.8-.113 2.637-.432a6.427 6.427 0 002.22-1.418c1.107-1.154 1.696-2.67 1.644-4.23a5.961 5.961 0 00-.095-1.12h-6.406zm47.738 1.4a4.018 4.018 0 00-1.474-1.921 4.359 4.359 0 00-2.361-.79 4.41 4.41 0 00-1.676.328 4.22 4.22 0 00-1.401.931c-.395.399-.7.87-.896 1.384A3.814 3.814 0 0089.985 26a4.086 4.086 0 00.862 2.54 4.46 4.46 0 002.293 1.545c.92.267 1.906.244 2.811-.065a4.428 4.428 0 002.21-1.65l-1.528-1c-.227.36-.55.658-.936.863a2.646 2.646 0 01-1.266.307 2.359 2.359 0 01-1.295-.326 2.186 2.186 0 01-.875-.964l5.995-2.35-.221-.44zm-6.111 1.42a2.23 2.23 0 01.13-.916c.107-.295.275-.566.494-.798a2.46 2.46 0 01.78-.553c.296-.133.618-.21.945-.223.34-.02.678.056.972.218.294.162.532.403.683.692l-4.004 1.58zM87.056 30h1.97V17.5h-1.97V30zm-3.223-7.3h-.074a3.095 3.095 0 00-1.065-.745 3.24 3.24 0 00-1.295-.255 4.596 4.596 0 00-3.032 1.317 4.147 4.147 0 00-1.239 2.938c0 1.094.444 2.146 1.239 2.938a4.596 4.596 0 003.032 1.317c.447.008.89-.077 1.298-.25.408-.172.77-.429 1.062-.75h.074v.61c0 1.63-.917 2.5-2.392 2.5a2.578 2.578 0 01-1.374-.428 2.382 2.382 0 01-.891-1.082l-1.707.67a4.05 4.05 0 001.573 1.846c.71.45 1.546.685 2.399.674 2.307 0 4.214-1.29 4.214-4.43V22h-1.822v.7zm-2.266 5.88a2.78 2.78 0 01-1.811-.808 2.51 2.51 0 01-.738-1.767c0-.656.264-1.288.738-1.767a2.78 2.78 0 011.811-.808c.338.014.669.092.974.23.305.137.577.332.802.572.224.24.395.52.502.823.108.304.15.625.125.945.028.32-.012.643-.118.95a2.352 2.352 0 01-.502.828 2.5 2.5 0 01-.805.574 2.615 2.615 0 01-.978.228zm25.697-11.08h-4.72V30h1.97v-4.74h2.75a4.3 4.3 0 001.656-.211 4.145 4.145 0 001.43-.822c.412-.364.741-.804.965-1.294a3.718 3.718 0 000-3.106 3.89 3.89 0 00-.965-1.295 4.145 4.145 0 00-1.43-.82 4.3 4.3 0 00-1.656-.212zm0 6h-2.75v-4.26h2.792c.296 0 .589.055.863.163.274.107.522.265.731.464.21.198.376.434.489.694a2.034 2.034 0 010 1.638c-.113.26-.279.495-.489.694a2.255 2.255 0 01-.731.464 2.362 2.362 0 01-.863.163l-.042-.02zm12.158-1.79a3.835 3.835 0 00-2.055.456 3.573 3.573 0 00-1.453 1.454l1.738.69c.176-.3.44-.547.759-.708.32-.162.682-.232 1.043-.202.25-.028.503-.008.745.058.242.067.468.178.664.328.196.15.359.335.479.545.12.21.194.441.219.679v.12a4.597 4.597 0 00-2.054-.48c-1.876 0-3.793 1-3.793 2.82.018.387.118.766.295 1.116.176.349.424.661.729.918a3.09 3.09 0 001.05.575c.387.123.796.17 1.202.14.495.027.987-.072 1.428-.287a2.747 2.747 0 001.08-.932h.063v1h1.896v-4.81c0-2.19-1.748-3.46-3.993-3.46l-.042-.02zm-.242 6.85c-.643 0-1.538-.31-1.538-1.06 0-1 1.117-1.34 2.107-1.34a3.649 3.649 0 011.791.42 2.224 2.224 0 01-.764 1.413 2.45 2.45 0 01-1.554.587l-.042-.02zM130.369 22l-2.255 5.42h-.063L125.712 22h-2.107l3.508 7.58-2.001 4.21h2.054L132.56 22h-2.191zm-17.7 8h1.96V17.5h-1.96V30z" fill="#fff"></path><path d="M11 7.54c-.348.39-.525.89-.495 1.4v22.12c-.036.51.142 1.014.495 1.4l.073.08 13.054-12.39v-.3L11.074 7.47 11 7.54z" fill="url(#paint0_linear_3896_15242)"></path><path d="M28.445 24.28l-4.32-4.13v-.3l4.32-4.13.095.06 5.172 2.78c1.475.79 1.475 2.09 0 2.89l-5.152 2.78-.115.05z" fill="url(#paint1_linear_3896_15242)"></path><path d="M28.574 24.22L24.127 20 11 32.46c.298.252.679.396 1.077.409.399.013.789-.107 1.104-.339l15.393-8.31z" fill="url(#paint2_linear_3896_15242)"></path><path d="M28.574 15.78L13.18 7.48a1.757 1.757 0 00-1.102-.347c-.399.011-.781.155-1.079.407L24.128 20l4.446-4.22z" fill="url(#paint3_linear_3896_15242)"></path><path opacity=".2" d="M28.447 24.13l-15.266 8.25a1.811 1.811 0 01-1.054.335c-.38 0-.75-.118-1.053-.335l-.074.07.074.08c.303.217.673.335 1.053.335.38 0 .75-.118 1.054-.335l15.393-8.31-.127-.09z" fill="#000"></path><path opacity=".12" d="M11 32.32a1.932 1.932 0 01-.463-1.41v.15c-.036.51.142 1.014.495 1.4l.074-.07-.105-.07zM33.713 21.3l-5.268 2.83.095.09 5.173-2.78c.306-.123.57-.321.767-.574a1.7 1.7 0 00.35-.866c-.066.285-.201.55-.395.776a1.951 1.951 0 01-.722.524z" fill="#000"></path><path opacity=".25" d="M13.18 7.62L33.714 18.7c.28.119.528.298.722.524.194.226.329.491.395.776a1.7 1.7 0 00-.35-.866 1.832 1.832 0 00-.767-.574L13.18 7.48c-1.464-.8-2.676-.14-2.676 1.46v.15c.032-1.6 1.212-2.26 2.676-1.47z" fill="#fff"></path><path d="M44.363 14.27h-.77v-2h.654a2.81 2.81 0 00.648-1.055c.133-.392.174-.806.121-1.215V7h4.214v5.26h.706v2h-.78V13h-4.793v1.27zM45.827 10a3.842 3.842 0 01-.6 2.29h3.16V7.74h-2.56V10zM56.271 12.22a3.282 3.282 0 01-1.06.674 3.416 3.416 0 01-2.504 0 3.283 3.283 0 01-1.06-.674 3.126 3.126 0 01-.94-2.22c0-.827.337-1.622.94-2.22a3.283 3.283 0 011.06-.674 3.418 3.418 0 012.504 0c.397.156.757.385 1.06.674.305.292.544.639.706 1.02.16.381.24.79.232 1.2.012.411-.064.82-.226 1.203a2.994 2.994 0 01-.712 1.017zm-4.035-.5c.222.219.49.392.785.51.295.116.612.174.933.17.32.006.638-.051.934-.168.295-.117.562-.292.783-.512a2.47 2.47 0 00.707-1.72 2.47 2.47 0 00-.707-1.72 2.315 2.315 0 00-.783-.512 2.415 2.415 0 00-.934-.168 2.449 2.449 0 00-.933.171c-.296.117-.563.29-.785.51A2.498 2.498 0 0051.54 10c0 .634.248 1.247.696 1.72zM61.299 13.13a3.31 3.31 0 01-1.245-.222 3.176 3.176 0 01-1.052-.668 3.155 3.155 0 01-.947-2.24c0-.835.339-1.637.947-2.24.305-.293.67-.523 1.072-.676a3.312 3.312 0 011.267-.214c.44-.012.879.072 1.28.245.402.174.757.432 1.038.755l-.559.52a2.093 2.093 0 00-.78-.588 2.205 2.205 0 00-.98-.182 2.483 2.483 0 00-.947.163c-.3.115-.573.288-.801.507a2.499 2.499 0 00-.705 1.73c0 .64.251 1.257.705 1.73.228.22.5.392.801.507.301.115.623.17.948.163.362-.01.717-.095 1.041-.248.324-.154.609-.373.834-.642l.57.53a3.144 3.144 0 01-1.054.78 3.405 3.405 0 01-1.433.29zM67.093 13h-.811V7.74h-1.77V7h4.34v.74h-1.759V13zM74.437 7l-2.392 5.06a1.426 1.426 0 01-.304.552 1.52 1.52 0 01-.52.38 1.596 1.596 0 01-1.283.008l.21-.71a.944.944 0 00.422.11.79.79 0 00.443-.11.912.912 0 00.284-.38l.232-.48L69.422 7h.959l1.559 3.44L73.478 7h.959zM75.352 13V7h4.572v6h-.811V7.74h-2.95V13h-.811zM81.367 13V7h.811v2.57h3.161V7h.822v6h-.822v-2.71h-3.16V13h-.812zM92.778 12.22a3.294 3.294 0 01-1.063.675 3.428 3.428 0 01-2.51 0 3.293 3.293 0 01-1.063-.675 3.126 3.126 0 01-.939-2.22c0-.827.337-1.622.94-2.22a3.283 3.283 0 011.06-.674 3.418 3.418 0 012.504 0c.397.156.757.385 1.06.674.599.6.932 1.394.932 2.22 0 .826-.334 1.62-.931 2.22h.01zm-4.035-.5c.22.22.487.395.783.512.296.117.614.174.934.168.32.004.638-.054.933-.17.296-.118.563-.291.784-.51a2.498 2.498 0 00.696-1.72c0-.635-.248-1.248-.696-1.72a2.347 2.347 0 00-.784-.509 2.449 2.449 0 00-.933-.17 2.416 2.416 0 00-.934.167 2.314 2.314 0 00-.783.512 2.47 2.47 0 00-.707 1.72c0 .637.252 1.251.707 1.72zM97.023 13V7h2.287c.474-.004.932.16 1.285.46.176.145.316.325.411.527.095.202.141.422.137.643.002.27-.078.534-.232.76a1.471 1.471 0 01-.621.49c.304.099.571.28.769.52.193.245.297.544.295.85.005.23-.043.46-.142.67-.098.211-.244.399-.427.55-.366.323-.85.499-1.349.49l-2.413.04zm.812-3.43h1.475a.96.96 0 00.403-.065.914.914 0 00.334-.225.88.88 0 00.285-.63.89.89 0 00-.563-.865.939.939 0 00-.386-.065h-1.517l-.031 1.85zm0 2.69h1.643c.143.005.285-.02.416-.074a.976.976 0 00.343-.236.973.973 0 00.284-.68.97.97 0 00-.295-.67 1.05 1.05 0 00-.36-.234 1.104 1.104 0 00-.43-.076h-1.601v1.97z" fill="#fff" stroke="#fff" stroke-width=".2" stroke-miterlimit="10"></path><defs><linearGradient id="paint0_linear_3896_15242" x1="22.968" y1="8.71" x2="6.211" y2="26.365" gradientUnits="userSpaceOnUse"><stop stop-color="#00A0FF"></stop><stop offset=".01" stop-color="#00A1FF"></stop><stop offset=".26" stop-color="#00BEFF"></stop><stop offset=".51" stop-color="#00D2FF"></stop><stop offset=".76" stop-color="#00DFFF"></stop><stop offset="1" stop-color="#00E3FF"></stop></linearGradient><linearGradient id="paint1_linear_3896_15242" x1="35.641" y1="20" x2="10.155" y2="20" gradientUnits="userSpaceOnUse"><stop stop-color="#FFE000"></stop><stop offset=".41" stop-color="#FFBD00"></stop><stop offset=".78" stop-color="orange"></stop><stop offset="1" stop-color="#FF9C00"></stop></linearGradient><linearGradient id="paint2_linear_3896_15242" x1="26.161" y1="22.3" x2="3.431" y2="46.237" gradientUnits="userSpaceOnUse"><stop stop-color="#FF3A44"></stop><stop offset="1" stop-color="#C31162"></stop></linearGradient><linearGradient id="paint3_linear_3896_15242" x1="7.692" y1=".18" x2="17.838" y2="10.87" gradientUnits="userSpaceOnUse"><stop stop-color="#32A071"></stop><stop offset=".07" stop-color="#2DA771"></stop><stop offset=".48" stop-color="#15CF74"></stop><stop offset=".8" stop-color="#06E775"></stop><stop offset="1" stop-color="#00F076"></stop></linearGradient></defs></svg>

                </div>
                <br><br><br>
                <hr class="mt-4" style="color: white">
                <span style="text-align: center;color: white; font-size: 11px">©&nbsp;2002–2022 Компания DNS. Администрация Сайта не&nbsp;несет ответственности за&nbsp;размещаемые
				Пользователями материалы (в&nbsp;т.ч. информацию и&nbsp;изображения), их&nbsp;содержание и&nbsp;качество.</span>
            </div>
        </footer>
    </div></div>

</body>
</html>
