let checkboxes = document.querySelectorAll('input[type=checkbox]');
let addallButtons = document.querySelectorAll('.add_all'); 

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
        let isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);

        
        addallButtons.forEach(function(button) {
            if (isAnyChecked) {
                button.style.display = 'block'; 
            } else {
                button.style.display = 'none'; 
            }
        });
    });
});
