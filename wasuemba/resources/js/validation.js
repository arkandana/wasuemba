document.getElementById('uploadForm').addEventListener('submit', function(event) {
    const fileInput = document.getElementById('image');
    const file = fileInput.files[0];

    // Validasi jika tidak ada file
    if (!file) {
        alert("Silakan pilih file.");
        event.preventDefault();
        return;
    }

    // Validasi tipe file
    const allowedTypes = ['image/png', 'image/jpeg'];
    if (!allowedTypes.includes(file.type)) {
        alert("File harus berupa gambar PNG atau JPG.");
        event.preventDefault();
        return;
    }

    // Validasi ukuran file (maksimal 2MB)
    const maxSize = 2 * 1024 * 1024; // 2MB
    if (file.size > maxSize) {
        alert("Ukuran file tidak boleh lebih dari 2MB.");
        event.preventDefault();
        return;
    }

    // Jika lolos semua validasi
    alert("File valid. Lanjutkan upload.");
});