<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <title>Profile - SIFU</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<a href="dashboard.php" class="back-btn">
    <img src="../img/back-icon.png" alt="Back">
</a>

<div class="profile-layout">

    <!-- LEFT SIDE -->
    <div class="profile-left">
        <h2 class="profile-title">PROFILE</h2>

        <div class="avatar-large">
            <img src="../img/avatar.jpg" alt="Avatar">
        </div>

        <h1 class="player-name">Nindy</h1>
        <p class="player-title">The Rising Warrior</p>
    </div>

    <!-- RIGHT SIDE -->
    <div class="profile-right">

        <div class="stats-box">
            <div class="stat">
                <span class="label">Experience Points</span>
                <span class="value">25</span>
            </div>
            <div class="stat">
                <span class="label">Health</span>
                <span class="value">100</span>
            </div>
            <div class="stat">
                <span class="label">Stamina</span>
                <span class="value">100</span>
            </div>
        </div>

        <div class="about-box">
            <h3>About Player</h3>
            <p>
                A young warrior who continues to train harder each day.
                Determined, focused, and growing stronger on every challenge ahead.
            </p>
        </div>
        <a href="edit_profile.php" class="edit-btn">Edit Profile</a>
    </div>
</div>
</body>
</html>