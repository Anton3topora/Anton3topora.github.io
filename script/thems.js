//скрываем или показываем элемент
let showclose = document.querySelector(".show_close_button");
let elem = document.querySelector(".block_to_show");
showclose.addEventListener("click", showCloseF);
function showCloseF(){
    // console.log(elem.classList);
    if(elem.classList.contains("display_none")){
        showclose.textContent=("скрыть элемент");
    }
    else{
        showclose.textContent=("показать элемент");
    }
    elem.classList.toggle("display_none");
}


let dark = document.querySelector(".dark");
let light = document.querySelector(".light");
let motley = document.querySelector(".motley");
function darkTheme(){
    // document.querySelector("body").style.backgroundColor="darkblue";
    // document.querySelector("p").style.color="white";
    document.querySelector("body").classList.add("dark");
    document.querySelector("body").classList.remove("light");
    document.querySelector("body").classList.remove("motley");
}
function lightTheme(){
    // document.querySelector("body").style.backgroundColor="rgb(253, 229, 219)";
    // document.querySelector("p").style.color="black";
    document.querySelector("body").classList.remove("dark");
    document.querySelector("body").classList.add("light");
    document.querySelector("body").classList.remove("motley");
}
function motleyTheme(){
    // document.querySelector("body").style.backgroundColor="lime";
    // document.querySelector("p").style.color="rgb(225, 0, 255)";
    document.querySelector("body").classList.remove("dark");
    document.querySelector("body").classList.remove("light");
    document.querySelector("body").classList.add("motley");
}
dark.addEventListener("click", darkTheme);
light.addEventListener("click", lightTheme);
motley.addEventListener("click", motleyTheme);