<?php
include ("../pages/db.php");

if (isset($_POST['submit'])){
  $title =$_POST["title"];
$description =$_POST["description"];

$sss = "INSERT INTO menu (title ,description  ) VALUES ('$title','$description') ";
$kkk =mysqli_query($db , $sss);

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
                <div class="card">
                    <div class="card-body flex flex-col gap-6">
                        <h6 class="text-lg text-gray-500 font-semibold">Menus</h6>
                      	<div
											class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
											<div class="flex flex-col gap-6 items-center bg-gray-200">
                        <div class="flex justify-between  w-[20vw] ">	<h6 class="text-lg text-gray-500 font-semibold">Card</h6>
                          <button><i class="fa-solid fa-pen-to-square"></i></button>
                          <button><i class="fa-solid fa-trash-can"></i></button>
                        </div>
											
												<div class="card overflow-hidden">
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
												</div>
											</div>
											<div class="flex flex-col gap-6 items-center bg-gray-200">
                        <div class="flex justify-between  w-[20vw] ">	<h6 class="text-lg text-gray-500 font-semibold">Card</h6>
                          <button><i class="fa-solid fa-pen-to-square"></i></button>
                          <button><i class="fa-solid fa-trash-can"></i></button>
                        </div>
											
												<div class="card overflow-hidden">
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
												</div>
											</div>
											<div class="flex flex-col gap-6 items-center bg-gray-200">
                        <div class="flex justify-between  w-[20vw] ">	<h6 class="text-lg text-gray-500 font-semibold">Card</h6>
                          <button><i class="fa-solid fa-pen-to-square"></i></button>
                          <button><i class="fa-solid fa-trash-can"></i></button>
                        </div>
											
												<div class="card overflow-hidden">
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
													<div class=" bg-white flex">
														<img class="w-[10vw] h-[20vh] rounded-t-xl"
															src="../assets/images/products/product-1.jpg"
															alt="Image Description"> 	<div class="card-body">
                                <h3 class="text-lg font-medium text-gray-500">
                                  Card title
                                </h3>
                                <p class="mt-1 text-sm text-gray-400">
                                  Some quick example text to build on the card title and
                                  make up the bulk of the card's content.
                                </p>
                              </div>
                              
													
													</div>
												</div>
											</div>
										

										 </div>
                     </div>
                     </div>
					           </div>


				</main>
				<!-- Main Content End -->
				
			</div>
		</div>


    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
       Add a Menu
    </div>
    <form class="py-4 px-6" action="" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Title
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" type="text" placeholder="Enter your name" name="title">
        </div>
     
      
   
        
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="message" >
           Descripton
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="message" rows="4" placeholder="Enter any additional information" name="description"></textarea>
        </div>
        <div class="flex items-center justify-center mb-4">
            <button
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit" name="submit">
                Book Appointment
            </button>
        </div>

    </form>
</div>


<div class="bg-white border rounded-lg px-8 py-6 mx-auto my-8 max-w-[30vw]
    <h2 class="text-2xl font-medium mb-4">Survey</h2>
    <form>
       
        <div class="mb-4">
            <label for="gender" class="block text-gray-700 font-medium mb-2">Gender</label>
            <select id="gender" name="gender"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                <option value="">Select a menu</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="gender" class="block text-gray-700 font-medium mb-2">Gender</label>
            <select id="gender" name="gender"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                <option value="">Select a plate</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
     



        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2"> your plate type</label>
            <div class="flex flex-wrap -mx-2">
                <div class="px-2 w-1/3">
                    <label for="color-red" class="block text-gray-700 font-medium mb-2">
                        <input type="radio" id="color-red" name="color" value="red" class="mr-2">entree
                    </label>
                </div>
                <div class="px-2 w-1/3">
                    <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                        <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">main
                    </label>
                </div>
                <div class="px-2 w-1/3">
                    <label for="color-blue" class="block text-gray-700 font-medium mb-2">
                        <input type="radio" id="color-blue" name="color" value="blue" class="mr-2">dessert
                    </label>
                </div>
             
            </div>
        </div>
   
     
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
        </div>

    </form>
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