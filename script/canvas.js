/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
let canvas = document.querySelector("#canvas");
let style = canvas.getContext("2d");
let draw = document.querySelector(".draw");
style.fillStyle = "black";
let height = canvas.height;
let width = canvas.width;
draw.onclick = function(){
    style.clearRect(0,0,width,height);
    let num = document.querySelector("#textarea").value;
    for(let i=0; i<num;i++){

        let r_w = width/num;

        let r_h = getRandomIntInclusive(1,height);
        let y0 = height-r_h;
        style.fillRect(i*r_w,y0,r_w,r_h);
    }
}
function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min; //Максимум и минимум включаются
}
 //x,y,w,h
// style.moveTo(100,0);
// style.lineTo(10,900);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
let p = document.querySelector(".names-items");
let item = document.querySelectorAll(".item");
let backet = document.querySelector(".backet");

let dragged;

/* events fired on the draggable target */
document.addEventListener("drag", function(event) {

}, false);

document.addEventListener("dragstart", function(event) {
  // store a ref. on the dragged elem
  dragged = event.target;
  // make it half transparent
  event.target.style.opacity = .5;
}, false);

document.addEventListener("dragend", function(event) {
  // reset the transparency
  event.target.style.opacity = "";
}, false);

/* events fired on the drop targets */
document.addEventListener("dragover", function(event) {
  // prevent default to allow drop
  event.preventDefault();
}, false);

document.addEventListener("dragenter", function(event) {
  // highlight potential drop target when the draggable element enters it
  if (event.target.className == "dropzone") {
    event.target.style.background = "purple";
  }

}, false);

document.addEventListener("dragleave", function(event) {
  // reset background of potential drop target when the draggable element leaves it
  if (event.target.className == "dropzone") {
    event.target.style.background = "";
  }

}, false);
p.textContent=localStorage.getItem('p');
document.addEventListener("drop", function(event) {
  // prevent default action (open as link for some elements)
  event.preventDefault();
  // move dragged elem to the selected drop target
  if (event.target.className == "backet") {
    event.target.style.background = "";
    //dragged.parentNode.removeChild( dragged );
    //event.target.appendChild( dragged );
    p.textContent+=" "+dragged.textContent+" ";
    localStorage.setItem('p',p.textContent);
  }
}, false);
let clear = document.querySelector(".clear");
clear.onclick = function(){
    p.textContent="";
    localStorage.setItem('p','');
}
