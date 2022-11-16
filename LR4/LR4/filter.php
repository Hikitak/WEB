<?php
session_start();
if (!$_SESSION['user']){
    header("Location: index.php");
}
require_once 'logic.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LR3-filter</title>
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

<?php
//require "session.php";
require "header.php";
?>

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
            <?php foreach($result as $item) {
                echo "<tr class='tr-class'>
                    
                    <td><img style='max-width: 200px' src='get_image.php?img_path=" . $item["img_path"] . "' style='width: 200px' alt='Авторизуйтесь'></td>
                    <td>" . $item['name'] . "</td>
                    <td>" . $item['category'] . "</td>
                    <td>" . $item['recipe'] . "</td>
                    <td>" . $item['cost'] . " ₽</td>
                </tr>";
            }?>

            </tbody>
        </table>
    </div>
</div>


<?php
require 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>
