<?php
// Initialize the session
session_start();

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Kérjük, adja meg a felhasználónevét.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Kérem írja be a jelszavát.";
    } else {
        $password = trim(MD5($_POST["password"]));
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM admin_portfolio WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    
                    if (mysqli_stmt_fetch($stmt)) {
                        if ($password === $hashed_password) {
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            
                            // Redirect user to admin page
                            header("location: admin.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Nem megfelelő felhasználónév vagy jelszó."; // Invalid username or password
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Nem megfelelő felhasználónév vagy jelszó."; // Invalid username or password
                }
            } else {
                echo "Oppá! Valami rosszul ment. Próbáld meg később."; // Oops! Something went wrong. Please try again later.
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css" />
    <script src="./app.js"></script>
    <style>
        body {
            font: 14px sans-serif;
            background-color: #191d2b;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
        
        .full {
        height: 100vh !important;
        }

        .center {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        }
    </style>
</head>

<body class="full">
    <div class="center h-100">
        <div class="card" style="width: 400px">
            <div class="card-body">
                <h5 class="card-title">Admin Bejelentkezés</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <p>Kérjük, adja meg hitelesítő adatait a bejelentkezéshez.</p>
                </h6>
                <p class="card-text">
                    <?php
                    if (!empty($login_err)) {
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }
                    ?>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Felhasználónév</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Jelszó</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Belépés">
                        <a href="http://localhost/works/portfolio-website-1/?section=contact" 
                            type="button" 
                            class="btn btn-secondary" 
                            >
                            Vissza
                        </a>
                        <!--<a href="reset-password.php" class="btn btn-secondary">Reset Password</a>-->
                    </div>
                    
                </form>
                </p>
            </div>
        </div>
    </div>
</body>
</html>