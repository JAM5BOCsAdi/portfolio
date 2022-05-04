<?php

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
                <h5 class="card-title">Admin Login</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <p>Please fill in your credentials to login.</p>
                </h6>
                <p class="card-text">
                    <?php
                    if (!empty($login_err)) {
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }
                    ?>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                        <a href="http://localhost/works/portfolio-website-1/?section=contact" 
                            type="button" 
                            class="btn btn-secondary" 
                            >
                            Back
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