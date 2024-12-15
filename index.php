<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FUT Team Builder</title>
  <meta name="description" content="FUT Team Builder  is a web app that lets 
  users create and customize their
   Ultimate Team (FUT) football lineup">
  <script src="https://cdn.tailwindcss.com"></script>

   <link href="./src/output.css" rel="stylesheet">
   <link rel="stylesheet" href="./public/css/style.css">
  <link rel="shortcut icon" href="./src/assets/img/pl-main-logo.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <header class="bg-indigo-600 flex justify-center px-4 py-3 text-white">
    <!-- <p class="text-center text-sm font-medium">
      Love Alpine JS?
      <a href="#"  class="inline-block underline">Check out this new course!</a>
    </p> -->
    <marquee width="40%" direction="left" height="38px">
    <img src="./public/img/remove_-removebg-preview.png" class="h-10" alt="teams img">
  </marquee>
    <!-- <span id="headerTeam" > </span> -->
  </header>
  <nav class=" bg-[#000814]">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex-1 md:flex md:items-center md:gap-12">
          <a class="block text-teal-600" href="#">
            <span class="sr-only ">Home</span>
            <img src="./public/img/pl-main-logo.png" class="h-24" alt="" srcset="">
          </a>
        </div>

        <div class="md:flex md:items-center md:gap-12">
          <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
              <li>
                <a class="text-white transition font-semibold hover:text-white/75" href="#"> About </a>
              </li>

              <li>
                <a class="text-white transition font-semibold hover:text-white/75" href="#"> Careers </a>
              </li>

              <li>
                <a class="text-white transition font-semibold hover:text-white/75" href="#"> History </a>
              </li>

              <li>
                <a class="text-white transition font-semibold hover:text-white/75" href="#"> Services </a>
              </li>

              <li>
                <a class="text-white transition font-semibold hover:text-white/75" href="#"> Projects </a>
              </li>

              <li>
                <a class="text-white transition font-semibold hover:text-white/75" href="#"> Blog </a>
              </li>
            </ul>
          </nav>
          <div class="block md:hidden">
            <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section
    class="bg-gradient-to-r from-[#2DBAFF] via-[#2DBAFF] to-[#83b3963d] h-auto sm:h-72 flex flex-col sm:flex-row items-center justify-between p-4 sm:p-8 overflow-hidden">
    <div class="flex-1 text-center sm:text-left mb-4 sm:mb-0">

      <h1 class="text-black text-5xl font-bold sm:text-5xl lg:text-6xl">EL AMIRI </h1>
    </div>
    <div class="flex-1 flex justify-center relative">


    </div>

    <div class="flex-1 flex justify-end">

      <img src="./public/img/player-comp-1-1x83b3963d.png" alt="Players" class="h-48 z-10 sm:h-56 z-10" />
    </div>
  </section>
  <div class="min-h-screen bg-gradient-to-b from-blue-500 to-white p-4">
    <!-- Header Section -->
    <div class="text-center py-4">
      <h1 class="text-3xl font-bold">Squad Selection</h1>
      <p class="text-gray-700 mt-2">
        Select a maximum of 3 players from a single team or Auto Pick if you're short on time.
      </p>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col lg:flex-row gap-4">
      <div class="flex-1 bg-white rounded-lg shadow-lg p-4">
        <div
          class="bg-gradient-to-r from-blue-400 via-blue-300 to-purple-400 p-4 rounded-lg text-white text-center mb-4">
          <h2 class="font-bold">Gameweek 13</h2>
          <p>Gameweek 13 deadline: <strong>Fri 29 Nov 19:30</strong></p>
          <div class="flex justify-around mt-4">
            <div>
              <span class="block text-sm">Players Selected</span>
              <span  id="NumberOfplayers" class="font-bold text-xl">0</span>
            </div>
            <div>
              <span class="block text-sm">Team Rating</span>
              <span class="font-bold text-xl" id="rating">100.0</span>
            </div>
          </div>
        </div>

        <div class="flex justify-center gap-4 mb-4">
          <button class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow" id="popupButton" onclick="PopUp()">Ajouter
            Les joueurs</button>
          
          <!-- <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg shadow">List</button> -->
        </div>

        <div id="container"
          class="bg-[url('./public/img/pitch-defaultdab51b01.svg')] overflow-x-hidden  bg-no-repeat bg-center	  p-4 rounded-lg ">
          <!-- <img src="./src/assets/img/pitch-defaultdab51b01.svg" alt="" id="terain" srcset="">    -->
          <div id="item1" class="item transition-all h-48   hover:scale-105 ">
            <!-- <img src="./src/assets/img/badge_gold.webp" alt="" srcset=""> -->
          </div>
          <div id="item2" class="item transition-all h-48   hover:scale-105 ">
          </div>
          <div id="item3" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item4" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item5" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item6" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item7" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item8" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item9" class="item transition-all h-48   hover:scale-105">
          </div>
          <div id="item10" class="item transition-all h-48  hover:scale-105">
          </div>
          <div id="item11" class="item transition-all h-48  hover:scale-105">
            

          </div>
        </div>
        <div class="flex justify-between mt-4">
          <button class="px-4 py-2 bg-green-500 text-white rounded-lg" id="autocard">Auto Pick</button>
          <button class="px-4 py-2 bg-red-500 text-white rounded-lg " id="Resetformation">Reset</button>
          <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Enter Squad</button>
        </div>
      </div>

      <div class="w-full  lg:w-1/3 bg-white rounded-lg shadow-lg p-4">
        <h2 class="text-lg font-bold mb-4">Player Selection</h2>
        <div class="mb-4">
          <select name="Selectplan" onchange="changeFormation()" id="formation">
            <option value="433" selected>4-3-3</option>
            <option value="442">4-4-2</option>
            <option value="352">3-5-2</option>
          </select>
          
          
        </div>
        <div class="overflow-y-scroll max-h-full  flex flex-col" id="displayAllplayers">

        </div>
      </div>
    </div>
  </div>


  <script src="./src/script/main.js"></script>
</body>

</html>