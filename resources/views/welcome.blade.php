<!-- <! -->
 <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   University Grade System
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
 </head>
 <body class="relative min-h-screen flex flex-col">
  <img alt="University campus with students walking and modern academic buildings under a clear blue sky" aria-hidden="true" class="absolute inset-0 w-full h-full object-cover brightness-50" height="1080" src="https://storage.googleapis.com/a1aa/image/1aea616f-1162-45f5-4bc1-1dbcbb8f3211.jpg" width="1920"/>
  <header class="relative z-10 bg-transparent">
   <nav class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">
    <div class="text-white text-2xl font-bold tracking-wide">
     <i class="fas fa-university mr-2">
     </i>
     UniGrade
    </div>
    <ul class="hidden md:flex space-x-8 text-white font-semibold">
     <li>
      <a class="hover:text-yellow-400 transition" href="#">
       Home
      </a>
     </li>
     <li>
      <a class="hover:text-yellow-400 transition" href="#">
       About
      </a>
     </li>
     <li>
      <a class="hover:text-yellow-400 transition" href="#">
       Grades
      </a>
     </li>
     <li>
      <a class="hover:text-yellow-400 transition" href="#">
       Contact
      </a>
     </li>

     <a href="{{ route('login') }}">
    <button>Login</button>
</a>

<a href="{{ route('register') }}">
    <button>Register</button>
</a>








    </ul>
    <button aria-label="Toggle menu" class="md:hidden text-white focus:outline-none" id="menu-btn">
     <i class="fas fa-bars fa-lg">
     </i>
    </button>
   </nav>
   <div class="hidden md:hidden bg-black bg-opacity-70 text-white px-6 py-4 space-y-4" id="mobile-menu">
    <a class="block hover:text-yellow-400 transition font-semibold" href="#">
     Home
    </a>
    <a class="block hover:text-yellow-400 transition font-semibold" href="#">
     About
    </a>
    <a class="block hover:text-yellow-400 transition font-semibold" href="#">
     Grades
    </a>
    <a class="block hover:text-yellow-400 transition font-semibold" href="#">
     Contact
    </a>
   </div>







  </header>
  <main class="relative z-10 flex-grow flex flex-col justify-center items-center text-center px-6 py-20 max-w-4xl mx-auto">
   <h1 class="text-white text-5xl md:text-6xl font-extrabold drop-shadow-lg leading-tight">
    Welcome to UniGrade
   </h1>
   <p class="mt-6 text-yellow-300 text-lg md:text-xl max-w-3xl drop-shadow-md">
    Your comprehensive university grade system to track, analyze, and improve your academic performance.
   </p>
   <a class="mt-10 inline-block bg-yellow-400 text-black font-bold px-8 py-4 rounded-lg shadow-lg hover:bg-yellow-500 transition" href="#">
    Get Started
    <i class="fas fa-arrow-right ml-2">
    </i>
   </a>
  </main>
  <footer class="relative z-10 bg-black bg-opacity-70 text-gray-300 text-center py-6 mt-20">
   <p>
    © 2024 UniGrade. All rights reserved.
   </p>
  </footer>
  <script>
   const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
 </body>
</html>
