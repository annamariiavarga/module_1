<?php 
$db = new SQLite3('3.db');

// $db->exec('CREATE TABLE `students`(
//     id INT PRIMARY KEY,
//     fio VARCHAR(55),
//     spec INT
// )');

// $db->exec('INSERT INTO students VALUES ("1", "Полоскун Роман Романович", "151")');
// $db->exec('INSERT INTO students VALUES ("2", "Бондаренко Ольга Василівна", "121")');
// $db->exec('INSERT INTO students VALUES ("3", "Стус Михайло Олександрович", "121")');

$res = $db->query('SELECT * FROM students');
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
            <?php while ($student = $res->fetchArray()):?>
            <tr>
                <td><?=$student['fio']?></td>
                <td><?=$student['spec']?></td>
                <td><?=$student['id']?></td>
                <td><a href="3_edit.php?id=<?=$student['id']?>">Редагувати</a></td>
            </tr>
            <?php endwhile?>
        </tbody>
    </table>
</body>
</html>