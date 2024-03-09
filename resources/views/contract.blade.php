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
            <div class="flex items-center space-x-5">


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

                {{-- Log out button --}}
                <a href="user" class="text-center text-gray-700 hover:text-primary transition relative">

                    <div class="text-2xl">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <div class="text-sx leading-3">Log Out</div>
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

{{-- Title and desc --}}
<div class="container mx-auto p-6 bg-white">
    <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Name of the Property</div>

    <div class="mx-36 my-20">
        <div class="flex items-center py-3">
            <div class="text-base font-semibold mr-1 mb-2">Property: </div>
            <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-12 w-full">
        </div>
    </div>
</div>
{{-- end of Title and desc --}}

{{-- Tenants Name --}}
<div class="container mx-auto p-6 bg-white">
    <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Name</div>

    <div class="mx-36 my-20">
        <div class="flex items-center py-3">
            <div class="text-base font-semibold mr-1 mb-2">Name of Tenant: </div>
            <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-28 w-96">
        </div>
    </div>
</div>
{{-- end of Tenants name --}}

{{-- Tenants Contact --}}
<div class="container mx-auto p-6 bg-white">
    <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Tenants Contact</div>

    <div class="mx-36 my-20">
        <div class="flex items-center py-3">
            <div class="text-base font-semibold mr-1 mb-2">Number: </div>
            <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-28 w-96">
        </div>

        <div class="flex items-center py-3">
            <div class="text-base font-semibold mb-2">Email: </div>
            <input type="text" placeholder="" class="rounded-md border border-gray-300 ml-32 w-96">
        </div>
    </div>
</div>
{{-- end of Tenants Contact --}}

{{-- basic info --}}
<div class="container mx-auto p-6 bg-white">
    <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Method of Payment</div>

    <div class="mx-36 my-20">
        <div class="mb-6 mx-10 flex items-center">
            <div class="text-base font-semibold mb-2">Payment Method:</div>
                <select class="ml-7 rounded-md border border-gray-300 p-2 w-96">
                    <option>--Choose One--</option>
                    <option>Digital</option>
                    <option>Physical</option>
                </select>
        </div>
    </div>
</div>
{{-- end of Basic Info --}}

{{-- Payment Agreement --}}
<div class="container mx-auto p-6 bg-white">
    <div class="text-lg font-bold mb-4 my-10 mx-20 border-b">Agreement on Payment</div>

    <div class="mx-36 my-20">
        <div class="mb-6 mx-10 flex items-center">
            <div class="text-base font-semibold mb-2">Payment Agreement:</div>
                <select class="ml-7 rounded-md border border-gray-300 p-2 w-96">
                    <option>--Choose One--</option>
                    <option>Daily</option>
                    <option>Weekly</option>
                    <option>Monthly</option>
                </select>
        </div>
    </div>
</div>
{{--  --}}

{{-- Go Button --}}
<div class="container mx-auto p-6 bg-white">
    <a href="addphotos">
        <button class="bg-primary hover:bg-transparent border hover:border-primary text-white hover:text-primary font-bold py-2 px-4 rounded-md my-20 mx-auto block">
            Create Contract
        </button>
    </a>
</div>

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
                    <i class="fab fa-square-instagram"></i>
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
