<!DOCTYPE html>
<?php
include('../connexion.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/style.css">

</head>

<body class="bg-gradient-to-r from-[#2DBAFF] via-[#2DBAFF] to-[#83b3963d]">
    <main class="w-screen h-screen flex">
        <section class="bg-white shadow-lg h-screen fixed top-0 left-0 min-w-[250px] py-6 px-4 font-[sans-serif]">
            <a href="#"><img src="../../public/img/pl-main-logo.png" alt="logo" class='w-[100px] h-24' /></a>
            <ul class="mt-6">
                <li>
                    <a href="#"
                        class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                        <svg fill="#000000" width="30px" height="50px" viewBox="0 0 24 24" id="stats" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                            <path id="secondary" d="M12,17V11M8,17V15m8,2V7" style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                            <rect id="primary" x="3" y="3" width="18" height="18" rx="1" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></rect>
                        </svg>

                        <span class="ml-6">Dashboard</span>
                    </a>
                </li>
            </ul>

            <div class="mt-6">
                <h6 class="text-blue-600 text-sm font-bold px-4">CRUD</h6>
                <ul class="mt-3">
                    <li>
                        <a href="../Joueurs/Joueurs.php"
                            class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                            <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="30px" height="50px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <g>
                                    <path d="M96.117,57.583l-16.185-7.719c3.774-2.373,6.338-7.016,6.338-12.354c0-7.754-5.397-14.034-12.058-14.034
		c-2.289,0-4.403,0.781-6.223,2.066c1.086,2.756,1.701,5.796,1.701,8.999c0,4.782-1.411,9.317-3.825,13.066
		c0.833,0.932,1.771,1.735,2.809,2.36l-0.01,0.003l10.426,4.971c2.947,1.427,4.853,4.583,4.853,8.045v13.54h11.148
		c1.489,0,2.694-1.401,2.694-3.13V60.492C97.785,59.21,97.126,58.072,96.117,57.583z" />
                                    <path d="M31.567,49.825c0.861-0.548,1.651-1.221,2.368-1.987c-2.514-3.781-3.972-8.401-3.972-13.297c0-3.271,0.646-6.37,1.777-9.17
		c-1.76-1.172-3.773-1.895-5.948-1.895c-6.666,0-12.062,6.28-12.062,14.034c0,5.425,2.651,10.12,6.524,12.457l-16.349,7.61
		c-1.02,0.479-1.691,1.629-1.691,2.915v12.903c0,1.729,1.209,3.13,2.694,3.13h10.805v-13.54c0-3.503,1.938-6.672,4.943-8.08
		L31.567,49.825z" />
                                    <path d="M76.94,59.386l-14.077-6.715l-5.952-2.84c2.6-1.637,4.711-4.165,6.093-7.21c1.096-2.418,1.749-5.155,1.749-8.081
		c0-1.642-0.26-3.201-0.623-4.706c-1.771-7.293-7.466-12.665-14.302-12.665c-6.708,0-12.316,5.181-14.196,12.266
		c-0.434,1.625-0.733,3.315-0.733,5.105c0,3.109,0.727,6.008,1.961,8.529c1.427,2.925,3.542,5.337,6.116,6.888l-5.702,2.654
		l-14.534,6.768c-1.262,0.591-2.092,2.016-2.092,3.606v13.54v2.43c0,2.14,1.492,3.875,3.333,3.875h51.691
		c1.841,0,3.333-1.735,3.333-3.875v-2.43v-13.54C79.006,61.401,78.19,59.99,76.94,59.386z" />
                                </g>
                            </svg>
                            <span class="ml-6">Jouoeurs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                            <svg fill="#000000" width="30px" height="50px" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>flag-solid</title>
                                <path class="clr-i-solid clr-i-solid-path-1" d="M5.92,2a1,1,0,0,0-1,1V33a1,1,0,0,0,2,0V3A1,1,0,0,0,5.92,2Z"></path>
                                <path class="clr-i-solid clr-i-solid-path-2" d="M30.5,3.82a1,1,0,0,0-1,0,14.9,14.9,0,0,1-6.13,1.16,13.11,13.11,0,0,1-5.18-1.49A12.78,12.78,0,0,0,13.2,2,10.86,10.86,0,0,0,9,2.85V20a8.8,8.8,0,0,1,4.25-1.08,11.22,11.22,0,0,1,4.2,1.28,14.84,14.84,0,0,0,6,1.66,16.79,16.79,0,0,0,7-1.37,1,1,0,0,0,.55-.89V4.67A1,1,0,0,0,30.5,3.82Z"></path>
                                <rect x="0" y="0" width="36" height="36" fill-opacity="0" />
                            </svg>
                            <span class="ml-6">Nationnalite</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Equipe/Equipe.php"
                            class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="30px" height="50px" viewBox="0 0 961.945 961.945" style="enable-background:new 0 0 961.945 961.945;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M138.822,954.899c0,5.5,4.2,8.301,9.3,6.301l324.2-129.9c5.1-2.1,13.4-2.1,18.599,0l322.9,130c5.1,2,9.301-0.8,9.301-6.3
			V297.7H138.822V954.899z M515.922,401.6c28.201-30.2,65.301-45.3,111.301-45.3c40.1,0,72.799,11.9,97.799,35.6
			c14.9,14,26.102,34.2,33.602,60.4L693.021,468c-3.898-17-12-30.4-24.299-40.3c-12.301-9.9-27.301-14.801-44.9-14.801
			c-24.301,0-44.1,8.7-59.199,26.2c-15.102,17.5-22.701,45.7-22.701,84.8c0,41.5,7.5,71,22.4,88.601
			c14.9,17.6,34.301,26.399,58.199,26.399c17.602,0,32.801-5.6,45.4-16.8c12.701-11.2,21.801-28.8,27.301-52.8l64.199,20.4
			c-9.799,35.8-26.199,62.399-49.1,79.8c-22.9,17.399-52,26.1-87.199,26.1c-43.602,0-79.4-14.899-107.5-44.7
			c-28.102-29.8-42.101-70.5-42.101-122.1C473.623,474.2,487.723,431.8,515.922,401.6z M205.623,361.9h225v55.5h-158.7v77.7h137
			v55.5h-137v139.5h-66.3V361.9z" />
                                        <path d="M849.123,213.2h-48.701l-256-133.2c1.201-4.9,1.9-10.1,1.9-15.4c0-35.6-29-64.6-64.6-64.6c-35.6,0-64.6,29-64.6,64.6
			c0,5.4,0.7,10.7,2,15.8l-258,132.8h-48.3c-15.8,0-28.5,12.8-28.5,28.5c0,15.7,12.8,28.5,28.5,28.5h736.301
			c15.799,0,28.5-12.8,28.5-28.5C877.623,226,864.922,213.2,849.123,213.2z M481.623,29.9c19.1,0,34.6,15.5,34.6,34.6
			c0,0.3,0,0.6,0,0.9c-0.301,10.9-5.6,20.5-13.701,26.7c-5.799,4.4-13,7-20.899,7c-7.8,0-14.9-2.6-20.7-6.9
			c-8.2-6.1-13.5-15.7-13.9-26.6c0-0.4,0-0.7,0-1.1C447.022,45.5,462.522,29.9,481.623,29.9z M226.022,213.2l206.9-106.3
			c11.9,13.6,29.3,22.3,48.8,22.3c19.6,0,37.1-8.8,49-22.6l204.199,106.6H226.022z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-6">Equipes</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- <div class="mt-6">
                <h6 class="text-blue-600 text-sm font-bold px-4">Income</h6>
                <ul class="mt-3">
                    <li>
                        <a href="#" 
                            class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                            <span>Earnings and Taxes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                            class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                            <span>Refunds</span>
                        </a>
                    </li>
                </ul>
            </div> -->

            <div class="mt-6">
                <h6 class="text-blue-600 text-sm font-bold px-4">Actions</h6>
                <ul class="mt-3">
                    <li>
                        <a href="#"
                            class="text-black hover:text-blue-600 text-sm flex items-center hover:bg-blue-50 rounded px-4 py-3 transition-all">
                            <svg width="30px" height="50px" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                <path fill="#000000"
                                    fill-rule="evenodd" d="M10.138 1.815A3 3 0 0 1 14 4.688v14.624a3 3 0 0 1-3.862 2.873l-6-1.8A3 3 0 0 1 2 17.512V6.488a3 3 0 0 1 2.138-2.873l6-1.8zM15 4a1 1 0 0 1 1-1h3a3 3 0 0 1 3 3v1a1 1 0 1 1-2 0V6a1 1 0 0 0-1-1h-3a1 1 0 0 1-1-1zm6 12a1 1 0 0 1 1 1v1a3 3 0 0 1-3 3h-3a1 1 0 1 1 0-2h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1zM9 11a1 1 0 1 0 0 2h.001a1 1 0 1 0 0-2H9z" clip-rule="evenodd" />
                                <path stroke="#000000" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" d="M16 12h5m0 0-2-2m2 2-2 2" />
                            </svg>
                            <span class="ml-6">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="ml-[250px] w-full py-6 px-4">
    <div id="content-area">

        <!-- Table container with horizontal scrolling enabled -->
        <div class="font-[sans-serif] overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 whitespace-nowrap">
                    <tr>
                        <th class="p-4 text-left text-sm font-medium text-white">
                            Photo
                        </th>
                        <th class="p-4 text-left text-sm font-medium text-white">
                            Name
                        </th>
                        <th class="p-4 text-left text-sm font-medium text-white">
                            <!-- Edit link with SVG icon -->
                            <a class="mr-4" title="Edit" href="#">
                                <svg fill="#000000" width="20px" height="40px" viewBox="0 0 512 512" id="_14_Add" data-name="14 Add" xmlns="http://www.w3.org/2000/svg">
                                    <path id="Path_19" data-name="Path 19" d="M256,512C114.625,512,0,397.391,0,256S114.625,0,256,0C397.391,0,512,114.609,512,256S397.391,512,256,512Zm0-448C149.969,64,64,149.969,64,256s85.969,192,192,192c106.047,0,192-85.969,192-192S362.047,64,256,64Zm32,320H224V288H128V224h96V128h64v96h96v64H288Z" fill-rule="evenodd" />
                                </svg>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                
                    include('../connexion.php');

                    if (isset($_GET["updateId"])) {
                        $idUpdate = $_GET["updateId"];

                        $stmt = $conn->query("SELECT *FROM Nationalities WHERE id = $idUpdate ");

                       
                        while ($arr = mysqli_fetch_assoc($stmt)) {
                    ?>
                            <tr class="bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    <img src="<?php echo $arr["flag"]; ?>" class="h-8" alt="player" />
                                </td>
                                <td class="p-4 text-sm text-black">
                                    <?php echo $arr["name"]; ?>
                                </td>
                                <td class="p-4 text-sm text-black">
                                  .
                                </td>
                            </tr>
                    

                </tbody>
            </table>

            <form method="get" action="./Update.php">
      <input type="text"  value=<?php echo $arr["flag"]; ?>
        class="px-4 py-3 bg-gray-100 w-full text-sm outline-none border-b-2 border-blue-500 rounded" />

      <input type="text" value=<?php echo $arr["name"]; ?>
        class="px-4 py-3 bg-gray-100 w-full text-sm outline-none border-b-2 border-transparent focus:border-blue-500 rounded" />
<a   class="!mt-8 w-full px-4 py-2.5 mx-auto block text-sm bg-blue-500 text-white rounded hover:bg-blue-600"  href="Update.php?id=<?php echo $arr["id"];?>&flag=<?php echo $arr["flag"];?>&name=<?php echo $arr["name"];?>">Submit</a>
    </form>
        </div>
    </div>
</section>

<?php
                        }
                    }
                    ?>
</body>

</html>