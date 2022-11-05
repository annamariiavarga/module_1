<?php

$current_student = null;

if (isset($_POST['id'])) {
    $students_json = file_get_contents('2.json');
    $students = json_decode($students_json, 'true');

    foreach ($students as $key => $student){
        if ($student['id'] == $_GET['id']) {
            $students[$key] = ['id'=>$_POST['id'], 'fio'=>$_POST['fio'], 'spec'=>$_POST['spec']];
            $current_student = $students[$key];
        }
    }

    $students_json = json_encode($students, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    file_put_contents('2.json', $students_json);
}

if (isset($_GET['id'])) {
    $students_json = file_get_contents('2.json');
    $students = json_decode($students_json, 'true');
    

    foreach ($students as $student){
        if ($student['id'] == $_GET['id']) {
            $current_student = $student;
        }
    }
}

// header("Location: {$_SERVER['HTTP_REFERER']}");
?>

<form method="POST">
    <p>ID: <input type="text" name="id" value="<?=$current_student['id']?>"></p>
    <p>ФІО: <input type="text" name="fio" value="<?=$current_student['fio']?>"></p>
    <p>Спеціальність: <input type="text" name="spec" value="<?=$current_student['spec']?>"></p>
    <input type="submit" value="Зберегти">
</form>
<a href="2.php">Повернутись на головну</a>