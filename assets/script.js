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
    
    document.getElementById('testimonial-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Simulate form submission
    setTimeout(function() {
        // Display the notification
        var notification = document.getElementById('notification');
        notification.classList.add('show');

        // Hide the notification after 3 seconds
        setTimeout(function() {
            notification.classList.remove('show');
        }, 3000);

        // Optionally, you can reset the form here
        document.getElementById('testimonial-form').reset();
    }, 500); // Simulate a delay for form submission
});