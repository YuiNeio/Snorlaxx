
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNORLAX!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <!-- Tambahkan Swiper CSS dan JS di <head> -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Inisialisasi Swiper Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.premium-user-scroll', {
        slidesPerView: 3,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1,
            }
        }
    });
});
</script>
<div class="visitor-counter">
            <img src="./assets/icon/eye.svg" alt="Icon Mata">
            <span id="visitor-count">0</span> 
        </div>

    <style>
        /* Additional inline styles for countdown and new feature tags */
        .countdown {
            margin: 20px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2rem;
        }

        .countdown h2 {
            margin-bottom: 10px;
        }

        .countdown .calendar {
            display: flex;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .countdown .calendar .item {
            margin: 0 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .countdown .calendar .item p {
            margin: 0;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <main>
        <!-- Profile Section -->
        <section class="profile-info">
            <div class="profile-pic">
                <img src="./assets/img/img.jpg" alt="Foto Profil">
            </div>
            <div class="profile-details">
                <h2>SnorLax</h2>
                <p>@Snorlaxbot</p>
                <p>Bagian Dari Ai.</p>
            </div>
        </section>
<!-- Products Section -->
<section class="products">
    <h2><center>Bot SnorLax!</center></h2>
    <div class="product-scroll">
        <div class="product">
            <img src="./assets/img/img.jpg" alt="Produk 1">
            <h3>SnorLax</h3>
            <p>Bot WhatsApp Multi Fungsi dengan bantuan AI.</p>
            <div class="product-status">
                <span class="status-dot online"></span>
                <span class="status-text">Bot Online</span>
            </div>
            <div class="tags">
                <span class="tag">New</span>
                <!-- Add more tags as needed -->
            </div>
<a href="https://wa.link/1b46wx" class="donate-button" target="_blank">Click Me!</a>
        </div>
        
        <!-- Add more product items here -->
                <!-- Add more tags as needed -->
            </div>
</section>
<!-- Premium User Section -->
        <section class="premium-user">
            <h2>Pengguna Premium</h2>
            <div class="premium-scroll">
                <div class="user">
                    <img src="./assets/img/user1.jpg" alt="Premium User 1">
                    <h3>Nattafly</h3>
                    <p>Permanent</p>
                </div>
                <div class="user">
                    <img src="./assets/img/user.jpg" alt="Premium User 2">
                    <h3>NafTall</h3>
                    <p>30 Day</p>
                </div>
                                <div class="user">
                    <img src="./assets/img/user.jpg" alt="Premium User 2">
                    <h3>Echay</h3>
                    <p>15 Day</p>
                </div>
                <!-- Tambahkan lebih banyak pengguna premium di sini -->
            </div>
        </section>




        <!-- Countdown Section -->
        <section class="countdown">
            <h2>Hitung Mundur untuk Update Selanjutnya</h2>
            <div class="calendar" id="countdown-timer">
                <div class="item" id="days">
                    <p>00</p> Hari
                </div>
                <div class="item" id="months">
                    <p>00</p> Bulan
                </div>
                <div class="item" id="years">
                    <p>00</p> Tahun
                </div>
            </div>
        </section>
  <!-- Existing Features List -->
    <section class="features">
        <h2><center>List Feature</center></h2>
        <div class="feature-list">
            <div class="feature">
                <h3>Admin Tools</h3>
                <p>26 feature</p>
            </div>
            <div class="feature">
                <h3>Ai</h3>
                <p>20 feature</p>
            </div>
            <div class="feature">
                <h3>Anime</h3>
                <p>16 feature</p>
            </div>
            <div class="feature">
                <h3>Audio Changer</h3>
                <p>12 feature</p>
            </div>
            <div class="feature">
                <h3>Bug</h3>
                <p>9 feature</p>
            </div>
            <div class="feature">
                <h3>Cerpen</h3>
                <p>40 feature</p>
            </div>
            <div class="feature">
                <h3>Convert</h3>
                <p>38 feature</p>
            </div>
            <div class="feature">
                <h3>Downloader</h3>
                <p>34 feature</p>
            </div>
            <div class="feature">
                <h3>Ephoto</h3>
                <p>30 feature</p>
            </div>
            <div class="feature">
                <h3>Games</h3>
                <p>40 feature</p>
            </div>
            <div class="feature">
                <h3>Group</h3>
                <p>36 feature</p>
            </div>
            <div class="feature">
                <h3>Islamic</h3>
                <p>10 feature</p>
            </div>
            <div class="feature">
                <h3>Jadibot</h3>
                <p>4 feature</p>
            </div>
            <div class="feature">
                <h3>Owner</h3>
                <p>73 feature</p>
            </div>
            <div class="feature">
                <h3>Photooxy</h3>
                <p>27 feature</p>
            </div>
            <div class="feature">
                <h3>Quotes</h3>
                <p>7 feature</p>
            </div>
            <div class="feature">
                <h3>Rpg</h3>
                <p>32 feature</p>
            </div>
            <div class="feature">
                <h3>Sadpodcast</h3>
                <p>17 feature</p>
            </div>
            <div class="feature">
                <h3>Searching</h3>
                <p>24 feature</p>
            </div>
            <div class="feature">
                <h3>Sound</h3>
                <p>242 feature</p>
            </div>
            <div class="feature">
                <h3>Special</h3>
                <p>26 feature</p>
            </div>
            <div class="feature">
                <h3>Tools</h3>
                <p>41 feature</p>
            </div>
            <div class="feature">
                <h3>User</h3>
                <p>32 feature</p>
            </div>
            <div class="feature-summary">
                <div class="feature-total">
                    <h3>Total Plugins</h3>
                    <p>395</p>
                </div>
                <div class="feature-total">
                    <h3>Total Feature</h3>
                    <p>836</p>
                </div>
            </div>
        </div>
    </section>

 <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Apa Kata Mereka?</h2>
        <div class="testimonial-container">
            <div class="testimonial-scroll" id="testimonial-list">
                <?php
                $file_path = 'testimonials.json';
                if (file_exists($file_path)) {
                    $testimonials = json_decode(file_get_contents($file_path), true);
                    if (!empty($testimonials)) {
                        foreach ($testimonials as $testimonial) {
                            echo '<div class="testimonial">';
                            echo '<p>"' . htmlspecialchars($testimonial['message']) . '"</p>';
                            echo '<cite>';
                            echo '<span>- ' . htmlspecialchars($testimonial['name']) . '</span>';
                            echo '<span class="tag ' . htmlspecialchars($testimonial['tag']) . '">' . htmlspecialchars($testimonial['tag']) . '</span>';
                            echo '</cite>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No testimonials yet.</p>';
                    }
                } else {
                    echo '<p>No testimonials yet.</p>';
                }
                ?>
            </div>
        </div>
    </section>

<!-- Donasi Section -->
<section class="donation">
    <h2>Dukung / Contribution</h2>
    <img src="./assets/img/wm.jpg" alt="Support Us" class="donation-image">
    <p>Jika Anda ingin mendukung bot kami, Anda bisa melakukan donasi melalui link berikut:</p>
    <a href="https://saweria.co/chyperbot" class="donate-button" target="_blank">Donasi Sekarang</a>
</section>

<!-- Combined Testimonial Form Section -->
    <section class="testimonial-form">
        <h2>Apa kata kamu? untuk bot snorlax ini!</h2>
        <form action="submit_testimonial.php" method="post">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="tag">Tag:</label>
                <select id="tag" name="tag">
                    <option value="free">Free</option>
                    <option value="premium">Premium</option>
                    <option value="owner">Owner</option>
                    <option value="bot">Bot</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Testimonial:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="submit-button"><i class="fas fa-paper-plane"></i></button>
        </form>
    </section>
    
    <!-- Notification Popup -->
    <div id="notification" class="notification">
        <p>Testimoni berhasil dikirim!</p>
    </div>


<!-- Footer Section -->
<footer class="footer">
    <div class="footer-content">
        <p>&copy; SnorLax 2024 | NatzNvr</p>
    </div>
</footer>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="./assets/script.js"></script>
    <script>
        function updateCountdown() {
            const targetDate = new Date('2024-08-17T00:00:00').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30)); // Approximate months
            const years = Math.floor(distance / (1000 * 60 * 60 * 24 * 365)); // Approximate years

            document.getElementById('days').querySelector('p').innerText = days.toString().padStart(2, '0');
            document.getElementById('months').querySelector('p').innerText = months.toString().padStart(2, '0');
            document.getElementById('years').querySelector('p').innerText = years.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById('countdown-timer').innerText = "Update sudah datang!";
            }
        }

        const countdownInterval = setInterval(updateCountdown, 1000);
        updateCountdown();
        document.addEventListener('DOMContentLoaded', () => {
            const visitorCountElement = document.getElementById('visitor-count');
            let visitorCount = localStorage.getItem('visitorCount') || 0;
            visitorCount++;
            localStorage.setItem('visitorCount', visitorCount);
            visitorCountElement.textContent = visitorCount;
        });

        
    </script>
</body>
</html>