'use strict';
var btn_atb_bar = document.getElementById('btn_atb_bar');
console.log("index.js");

btn_atb_bar.addEventListener('click',function(){
    // coount呼び出し
    bar_count();
},false);

// ATBバー制御
function bar_count(){
     console.log("bar_count");
     var atb_bar = document.getElementById('atb_bar');
     var count = 0;
     
     var countUp = function (){
         count++;
         atb_bar.value = count;
         console.log(count);
         if(count >= 100){
         clearInterval(set);
             btn_atb_bar.disabled = false;
         }else{
             btn_atb_bar.disabled = true;
         }
     }
     
     var set = setInterval(countUp,100);
}

var data = btn_atb_bar.value;