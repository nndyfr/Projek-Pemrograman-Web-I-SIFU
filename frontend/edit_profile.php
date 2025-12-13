<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Profile - SIFU</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/edit_profile.css">
</head>
<body>
    <a href="profile.php" class="back-btn">
        <img src="../img/back-icon.png" alt="Back">
    </a>
    
    <div class="edit-profile-container">
    <div class="left-panel">
        <h2 class="page-title">EDIT PROFILE</h2>

        <div class="avatar-box">
            <img src="../img/avatar.jpg" alt="Avatar">
        </div>
        <button class="btn btn-outline">Change Avatar</button>
    </div>

    <div class="right-panel">
        <form>
            <div class="form-group">
                <label>Username</label>
                <input type="text" value="Nindy">
            </div>

            <div class="form-group">
                <label>Title</label>
                <input type="text" value="The Rising Warrior">
            </div>

            <div class="form-group">
                <label>About Player</label>
                <textarea rows="4">A young warrior who continues to train harder each day.</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="profile.php" class="btn btn-outline">Cancel</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
