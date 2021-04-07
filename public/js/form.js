var display = document.querySelector('#pallet-options');
var card = document.querySelector('#card');
var add = document.querySelector('.add');
var mousedown = false;
if (card) {
    card.addEventListener("click",(e) => {
        // console.log('clicked');
        var clicked = e.target.classList;
      
        if (clicked.contains("pallet-button")){
            console.log("here");
            display.toggleAttribute("hidden");
        }
        if (clicked.contains("add")){
            e.target.closest('.form-group').querySelector('input').valueAsNumber +=1;
        }
        if (clicked.contains("minus")){
            if(e.target.closest('.form-group').querySelector('input').valueAsNumber){
                e.target.closest('.form-group').querySelector('input').valueAsNumber -=1;
            }
        }
  
    
    });

}