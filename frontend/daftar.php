<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SIFU Daftar</title>
    <link rel="stylesheet" href="../css/daftar.css">
</head>

<body class="daftar-page">
    <a href="index.html" class="back-btn">
        <img src="../img/back-icon.png" alt="Back">
    </a>
    <div class="daftar-container">
        <h2 class="daftar-title">Daftar Akun</h2>

        <form action="backend/proses_daftar.php" method="POST" class="login-form">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Create password" required>
            </div>

            <div class="input-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="confirm_password" placeholder="Re-type password" required>
            </div>

            <button type="submit" class="btn-primary">Buat Akun</button>

        </form>

        <p class="to-daftar">
            Sudah punya akun?  
            <a href="#" id="alertMasuk">Masuk</a>
        </p>

    </div>
<script src="js/main.js"></script>
<script>
document.getElementById('alertMasuk').addEventListener('click', function(e) {
    e.preventDefault();
    alert("Akun belum terdaftar! Silakan buat akun terlebih dahulu.");
});
</script>
</body>
</html>
