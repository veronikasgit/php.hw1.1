<?php

 $name = 'Вероника';
 $age = '28';
 $email = 'mail@mail.com';
 $town = 'Ковров';
 $about = 'Студентка Нетологии';

?>

<!DOCTYPE>
<html lang="ru">
    <head>
    	<title><?= $name . ' = ' . $about ?></title>
    	<meta charset="utf-8">
    	<style>
    		body {
    			font-family: sans-serif;
    		}
    	</style>
    </head>
    <body>

        <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach ($json as $value) {?>
                <td><?php echo $json[];</td>
                <td></td>
                <td></td>
                <td></td>
            }
        </table>



		<h2>Страница пользователя <?= $name ?></h2>
		<p><strong>Имя: </strong><?= $name ?></p>
		<p><strong>Возраст: </strong><?= $age ?></p>
		<p><strong>Электронная почта: </strong><?= $email ?></p>
		<p><strong>Город: </strong><?= $town ?></p>
		<p><strong>О себе: </strong><?= $about ?></p>
	</body>
</html>


