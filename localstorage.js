
textarea.value=localStorage.getItem('textarea');

textarea.oninput = function(){
    localStorage.setItem('textarea',textarea.value);
};

let button = document.querySelector("#button");
button.onclick = function(){
    //button.style.height = "80px";
    textarea.value = "";
    localStorage.setItem('textarea',textarea.value)
};
let show = document.querySelector(".show");
let hide = document.querySelector(".hide");
let cookie = document.querySelector(".cookie");
console.log(cookie);
cookie.style.opacity=localStorage.getItem('c');
show.style.opacity=localStorage.getItem('so');
hide.style.opacity=localStorage.getItem('ho');
show.style.disabled=localStorage.getItem('sd');
hide.style.disabled=localStorage.getItem('hd');
show.onclick = function(){
    show.style.opacity = "0";
    hide.style.opacity = "100";
    show.style.disabled = "disabled";
    cookie.style.opacity = "100";
    // cookie.value=localStorage.getItem('c');
    localStorage.setItem('c',cookie.style.opacity);
    localStorage.setItem('so',show.style.opacity);
    localStorage.setItem('ho',hide.style.opacity);
    localStorage.setItem('sd',show.style.disabled);
    localStorage.setItem('hd',hide.style.disabled);
    console.log(localStorage.getItem('c'));
}
hide.onclick = function(){
    hide.style.opacity = "0";
    show.style.opacity = "100";
    hide.style.disabled = "disabled";
    cookie.style.opacity = "0";
    //localStorage.setItem();
    // cookie.value=localStorage.getItem('c');
    localStorage.setItem('c',cookie.style.opacity);
    localStorage.setItem('so',show.style.opacity);
    localStorage.setItem('ho',hide.style.opacity);
    localStorage.setItem('sd',show.style.disabled);
    localStorage.setItem('hd',hide.style.disabled);
    console.log(localStorage.getItem('c'));
}