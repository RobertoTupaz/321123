<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="h-screen">

        <div>
            <img class="h-screen fixed object-cover" src="\images\DepED-MalaybalayCITY.jpg" alt="">
        </div>
        <div class="relative  top-0 h-[4rem] bg-nayblue/50 w-full overflow-hidden ">

            <div class="flex justify-between mx-[3%] ">
                {{-- left Side --}}
                <div class="flex gap-2 ">
                    <div>
                        <a href="/">
                            <img class="w-[6rem]" src="\images\Deped-Logo.png" alt="DepED_logo">
                        </a>
                    </div>
                    <div class=" text-white mt-3 font-bold text-2xl">
                        <h1>Division of Malaybalay City</h1>
                    </div>
                </div>

                {{-- Right Side | Account Button --}}
                <button class="bg-gray-400   text-white cursor-pointer p-2 rounded-xl font-bold mt-3">
                    Logout
                </button>

            </div>

        </div>
        {{-- Menu Panel --}}
        {{-- Menu Bar --}}
        <div class="fixed">
            <div class="rounded-2xl mt-1 ml-1 right-0">
                <button id="menu-toggle" title="button">
                    <img class="w-16" src="\images\menu-bar.png" alt="menu-bar">
                </button>
            </div>



        </div>

        {{-- Rounded with Border --}}

        <div class="mx-auto text-center mt-[1rem] bg-white opacity-90 rounded-2xl p-3  shadow-lg  max-w-7xl  mb-28">


            <div class="font-bold text-lg">
                Application History
            </div>
            <div>
                (User Pages)
            </div>

            <div class="grid bg-white rounded-xl overflow-y-scroll p-3">



                <div class="flex mx-auto grid-cols-2 gap-3">
                    {{-- Application Code --}}
                    <div class="grid mt-1">
                        <table>
                            <thead class="bg-navyblue opacity-90 text-gray-200">
                                <tr>
                                    <th class="border border-white p-3">Name Applicant</th>
                                    <th class="border border-white p-3">Application Code</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr class="border-b">
                                    <td class="p-1 border-r">John Doe</td>
                                    <td class="p-1 ">2400001</td>


                                </tr>
                            </tbody>
                        </table>
                    </div>


                    {{-- Application History Details --}}

                    <div class="grid mt-1">
                        <table>
                            <thead class="bg-navyblue opacity-90 text-gray-200 ">
                                <tr>
                                    <th class="border border-white p-3">Position</th>
                                    <th class="border border-white p-3">Category</th>
                                    <th class="border border-white p-3 text-nowrap">Plantilla Item No.</th>
                                    <th class="border border-white p-3 text-nowrap">Date Evaluated (Sort Desc)</th>
                                    <th class="border border-white p-3">Remarks (Qualified/Disqualified)</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="border-b">
                                    <td class="p-1 border-r">ADAS I</td>
                                    <td class="p-1 border-r">...</td>
                                    <td class="p-1 border-r">234234234</td>
                                    <td class="p-1 border-r">01/07/2024</td>
                                    <td class="p-1 ">Qualified</td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>

            <script>
                // For Menu-Bar
                document.addEventListener('DOMContentLoaded', function() {
                    var menuToggle = document.getElementById('menu-toggle');
                    var closeMenuButton = document.getElementById('close-menu');
                    var menu = document.getElementById('menu');

                    menuToggle.addEventListener('click', function(event) {
                        toggleMenu();
                        event.stopPropagation();
                    });

                    closeMenuButton.addEventListener('click', function(event) {
                        toggleMenu();
                        event.stopPropagation();
                    });

                    window.onclick = function(event) {
                        if (event.target === menu) {
                            toggleMenu();
                        }
                    };

                    function toggleMenu() {
                        menu.classList.toggle('hidden');
                        menuToggle.classList.toggle('hidden');
                    }
                });



                // ----------------------------------------------------------------
            </script>






        </div>

</body>

</html>
