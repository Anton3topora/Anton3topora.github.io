let button = document.querySelector(".write-us_form_button");
function validate(){
    
    let fio = document.registr.fio.value; //фио
    let email = document.registr.email.value; // почта
    let phone = document.registr.phone.value;//телефон
    let index = document.registr.combobox.selectedIndex;
    let notice = document.registr.combobox[index].text; ///////////////////////////////////// выбранная тема письма
    let message = document.registr.message.value;
    let radio;
    for(let i=0; i<document.registr.radio.length;i++){
        if(document.registr.radio[i].checked){
            radio = document.registr.radio[i].value; //способ связи
        }
    }
    let text;
    if(fio==""|| email==""||phone==""){
        if(fio==""){
            document.querySelector("#fio").classList.add("add-data");
           
        }else{
            document.querySelector("#fio").classList.remove("add-data");
        }
        if(email==""){
            document.querySelector("#email").classList.add("add-data");
            
        }else{
            document.querySelector("#email").classList.remove("add-data");
        }
        if(phone==""){
            document.querySelector("#phone").classList.add("add-data");
            
        }else{
            document.querySelector("#phone").classList.remove("add-data");
        }
        text="введите все данные"
        
    }else{
        text = "<p class='form-info'><b>"+fio+"</b>, проверьте ваши данные: <br/><u>телефон</u> - "+phone+"<br/><u>почта</u> - "+email+"<br/><u>тема письма</u> - "+notice+"<br/><u>способ связи</u> - "+radio+"<br/> <button class='close'>закрыть</button></p>";
    }
    
    console.log(text);
    console.log(message);
    document.querySelector(".user-data").innerHTML = text;
    
}
function closeInfo(){
    let info = document.querySelector(".form-info");
    info.remove();
}
button.addEventListener("click", validate);
let close = document.querySelector(".close");
close.addEventListener("click",closeInfo);