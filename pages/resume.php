<?php 
    $title = 'Резюме';
    $css = 'resume.css';
    $js='resume.js';
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');?>

    <article>
        <div class="info ">
                <h1 class="info_h1">Опыт работы</h1>
            <div class="main_contacts">
                <div class="contact">
                    <a href=""><img src="https://igorzuevich.com/wp-content/uploads/2015/03/Twitter.png" alt="" class="main_contacts_img"></a>
                </div>
                <div class="contact">
                    <a href=""><img src="https://www.pnglib.com/wp-content/uploads/2020/08/square-facebook-icon_5f347de4b1abb.png" alt="" class="main_contacts_img"></a>
                </div>
                
                <div class="contact">
                    <a href=""><img src="https://1.bp.blogspot.com/-2jQQ7FrGtGU/XFsqyrZRIwI/AAAAAAAAH3Y/UZ_DqDQeCdM9aTZKyE2gStTAn3Je3jNbACK4BGAYYCw/s1600/logo%2Bvk.png" alt="" class="main_contacts_img"></a>
                </div>
            </div>
        </div>
        <div class="table">
        <table class="wrapper" >
            <!-- <caption>Опыт работы</caption> -->
            <tr>
                <td class="td-top">год</td> <td class="td-top">должность</td> <td class="td-top">обязанности</td>
            </tr>
            <tr>
                <td >1997 - 2002</td> <td>арт-дизайнер арт-пространства</td> <td><ul>
                    <li>разработка креативной концепции</li>
                    <li>создание дизайнерских решенийб макетов и эскизов</li>
                    <li>авторский надзор проектов</li>
                    <li>планирование работы отдела</li>
                </ul></td>
            </tr>
            <tr>
                <td>2002 - 2010</td> <td>контент менеджер</td> <td><ul>
                    <li>внесение и редактирование информации на сайте</li>
                    <li>написание статей, новостей и анонсов</li>
                    <li>поиск и сбор информации для написания текстов</li>
                    <li>общение с посетителями сайта</li>
                    <li>устранение простых ошибок на сайте и описание сложных неполадок</li>
                    <li>контроль корректной работы сайта</li>
                </ul></td>
            </tr>
            <tr>
                <td>2010 - 2021</td> <td>главный по отделу веб-разработки</td> <td><ul>
                    <li>контроль за наполнением содержимого сайта</li>
                    <li>защита от вирусов, обновление антивирусных баз</li>
                    <li>кешированеи баз данных</li>
                    <li>исправление имеющихся ошибок</li>
                </ul></td>
            </tr>
        </table>
    </div>
    </article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');?>