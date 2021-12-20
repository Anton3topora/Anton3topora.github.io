<?php
    session_start();
    $server='localhost';
    $path='root';
    $password='';
    $project_name='texts';
    $db = mysqli_connect($server, $path, $password, $project_name);
    //mysqli_set_charset($db, 'utf8');
    $textarea="";
    if(isset($_POST['textarea'])){
        $textarea = mysqli_real_escape_string($db, $_POST['textarea']);
        // $user_check_query = "SELECT * FROM notes WHERE text='$textarea'";
        // $result = mysqli_query($db, $user_check_query);
        // $user = mysqli_fetch_assoc($result);
        $query = "INSERT INTO `notes` (`text`) VALUE('{$_POST['textarea']}}')";
        $result = mysqli_query($db, $query);
        $_SESSION['text'] = $textarea;
        
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/zadanija/canvas.css">
    <title>доска объявлений</title>
</head>
<body>
    <form action="ad.php" method="POST">
        <textarea name="textarea" id="textarea" cols="30" rows="2" placeholder="введите текст объявления"></textarea><br>
        <button class="button" name="save">готово</button><br>
    </form>
    <?php
    if($result){
        echo"<p style='border: 1px solid black; padding: 30px'>
        {$_POST['textarea']} 
        </p>
        
        ";
    }
    ?>
    <form action="/look.php" method="POST" name = "form777">
        <button class="look" name="look">посмотреть все посты</button><br>
    </form>
    <a href="/pages/zadanija.php"><< назад</a>
    <script src="/script/ad.js"></script>
</body>
</html>