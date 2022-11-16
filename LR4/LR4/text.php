<?php
require "text_logic.php";
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
<form action="text.php" class="text_form" method="POST">
        <div class="container mt-1 mb-4 pb-3 pt-1" style="background-color: white; border-radius: 5px">
            <h3 class="mx-2 pt-1">Введите текст</h3>
            <textarea class="mx-1 mt-2 mb-1 pt-1 pb-1" style="width: 1250px; height: 90px; border-color: #fc8507; border-radius: 5px" type="text" name="text" placeholder="" value=""><?=$text?></textarea>
            <div>
                <input class="blue-btn mx-1" style="width: 110px; height: 35px ;background: linear-gradient(0deg,#fc8507,#ffa218);border-color: #fc8507 transparent #ffa218; border-style: solid;border-width: 1px;color: #fff;border-radius: 5px" type="submit" onclick="" value="Отправить" name="get_text">
            </div>

        </div>
    <div class="mt-3 container pt-2 pb-2 mb-3" style="background-color: white; border-radius: 5px">

        <h3>Задание 5</h3>
        <div>
            <?=replacementTireAndDobleSpace($text)?>
        </div>
        <h3>Задание 9</h3>
        <div>
            <?=deleteExtraSpaces($text)?>
        </div>
        <h3>Задание 15</h3>
        <div>
            <?=subjectIndex($text)?>
        </div>
        <h3>Задание 17</h3>
        <div>
            <?=highlightRepeatedWords($text)?>
        </div>
        <h3>Введенный текст</h3>
        <div>
            <?=baseText($text)?>
        </div>
    </div>
</form>
<?php
require 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>
