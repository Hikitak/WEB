<?php
$pdo = new PDO('mysql:host=localhost;dbname=pizza_delivery', "root", "");
$sql = "SELECT menu_positions.img_path, menu_positions.name, categories.name AS `category`, menu_positions.recipe,  menu_positions.cost FROM menu_positions INNER JOIN categories ON menu_positions.id_category=categories.id";
$one = false;//для соединения запросов из фильтров
$two = false;//для добавления WHERE
$queryCategories = $pdo->query("SELECT name FROM categories");//для выпадающего списка категорий
if (!key_exists('clear', $_GET))
{
    if (count($_GET) > 0)
    {
        //$sql .= " WHERE";
        if ($_GET['menu_category'] != '' && $_GET['menu_category']!='Выберите категорию')
        {
            if(!$two){
                $sql .= " WHERE";
                $two = true;
            }
            if ($_GET['menu_category'])
            {
                $sql .= " categories.name=" . '"' . strip_tags($_GET['menu_category']) . '"';
                $one = true;
            }
        }

        if ($_GET['pizza_price_bottom'] != '' && is_numeric($_GET['pizza_price_bottom']))
        {
            if(!$two){
                $sql .= " WHERE";
                $two = true;
            }
            if ($one)
            {
                $sql .= " AND";
            }
            $sql .= " menu_positions.cost>=" . $_GET['pizza_price_bottom'];
            $one = true;
        }

        if ($_GET['pizza_price_top'] != '' && is_numeric($_GET['pizza_price_top']))
        {
            if(!$two){
                $sql .= " WHERE";
                $two = true;
            }
            if ($one)
            {
                $sql .= " AND";
            }
            $sql .= " menu_positions.cost<=" . $_GET['pizza_price_top'];
            $one = true;
        }

        if ($_GET['pizza_name'] != '')
        {
            if(!$two){
                $sql .= " WHERE";
                $two = true;
            }
            if ($one)
            {
                $sql .= " AND";
            }
            $sql .= " menu_positions.name LIKE " . '"%'. strip_tags($_GET['pizza_name']) . '%"';
            $one = true;
        }

        if ($_GET['pizza_recipe'] != '')
        {
            if(!$two){
                $sql .= " WHERE";
                $two = true;
            }
            if ($one)
            {
                $sql .= " AND";
            }
            $sql .= " menu_positions.recipe LIKE " . '"%'. strip_tags($_GET['pizza_recipe']) . '%"';
            $one = true;
        }
    }

}

$result = $pdo->query($sql);

$pdo = null;
//--------------------------------------------------------------------------------

?>


