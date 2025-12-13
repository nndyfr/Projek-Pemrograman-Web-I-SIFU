document.addEventListener('DOMContentLoaded', function() {
    const progressBars = document.querySelectorAll('.fill');
    progressBars.forEach(bar => {
        const targetWidth = bar.style.width;
        bar.style.width = '0%';

        setTimeout(() => {
            bar.style.width = targetWidth;
        }, 300);
    });

    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach((card, index) => {
        card.style.animation = 'fadeInUp 0.6s ease forwards';
        card.style.opacity = '0';

        setTimeout(() => {
            card.style.animationDelay = `${index * 100}ms`;
        }, 50);
    });

    const menuButtons = document.querySelectorAll('.menu-btn:not(.logout)');
    menuButtons.forEach(button => {
        button.addEventListener('click', function() {

            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);

            const btnText = this.querySelector('strong').textContent.trim();

            if (btnText === "ARENA") {
                window.location.href = "arena.php";
            }
            if (btnText === "LEADERBOARD") {
                window.location.href = "leaderboard.php";
            }
            if (btnText === "TRAINING ROOM") {
                window.location.href = "training_room.php"; 
            }
            if (btnText === "PROFILE") {
                window.location.href = "profile.php"; 
            }

            console.log(`Navigating to: ${btnText}`);
        });
    });

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
