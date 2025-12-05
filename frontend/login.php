<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SIFU Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="login-page">
    <a href="index.html" class="back-btn">
        <img src="../img/back-icon.png" alt="Back">
    </a>
    <div class="login-container">
        <h2 class="login-title">Login</h2>
    
        <form action="backend/proses_login.php" method="POST" class="login-form">
            <div class="input-group">
                <label>Email / Username</label>
                <input type="text" name="identifier" placeholder="Enter your email or username" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn-primary">Masuk</button>
        </form>

        <p class="to-daftar">
            Belum punya akun?  
            <a href="daftar.php">Daftar</a>
        </p>
    </div>
</body>
</html>
