let boxChecks = document.querySelectorAll('.boxcheck');

boxChecks.forEach(box => {
    box.addEventListener('click', function(e) {
        if (e.target.tagName !== 'INPUT') {
            let checkbox = box.querySelector('.check');
            checkbox.checked = !checkbox.checked; 
        }

        let checkboxes = document.querySelectorAll('.check');
        let addallButtons = document.querySelectorAll('.add_all');
        
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

document.getElementById('submitClass').addEventListener('click', function (e) {
    e.preventDefault(); // Mencegah submit form bawaan

    // Ambil semua checkbox yang dicentang
    let selectedClass = [];
    document.querySelectorAll('input[name="kelas[]"]:checked').forEach((checkbox) => {
        selectedClass.push(checkbox.value);
    });

    if (selectedClass.length > 0 && kelasId) {
        // Kirim data menggunakan AJAX
        fetch('{{ route("guru.main") }}', {
            method: 'get',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ kelas: selectedClass})
        })
        .then(response => response.json())
        .then(data => {
            alert('Siswa berhasil ditambahkan ke kelas');
            // Tambahkan logika untuk mengupdate UI jika diperlukan
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menambahkan siswa');
        });
    } else {
        alert('Silakan pilih setidaknya satu siswa dan kelas.');
    }
});