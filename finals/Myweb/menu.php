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
        // Define REST API endpoint to fetch food items
        $apiUrl = "https://localhost/menu";  // Replace with your actual API URL

        // Initialize a cURL session to fetch data from the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        // Decode the JSON response into an associative array
        $foods = json_decode($response, true);

        // Check if the response contains food items
        if (!empty($foods) && is_array($foods)) {
            // Loop to display each food item with an image
            foreach ($foods as $food) {
                $foodName = htmlspecialchars($food['name']); // Sanitize output
                $imageUrl = htmlspecialchars($food['image_url']); // Sanitize output

                echo "<div class='menu-item'>";
                echo "<img src='$imageUrl' alt='$foodName'>";
                echo "<h3>$foodName</h3>";
                echo "</div>";
            }
        } else {
            echo "<p>No food items available at the moment.</p>";
        }
        ?>
    </section>
</main>

</body>
</html>
