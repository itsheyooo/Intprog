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
<section class="contact" id="contact-section">
    <h2>Contact Us</h2>
    <form method="POST" action="process_contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Your Address" required>

        <input type="submit" value="Submit">
    </form>
</section>

    </script>
</body>
</html>
