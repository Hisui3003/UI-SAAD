<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>FindFlat</title>


   <link rel="stylesheet" href="{{ asset('css/app.css') }}">


   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    {{-- ito yung header ng page 1 --}}
    <header class="py-1 shadow-sm bg-white">
        <div class="container flex items-center justify-between">
            {{-- logo --}}
            <a href="#">
                <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
                <h1 class="text-gray-700 hover:text-red-500 transision">FindFlat</h1>
            </a>


            {{-- search area --}}
            <div class="w-full max-w-xl relative flex">
                <span class="absolute left-4 top-3 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-1-md focus:outline-none" placeholder="Search">
                <button class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
            </div>


            {{-- yung icons --}}
            <div class="flex items-center space-x-4">


                {{-- listing a property button --}}
                <a href="listproperty" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fas fa-house-flag"></i>
                    </div>
                    <div class="text-sx leading-3">Property</div>
                </a>


                {{-- account button --}}
                <a href="user" class="text-center text-gray-700 hover:text-primary transition relative">
                    <div class="text-2xl">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="text-sx leading-3">Account</div>
                </a>
            </div>
        </div>
    </header>



{{-- navbar (1) --}}
    <div class="bg-gray-700">
        <div class="container flex">

            {{-- categories --}}
            <div class="mr-5">
                <div class="px-8 py-4 hover:bg-primary flex items-center cursor-pointer relative group">
                    <span class="text-white">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="capitalize ml-2 text-white">All Categories</span>

                    <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid hidden group-hover:block transition">

                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-map-location-dot w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Location</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-list w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Property Type</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-peso-sign w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Price</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bed w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bedrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-calendar-days w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Short Term</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-bath w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Bathrooms</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-ruler-combined w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Floor Area</span>
                        </a>


                        <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                            <i class="fa-solid fa-person-shelter w-5 h-5 object-contain"></i>
                            <span class="ml-6 text-gray-600 text-sm">Amenities</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- end of categories --}}

            {{-- navbar links --}}
            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="index" class="text-gray-200 hover:underline hover:text-white transition">Home</a>
                    <a href="rentals" class="text-gray-200 hover:underline hover:text-white transition">Rent</a>
                    <a href="aboutus" class="text-gray-200 hover:underline hover:text-white transition">About Us</a>
                </div>
                {{-- login and register --}}
                <a href="login" class="text-gray-200 hover:underline hover:text-white transition">Login/Register</a>
                {{-- end of login and register --}}
            </div>
            {{-- end of navbar links --}}
        </div>
    </div>
{{-- end of navbar --}}

{{-- page title --}}
   <div class="container py-4 flex items-center gap-3">
        <a href="index" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fas fa-chevron-right"></i>
        </span>
        <p class="text-gray-600 font-medium">Rent</p>
   </div>
{{-- end ng page title --}}

{{-- product page --}}
   <div class="container grid grid-cols-4 gap-6 pt-4 pb-16 items-start">
        {{-- sidebar --}}
        {{-- categories sidebar --}}
        <div class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hidden">
            <div class="divide-y divide-gray-200 space-y-5">

                {{-- Location filter --}}
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Location</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="Location">
                    </div>
                </div>
                {{-- end of Location filter --}}

                {{-- Property Type category 1 --}}
                    <div class="pt-4">
                        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Property Type</h3>
                        <div class="flex items-center">
                            <input type="checkbox" id="cat-1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Apartment</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2" class="text-gray-600 ml-3 cursor-pointer">Condominium</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-3" class="text-gray-600 ml-3 cursor-pointer">House</label>
                        </div>
                    </div>
                {{-- end category 1 --}}

                {{-- price filter --}}
                    <div class="pt-4">
                        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                        <div class="mt-4 flex items-center">
                            <input type="text" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="min">
                            <span class="mx-3 text-gray-500"> - </span>
                            <input type="text" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="max">
                        </div>
                    </div>
                {{-- end of price filter --}}

                {{-- Bedrooms category 2 --}}
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Bedrooms</h3>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2-1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-1" class="text-gray-600 ml-1 cursor-pointer">1</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2-2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-2" class="text-gray-600 ml-1 cursor-pointer">2</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2-3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-3" class="text-gray-600 ml-1 cursor-pointer">3</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2-4" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-4" class="text-gray-600 ml-1 cursor-pointer">4</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2-5" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-5" class="text-gray-600 ml-1 cursor-pointer">5+</label>
                        </div>
                    </div>
                </div>
                {{-- end category 2 --}}

                {{-- Short Term Type category 3 --}}
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Short Term</h3>
                    <div class="flex items-center">
                        <input type="checkbox" id="cat-3-1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                        <label for="cat-3-1" class="text-gray-600 ml-3 cursor-pointer">Include</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="cat-3-2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                        <label for="cat-3-2" class="text-gray-600 ml-3 cursor-pointer">Exclude</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="cat-3-3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                        <label for="cat-3-3" class="text-gray-600 ml-3 cursor-pointer">Only</label>
                    </div>
                </div>
                {{-- end category 3 --}}

                {{-- Amenities category 4 --}}
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Amenities</h3>
                    <div class="">
                        <div class="flex items-center">
                            <input type="checkbox" id="cat-4-1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-4-1" class="text-gray-600 ml-1 cursor-pointer">Balcony</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-4-2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-4-2" class="text-gray-600 ml-1 cursor-pointer">Swimming Pool</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-4-3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-4-3" class="text-gray-600 ml-1 cursor-pointer">Gym</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-4-4" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-4-4" class="text-gray-600 ml-1 cursor-pointer">24/7 Security</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-4-5" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-4-5" class="text-gray-600 ml-1 cursor-pointer">Parking</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-4-6" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-4-6" class="text-gray-600 ml-1 cursor-pointer">Pets Allowed</label>
                        </div>
                    </div>
                </div>
                {{-- end category 4 --}}

                {{-- Floor Area filter --}}
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Floor Area</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="0sqm">
                        <span class="mx-3 text-gray-500"> - </span>
                        <input type="text" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="0sqm">
                    </div>
                </div>
                {{-- end of Floor Area filter --}}

            </div>
        </div>
    {{-- end of categories sidebar --}}

    <div class="col-span-3">
        {{-- product card --}}
        {{-- grid --}}
        <div class="grid grid-cols-2 gap-5">
            {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}
        </div>
        {{-- end of grid --}}

        {{-- grid --}}
        <div class="grid grid-cols-2 gap-5">
            {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}
        </div>
        {{-- end of grid --}}

        {{-- grid --}}
        <div class="grid grid-cols-2 gap-5">
            {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}

             {{-- products image --}}
            <div class="bg-white shadow rounded overflow-hidden group">

                <div class="relative">
                    <img src="https://static-ph.lamudi.com/static/media/bm9uZS9ub25l/2x2x5x880x450/7d240425eb4d19.webp" class="w-full" alt="">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transistion">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                </div>

                {{-- product contents --}}
                <div class="pt-4 pb-3 px-4">
                    <a href="#">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">5 bedroom Mckinley West Village For Rent Brand new House, Taguig City</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                        <p class="text-xl text-primary font-semibold">Contact agent for price</p>
                    </div>
                </div>
                 {{-- end of product contents --}}
                <a href="#" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
            </div>
             {{-- end of products image --}}
        </div>
        {{-- end of grid --}}
        {{-- end of product card --}}
    </div>



   </div>
{{-- end of product page --}}

{{-- Footer --}}
<footer class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grdi-cols-3">

        <div class="cons-span-1 space-y-8">
            <img src="https://www.svgrepo.com/show/272028/houses-home.svg" alt="homelogo" class="w-16">
            <p class="text-gray-500">
                What's up madlang people!!!
            </p>

            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>

        <div class="cons-span-2 grid grid-cols-2 gap-8">

        </div>

    </div>
</footer>
{{-- end of Footer --}}

</body>
</html>
