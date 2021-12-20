<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/zadanija/slider.css">
    <title>Document</title>
</head>
<body>
    <div class="slider">
        
        <div class="slider-box">
            <a href="#" style="background-color:aqua;" class="slider-box-item"></a>
            <a href="#" style="background-color:rgb(145, 255, 0);" class="slider-box-item"></a>
            <a href="#" style="background-color:rgb(255, 174, 0);" class="slider-box-item"></a>
            <a href="#" style="background-color:rgb(183, 0, 255);" class="slider-box-item"></a>
            <a href="#" style="background-color:rgb(255, 0, 64);" class="slider-box-item"></a>
            <a href="#" style="background-color:rgb(0, 4, 255);" class="slider-box-item"></a>
        </div>

        <div class="slider-dark"></div>

        <div class="slider-container">
            <div class="slider-arrows-left"></div>
            <div class="slider-container-text">
                <h2 class="slider-container-h2">Lorem ipsum dolor sit amet</h2>
                <p class="slider-container-p">consectetur adipiscing elit, sed do eiusmod</p> 
                <a href="/pages/zadanija.php"><< назад</a>
            </div>
            <div class="slider-arrows-right"></div>
        </div>
        <div class="slider-bullets">
            <div class="slider-bullets-item active"></div>
            <div class="slider-bullets-item"></div>
            <div class="slider-bullets-item"></div>
            <div class="slider-bullets-item"></div>
            <div class="slider-bullets-item"></div>
        </div>
    </div>
    <script src="/script/jquery.js"></script>
    <script src="/script/slider.js"></script>
</body>
</html>