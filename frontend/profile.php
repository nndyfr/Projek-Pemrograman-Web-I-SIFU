<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - SIFU</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>

<!-- BACK BUTTON -->
<button class="back-btn" onclick="window.location.href='dashboard.php'">
    <img src="../img/back.png" alt="Back">
</button>

<div class="profile-container">

    <div class="profile-card">
        
        <!-- Avatar -->
        <div class="avatar-box">
            <img src="../img/char1.png" alt="Avatar">
            <div class="badge">LVL 1</div>
        </div>

        <!-- Name -->
        <h1 class="player-name">Nindy</h1>
        <p class="player-title">The Rising Warrior</p>

        <!-- Stats -->
        <div class="stats-box">
            <div class="stat">
                <span class="value">25</span>
                <span class="label">XP</span>
            </div>

            <div class="stat">
                <span class="value">100</span>
                <span class="label">Health</span>
            </div>

            <div class="stat">
                <span class="value">95</span>
                <span class="label">Stamina</span>
            </div>
        </div>

        <!-- About -->
        <div class="about-box">
            <h2>About Player</h2>
            <p>
                A young warrior who continues to train harder each day.  
                Determined, focused, and growing stronger on every challenge ahead.
            </p>
        </div>

        <!-- Edit Button -->
        <button class="edit-btn">Edit Profile</button>

    </div>

</div>

</body>
</html>
