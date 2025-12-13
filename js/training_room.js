const gameState = {
    currentLevel: 1,
    completedLevels: [],
    highestUnlockedLevel: 1,
    totalXP: 0,
    totalHealth: 100,
    totalStamina: 50
};

const levelData = {
    1: { name: "Novice", hits: 10, timeLimit: 2000, reward: { xp: 50, health: 10, stamina: 5 } },
    2: { name: "Apprentice", hits: 15, timeLimit: 1800, reward: { xp: 100, health: 15, stamina: 10 } },
    3: { name: "Warrior", hits: 20, timeLimit: 1500, reward: { xp: 150, health: 20, stamina: 15 } },
    4: { name: "Expert", hits: 25, timeLimit: 1200, reward: { xp: 200, health: 25, stamina: 20 } },
    5: { name: "Master", hits: 30, timeLimit: 1000, reward: { xp: 300, health: 30, stamina: 25 } }
};

let gameSession = {
    hits: 0,
    misses: 0,
    maxMisses: 5,
    isWaiting: false,
    timeoutId: null,
    timerInterval: null
};

const actions = ['PUNCH!', 'KICK!', 'BLOCK!'];
const actionClasses = ['punch', 'kick', 'block'];

function initializeLevels() {
    document.querySelectorAll('.level-item').forEach((item, index) => {
        const level = index + 1;
        
        if (level <= gameState.highestUnlockedLevel) {
            item.classList.remove('locked');
        } else {
            item.classList.add('locked');
        }
        
        if (gameState.completedLevels.includes(level)) {
            item.classList.add('completed');
        }
    });
}

document.querySelectorAll('.level-item').forEach(item => {
    item.addEventListener('click', function() {
        if (this.classList.contains('locked')) {
            alert('Complete the previous level first!');
            return;
        }
        
        const level = parseInt(this.dataset.level);
        startGame(level);
    });
});

function startGame(level) {
    gameState.currentLevel = level;
    gameSession = { 
        hits: 0, 
        misses: 0, 
        maxMisses: 5, 
        isWaiting: false, 
        timeoutId: null, 
        timerInterval: null 
    };
    
    document.getElementById('levelSelection').style.display = 'none';
    document.getElementById('gameScreen').classList.add('active');
    
    document.getElementById('currentLevel').textContent = level;
    document.getElementById('targetHits').textContent = levelData[level].hits;
    updateGameUI();
    
    setTimeout(() => {
        showNextAction();
    }, 1000);
}

function showNextAction() {
    if (gameSession.hits >= levelData[gameState.currentLevel].hits) {
        endGame(true);
        return;
    }

    if (gameSession.misses >= gameSession.maxMisses) {
        endGame(false);
        return;
    }

    const actionBtn = document.getElementById('actionBtn');
    const randomAction = Math.floor(Math.random() * actions.length);
    
    actionBtn.textContent = actions[randomAction];
    actionBtn.className = 'action-btn ' + actionClasses[randomAction];
    actionBtn.disabled = false;
    
    gameSession.isWaiting = true;
    
    const timeLimit = levelData[gameState.currentLevel].timeLimit;
    let timeLeft = timeLimit;
    const timerFill = document.getElementById('timerFill');
    
    clearInterval(gameSession.timerInterval);
    gameSession.timerInterval = setInterval(() => {
        timeLeft -= 50;
        const percentage = (timeLeft / timeLimit) * 100;
        timerFill.style.width = percentage + '%';
        
        if (timeLeft <= 0) {
            clearInterval(gameSession.timerInterval);
            if (gameSession.isWaiting) {
                missedAction();
            }
        }
    }, 50);
    
    gameSession.timeoutId = setTimeout(() => {
        if (gameSession.isWaiting) {
            missedAction();
        }
    }, timeLimit);
}

document.getElementById('actionBtn').addEventListener('click', function() {
    if (!gameSession.isWaiting) return;
    
    clearTimeout(gameSession.timeoutId);
    clearInterval(gameSession.timerInterval);
    gameSession.isWaiting = false;
    
    gameSession.hits++;
    this.disabled = true;
    this.textContent = '✓ HIT!';
    this.style.background = 'linear-gradient(135deg, #4ade80, #22c55e)';
    
    updateGameUI();
    
    setTimeout(() => {
        this.style.background = '';
        showNextAction();
    }, 500);
});

function missedAction() {
    clearTimeout(gameSession.timeoutId);
    clearInterval(gameSession.timerInterval);
    gameSession.isWaiting = false;
    gameSession.misses++;
    
    const actionBtn = document.getElementById('actionBtn');
    actionBtn.disabled = true;
    actionBtn.textContent = '✗ MISS!';
    actionBtn.style.background = 'linear-gradient(135deg, #e63f3f, #ff6b6b)';
    
    updateGameUI();
    
    setTimeout(() => {
        actionBtn.style.background = '';
        showNextAction();
    }, 500);
}

function updateGameUI() {
    document.getElementById('currentHits').textContent = gameSession.hits;
    document.getElementById('missCount').textContent = gameSession.misses;
    
    const level = gameState.currentLevel;
    const progress = (gameSession.hits / levelData[level].hits) * 100;
    document.getElementById('dummyHealth').style.width = (100 - progress) + '%';
}

function endGame(success) {
    clearTimeout(gameSession.timeoutId);
    clearInterval(gameSession.timerInterval);
    
    document.getElementById('gameScreen').classList.remove('active');
    document.getElementById('resultScreen').classList.add('active');
    
    const resultTitle = document.getElementById('resultTitle');
    const resultStats = document.getElementById('resultStats');
    const resultReward = document.getElementById('resultReward');
    
    if (success) {
        resultTitle.textContent = '🏆 VICTORY! 🏆';
        resultTitle.className = 'result-title success';
        
        const level = gameState.currentLevel;
        const reward = levelData[level].reward;
        
        gameState.totalXP += reward.xp;
        gameState.totalHealth += reward.health;
        gameState.totalStamina += reward.stamina;
        
        if (!gameState.completedLevels.includes(level)) {
            gameState.completedLevels.push(level);
        }
        
        resultStats.textContent = `Level ${level} Complete! Hits: ${gameSession.hits} | Misses: ${gameSession.misses}`;
        resultReward.innerHTML = `
            <strong>Rewards Earned:</strong><br>
            +${reward.xp} XP | +${reward.health} Health | +${reward.stamina} Stamina
        `;
        
        const nextLevel = level + 1;
        if (nextLevel <= 5 && gameState.highestUnlockedLevel < nextLevel) {
            gameState.highestUnlockedLevel = nextLevel;
        }
        
        initializeLevels();
        
        document.getElementById('nextLevelBtn').style.display = nextLevel <= 5 ? 'inline-block' : 'none';
    } else {
        resultTitle.textContent = '💔 DEFEAT 💔';
        resultTitle.className = 'result-title fail';
        resultStats.textContent = `Too many misses! Hits: ${gameSession.hits} | Misses: ${gameSession.misses}`;
        resultReward.innerHTML = '<strong>Try again to earn rewards!</strong>';
        document.getElementById('nextLevelBtn').style.display = 'none';
    }
}

document.getElementById('nextLevelBtn').addEventListener('click', function() {
    const nextLevel = gameState.currentLevel + 1;
    if (nextLevel <= 5) {
        document.getElementById('resultScreen').classList.remove('active');
        startGame(nextLevel);
    }
});

document.getElementById('backToMenuBtn').addEventListener('click', function() {
    document.getElementById('resultScreen').classList.remove('active');
    document.getElementById('levelSelection').style.display = 'block';
});

initializeLevels();