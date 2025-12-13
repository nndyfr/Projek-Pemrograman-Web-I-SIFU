<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Room - SIFU</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/training_room.css">
</head>
<body>
    <a href="dashboard.php" class="back-btn">
        <img src="../img/back-icon.png" alt="Back">
    </a>

    <div class="training-container">
        <h1 class="page-title">TRAINING ROOM</h1>
        <p class="page-subtitle">Master your combat skills through intense training</p>

        <div class="level-selection" id="levelSelection">
            <h2 class="levels-title">Select Training Level</h2>
            
            <div class="level-grid">
                <div class="level-item" data-level="1" data-hits="10">
                    <div class="level-number">1</div>
                    <div class="level-name">Novice</div>
                </div>
                <div class="level-item locked" data-level="2" data-hits="15">
                    <div class="level-number">2</div>
                    <div class="level-name">Apprentice</div>
                </div>
                <div class="level-item locked" data-level="3" data-hits="20">
                    <div class="level-number">3</div>
                    <div class="level-name">Warrior</div>
                </div>
                <div class="level-item locked" data-level="4" data-hits="25">
                    <div class="level-number">4</div>
                    <div class="level-name">Expert</div>
                </div>
                <div class="level-item locked" data-level="5" data-hits="30">
                    <div class="level-number">5</div>
                    <div class="level-name">Master</div>
                </div>
            </div>
        </div>

        <div class="game-screen" id="gameScreen">
            <div class="game-info">
                <div class="info-box">
                    <span class="info-label">Level</span>
                    <span class="info-value" id="currentLevel">1</span>
                </div>
                <div class="info-box">
                    <span class="info-label">Hits</span>
                    <span class="info-value"><span id="currentHits">0</span> / <span id="targetHits">10</span></span>
                </div>
                <div class="info-box">
                    <span class="info-label">Misses</span>
                    <span class="info-value" id="missCount">0</span>
                </div>
            </div>

            <div class="dummy-area">
                <div class="dummy-icon">🥋</div>
                <div class="dummy-health-bar">
                    <div class="dummy-health-fill" id="dummyHealth" style="width: 100%"></div>
                </div>
                <button class="action-btn" id="actionBtn">READY?</button>
            </div>

            <div class="timer-bar">
                <div class="timer-fill" id="timerFill" style="width: 100%"></div>
            </div>
        </div>

        <div class="result-screen" id="resultScreen">
            <h2 class="result-title" id="resultTitle">Victory!</h2>
            <p class="result-stats" id="resultStats"></p>
            <div class="result-reward" id="resultReward"></div>
            <div class="result-buttons">
                <button class="btn btn-primary" id="nextLevelBtn">Next Level</button>
                <button class="btn btn-secondary" id="backToMenuBtn">Back to Menu</button>
            </div>
        </div>
    </div>
    <script src="../js/training_room.js"></script>
</body>
</html>