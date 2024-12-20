<?php
session_start();
include("db.php");

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug: Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log("Form submitted");
    error_log("POST data: " . print_r($_POST, true));
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Debug: Log submitted credentials
    error_log("Login attempt with email: " . $email);
    
    // Debug: Verify database connection
    if (!$db) {
        error_log("Database connection failed");
        $error = "Database connection error";
    } else {
        // Prepare a JOIN query to get the role name
        $stmt = $db->prepare("
            SELECT users.*, roles.nom AS role_name
            FROM users
            INNER JOIN roles ON users.id_role = roles.id
            WHERE users.email = ?
        ");
        
        if (!$stmt) {
            error_log("Prepare failed: " . $db->error);
            $error = "Database error occurred";
        } else {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            // Debug: Log query results
            error_log("Query result rows: " . $result->num_rows);
            
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                
                // Debug: Log password comparison
                error_log("Stored password: " . $row['password_hash']);
                error_log("Submitted password: " . $password);
                
                if ($password === $row['password_hash']) {
                    error_log("Password match successful");
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = $row['role_name'];
                    
                    // Debug: Log session data
                    error_log("Session data set: " . print_r($_SESSION, true));
                    
                    if ($_SESSION['role'] === 'admin') {
                        header("Location:../dashboard.php");
                    } else {
                        header("Location:../../index.php ");
                    }
                    exit();
                } else {
                    error_log("Password match failed");
                    $error = "Invalid email or password";
                }
            } else {
                error_log("No user found with email: " . $email);
                $error = "Invalid email or password";
            }
        }
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

                    <!-- Added specific action path and debug info -->
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="mb-4">
                            <label for="email" class="block text-sm mb-2 text-gray-400">Email</label>
                            <input type="email" id="email" name="email" required
                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0"
                                value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
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