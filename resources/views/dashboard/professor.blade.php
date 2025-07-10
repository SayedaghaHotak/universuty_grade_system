<!-- @extends('layouts.app')

@section('content')
    <h1>Professor Dashboard</h1>
@endsection

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form> -->

<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Professor Dashboard - UniGrade
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
 <body class="bg-gray-100 min-h-screen flex flex-col">
  <header class="bg-white shadow-md sticky top-0 z-30">
   <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    <div class="text-2xl font-bold text-indigo-700 flex items-center">
     <i class="fas fa-university mr-2">
     </i>
     UniGrade
    </div>
    <nav class="hidden md:flex space-x-8 text-gray-700 font-semibold">
     <a class="hover:text-indigo-600 transition" href="#">
      Dashboard
     </a>
     <a class="hover:text-indigo-600 transition" href="#">
      Courses
     </a>
     <a class="hover:text-indigo-600 transition" href="#">
      Students
     </a>
     <a class="hover:text-indigo-600 transition" href="#">
      Profile
     </a>
     <a class="hover:text-indigo-600 transition" href="#">
      Logout
     </a>
    </nav>
    <button aria-label="Toggle menu" class="md:hidden text-gray-700 focus:outline-none" id="menu-btn">
     <i class="fas fa-bars fa-lg">
     </i>
    </button>
   </div>
   <div class="hidden md:hidden bg-white shadow-md px-6 py-4 space-y-4" id="mobile-menu">
    <a class="block hover:text-indigo-600 font-semibold" href="#">
     Dashboard
    </a>
    <a class="block hover:text-indigo-600 font-semibold" href="#">
     Courses
    </a>
    <a class="block hover:text-indigo-600 font-semibold" href="#">
     Students
    </a>
    <a class="block hover:text-indigo-600 font-semibold" href="#">
     Profile
    </a>
    <a class="block hover:text-indigo-600 font-semibold" href="#">
     Logout
    </a>
   </div>
  </header>
  <div class="flex flex-1 max-w-7xl mx-auto px-6 py-8 space-x-6 flex-col md:flex-row">
   <aside class="w-full md:w-64 bg-white rounded-lg shadow-md p-6 mb-8 md:mb-0">
    <div class="flex flex-col items-center">
     <img alt="Portrait of a middle-aged professor with glasses and a friendly smile wearing a gray blazer and blue shirt" class="w-24 h-24 rounded-full object-cover mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/82e5cf09-0e56-4418-1b66-c7529653d4dc.jpg" width="96"/>
     <h2 class="text-xl font-semibold text-gray-800">
      Dr. Michael Smith
     </h2>
     <p class="text-gray-500 text-sm">
      Computer Science Department
     </p>
    </div>
    <nav class="mt-8 space-y-4">
     <a class="flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition" href="#">
      <i class="fas fa-tachometer-alt mr-3">
      </i>
      Dashboard
     </a>
     <a class="flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition" href="#">
      <i class="fas fa-book mr-3">
      </i>
      My Courses
     </a>
     <a class="flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition" href="#">
      <i class="fas fa-users mr-3">
      </i>
      Students
     </a>
     <a class="flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition" href="#">
      <i class="fas fa-comments mr-3">
      </i>
      Messages
     </a>
     <a class="flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition" href="#">
      <i class="fas fa-cog mr-3">
      </i>
      Settings
     </a>
     <a class="flex items-center text-gray-700 hover:text-indigo-600 font-semibold transition" href="#">
      <i class="fas fa-sign-out-alt mr-3">
      </i>
      Logout
     </a>
    </nav>
   </aside>
   <main class="flex-1 bg-white rounded-lg shadow-md p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
     Dashboard
    </h1>
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
     <div class="bg-indigo-600 text-white rounded-lg p-6 shadow-lg flex flex-col items-center">
      <i class="fas fa-book fa-3x mb-4">
      </i>
      <h2 class="text-2xl font-bold">
       4
      </h2>
      <p class="text-lg font-semibold">
       Courses Teaching
      </p>
     </div>
     <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg flex flex-col items-center">
      <i class="fas fa-user-graduate fa-3x mb-4">
      </i>
      <h2 class="text-2xl font-bold">
       120
      </h2>
      <p class="text-lg font-semibold">
       Students Enrolled
      </p>
     </div>
     <div class="bg-yellow-500 text-white rounded-lg p-6 shadow-lg flex flex-col items-center">
      <i class="fas fa-tasks fa-3x mb-4">
      </i>
      <h2 class="text-2xl font-bold">
       8
      </h2>
      <p class="text-lg font-semibold">
       Pending Grading Tasks
      </p>
     </div>
    </section>
    <section>
     <h2 class="text-2xl font-semibold text-gray-800 mb-4">
      Recent Grading Tasks
     </h2>
     <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
       <thead class="bg-indigo-600 text-white">
        <tr>
         <th class="py-3 px-6 text-left font-semibold">
          Course
         </th>
         <th class="py-3 px-6 text-left font-semibold">
          Assignment
         </th>
         <th class="py-3 px-6 text-left font-semibold">
          Due Date
         </th>
         <th class="py-3 px-6 text-left font-semibold">
          Status
         </th>
        </tr>
       </thead>
       <tbody class="divide-y divide-gray-200">
        <tr>
         <td class="py-4 px-6">
          Data Structures
         </td>
         <td class="py-4 px-6">
          Project Report
         </td>
         <td class="py-4 px-6">
          2024-05-15
         </td>
         <td class="py-4 px-6">
          <span class="inline-block bg-yellow-300 text-yellow-900 px-3 py-1 rounded-full text-sm font-semibold">
           Pending
          </span>
         </td>
        </tr>
        <tr>
         <td class="py-4 px-6">
          Algorithms
         </td>
         <td class="py-4 px-6">
          Homework 4
         </td>
         <td class="py-4 px-6">
          2024-05-12
         </td>
         <td class="py-4 px-6">
          <span class="inline-block bg-green-300 text-green-900 px-3 py-1 rounded-full text-sm font-semibold">
           Completed
          </span>
         </td>
        </tr>
        <tr>
         <td class="py-4 px-6">
          Operating Systems
         </td>
         <td class="py-4 px-6">
          Midterm Exam Grading
         </td>
         <td class="py-4 px-6">
          2024-05-10
         </td>
         <td class="py-4 px-6">
          <span class="inline-block bg-yellow-300 text-yellow-900 px-3 py-1 rounded-full text-sm font-semibold">
           Pending
          </span>
         </td>
        </tr>
        <tr>
         <td class="py-4 px-6">
          Database Systems
         </td>
         <td class="py-4 px-6">
          Quiz 3
         </td>
         <td class="py-4 px-6">
          2024-05-08
         </td>
         <td class="py-4 px-6">
          <span class="inline-block bg-green-300 text-green-900 px-3 py-1 rounded-full text-sm font-semibold">
           Completed
          </span>
         </td>
        </tr>
        <tr>
         <td class="py-4 px-6">
          Software Engineering
         </td>
         <td class="py-4 px-6">
          Final Project
         </td>
         <td class="py-4 px-6">
          2024-05-20
         </td>
         <td class="py-4 px-6">
          <span class="inline-block bg-yellow-300 text-yellow-900 px-3 py-1 rounded-full text-sm font-semibold">
           Pending
          </span>
         </td>
        </tr>
       </tbody>
      </table>
     </div>
    </section>
   </main>
  </div>
  <footer class="bg-white border-t border-gray-200 text-center py-6 mt-auto">
   <p class="text-gray-600 text-sm">
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

