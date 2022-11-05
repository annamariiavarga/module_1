<?php 
$db = file_get_contents('2.json');

$students = json_decode($db, true);

?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKR</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ІД</td>
                <td>ФІО</td>
                <td>Спеціальність</td>
                <td>Опція</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student):?>
            <tr>
                <td><?=$student['id']?></td>
                <td><?=$student['fio']?></td>
                <td><?=$student['spec']?></td>
                <td><a href="2_edit.php?id=<?=$student['id']?>">Редагувати</a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>