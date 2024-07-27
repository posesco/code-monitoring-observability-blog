<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog with monitoring and observability</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/icon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../assets/css/styleForms.css">
</head>

<body>
    <div class="form-wrapper">
        <main class="form-side">
            <form class="my-form" action="login.php" method="POST">
                <div class="form-welcome-row">
                    <h1>Sysadmin's Blog</h1>
                    <h2>Welcome back! &#128079;</h2>
                </div>
                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" autocomplete="off" placeholder="you@example.com or admin"
                        required>
                    <div class="error-message">Email in incorrect format</div>
                </div>
                <div class="text-field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Your password or admin" title="Minimum 6 characters at 
                                                        least 1 Alphabet and 1 Number"
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                    <div class="error-message">Minimum 6 characters at
                        least 1 Alphabet and 1 Number</div>
                </div>
                <button class="my-form__button" type="submit">
                    Sign In
                </button>
                <div class="my-form__actions">
                    <div class="my-form__row">
                        <span>Don't have an account?</span>
                        <a href="register.html" title="Sign Up">
                            Sign Up Now
                        </a>
                    </div>
                </div>
            </form>
        </main>
        <?php require_once 'partials/aside.php'; ?>
    </div>
</body>

</html>