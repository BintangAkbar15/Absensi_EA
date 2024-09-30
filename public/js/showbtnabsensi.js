let btnchange = document.getElementById('btn_change');
let btnedit = document.getElementById('btn_edit');

btnedit.addEventListener('click', function(){
    if(btnchange.style.display = "none"){
        btnedit.style.display = "none";
        btnchange.style.display = "flex";
    }
})

btnchange.addEventListener('click', function(){
    if(btnedit.style.display = "none"){
        btnedit.style.display = "block";
        btnchange.style.display = "none";
    }
})
