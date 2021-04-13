var display = document.querySelector('#pallet-options');
var card = document.querySelector('#card');

if (card) {
    card.addEventListener("click",(e) => {
        var clicked = e.target.classList;
      
        if (clicked.contains("pallet-button")){
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
