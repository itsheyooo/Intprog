<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group Members</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
    <style>
        .member-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .member-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #000; /* Optional: adds a border around the image */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth hover transition */
        }

        .member-image:hover {
            transform: scale(1.1); /* Slight zoom-in effect */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Adds a shadow on hover */
            border-color: #ff6347; /* Change the border color on hover */
        }

        #info-text {
            font-size: 18px;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <a href="#" class="logo">Group 8 Members</a>
    </header>

    <main>
        <section>
            <div class="Members">
                <?php
                // Members and their corresponding images
                $members = [
                    "Justine Ron Melendez" => "justine.jpg",
                    "John Carl Reyes" => "john.jpg",
                    "Kristina Dela Cruz" => "kristina.jpg",
                    "Joana Marie Jugar" => "joana.jpg",
                    "Aizel Yruma" => "aizel.jpg",
                    "Rochelle Delossantos" => "rochelle.jpg"
                ];

                // Loop to display each member with an image
                foreach ($members as $member => $image) {
                    echo "<div class='member-item'>";
                    echo "<img src='images/$image' alt='$member' class='member-image' />";
                    echo "<p id='info-text'>$member</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>
    </main>
</body>
</html>
