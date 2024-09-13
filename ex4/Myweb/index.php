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
    <a href="#" class="logo"><?php echo "Sarap Foods Service"; ?></a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="<?php echo "home.php"; ?>" id="home-link">Home</a></li>
        <li><a href="<?php echo "member_info.php"; ?>" id="member-info-link">Member Info</a></li>
        <li><a href="<?php echo "#contact"; ?>" id="contact-link">Contact Us:</a></li> 
        <li>
            <div class="navbar-form">
                <?php
                echo '<form action="" method="POST">';
                    echo '<input type="text" id="name" name="name" placeholder="Name" required>';
                    echo '<input type="email" id="email" name="email" placeholder="Email" required>';
                    echo '<input type="submit" value="Submit">';
                echo '</form>';
                ?>
            </div>
        </li>
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
        <h1><?php echo "Welcome"; ?></h1>
        <h2><?php echo "Available Here <br>Delicious Foods"; ?></h2>
        <a href="#" class="btn"><?php echo "Food Menu"; ?></a>
    </div>

    <div class="home-img">
        <img src="<?php echo "img/adobo.jpg"; ?>" alt="<?php echo "Delicious Food"; ?>">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            echo "<p>Thank you, <strong>$name</strong>. We have received your email: <strong>$email</strong>.</p>";
        }
        ?>
    </div>
</section>

<section class="about" id="about">
    <div class="about-img">
    </div>

    <div class="about-text">
        <span><?php echo "About Us"; ?></span>
    </div>
</section>

<script src="script.js"></script>
</body>
</html>
