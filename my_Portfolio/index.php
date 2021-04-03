<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sandeep Kumar Maji</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"> 
  

</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');">



  <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">Sandeep Kumar Maji</h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>pursuing Masters @ NIT Raipur</p>
			
			<p class="pt-8 text-sm">Hii ,I am a CS Postgrad student ,who likes to solve Problems using some tricky algorithms.</p>

			<div class="pt-12 pb-8">
				<button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
				  Get In Touch
				</button> 
			</div>

			<div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
				<a  class ="link" href="https://www.linkedin.com/in/sandeep-maji-a1578b1b4/"><img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png"></a>

				<a class="link" href="#" ><img src="https://img.icons8.com/material-sharp/48/000000/github.png"/></a>

				<a class="link" href="#" ><img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png"/></a>
				
				<a href=""></a>
				<a href=""></a>
				<a href=""></a>
			</div>
			
			

		</div>

	</div>
	
	<!--Img Col-->
	<div class="w-full lg:w-2/5">
		<!-- Big profile image for side bar (desktop) -->
		<img src="Photos/profile1.jpg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
		
	</div>
	
	
	<!-- Pin to top right corner -->
	  <div class="absolute top-0 right-0 h-12 w-18 p-4">
		<button class="js-change-theme focus:outline-none">🌙</button>
	  </div>

</div>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.link',{
		  placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});
		
    </script>
	
</body>

</html>