<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML Website</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="#" class="logo">Sarap Foods Service</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <a href="home.php" id="home-link">Home</a>
            <a href="member_info.php" id="member-info-link">Member Info</a>
        </ul>

        <div id="message">
            <?php
            if (isset($_GET['message'])) {
                echo htmlspecialchars($_GET['message']);
            }
            ?>
        </div>
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <h1>Welcome</h1>
            <h2>Available Here <br>Delicious Foods</h2>
            <a href="#" class="btn">Food Menu</a>
        </div>

        <div class="home-img">
            <img src="img/adobo.jpg" alt="Delicious Food">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
        </div>

        <div class="about-text">
            <span>About Us</span>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
