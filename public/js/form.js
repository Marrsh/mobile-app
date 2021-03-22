// alert("test")
var display = document.querySelector('#pallet-options');
var button = document.querySelector('#pallet-button');
var add = document.querySelector('#plus');
var subtract = document.getElementById('minus');

button.addEventListener("click", function (){
    display.toggleAttribute("hidden");
});
add.addEventListener("click", function (){
    console.log(this);
});
subtract.addEventListener("click", function (){
    console.log(this);
});