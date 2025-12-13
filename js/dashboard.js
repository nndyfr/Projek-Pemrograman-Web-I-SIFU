// Animasi progress bars saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {

    const progressBars = document.querySelectorAll('.fill');

    progressBars.forEach(bar => {
        const targetWidth = bar.style.width;
        bar.style.width = '0%';

        setTimeout(() => {
            bar.style.width = targetWidth;
        }, 300);
    });

    // Efek hover untuk stat cards
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach((card, index) => {
        card.style.animation = 'fadeInUp 0.6s ease forwards';
        card.style.opacity = '0';

        setTimeout(() => {
            card.style.animationDelay = `${index * 100}ms`;
        }, 50);
    });

    // Interaksi tombol menu
    const menuButtons = document.querySelectorAll('.menu-btn:not(.logout)');
    menuButtons.forEach(button => {
        button.addEventListener('click', function() {

            // Efek klik
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);

            // Ambil nama button
            const btnText = this.querySelector('strong').textContent.trim();

            // Routing berdasarkan nama tombol
            if (btnText === "ARENA") {
                window.location.href = "arena.php";
            }
            if (btnText === "LEADERBOARD") {
                window.location.href = "leaderboard.php";
            }
            if (btnText === "TRAINING ROOM") {
                window.location.href = "training.php"; // kalau kamu bikin nanti
            }
            if (btnText === "PROFILE") {
                window.location.href = "profile.php"; // contoh
            }

            console.log(`Navigating to: ${btnText}`);
        });
    });

    // Logout button
    const logoutBtn = document.querySelector('.logout');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            if (confirm('Are you sure you want to logout?')) {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i><div class="btn-content"><strong>LOGGING OUT...</strong><span>Please wait</span></div>';
                this.style.background = '#444';

                setTimeout(() => {
                    alert('Logged out successfully!');
                    window.location.href = '../login.html';
                }, 1000);
            }
        });
    }

   
    document.querySelectorAll('.fill').forEach(bar => {
        const value = bar.getAttribute('data-value');
        bar.style.width = value + '%';});
});
