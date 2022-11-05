<?php 
$students = [
    ['id' => '1', 'fio' => 'Романченко Роман Романович', 'spec' => '151'],
    ['id' => '2', 'fio' => 'Бондаренко Валентина Сергіївна', 'spec' => '121'],
    ['id' => '3', 'fio' => 'Стус Ігор Сергійович', 'spec' => '131']
]
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student):?>
            <tr>
                <td><?=$student['fio']?></td>
                <td><?=$student['spec']?></td>
                <td><?=$student['id']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>