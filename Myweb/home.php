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
    </header>

    <main>
        <section>
            <div class="Food">
                <?php
                $infoText = "In Sarap Food Services we offer quality services that will suit your taste,
                    We bring the finest Filipino dishes, Including Bulalo, Adobo and many other Filipino dishes.";
                echo "<p id='info-text'>{$infoText}</p>";
                ?>
            </div>
        </section>
    </main>

</body>
</html>
