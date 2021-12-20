<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/zadanija/canvas.css">
    <title>canvas.html</title>
</head>
<body>
    
    <textarea name="textarea" id="textarea" cols="30" rows="2" placeholder="введите количество столбцов"></textarea><br>
    <button class="draw">draw</button><br>
    <canvas id="canvas" style="border: 1px solid black;"></canvas>
    <div class="shop">
        <div class="items">
            <button class="item" draggable="true">картошка</button>
            <button class="item" draggable="true">мясо</button>
            <button class="item" draggable="true">рыбный суп</button>
            <button class="item" draggable="true">шиииииииш</button>
            <button class="clear" style="color: red;">очистить корзину</button>
        </div>
        <div class="backet" draggable="true"></div>
    </div>
    <p class="names-items"></p>
    <a href="/pages/zadanija.php"><< назад</a>
    <script src="/script/canvas.js"></script>
</body>
</html>