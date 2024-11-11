// Fungsi untuk menampilkan toast
function showToast() {
    const toast = document.getElementById('toast');
    toast.className = 'show';
    toast.style.visibility = 'visible';
    toast.style.opacity = '1';

    setTimeout(function() {
        toast.className = toast.className.replace("show", "");
        toast.style.visibility = 'hidden';
        toast.style.opacity = '0';
    }, 3000); // Menghilangkan toast setelah 3 detik
}

// Event listener untuk form submission
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form
    // Lakukan proses registrasi (simpan data, kirim ke server, dll)

    // Tampilkan toast
    showToast();

    // Reset form setelah registrasi
    this.reset();
});