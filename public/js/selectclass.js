let boxChecks = document.querySelectorAll('.boxcheck');

boxChecks.forEach(box => {
    box.addEventListener('click', function(e) {
        if (e.target.tagName !== 'INPUT') {
            let checkbox = box.querySelector('.check');
            checkbox.checked = !checkbox.checked; 
        }
    });
});
