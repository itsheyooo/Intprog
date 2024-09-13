<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group Members</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="#" class="logo">Group 8 Members</a>
    </header>

    <main>
        <section>
            <div class="Members">
                <?php

                $members = [
                    "Justine Ron Melendez",
                    "John Carl Reyes",
                    "Kristina Dela Cruz",
                    "Joana Marie Jugar",
                    "Princess May Panolino",
                    "Rowlene Tamboy"
                ];

                
                foreach ($members as $member) {
                    echo "<p id='info-text'>$member</p>";
                }
                ?>
            </div>
        </section>
    </main>

</body
