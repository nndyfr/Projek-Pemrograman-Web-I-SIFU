<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SIFU Daftar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/daftar.css">
</head>
<body class="daftar-page">
    <a href="index.html" class="back-btn">
        <img src="../img/back-icon.png" alt="Back">
    </a>
    <div class="daftar-container">
        <h2 class="daftar-title">Create Account</h2>

        <form action="backend/proses_daftar.php" method="POST" class="login-form">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter your username" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email address" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Create a password" required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Re-enter your password" required>
            </div>

            <button type="submit" class="btn-primary">Create Account</button>

        </form>

        <p class="to-daftar">
            Already have an account?  
            <a href="#" id="alertMasuk">Log In</a>
        </p>

    </div>
<script src="js/main.js"></script>
<script>
document.getElementById('alertMasuk').addEventListener('click', function(e) {
    e.preventDefault();
    alert("Your account is not registered yet. Please create an account first.");
});
</script>
</body>
</html>
