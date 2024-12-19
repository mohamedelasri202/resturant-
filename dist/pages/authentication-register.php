<!DOCTYPE html>
<html   lang="en" dir="ltr" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/theme.css" />
	<title>Modernize TailwindCSS HTML Admin Template</title>
</head>

<body class="DEFAULT_THEME bg-white">
	<main>



<?php


include ("db.php");
    if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authentication = "INSERT INTO users (name, email, password_hash, id_role) VALUES ('$username', '$email', '$password', '2')";
    if (mysqli_query($db, $authentication)) {
        echo 'okay';
    } else {
        echo 'wallo';
    }
}
?>               




				<!-- Main Content -->
                <div class="flex flex-col w-full  overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">
                  
                    <div class="justify-center items-center w-full card lg:flex max-w-md ">
                        <div class=" w-full card-body">
                                <a href="../" class="py-4 block"><img src="../assets/images/logos/logo-light.svg" alt="" class="mx-auto"/></a>
                                <p class="mb-4 text-gray-400 text-sm text-center">Your Social Campaigns</p>
                            <!-- form -->
                            <form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="submit">Submit</button>
</form>

                        </div>
                    </div>
				
			</div>

	</main>

	



<?php  
$usr = "SELECT password FROM users WHERE email =? ";
 $stmt = mysqli_prepare($db , $usr);
    
 if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $db_password);
        mysqli_stmt_fetch($stmt);

        if ($password === $db_password) {
            $message = "Login successful";
            $toastClass = "bg-success";

            // Start the session and redirect to the dashboard or home page
            session_start();
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            $message = "Incorrect password";
            $toastClass = "bg-danger";
        }
    } else {
        $message = "Email not found";
        $toastClass = "bg-warning";
    }

    mysqli_stmt_close($stmt);
} else {
    $message = "Error preparing statement: " . mysqli_error($db);
    $toastClass = "bg-danger";
}
            




?> 



















































































<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="../assets/libs/@preline/dropdown/index.js"></script>
<script src="../assets/libs/@preline/overlay/index.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>



</body>

</html>