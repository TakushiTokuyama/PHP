var input_text = document.getElementById('input_text');
var input_result = document.getElementById('input_result');

input_text.addEventListener('keyup', function() {
    console.log('onChange');
    input_result.innerText = 'RESULT:' + input_text.value;
    console.log(input_result.innerText);
}, false);

var select_item_result = document.getElementById('select_item_result');
var select_item = document.getElementById('select_item');

select_item.addEventListener('click', function() {
    console.log(select_item.value);
    select_item_result.style.color = select_item.value;
}, false);
