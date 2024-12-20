<?php
include ("../pages/db.php");

// First form handling - menu creation
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($db, $_POST["title"]);
    $description = mysqli_real_escape_string($db, $_POST["description"]);
    
    $sss = "INSERT INTO menu (title, description) VALUES ('$title', '$description')";
    $kkk = mysqli_query($db, $sss);
    
    if (!$kkk) {
        echo "Error creating menu: " . mysqli_error($db);
    }
}

// Second form handling - menu_plates creation
if (isset($_POST['submit_plates'])) {  
    $menu = mysqli_real_escape_string($db, $_POST['menu']);
    $plates = mysqli_real_escape_string($db, $_POST['plates']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    
    $kk = "INSERT INTO menu_plates (menu_id, plate_id, type) VALUES ('$menu', '$plates', '$type')";
    $MYSQKK = mysqli_query($db, $kk);
    
    if (!$MYSQKK) {
        echo "Error adding plate to menu: " . mysqli_error($db);
    }
}

// Fetch menu data for display
$rsrv = "SELECT m.id as menu_id, m.title, m.description, 
         GROUP_CONCAT(p.name ORDER BY mp.type SEPARATOR ', ') as plates,
         GROUP_CONCAT(mp.type ORDER BY mp.type SEPARATOR ', ') as plate_types
         FROM menu m
         LEFT JOIN menu_plates mp ON m.id = mp.menu_id
         LEFT JOIN plates p ON mp.plate_id = p.id
         GROUP BY m.id
         ORDER BY m.id DESC";

$result = mysqli_query($db, $rsrv);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}

// Fetch menus for the select dropdown
$menu = "SELECT * FROM menu ORDER BY title";
$sqlmenu = mysqli_query($db, $menu);

if (!$sqlmenu) {
    die("Menu query failed: " . mysqli_error($db));
}

// Fetch plates for the select dropdown
$mnu = "SELECT * FROM plates ORDER BY name";
$sqlmnu = mysqli_query($db, $mnu);

if (!$sqlmnu) {
    die("Plates query failed: " . mysqli_error($db));
}

?>


<!DOCTYPE html>
<html   lang="en" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/theme.css" />
	<title>Spike TailwindCSS HTML Admin Template</title>
</head>

<body class=" bg-surface">
	<main>
		<!--start the project-->
		<div id="main-wrapper" class=" flex p-5 xl:pr-0 min-h-screen">
			<aside id="application-sidebar-brand"
				class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed xl:top-5 xl:left-auto top-0 left-0 with-vertical h-screen z-[999] shrink-0  w-[270px] shadow-md xl:rounded-md rounded-none bg-white left-sidebar   transition-all duration-300" >
				<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="p-4" >
  
  <a href="../" class="text-nowrap">
    <img
      src="../assets/images/logos/logo-light.svg"
      alt="Logo-Dark"
    />
  </a>


</div>
<div class="scroll-sidebar" data-simplebar="">
    <nav class=" w-full flex flex-col sidebar-nav px-4 mt-5">
      <ul  id="sidebarnav" class="text-gray-600 text-sm">
        <li class="text-xs font-bold pb-[5px]">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span class="text-xs text-gray-400 font-semibold">HOME</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base  flex items-center relative  rounded-md text-gray-500  w-full" href="../dashboard.php"
           >
            <i class="ti ti-layout-dashboard ps-2  text-2xl"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="text-xs font-bold mb-4 mt-6">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span class="text-xs text-gray-400 font-semibold">UI COMPONENTS</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../components/Reservations.php"
           >
           <i class="fa-solid fa-book"></i> <span>Reservations</span>

          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../components/Clients.php"
           >
           <i class="fas fa-users"></i> <span>Clients</span>
          </a>
        </li>        

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../components/plates.php"
           >
           <i class="fa-solid fa-bowl-food"></i> <span>Plates</span>
          </a>
        </li>   

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../components/menu.php"
           >
           <i class="fas fa-book-open"></i> <span>Menus</span>
          </a>
        </li> 

    
        <li class="text-xs font-bold mb-4 mt-8">
          <i class="ti ti-dots nav-small-cap-icon  text-lg hidden text-center"></i>
          <span class="text-xs text-gray-400 font-semibold">AUTH</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../pages/authentication-login.php"
           >
            <i class="ti ti-login ps-2 text-2xl"></i> <span>Login</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../pages/authentication-register.php"
           >
            <i class="ti ti-user-plus ps-2 text-2xl"></i> <span>Register</span>
          </a>
        </li>  

     

      </ul>
    </nav>
</div>

<!-- Bottom Upgrade Option -->

<!-- </aside> -->
			</aside>
			<div class=" w-full page-wrapper xl:px-6 px-0">

				<!-- Main Content -->
				<main class="h-full  max-w-full">
					<div class="container full-container p-0 flex flex-col gap-6">
					<!--  Header Start -->
				<header class=" bg-white shadow-md rounded-md w-full text-sm py-4 px-6">
					

<!-- ========== HEADER ========== -->

    <nav class=" w-ful flex items-center justify-between" aria-label="Global">
            <ul class="icon-nav flex items-center gap-4">
                <li class="relative xl:hidden">
                    <a class="text-xl  icon-hover cursor-pointer text-heading"
                        id="headerCollapse" data-hs-overlay="#application-sidebar-brand"
                        aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
                        <i class="ti ti-menu-2 relative z-1"></i>
                    </a>
                </li>
           
            <li class="relative">
                
    <div class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:hover]">
        <a class="relative hs-dropdown-toggle inline-flex text-white" href="#">
            <button class="bg-blue-500 h-10 w-24 rounded-[40px] font-bold hover:bg-blue-700  ">add Menu</button>
          
        </a>
     
    </div>

            </li>
            </ul>
        <div class="flex items-center gap-4">
      
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
    <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
        <img class="object-cover w-9 h-9 rounded-full" src="../assets/images/profile/user-1.jpg" alt=""
            aria-hidden="true">
    </a>
    <div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[12]"
        aria-labelledby="hs-dropdown-custom-icon-trigger">
        <div class="card-body p-0 py-2">
            <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                <i class="ti ti-user  text-xl "></i>
                <p class="text-sm ">My Profile</p>
            </a>
            <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                <i class="ti ti-mail  text-xl"></i>
                <p class="text-sm ">My Account</p>
            </a>
            <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                <i class="ti ti-list-check  text-xl "></i>
                <p class="text-sm ">My Task</p>
            </a>
            <div class="px-4 mt-[7px] grid">
                <a href="../../pages/authentication-login.html" class="btn-outline-primary font-medium text-[15px] w-full hover:bg-blue-600 hover:text-white">Logout</a>
            </div>

        </div>
    </div>
</div>


        </div>
    </nav>

  <!-- ========== END HEADER ========== -->
				</header>
				<!--  Header End -->





        <?php
$rsrv = "SELECT menu_plates.*, 
                plates.*, 
                menu.* 
         FROM menu_plates
         INNER JOIN plates ON menu_plates.plate_id = plates.id
         INNER JOIN menu ON menu_plates.menu_id = menu.id";

$result = mysqli_query($db, $rsrv);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}
?>

<?php
include ("../pages/db.php");

// Your existing PHP logic here (keep all the PHP code from before)
?>

<!-- Styled Add Menu Form -->
<div class="max-w-xl mx-auto mt-8">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6">
            <h2 class="text-2xl font-bold text-white">Create New Menu</h2>
            <p class="text-blue-100 mt-1">Add a new menu to your collection</p>
        </div>
        
        <form class="p-8 space-y-6" action="" method="POST">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700" for="title">
                    Menu Title
                </label>
                <input 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                    type="text" 
                    id="title" 
                    name="title" 
                    placeholder="Enter menu title"
                    required
                >
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700" for="description">
                    Description
                </label>
                <textarea 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                    id="description" 
                    name="description" 
                    rows="4" 
                    placeholder="Describe your menu"
                    required
                ></textarea>
            </div>
            
            <button 
                type="submit" 
                name="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2"
            >
                <i class="fas fa-plus-circle"></i>
                Create Menu
            </button>
        </form>
    </div>
</div>

<!-- Styled Add Plates to Menu Form -->
<div class="max-w-xl mx-auto my-12">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6">
            <h2 class="text-2xl font-bold text-white">Add Plates to Menu</h2>
            <p class="text-purple-100 mt-1">Customize your menu with delicious plates</p>
        </div>
        
        <form class="p-8 space-y-6" action="" method="POST">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Select Menu</label>
                <div class="relative">
                    <select 
                        name="menu" 
                        required 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 appearance-none transition-colors bg-white"
                    >
                        <option value="">Choose a menu</option>
                        <?php 
                        $menu_query = "SELECT * FROM menu ORDER BY title";
                        $menu_result = mysqli_query($db, $menu_query);
                        while ($row = mysqli_fetch_assoc($menu_result)) { 
                        ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </div>
                </div>
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Select Plate</label>
                <div class="relative">
                    <select 
                        name="plates" 
                        required 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 appearance-none transition-colors bg-white"
                    >
                        <option value="">Choose a plate</option>
                        <?php 
                        $plates_query = "SELECT * FROM plates ORDER BY name";
                        $plates_result = mysqli_query($db, $plates_query);
                        while ($row = mysqli_fetch_assoc($plates_result)) { 
                        ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo htmlspecialchars($row['name']); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </div>
                </div>
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Plate Type</label>
                <div class="relative">
                    <select 
                        name="type" 
                        required 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 appearance-none transition-colors bg-white"
                    >
                        <option value="">Select type</option>
                        <option value="entree">Entrée</option>
                        <option value="main">Main Course</option>
                        <option value="dessert">Dessert</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </div>
                </div>
            </div>
            
            <button 
                type="submit" 
                name="submit_plates" 
                class="w-full bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2"
            >
                <i class="fas fa-utensils"></i>
                Add Plate to Menu
            </button>
        </form>
    </div>
</div>

<style>
    /* Custom styles for select dropdowns */
    select {
        background-image: none !important;
    }
    
    /* Hover effects for buttons */
    button:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    
    /* Focus styles for form elements */
    input:focus, select:focus, textarea:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
    }
</style>




















<!-- Add this right after your existing forms -->
<div class="card">
    <div class="card-body">
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
            <?php
            // Get all menus
            $menu_query = "SELECT * FROM menu";
            $menu_result = mysqli_query($db, $menu_query);

            while ($menu = mysqli_fetch_assoc($menu_result)) {
                // Get one plate of each type for this menu
                $plates_query = "SELECT p.*, mp.type 
                               FROM plates p 
                               INNER JOIN menu_plates mp ON p.id = mp.plate_id 
                               WHERE mp.menu_id = {$menu['id']}
                               GROUP BY mp.type";
                $plates_result = mysqli_query($db, $plates_query);
            ?>
                <div class="flex flex-col gap-6 bg-gray-200">
                    <div class="flex justify-between mx-8">
                        <h3 class="text-lg font-medium text-gray-500"><?php echo $menu['title']; ?></h3>
                    </div>

                    <div class="card overflow-hidden">
                        <div class="bg-white">
                            <?php
                            while ($plate = mysqli_fetch_assoc($plates_result)) {
                            ?>
                                <div class="mb-4">
                                    <img class="w-full h-auto rounded-t-xl" 
                                         src="<?php echo $plate["photo"] ?>" 
                                         alt="<?php echo $plate["name"] ?>">
                                    <div class="card-body">
                                        <div class="flex justify-between">
                                            <h3 class="text-lg font-medium text-gray-500">
                                                <?php echo $plate["name"] ?>
                                            </h3>
                                            <span class="text-blue-500 font-medium">
                                                <?php echo ucfirst($plate["type"]) ?>
                                            </span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-400">
                                            <?php echo $plate["description"] ?>
                                        </p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="p-4 border-t">
                                <p class="text-sm text-gray-600">
                                    <?php echo $menu['description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>





















		<!--end of project-->
	</main>


	
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="../assets/libs/@preline/dropdown/index.js"></script>
<script src="../assets/libs/@preline/overlay/index.js"></script>
<script src="../assets/js/sidebarmenu.js"></script>




</body>

</html>