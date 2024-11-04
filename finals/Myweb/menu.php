<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .menu-item {
            text-align: center;
            margin: 20px;
            max-width: 250px;
        }
        .menu-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .menu-item h3 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
<header>
    <a href="#" class="logo"><?php echo "Sarap Foods Service"; ?></a>
    <ul class="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="member_info.php">Member Info</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
</header>

<main>
    <h1>Food Menu</h1>

    <section class="menu-container">
        <?php
        // Array of food items and their corresponding images
        $foods = [
            "Adobo" => "adobo.jpg",
            "Sinigang" => "Sinigang.jpg",
            "Kare-Kare" => "karekare.jpg",
            "Lechon" => "lechon.jpg",
            "Bulalo" => "bulalo.jpg",
            "Menudo" => "menudo.jpg"
        ];

        // Loop to display each food item with an image
        foreach ($foods as $food => $image) {
            echo "<div class='menu-item'>";
            echo "<img src='images/$image' alt='$food'>";
            echo "<h3>$food</h3>";
            echo "</div>";
        }
        ?>
    </section>
</main>

</body>
</html>
