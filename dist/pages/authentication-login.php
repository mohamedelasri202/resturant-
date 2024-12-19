<?php
session_start();
include("db.php");

if (isset($_POST['login'])) {
    // Sanitize inputs
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']); // Changed to match your current setup
    
    // Modified query to match your database structure
    $query = "SELECT * FROM users WHERE email = '$email' AND password_hash = '$password'";
    $result = mysqli_query($db, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Set session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <title>Login - Admin Dashboard</title>
</head>

<body class="DEFAULT_THEME">
    <main>
        <div class="flex flex-col w-full overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">
            <div class="justify-center items-center w-full card lg:flex max-w-md">
                <div class="w-full card-body">
                    <a href="../" class="py-4 block">
                        <img src="../assets/images/logos/logo-light.svg" alt="" class="mx-auto"/>
                    </a>
                    <p class="mb-4 text-gray-400 text-sm text-center">Sign in to your account</p>
                    
                    <?php if (isset($error)): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline"><?php echo htmlspecialchars($error); ?></span>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="mb-4">
                            <label for="email" class="block text-sm mb-2 text-gray-400">Email</label>
                            <input type="email" id="email" name="email" required
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0">
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-sm mb-2 text-gray-400">Password</label>
                            <input type="password" id="password" name="password" required
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0">
                        </div>
                        
                        <div class="flex justify-between">
                            <div class="grid my-6">
                                <button type="submit" name="login" 
                                    class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">
                                    Sign In
                                </button>
                            </div>
                            
                            <div class="flex justify-center gap-2 items-center">
                                <p class="text-base font-semibold text-gray-400">New to Spike?</p>
                                <a href="./authentication-register.php" 
                                    class="text-sm font-semibold text-blue-600 hover:text-blue-700">
                                    Create an account
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="../assets/libs/@preline/dropdown/index.js"></script>
    <script src="../assets/libs/@preline/overlay/index.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
</body>
</html>