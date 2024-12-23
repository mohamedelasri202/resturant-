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
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base  flex items-center relative  rounded-md text-gray-500  w-full" href="../index.php"
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
           <i class="fa-solid fa-book"></i> <span>Reservations</span>          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2.5 my-1 text-base   flex items-center relative  rounded-md text-gray-500  w-full" href="../components/Clients.php"
           >
           <i class="fas fa-users"></i> <span>Clients</span>          </a>
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



<!-- </aside> -->
			</aside>
			<div class=" w-full page-wrapper xl:px-6 px-0 ">

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
        <a class="relative hs-dropdown-toggle inline-flex hover:text-gray-500 text-gray-300" href="#">
            <i class="ti ti-bell-ringing text-xl relative z-[1]"></i>
            <div
                class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
            </div>
        </a>
        
    </div>

            </li>
            </ul>
        <div class="flex items-center gap-4">
            <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
    <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
      <a  href="../pages/authentication-register.html" >  <img class="object-cover w-9 h-9 rounded-full" src="../assets/images/profile/chef-icon-8.png"alt="
        aria-hidden="true"></a>
    </a>
   
</div>


        </div>
    </nav>

  <!-- ========== END HEADER ========== -->
				</header>
				<!--  Header End -->
           
					</div>

          
          <div class="card mt-5" >
            <div class="card-body flex flex-col gap-6">
              <h6 class="text-lg text-gray-500 font-semibold">Clients</h6>
          </div>
           <table class="text-left w-full whitespace-nowrap text-sm text-gray-500">
      <thead >
        <tr class="text-sm">
          <th scope="col" class="p-4 font-semibold">Client name</th>
          <th scope="col" class="p-4 font-semibold">Menu title</th>
          <th scope="col" class="p-4 font-semibold">Reservation date</th>
          <th scope="col" class="p-4 font-semibold">Reservation time</th>
          <th scope="col" class="p-4 font-semibold">#peaple</th>
          <th scope="col" class="p-4 font-semibold">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="p-4 text-sm">
       <div class="flex gap-6 items-center">
          
            <div class="flex flex-col gap-1 text-gray-500">
              <h3 class=" font-bold">Mark J. Freeman</h3>
              <span class="font-normal">Prof. English</span>
            </div>
             </div>
          </td>
          <td class="p-4">
    <h3 class="font-medium">$150/hour</h3>
          </td>
          <td class="p-4">
            <h3 class="font-medium text-teal-500">+53</h3>
          </td>
          <td class="p-4">
            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-teal-400 text-teal-500">Available</span>
          </td>
        </tr>
        <tr>
          <td class="p-4 text-sm">
         <div class="flex gap-6 items-center">
          
            <div class="flex flex-col gap-1 text-gray-500">
              <h3 class=" font-bold">Nina R. Oldman</h3>
              <span class="font-normal">Prof. History</span>
            </div>
             </div>
          </td>
          <td class="p-4">
        <h3 class="font-medium">$150/hour</h3>
          </td>
          <td class="p-4">
            <h3 class="font-medium text-teal-500">+68</h3>
          </td>
          <td class="p-4">
            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-blue-500 text-blue-600">In Class</span>
          </td>
        </tr>
        <tr>
          <td class="p-4 text-sm">
          <div class="flex gap-6 items-center">
  
            <div class="flex flex-col gap-1 text-gray-500">
              <h3 class=" font-bold">Arya H. Shah</h3>
              <span class="font-normal">Prof. Maths</span>
            </div>
             </div>
          </td>
          <td class="p-4">
         <h3 class="font-medium">$150/hour</h3>
          </td>
          <td class="p-4">
            <h3 class="font-medium text-teal-500">+94</h3>
          </td>
          <td class="p-4">
            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-red-400 text-red-500">Absent</span>
          </td>
        </tr>
        <tr>
          <td class="p-4 text-sm">
           <div class="flex gap-6 items-center">
          
            <div class="flex flex-col gap-1 text-gray-500">
              <h3 class=" font-bold">June R. Smith</h3>
              <span class="font-normal">Prof. Arts</span>
            </div>
             </div>
          </td>
          <td class="p-4">
      <h3 class="font-medium">$150/hour</h3>
          </td>
          <td class="p-4">
            <h3 class="font-medium text-teal-500">+27</h3>
          </td>
          <td class="p-4">
            <span class="inline-flex items-center py-2 px-4 rounded-3xl font-semibold bg-yellow-400 text-yellow-500">Absent</span>
          </td>
        </tr>
  
  
      </tbody>
    </table>
            </div>
  


				</main>
				<!-- Main Content End -->
				
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