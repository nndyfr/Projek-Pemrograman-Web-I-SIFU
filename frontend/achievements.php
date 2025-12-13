<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Achievements - SIFU</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/achievements.css">
</head>
<body>

<!-- BACK -->
<a href="dashboard.php" class="back-btn">
    <img src="../img/back-icon.png" alt="Back">
</a>

<div class="achievement-container">

    <h1 class="page-title">ACHIEVEMENTS</h1>
    <p class="page-subtitle">Your journey and milestones as a warrior</p>

    <!-- PROGRESS TRACKER -->
    <div class="progress-tracker">
        <div class="progress-bar">
            <div class="progress-fill" style="width: 33%"></div>
        </div>
    </div>

    <div class="achievement-grid">

        <!-- UNLOCKED ACHIEVEMENTS -->
        <div class="achievement-card unlocked">
            <div class="icon">🏆</div>
            <div class="info">
                <h3>First Blood</h3>
                <p>Complete your first battle</p>
                <span class="reward">+50 XP</span>
            </div>
        </div>

        <div class="achievement-card unlocked">
            <div class="icon">⚔️</div>
            <div class="info">
                <h3>Training Begins</h3>
                <p>Enter the Training Room</p>
                <span class="reward">+25 XP</span>
            </div>
        </div>

        <!-- LOCKED ACHIEVEMENTS -->
        <div class="achievement-card locked">
            <div class="icon">🔒</div>
            <div class="info">
                <h3>Speed Demon</h3>
                <p>Win a battle in under 30 seconds</p>
                <span class="reward">+150 XP</span>
            </div>
        </div>

        <div class="achievement-card locked">
            <div class="icon">🔒</div>
            <div class="info">
                <h3>Flawless Victory</h3>
                <p>Win without taking damage</p>
                <span class="reward">+200 XP</span>
            </div>
        </div>

        <div class="achievement-card locked">
            <div class="icon">🔒</div>
            <div class="info">
                <h3>Arena Master</h3>
                <p>Complete all 3 arenas</p>
                <span class="reward">+250 XP</span>
            </div>
        </div>

        <div class="achievement-card locked">
            <div class="icon">🔒</div>
            <div class="info">
                <h3>Legendary Warrior</h3>
                <p>Reach Level 50</p>
                <span class="reward">+500 XP</span>
            </div>
        </div>

    </div>
</div>

</body>
</html>