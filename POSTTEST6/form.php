<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>

<nav class="navbar">
    <h1 class="logo"><img src="Gallery/logos.png" alt="logo" width="150px"></h1>
    <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="#catalog">Catalog</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>
</nav>

<header id="home">
    <div class="header-content">
        <h1>Form Pengaduan Kritik Dan saran</h1>
        <div class="line"></div>
    </div>
</header>

<section>
    <div class="title">
        <h2>Masukkan Kritik dan saran anda mengenai web ini</h2>
    </div>
    <form method="POST" action="submit_form.php">
    <div>
        <label for="username">Nama:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="age">Umur:</label>
        <input type="number" id="age" name="age" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <label for="kritikSaran">Kritik dan Saran:</label>
        <textarea id="kritikSaran" name="kritikSaran" rows="5" cols="79" placeholder="Tulis kritik dan saran Anda..." required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>

</section>

<section>
    <div class="title">
        <h2>Hasil kritik dan saran anda akan kami respon Terimakasih</h2>
        <div class="line"></div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        $age = htmlspecialchars($_POST['age']);
        $password = htmlspecialchars($_POST['password']);
        $kritikSaran = isset($_POST['kritikSaran']) ? htmlspecialchars($_POST['kritikSaran']) : '';
        echo "<p>Username: $username</p>";
        echo "<p>Umur: $age</p>";
        echo "<p>Password: $password</p>"; // Password sebaiknya tidak ditampilkan langsung.
        echo "<p>Kritik dan Saran: $kritikSaran</p>";
    }
    ?>
</section>

</body>
</html>
