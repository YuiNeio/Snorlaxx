document.addEventListener('DOMContentLoaded', () => {
    // Ambil elemen tombol dan container berita
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const newsContainer = document.querySelector('.news-container');

    // Fungsi untuk geser berita
    function scrollNewsContainer(direction) {
        const scrollAmount = 300; // Jumlah piksel untuk digeser
        newsContainer.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }

    // Event listener untuk tombol prev
    prevButton.addEventListener('click', () => {
        scrollNewsContainer(-1);
    });

    // Event listener untuk tombol next
    nextButton.addEventListener('click', () => {
        scrollNewsContainer(1);
    });
});