<?php
// Path ke file testimonials.json
$file_path = 'testimonials.json';

// Ambil data dari form
$name = isset($_POST['name']) ? $_POST['name'] : '';
$tag = isset($_POST['tag']) ? $_POST['tag'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validasi data
if ($name && $tag && $message) {
    // Buat array testimonial baru
    $new_testimonial = array(
        'name' => $name,
        'tag' => $tag,
        'message' => $message
    );

    // Ambil data testimonial yang ada
    if (file_exists($file_path)) {
        $testimonials = json_decode(file_get_contents($file_path), true);
    } else {
        $testimonials = array();
    }

    // Tambahkan testimonial baru ke array
    $testimonials[] = $new_testimonial;

    // Simpan kembali array ke file JSON
    file_put_contents($file_path, json_encode($testimonials, JSON_PRETTY_PRINT));

    // Redirect kembali ke halaman sebelumnya setelah submit
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    // Jika data tidak lengkap, redirect kembali dengan pesan error (opsional)
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?error=1');
    exit;
}
?>