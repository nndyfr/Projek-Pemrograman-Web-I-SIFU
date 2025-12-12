<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIFU Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">

    <!-- LEFT: CHARACTER PANEL -->
    <div class="character-panel">
        <div class="avatar-container">
            <img src="../img/avatar.jpg" class="avatar-img" alt="Avatar">
        </div>

        <div class="status-block">
            <h3><i class="fas fa-chart-line"></i> STATUS</h3>

            <div class="status-item">
                <span>AGE</span>
                <span>20</span>
            </div>
            
            <div class="status-item">
                <span>LEVEL</span>
                <span>1</span>
            </div>

            <div class="status-bar-group">
                <div class="status-bar-header">
                    <label><i class="fas fa-star"></i> XP</label>
                    <span class="value">25%</span>
                </div>
                <div class="bar">
                    <div class="fill xp"></div>
                </div>
            </div>

            <div class="status-bar-group">
                <div class="status-bar-header">
                    <label><i class="fas fa-heart"></i> HEALTH</label>
                    <span class="value">60%</span>
                </div>
                <div class="bar">
                    <div class="fill health"></div>
                </div>
            </div>

            <div class="status-bar-group">
                <div class="status-bar-header">
                    <label><i class="fas fa-bolt"></i> STAMINA</label>
                    <span class="value">80%</span>
                </div>
                <div class="bar">
                    <div class="fill stamina"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- RIGHT: MAIN CONTENT -->
    <div class="menu-panel">
        <div class="welcome-section">
            <h1>Welcome, Nindy!</h1>
            <p>Your journey to mastery continues. Train hard, fight smart, and rise through the ranks.</p>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="value">0</div>
                    <div class="label">Training Days</div>
                </div>
                <div class="stat-card">
                    <div class="value">#0</div>
                    <div class="label">Global Rank</div>
                </div>
                <div class="stat-card">
                    <div class="value">0</div>
                    <div class="label">Techniques Learned</div>
                </div>
            </div>
        </div>

        <div class="menu-box">
            <h2><i class="fas fa-bars"></i> MAIN MENU</h2>

            <div class="menu-grid">
                <button class="menu-btn">
                    <i class="fas fa-dumbbell"></i>
                    <div class="btn-content">
                        <strong>TRAINING ROOM</strong>
                        <span>Practice techniques & forms</span>
                    </div>
                </button>
                
                <button class="menu-btn">
                    <i class="fas fa-crosshairs"></i>
                    <div class="btn-content">
                        <strong>ARENA</strong>
                        <span>Challenge other warriors</span>
                    </div>
                </button>

                <button class="menu-btn">
                    <i class="fas fa-trophy"></i>
                    <div class="btn-content">
                        <strong>LEADERBOARD</strong>
                        <span>Global & friend rankings</span>
                    </div>
                </button>
                
                <button class="menu-btn">
                    <i class="fas fa-user-cog"></i>
                    <div class="btn-content">
                        <strong>PROFILE</strong>
                        <span>Customize your warrior</span>
                    </div>
                </button>
                
                <button class="menu-btn">
                    <i class="fas fa-medal"></i>
                    <div class="btn-content">
                        <strong>ACHIEVEMENTS</strong>
                        <span>View your accomplishments</span>
                    </div>
                </button>
            </div>

            <button class="menu-btn logout">
                <i class="fas fa-sign-out-alt"></i>
                <div class="btn-content">
                    <strong>LOGOUT</strong>
                    <span>End your training session</span>
                </div>
            </button>
        </div>
    </div>
</div>
<script src="../js/dashboard.js"></script>
</body>
</html>