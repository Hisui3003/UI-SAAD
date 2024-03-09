<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>navbar</title>

</head>
<body class="bg-gray-200">

    <nav class="bg-red-800 shadow-lg">
        <div class="container mx-auto">
            <div class="sm:flex justify-left">
                <a href="#" class="text-white text-2xl font-semibold ">HOUSE RENTAL SYSTEM</a>
            </div>
        </div>
    </nav>

    <nav class="bg-red-600 shadow-lg">
        <div class="flex justify-between items-center">

            <div class="flex justify-between space-x-4 w-3/4 mx-auto">

                {{-- <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full my-1 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 bg-text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                </div> --}}
                <div class="relative flex-1">
                    <button class="text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-gray-200">Property Type</button>
                    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 py-1 z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Any</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Apartment</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Comndominimum</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">House</a>
                    </div>
                </div>

                <div class="relative flex-1">
                    <button class="text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-gray-200">Bedroom</button>
                    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 py-1 z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">1</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">2</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">3</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">4</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">5+</a>
                    </div>
                </div>

                <div class="relative flex-1">
                    <button class="text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-gray-200">Price</button>
                    <div class="absolute bg-white shadow-lg rounded-lg mt-2 w-48 py-1 z-10 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Below 10k</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">10k - 20k</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">20k - 30k</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">30k - 50k</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">50k - 100k</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">100k - 200k</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">200k and above</a>
                    </div>
                </div>

                <div class="relative flex-1">
                    <button class="bg-orange-500 text-white hover:text-red-600 py-2 font-semibold w-full hover:bg-orange-300">Search</button>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.querySelectorAll('.relative').forEach((dropdown) => {
            const button = dropdown.querySelector('button');
            const menu = dropdown.querySelector('.hidden');

            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            window.addEventListener('click', (event) => {
                if (!dropdown.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    </script>


    <div class="">
        <div class="float-left mt-5 ml-10">
            <div class="bg-gray-300 rounded-lg shadow-lg h-auto w-60 mb-4 p-4">
                <h2 class="text-base font-semibold">NEAREST LANDMARK</h2>
                <div class="ml-4">
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Fisher Valley College</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">San Antonio Central School</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Phase 2 Basketball Court</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Western Bicutan National High School</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">D Carmelite School Inc.</a>
                </div>
            </div>

            <div class="bg-gray-300 rounded-lg shadow-lg h-auto w-60 mb-4 p-4">
                <h2 class="text-base font-semibold">TYPE OF HOUSES</h2>
                <div class="ml-4">
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Townhouse for Rent in Taguig</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Single-family House for Rent in Taguig</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Beach House for Rent in Taguig</a>
                    <a href="#" class="text-gray-700 text-sm block mb-1 hover:text-gray-900 hover:underline">Villas for Rent in Taguig</a>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <section class="parent-section my-10">
                <div class="card grid grid-cols-1 lg:grid-cols-2 gap-6 mx-10 md:mx-20 lg:mx-52 rounded-lg overflow-hidden shadow-lg">
                    <img class="thumbnail h-auto w-full object-fill" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/9fb3c7316bd470.webp" alt="thumbnail">

                    <div class="card-details p-6">
                        <div class="top mb-4">
                            <h2 class="title text-2xl font-bold">
                                For Rent Brand New House and Lot Available - Two Exclusive property, Taguig
                            </h2>
                        </div>

                        <div class="middle mb-4">
                            <h2 class="subtitle text-xl font-semibold flex items-center">
                                <i class="fas fa-map-marker-alt mr-2"></i> MCKINLEY WEST FORT BONIFACIO, TAGUIG
                            </h2>
                            <p class="excerpt text-gray-700 py-3">
                                Rent your dream home now! For more details about the property just contact me. House property for rent in Taguig, Metro Manila
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container mx-auto">
            <section class="parent-section my-10">
                <div class="card grid grid-cols-1 lg:grid-cols-2 gap-6 mx-10 md:mx-20 lg:mx-52 rounded-lg overflow-hidden shadow-lg">
                    <img class="thumbnail h-auto w-full object-fill" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/9fb3c7316bd470.webp" alt="thumbnail">

                    <div class="card-details p-6">
                        <div class="top mb-4">
                            <h2 class="title text-2xl font-bold">
                                For Rent Brand New House and Lot Available - Two Exclusive property, Taguig
                            </h2>
                        </div>

                        <div class="middle mb-4">
                            <h2 class="subtitle text-xl font-semibold flex items-center">
                                <i class="fas fa-map-marker-alt mr-2"></i> MCKINLEY WEST FORT BONIFACIO, TAGUIG
                            </h2>
                            <p class="excerpt text-gray-700 py-3">
                                Rent your dream home now! For more details about the property just contact me. House property for rent in Taguig, Metro Manila
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container mx-auto">
            <section class="parent-section my-10">
                <div class="card grid grid-cols-1 lg:grid-cols-2 gap-6 mx-10 md:mx-20 lg:mx-52 rounded-lg overflow-hidden shadow-lg">
                    <img class="thumbnail h-auto w-full object-fill" src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/9fb3c7316bd470.webp" alt="thumbnail">

                    <div class="card-details p-6">
                        <div class="top mb-4">
                            <h2 class="title text-2xl font-bold">
                                For Rent Brand New House and Lot Available - Two Exclusive property, Taguig
                            </h2>
                        </div>

                        <div class="middle mb-4">
                            <h2 class="subtitle text-xl font-semibold flex items-center">
                                <i class="fas fa-map-marker-alt mr-2"></i> MCKINLEY WEST FORT BONIFACIO, TAGUIG
                            </h2>
                            <p class="excerpt text-gray-700 py-3">
                                Rent your dream home now! For more details about the property just contact me. House property for rent in Taguig, Metro Manila
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



</body>
</html>
