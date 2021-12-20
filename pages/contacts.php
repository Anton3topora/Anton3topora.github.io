<?php 
    $title = 'contacts.php';
    $css = 'contacts.css';
    $js='contacts.js';
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>
    <article>
        
        <div class="info ">
            <!-- <div class="wrapper"> -->
                <h1 class="info_h1">Контакты</h1>
            <!-- </div> -->
            <!-- <div class="wrapper"> -->
                <h2 class="info_h2">Свяжитесь с нами!</h2>
            <!-- </div> -->
            <div class="main_contacts">
                <div class="contact">
                    <a href=""><img src="https://igorzuevich.com/wp-content/uploads/2015/03/Twitter.png" alt="" class="main_contacts_img"></a>
                    <!-- <p>твиттер</p> -->
                </div>
                <div class="contact">
                    <a href=""><img src="https://www.pnglib.com/wp-content/uploads/2020/08/square-facebook-icon_5f347de4b1abb.png" alt="" class="main_contacts_img"></a>
                    <!-- <p>фейсбук</p> -->
                </div>
                
                <div class="contact">
                    <a href=""><img src="https://1.bp.blogspot.com/-2jQQ7FrGtGU/XFsqyrZRIwI/AAAAAAAAH3Y/UZ_DqDQeCdM9aTZKyE2gStTAn3Je3jNbACK4BGAYYCw/s1600/logo%2Bvk.png" alt="" class="main_contacts_img"></a>
                    <!-- <p>вк</p> -->
                </div>
            </div>
        </div>
        
        
        
        <div class="wrapper">

            <div class="write-us">
                
                <form method="" class="write-us_form" name="registr">
                    <h2 class="write-us_h2">Свяжитесь с нами!</h2>
                    <div class="form-container">
                        <div class="write-us_form_left">
                            <input class="formArea"type="text" name="FIO" id="fio" placeholder="ФИО">
                            <input class="formArea"type="email" name="mail" id="email" placeholder="Email">
                            <input class="formArea"type="tel" name="telephone" id="phone" placeholder="Телефон">
                            
                            <select name="combobox" id="combobox">
                                <option value="сотрудничество">сотрудничество</option>
                                <option value="помощь">помощь</option>
                                <option value="отзыв">отзыв</option>
                                <option value="жалоба">жалоба</option>
                                <option value="другое">другое</option>
                            </select>
                        </div>
                        <div class="write-us_form_right">
                            
                            <textarea class="formArea"name="message" placeholder="Ваше сообщение"></textarea>
                            <div class="write-us_form_right_item"><p class="write-us_form_right_text"><input class="write-us_form_right_input" type="checkbox" id="notice">подписаться на уведомления</p></div>
                            <br><p class="write-us_form_right_text"><u> Как вы хотите получить ответ?</u></p> 
                            <div class="write-us_form_right_item">
                                <p class="write-us_form_right_text">
                                    <input class="write-us_form_right_input" type="radio" id="notice_email" name="radio" value="почта" checked>почта
                                </p>
                            </div>
                            
                            <div class="write-us_form_right_item">
                                <p class="write-us_form_right_text">
                                    <input class="write-us_form_right_input" type="radio" id="notice_phone" name="radio" value="телефон">
                                    телефон
                                </p>
                            </div>
                            <div class="write-us_form_right_item">
                                <p class="write-us_form_right_text">
                                    <input class="write-us_form_right_input" type="radio" id="notice_fax" name="radio" value="факс">
                                    факс
                                </p>
                            </div>
                            
                        </div>
                    </div>
                    <button class="write-us_form_button" type="button" id="form_button">ОТПРАВИТЬ</button>
                    <p class="user-data"></p>                   
                </form>
            </div> 
        </div>  
    </article>
<script src="/script/script.js"></script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');?>