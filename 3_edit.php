<?php
$db = new SQLite3('3.db');
$current_student = null;

if (isset($_POST['id'])) {
    $db->exec("UPDATE students SET fio = ".$_POST['fio'].", spec = ".$_POST['spec']." WHERE id = ".$_POST['id']);
}

if (isset($_GET['id'])) {
    $current_student = $db->querySingle('SELECT * FROM students WHERE id = '.$_GET['id']);
}

// header("Location: {$_SERVER['HTTP_REFERER']}");
?>

<form method="POST">
    <p>ID: <input type="text" name="id" value="<?=$current_student['id']?>" disabled></p>
    <p>ФІО: <input type="text" name="fio" value="<?=$current_student['fio']?>"></p>
    <p>Спеціальність: <input type="text" name="spec" value="<?=$current_student['spec']?>"></p>
    <input type="submit" value="Зберегти">
</form>
<a href="3.php">Повернутись на головну</a>