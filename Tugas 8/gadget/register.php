<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Rekomendasi Smartphone</title>
    <link rel="stylesheet" href="css/loginregis.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="register" class="form-login">
            <h2>Register</h2>
            <form id="registerForm" action="register-proses.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Register</button>
            </form>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </section>
    </main>

    <div id="toast">Registrasi Berhasil!</div>

    <script src="toast.js"></script> <!-- Memanggil file JavaScript eksternal -->
</body>
</html>
